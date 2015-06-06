<?php
    
namespace Models;
    
use Core\Model;
    
class Patrulla extends Model 
{    
    function __construct(){
        parent::__construct();
        $this->select = "SELECT id, grupo, nombre, distintivo, clase, creacion FROM ".PREFIX."patrullas;";
    }  
          
    public function getPatrullas(){
        return $this->db->select($this->select);
    }    
}