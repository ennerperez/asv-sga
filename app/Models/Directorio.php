<?php
    
namespace Models;
    
use Core\Model;
    
abstract class Directorios
{
    const General = 0;
    const Adulto = 1;
    const Joven = 2;
    const Patrocinante = 3;
    const Usuario = 9;
}

class Directorio extends Model 
{    
    function __construct(){
        parent::__construct();
    }  
          
    public function getDirectorio($type = Directorios::General){
        
        $params = array();

        switch ($type)
        {
            case Directorios::Usuario:
                $this->select = "SELECT U.id, D.dni, D.clase, D.nombre, D.apellido, D.genero, D.nacimiento FROM ".PREFIX."usuarios ".
                                " AS U INNER JOIN ".PREFIX."directorio AS D ON U.directorio = D.id";
                
                break;
            default:
                $this->select = "SELECT id, dni, clase, nombre, apellido, genero, nacimiento FROM ".PREFIX."directorio";
                if($type != Directorios::General)
                {
                    $this->select = $this->select." WHERE clase = :clase";
                    $params = array(":clase" => $type);
                }
                break;
        }
               
        return $this->db->select($this->select, $params);
    }    
}