<?php
    
namespace Models;
    
use Core\Model;

abstract class Anuncios
{
    const Publico = 0;
    const Usuario = 5;
	const Grupo = 7;
	const Distrito = 8;
	const Region = 9;
}

class Inicio extends Model 
{    
    function __construct(){
        parent::__construct();
    }  

	public function getAnuncios($type = Anuncios::Publico, $entity = null){
        
		$sql = "SELECT id, titulo, resumen, descripcion, fecha, autor, entidad, tipo, activo, leido FROM ".PREFIX."anuncios";
        $params = array();
		
		switch ($type){
            case Anuncios::Publico:
				$sql = $sql." WHERE (tipo = :tipo AND activo = 1)";
				$params = array(":tipo" => $type);	       
				break;
			default:
				if ($entity != null)
				{
					$sql = $sql." WHERE (tipo = 0) OR (tipo = :tipo AND entidad = :entidad ) AND activo = 1 AND leido = 0";
					$params = array(":tipo" => $type, ":entidad" => $entity);	       
				}
				else
				{
					$sql = $sql." WHERE (tipo = :tipo AND activo = 1)";
					$params = array(":tipo" => $type);	       
				}
				break;
		}

		$this->select = $sql;
		
        return $this->db->select($this->select, $params);
    }   
   
}