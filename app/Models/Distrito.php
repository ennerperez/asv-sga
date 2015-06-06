<?php
    
namespace Models;
    
use Core\Model;
    
class Distrito extends Model 
{    
    function __construct(){
        parent::__construct();
        $this->select = "SELECT id, codigo, nombre, region FROM ".PREFIX."distritos;";
    }  
          
    public function getDistritos(){
        return $this->db->select($this->select);
    }    
}