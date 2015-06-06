<?php

namespace Controllers;

use Core\View;
use Core\Controller;

class Grupos extends Controller
{
	private $modelo;
    public function __construct()
    {
        parent::__construct();
        $this->language->load('Grupos');
        $this->modelo = new \Models\Grupo();
    }
        
    public function index()
    {
    
        $data['title'] = $this->language->get('title');
        $data['subtitle'] = $this->language->get('subtitle');
        $data['entries'] = $this->modelo->getGrupos();
    
        View::renderTemplate('header', $data);
        View::renderTemplate('navbar', $data);
        View::render('lists/grupos', $data);
        View::renderTemplate('footer', $data);
    }
    
}