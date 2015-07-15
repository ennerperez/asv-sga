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
                $this->select = "SELECT u.id, d.dni, d.clase, d.nombre, d.apellido, d.genero, d.nacimiento FROM ".PREFIX."usuarios ".
                                " AS u INNER JOIN ".PREFIX."directorio AS d ON u.directorio = d.id";
                
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

    public function setDirectorio($id, $data)
    {
        
    }

    public function Guardar()
    {
        
        if(!isset($this->id) || $this->id == 0)
        {
          $data = array("dni"           => $this->dni,
                        "clase"         => $this->clase,
                        "nombre"        => $this->nombre,
                        "nombre2"       => $this->nombre2,
                        "apellido"      => $this->apellido,
                        "apellido2"     => $this->apellido2,
                        "genero"        => $this->genero,
                        "nacimiento"    => $this->nacimiento,
                        "estado"        => $this->estado,
                        "telefono"      => $this->telefono,
                        "nacionalidad"  => $this->nacionalidad,
                        "direccion"     => $this->direccion,
                        "correo"        => $this->correo);

            $this->id = $this->db->insert("directorio", $data);;
            return (isset($this->id) && $this->id != 0);
        }
        //else
        //{
        //    $params = array(":id" => $this->Id);
        //    $this->db->update($this->update, $params);
        //}

        //return ($this->id != 0);

    }

    public function getCreencias()
    {
        $this->select = "SELECT c.nombre FROM ".PREFIX."creencias as c";
        return $this->db->select($this->select);
    }

     public function getOcupaciones()
    {
        $this->select = "SELECT o.nombre FROM ".PREFIX."ocupaciones as o";
        return $this->db->select($this->select);
    }

}

class Miembro extends Model 
{    
    function __construct(){
        parent::__construct();
    }  

    public function Guardar()
    {
        $tabla;
        $data;
   
         if(!isset($this->id) || $this->id == 0)
        {
            
         if(isset($this->grupo) && $this->grupo != 0)
         {
             $data = array("grupo"         => $this->grupo,
                           "directorio"    => $this->directorio,
                           "clase"         => $this->clase,
                           "cargo"         => $this->cargo,
                           "registro"      => $this->registro);

           $tabla = "miembros_grupos";
         }
         elseif (isset($this->distrito) && $this->distrito != 0)
         {

             $data = array("distrito"      => $this->distrito,
                           "directorio"    => $this->directorio,
                           "clase"         => $this->clase,
                           "cargo"         => $this->cargo);

                $tabla = "miembros_distritos";
         }
         elseif (isset($this->region) && $this->region != 0)
         {

             $data = array("region"        => $this->region,
                           "directorio"    => $this->directorio,
                           "clase"         => $this->clase,
                           "cargo"         => $this->cargo);

                $tabla = "miembros_regiones";
         }
         
         if (isset($tabla) && $tabla != '')
         {
            $this->id = $this->db->insert($tabla, $data);
            return (isset($this->id) && $this->id != 0);
         }

        }
     

         //return FALSE;
    }
          
}