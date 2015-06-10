<?php
    
    namespace Controllers;
    
    use Core\View;
    use Core\Controller;
    
    use Models;
    
    class Inicio extends Controller
    {
        private $modelo;
        public function __construct()
        {
            parent::__construct();
            //$this->language->load('Inicio');
            $this->inicio = new \Models\Inicio();
        }
       
        public function dashboard()
        {

            View::renderTemplate('header', $data);
            View::renderTemplate('navbar', $data);
            View::render('dashboard/inicio', $data);
            View::renderTemplate('footer', $data);
    
            //$data['title'] = $this->language->get('titles', $index);
            //$data['subtitle'] = $this->language->get('subtitles', $index);
            //$data['entries'] = $this->modelo->getDirectorio($index);

            
        }
    
       
    
    }