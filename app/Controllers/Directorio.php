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
    
        private function render($data)
        {
            View::renderTemplate('header', $data);
            View::renderTemplate('navbar', $data);
            View::render('lists/directorio', $data);
            View::renderTemplate('footer', $data);
        }
    
        public function index( $index = Models\Directorios::General)
        {
    
            $data['title'] = $this->language->get('titles', $index);
            $data['subtitle'] = $this->language->get('subtitles', $index);
            $data['entries'] = $this->modelo->getDirectorio($index);

            $this->render($data);
        }
    
        public function adultos()
        {
            return  $this->index(Models\Directorios::Adulto);
        }
    
        public function jovenes()
        {
            return  $this->index(Models\Directorios::Joven);
        }
    
        public function patrocinantes()
        {
            return  $this->index(Models\Directorios::Patrocinante);
        }

        public function usuarios()
        {
            return  $this->index(Models\Directorios::Usuario);
        }
    
    }