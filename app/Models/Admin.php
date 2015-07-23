<?php

namespace Models;

use Core\Model;
use Helpers\Session;

class Admin extends Model {
	public function __construct() {
		parent::__construct ();
	}
	public function getHash($username) {
		$data = $this->db->select ( "SELECT u.clave FROM " . PREFIX . "usuarios as u WHERE u.usuario = :usuario AND u.activo = 1", array (
				':usuario' => $username 
		) );
		return $data [0]->clave;
	}
	public function getData($username, $hash) {
		$params = array (
				':usuario' => $username,
				':clave' => $hash 
		);
		
		$tsql = "SELECT d.dni, u.id, u.usuario, d.nombre, d.apellido, (d.nombre + (CASE WHEN d.nombre2 IS NOT NULL THEN ' ' +  d.nombre2 ELSE '' END )  + ' ' + d.apellido + (CASE WHEN d.apellido2 IS NOT NULL THEN ' ' + d.apellido2 ELSE '' END ) ) As nombrecompleto, d.confidencial " . ",IFNULL(mr.region, s.region) as region, r.nombre as nombreregion " . ",IFNULL(md.distrito, g.distrito) as distrito, s.nombre as nombredistrito " . ",g.id as grupo, g.nombre as nombregrupo " . "FROM " . PREFIX . "usuarios as u INNER JOIN " . PREFIX . "directorio as d on u.directorio = d.id " . "LEFT JOIN " . PREFIX . "miembros_grupos as mg on mg.directorio = d.id " . "LEFT JOIN " . PREFIX . "grupos as g on mg.grupo = g.id " . "LEFT JOIN " . PREFIX . "miembros_distritos as md on md.directorio = d.id " . "LEFT JOIN " . PREFIX . "distritos as s on IFNULL(md.distrito, g.distrito) = s.id " . "LEFT JOIN " . PREFIX . "miembros_regiones as mr on mr.directorio = d.id " . "LEFT JOIN " . PREFIX . "regiones as r on IFNULL(mr.region, s.region) = r.id " . "WHERE (u.usuario = :usuario AND u.clave = :clave) AND u.activo = 1";
		
		if (ENVIRONMENT == 'development') {
			$tsql = str_replace ( "IFNULL", "ISNULL", $tsql );
		}
		
		$data = $this->db->select ( $tsql, $params );
		
		if (isset ( $data ) && ($data [0]->id != NULL)) {
			$this->setAccess ( $data [0]->id );
			return $data [0];
		}
		
		return NULL;
	}
	public function setAccess($userid) {
		$ip = '127.0.0.1';
		if (! empty ( $_SERVER ['HTTP_CLIENT_IP'] )) {
			$ip = $_SERVER ['HTTP_CLIENT_IP'];
		} elseif (! empty ( $_SERVER ['HTTP_X_FORWARDED_FOR'] )) {
			$ip = $_SERVER ['HTTP_X_FORWARDED_FOR'];
		} elseif ($_SERVER ['REMOTE_ADDR'] != '::1') {
			$ip = $_SERVER ['REMOTE_ADDR'];
		}
		
		$params = array (
				'usuario' => $userid,
				'ip' => $ip 
		);
		$this->db->insert ( PREFIX . "accesos", $params );
	}
	public function getAuth($key) {
		if (ENVIRONMENT == 'production') {
			$data = $this->db->select ( "SELECT DATEDIFF(validez, fecha) as dias FROM " . PREFIX . "autorizaciones WHERE clave = :clave", array (
					':clave' => $key 
			) );
		} else {
			$data = $this->db->select ( "SELECT DATEDIFF(DAY, fecha, validez) as dias FROM " . PREFIX . "autorizaciones WHERE clave = :clave", array (
					':clave' => $key 
			) );
		}
		return $data [0]->dias;
	}
}