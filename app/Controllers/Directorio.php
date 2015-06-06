<?php
    
    namespace Controllers;
    
    use Core\View;
    use Core\Controller;

    use Models;

    class Directorio extends Controller
    {
        private $modelo;
        public function __construct()
        {
            parent::__construct();
            $this->language->load('Directorio');
            $this->modelo = new \Models\Directorio();
        }
    
        public function index()
        {
    
            $data['title'] = $this->language->get('title', Models\Clases::General);
            $data['subtitle'] = $this->language->get('subtitle', Models\Clases::General);
            $data['entries'] = $this->modelo->getDirectorio(Models\Clases::General);
    
            View::renderTemplate('header', $data);
            View::renderTemplate('navbar', $data);
            View::render('lists/directorio', $data);
            View::renderTemplate('footer', $data);
        }
    
        public function adultos()
        {

            $data['title'] =$this->language->get('title', Models\Clases::Adulto);
            $data['subtitle'] = $this->language->get('subtitle', Models\Clases::Adulto);
            $data['entries'] = $this->modelo->getDirectorio(Models\Clases::Adulto);
    
            View::renderTemplate('header', $data);
            View::renderTemplate('navbar', $data);
            View::render('lists/directorio', $data);
            View::renderTemplate('footer', $data);
        }
    
        public function jovenes()
        {
            $data['title'] = $this->language->get('title', Models\Clases::Joven);
            $data['subtitle'] = $this->language->get('subtitle', Models\Clases::Joven);
            $data['entries'] = $this->modelo->getDirectorio(Models\Clases::Joven);
    
            View::renderTemplate('header', $data);
            View::renderTemplate('navbar', $data);
            View::render('lists/directorio', $data);
            View::renderTemplate('footer', $data);
        }
    
        public function patrocinantes()
        {
            $data['title'] = $this->language->get('title', Models\Clases::Patrocinante);
            $data['subtitle'] = $this->language->get('subtitle', Models\Clases::Patrocinante);
            $data['entries'] = $this->modelo->getDirectorio(Models\Clases::Patrocinante);
    
            View::renderTemplate('header', $data);
            View::renderTemplate('navbar', $data);
            View::render('lists/directorio', $data);
            View::renderTemplate('footer', $data);
        }
    
    }
