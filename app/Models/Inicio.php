<?php
    
namespace Models;
    
use Core\Model;
    
class Inicio extends Model 
{    
    function __construct(){
        parent::__construct();
    }  
          
    //public function getEstructura($type = Estructuras::Region){

    //    //switch ($type){
    //    //    case Estructuras::Region:
    //    //        $this->select = "SELECT id, codigo, nombre, geonameid FROM ".PREFIX."regiones;";
    //    //        break;
    //    //    case Estructuras::Distrito:
    //    //        $this->select = "SELECT id, codigo, nombre, region FROM ".PREFIX."distritos;";
    //    //        break;
    //    //    case Estructuras::Grupo:
    //    //        $this->select = "SELECT id, codigo, nombre, distrito, descripcion, direccion, geonameid, creacion, modificacion, control, activo FROM ".PREFIX."grupos;";
    //    //        break;
    //    //    case Estructuras::Patrulla:
    //    //        $this->select = "SELECT id, grupo, nombre, distintivo, clase, creacion FROM ".PREFIX."patrullas;";
    //    //        break;
    //    //}

    //    //return $this->db->select($this->select);
    //}    
}