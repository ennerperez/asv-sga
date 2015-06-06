<?php

namespace Controllers;

use Core\View;
use Core\Controller;

class Distritos extends Controller
{
	private $distritos;
    public function __construct()
    {
        parent::__construct();
        $this->language->load('Distritos');
        $this->distritos = new \Models\Distrito();
    }
        
    public function index()
    {
    
        $data['title'] = $this->language->get('welcome_text');
        $data['welcome_message'] = $this->language->get('welcome_message');
        $data['entries'] = $this->distritos->getDistritos();
    
        View::renderTemplate('header', $data);
        View::renderTemplate('navbar', $data);
        View::render('lists/distritos', $data);
        View::renderTemplate('footer', $data);
    }
    
}