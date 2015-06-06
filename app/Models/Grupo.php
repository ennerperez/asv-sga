<?php
    
namespace Models;
    
use Core\Model;
    
class Grupo extends Model 
{    
    function __construct(){
        parent::__construct();
        $this->select = "SELECT id, codigo, nombre, distrito, descripcion, direccion, geonameid, creacion, modificacion, control, activo FROM ".PREFIX."grupos;";
    }  
          
    public function getGrupos(){
        return $this->db->select($this->select);
    }    
}