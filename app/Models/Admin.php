<?php

namespace Models;
    
use Core\Model;

class Admin extends Model {

	public function __construct(){
		parent::__construct();
	}	

	public function getHash($username){
		$data = $this->db->select("SELECT clave FROM ".PREFIX."usuarios WHERE usuario = :usuario", array(':usuario' => $username));
		return $data[0]->clave;
	}
}