<?php
    
namespace Models;
    
use Core\Model;
    
class Region extends Model 
{    
    function __construct(){
        parent::__construct();
        $this->select = "SELECT id, codigo, nombre, geonameid FROM ".PREFIX."regiones;";
    }  
          
    public function getRegiones(){
        return $this->db->select($this->select);
    }    
}