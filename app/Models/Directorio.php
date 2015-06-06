<?php
    
namespace Models;
    
use Core\Model;
    
abstract class Clases
{
    const General = 0;
    const Adulto = 1;
    const Joven = 2;
    const Patrocinante = 3;
}

class Directorio extends Model 
{    
    function __construct(){
        parent::__construct();
        $this->select = "SELECT id, dni, clase, nombre, apellido, genero, nacimiento FROM ".PREFIX."directorio";
    }  
          
    public function getDirectorio($type = Clases::General){
        $tsql = $this->select;
        $params = array();

        if($type != Clases::General)
        {
            $tsql =$tsql." WHERE clase = :clase";
            $params = array(":clase" => $type);
        }
               
        return $this->db->select($tsql, $params);
    }    
}