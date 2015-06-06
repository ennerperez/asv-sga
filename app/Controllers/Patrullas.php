<?php

namespace Controllers;

use Core\View;
use Core\Controller;

class Patrullas extends Controller
{
	private $modelo;
    public function __construct()
    {
        parent::__construct();
        $this->language->load('Patrullas');
        $this->modelo = new \Models\Patrulla();
    }
        
    public function index()
    {
    
        $data['title'] = $this->language->get('title');
        $data['subtitle'] = $this->language->get('subtitle');
        $data['entries'] = $this->modelo->getPatrullas();
    
        View::renderTemplate('header', $data);
        View::renderTemplate('navbar', $data);
        View::render('lists/patrullas', $data);
        View::renderTemplate('footer', $data);
    }
    
}