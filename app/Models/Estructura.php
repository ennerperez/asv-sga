<?php
    
namespace Models;
    
use Core\Model;
    
abstract class Estructuras
{
    const Region = 0;
    const Distrito = 1;
    const Grupo = 2;
    const Patrulla = 3;
}

class Estructura extends Model 
{    
    function __construct(){
        parent::__construct();
    }  
          
    public function getEstructura($type = Estructuras::Region){

        switch ($type){
            case Estructuras::Region:
                $this->select = "SELECT id, codigo, nombre, geonameid FROM ".PREFIX."regiones;";
                break;
            case Estructuras::Distrito:
                $this->select = "SELECT id, codigo, nombre, region FROM ".PREFIX."distritos;";
                break;
            case Estructuras::Grupo:
                $this->select = "SELECT id, codigo, nombre, distrito, descripcion, direccion, geonameid, creacion, modificacion, control, activo FROM ".PREFIX."grupos;";
                break;
            case Estructuras::Patrulla:
                $this->select = "SELECT id, grupo, nombre, distintivo, clase, creacion FROM ".PREFIX."patrullas;";
                break;
        }

        return $this->db->select($this->select);
    }   
    
     public function getCargo($type = Estructuras::Region)
     {

         $this->select = "SELECT id, nombre FROM ".PREFIX."cargos";
         $where = ";";

         switch ($type){
            case Estructuras::Grupo:
                $where = " WHERE id BETWEEN 1 AND 85;";
                break;
            case Estructuras::Distrito:
                $where = " WHERE id BETWEEN 86 AND 128;";
                break;
            case Estructuras::Region:
                 $where = " WHERE id BETWEEN 129 AND 192;";
                break;
            case Estructuras::Patrulla:
                $where = " WHERE id BETWEEN 215 AND 222;";
                break;
        }

        return $this->db->select($this->select.$where);
     }
     
}