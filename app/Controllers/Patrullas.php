<?php

namespace Controllers;

use Core\View;
use Core\Controller;

class Patrullas extends Controller
{
	private $patrullas;
    public function __construct()
    {
        parent::__construct();
        $this->language->load('Patrullas');
        $this->patrullas = new \Models\Patrulla();
    }
        
    public function index()
    {
    
        $data['title'] = $this->language->get('welcome_text');
        $data['welcome_message'] = $this->language->get('welcome_message');
        $data['entries'] = $this->patrullas->getPatrullas();
    
        View::renderTemplate('header', $data);
        View::renderTemplate('navbar', $data);
        View::render('lists/patrullas', $data);
        View::renderTemplate('footer', $data);
    }
    
}