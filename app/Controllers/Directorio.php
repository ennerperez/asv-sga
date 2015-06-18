<?php
    
    namespace Controllers;
    
    use Core\View;
    use Core\Controller;
    
    use Helpers\Session;
    use Helpers\Url;
    
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
    
        private function render($data, $mode = 'lists')
        {
            View::renderTemplate('header', $data);
            View::renderTemplate('navbar', $data);
            View::render($mode.'/directorio', $data);
            View::renderTemplate('footer', $data);
        }
    
        public function nuevo($index = Models\Directorios::General)
        {
    
            if(Session::get('loggin') == false) { Url::redirect(''); }
    
            $data['title'] = $this->language->get('titles', $index);
            $data['subtitle'] = $this->language->get('subtitles', $index);
            //$data['entries'] = $this->modelo->getDirectorio($index);
    
            $this->render($data,'editors');

        }
    
        public function index( $index = Models\Directorios::General)
        {
    
            if(Session::get('loggin') == false) { Url::redirect(''); }
    
            $data['title'] = $this->language->get('titles', $index);
            $data['subtitle'] = $this->language->get('subtitles', $index);
            $data['entries'] = $this->modelo->getDirectorio($index);
    
            $this->render($data);
        }
    
    
    
        public function adultos()
        {
            return  $this->index(Models\Directorios::Adulto);
        }
        public function nuevo_adulto()
        {
            return  $this->nuevo(Models\Directorios::Adulto);
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
