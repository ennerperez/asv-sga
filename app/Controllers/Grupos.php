<?php

namespace Controllers;

use Core\View;
use Core\Controller;

class Grupos extends Controller
{
	private $grupos;
    public function __construct()
    {
        parent::__construct();
        $this->language->load('Grupos');
        $this->grupos = new \Models\Grupo();
    }
        
    public function index()
    {
    
        $data['title'] = $this->language->get('welcome_text');
        $data['welcome_message'] = $this->language->get('welcome_message');
        $data['entries'] = $this->grupos->getGrupos();
    
        View::renderTemplate('header', $data);
        View::renderTemplate('navbar', $data);
        View::render('lists/grupos', $data);
        View::renderTemplate('footer', $data);
    }
    
}