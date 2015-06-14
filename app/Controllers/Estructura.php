<?php
    
    namespace Controllers;
    
    use Core\View;
    use Core\Controller;

    use Helpers\Session;
    use Helpers\Url;
    
    use Models;
    
    class Estructura extends Controller
    {
        private $modelo;
        public function __construct()
        {
            parent::__construct();
            $this->language->load('Estructura');
            $this->modelo = new \Models\Estructura();
        }
    
        private function render($data)
        {
            View::renderTemplate('header', $data);
            View::renderTemplate('navbar', $data);
            //View::render('lists/'.strtolower ($data['title']), $data);
            View::render('lists/estructura', $data);
            View::renderTemplate('footer', $data);            
        }
    
        public function index($index = Models\Estructuras::Region)
        {

            if(Session::get('loggin') == false) { Url::redirect(''); }
    
            $data['title'] = $this->language->get('titles', $index);
            $data['subtitle'] = $this->language->get('subtitles',$index);
            $data['entries'] = $this->modelo->getEstructura($index);
    
            $this->render($data);

        }
        
        public function regiones()
        {           
            return $this->index(Models\Estructuras::Region);
        }

        public function distritos()
        {           
            return $this->index(Models\Estructuras::Distrito);
        }

        public function grupos()
        {           
            return $this->index(Models\Estructuras::Grupo);
        }

        public function patrullas()
        {           
            return $this->index(Models\Estructuras::Patrulla);
        }

    
    }
