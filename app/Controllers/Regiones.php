<?php

namespace Controllers;

use Core\View;
use Core\Controller;

class Regiones extends Controller
{
	private $regiones;
    public function __construct()
    {
        parent::__construct();
        $this->language->load('Regiones');
        $this->regiones = new \Models\Region();
    }
        
    public function index()
    {
    
        $data['title'] = $this->language->get('welcome_text');
        $data['welcome_message'] = $this->language->get('welcome_message');
        $data['entries'] = $this->regiones->getRegiones();
    
        View::renderTemplate('header', $data);
        View::renderTemplate('navbar', $data);
        View::render('lists/regiones', $data);
        View::renderTemplate('footer', $data);
    }
    
}