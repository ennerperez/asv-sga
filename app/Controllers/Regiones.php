<?php

namespace Controllers;

use Core\View;
use Core\Controller;

class Regiones extends Controller
{
	private $modelo;
    public function __construct()
    {
        parent::__construct();
        $this->language->load('Regiones');
        $this->modelo = new \Models\Region();
    }
        
    public function index()
    {
    
        $data['title'] = $this->language->get('title');
        $data['subtitle'] = $this->language->get('subtitle');
        $data['entries'] = $this->modelo->getRegiones();
    
        View::renderTemplate('header', $data);
        View::renderTemplate('navbar', $data);
        View::render('lists/regiones', $data);
        View::renderTemplate('footer', $data);
    }
    
}