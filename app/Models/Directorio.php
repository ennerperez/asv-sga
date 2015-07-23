<?php

namespace Models;

use Core\Model;

abstract class Directorios {
	const General = 0;
	const Adulto = 1;
	const Joven = 2;
	const Patrocinante = 3;
	const Usuario = 9;
}
class Directorio extends Model {
	function __construct() {
		parent::__construct ();
	}
	public function getDirectorio($grupo, $type = Directorios::General) {
		$params = array ();
		
		$this->select = "SELECT d.id, d.dni, d.clase, d.nombre, d.apellido, " . "(d.nombre + (CASE WHEN d.nombre2 IS NOT NULL THEN ' ' + d.nombre2 ELSE '' END )  + ' ' + d.apellido + (CASE WHEN d.apellido2 IS NOT NULL THEN ' ' + d.apellido2 ELSE '' END ) ) As nombrecompleto, " . "d.genero, (CASE d.genero WHEN 0 THEN 'Femenino' WHEN 1 THEN 'Masculino' ELSE 'Indeterminado' END) as generodescriptivo, " . "d.nacimiento, mg.cargo, mg.registro, d.estado, d.instruccion, d.nacionalidad, d.ocupacion, d.creencia, d.telefono, d.movil, d.fax, d.correo, d.direccion, mg.id as miembro " . "FROM " . PREFIX . "directorio as d";
		
		switch ($type) {
			case Directorios::Usuario :
				$this->select = $this->select . " INNER JOIN " . PREFIX . "miembros_grupos as mg on mg.directorio = d.id" . " INNER JOIN " . PREFIX . "usuarios AS u ON u.directorio = d.id WHERE mg.grupo = :grupo";
				$params = array (
						":grupo" => $grupo 
				);
				
				break;
			default :
				$this->select = $this->select . " INNER JOIN " . PREFIX . "miembros_grupos as mg on mg.directorio = d.id WHERE mg.grupo = :grupo";
				if ($type != Directorios::General) {
					$this->select = $this->select . " AND d.clase = :clase";
					$params = array (
							":grupo" => $grupo,
							":clase" => $type 
					);
				} else {
					$params = array (
							":grupo" => $grupo 
					);
				}
				break;
		}
		
		return $this->db->select ( $this->select, $params );
	}
	public function setDirectorio($id, $data) {
	}
	public function Guardar() {
		$data = array (
				"dni" => $this->dni,
				"clase" => $this->clase,
				"nombre" => $this->nombre,
				"nombre2" => $this->nombre2,
				"apellido" => $this->apellido,
				"apellido2" => $this->apellido2,
				"nacimiento" => $this->nacimiento,
				"estado" => $this->estado,
				"nacionalidad" => $this->nacionalidad,
				"genero" => $this->genero,
				"telefono" => $this->telefono,
				"movil" => $this->movil,
				"fax" => $this->fax,
				"correo" => $this->correo,
				"direccion" => $this->direccion 
		);
		
		if (! isset ( $this->id ) || $this->id == 0) {
			
			$this->id = $this->db->insert ( "directorio", $data );
		} else {
			$this->db->update ( "directorio", $data, array (
					"id" => $this->Id 
			) );
		}
		
		return (isset ( $this->id ) && $this->id != 0);
	}
	public function getCreencias() {
		$this->select = "SELECT c.nombre FROM " . PREFIX . "creencias as c";
		return $this->db->select ( $this->select );
	}
	public function getOcupaciones() {
		$this->select = "SELECT o.nombre FROM " . PREFIX . "ocupaciones as o";
		return $this->db->select ( $this->select );
	}
	public function countDirectorio($grupo) {
		$this->select = "SELECT count(1) as cantidad FROM " . PREFIX . "directorio as D inner join " . PREFIX . "miembros_grupos as mg1 on mg1.directorio = d.id WHERE mg1.grupo = :grupo AND d.clase = :clase";
		
		$adultos = $this->db->select ( $this->select, array (
				":grupo" => $grupo,
				":clase" => 1 
		) );
		$jovenes = $this->db->select ( $this->select, array (
				":grupo" => $grupo,
				":clase" => 2 
		) );
		
		return array (
				"adultos" => $adultos [0]->cantidad,
				"jovenes" => $jovenes [0]->cantidad 
		);
	}
}
class Miembro extends Model {
	function __construct() {
		parent::__construct ();
	}
	public function Guardar() {
		$tabla;
		$data;
		
		if (isset ( $this->grupo ) && $this->grupo != 0) {
			$data = array (
					"grupo" => $this->grupo,
					"directorio" => $this->directorio,
					"clase" => $this->clase,
					"cargo" => $this->cargo,
					"registro" => $this->registro 
			);
			
			$tabla = "miembros_grupos";
		} elseif (isset ( $this->distrito ) && $this->distrito != 0) {
			
			$data = array (
					"distrito" => $this->distrito,
					"directorio" => $this->directorio,
					"clase" => $this->clase,
					"cargo" => $this->cargo 
			);
			
			$tabla = "miembros_distritos";
		} elseif (isset ( $this->region ) && $this->region != 0) {
			
			$data = array (
					"region" => $this->region,
					"directorio" => $this->directorio,
					"clase" => $this->clase,
					"cargo" => $this->cargo 
			);
			
			$tabla = "miembros_regiones";
		}
		
		if (isset ( $tabla ) && $tabla != '') {
			
			if (! isset ( $this->id ) || $this->id == 0) {
				$this->id = $this->db->insert ( $tabla, $data );
			} else {
				$this->db->update ( $tabla, $data, array (
						"id" => $this->Id 
				) );
			}
			
			return (isset ( $this->id ) && $this->id != 0);
		} 
	}
}