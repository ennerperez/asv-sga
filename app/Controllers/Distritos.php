<?php

namespace Controllers;

use Core\View;
use Core\Controller;

class Distritos extends Controller
{
	private $modelo;
    public function __construct()
    {
        parent::__construct();
        $this->language->load('Distritos');
        $this->modelo = new \Models\Distrito();
    }
        
    public function index()
    {
    
        $data['title'] = $this->language->get('title');
        $data['subtitle'] = $this->language->get('subtitle');
        $data['entries'] = $this->modelo->getDistritos();
    
        View::renderTemplate('header', $data);
        View::renderTemplate('navbar', $data);
        View::render('lists/distritos', $data);
        View::renderTemplate('footer', $data);
    }
    
}