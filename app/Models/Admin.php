<?php

namespace Models;
    
	use Core\Model;

	use Helpers\Session;

class Admin extends Model {

	public function __construct(){
		parent::__construct();
	}	

	public function getHash($username){
		$data = $this->db->select("SELECT clave FROM ".PREFIX."usuarios WHERE usuario = :usuario AND activo = 1", array(':usuario' => $username));		

		return $data[0]->clave;
	}

	public function getData($username, $hash){

		$params = array(':usuario' => $username, ':clave' => $hash);
		$data = $this->db->select("SELECT u.id, u.usuario, d.nombre, d.apellido FROM ".PREFIX."usuarios as U INNER JOIN ".PREFIX."directorio as D on u.directorio = d.id WHERE (u.usuario = :usuario AND u.clave = :clave) AND u.activo = 1", $params);	
		
		$this->setAccess($data[0]->id);

		return $data[0];
	}

	public function setAccess($userid){

		$ip = '127.0.0.1';
		if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
			$ip = $_SERVER['HTTP_CLIENT_IP'];
		} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		} elseif ($_SERVER['REMOTE_ADDR'] != '::1') {
			$ip = $_SERVER['REMOTE_ADDR'];
		}
				
		//$now = date('Y-m-d H:i:s');
		//'fecha' => $now,

		$params = array('usuario' => $userid, 'ip'=> $ip);
		$this->db->insert(PREFIX."accesos", $params);

	}

	
		
}