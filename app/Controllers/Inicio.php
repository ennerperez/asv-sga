<?php
    
    namespace Controllers;
    
    use Core\View;
    use Core\Controller;
    
    use Helpers\Session;
    use Helpers\Url;

    use Models;
    
    class Inicio extends Controller
    {
        private $modelo;
        public function __construct()
        {
            parent::__construct();
            //$this->language->load('Inicio');
            $this->modelo = new \Models\Inicio();
        }
       
        public function dashboard()
        {

            if(Session::get('loggin') == false) { Url::redirect(''); }

            $data['title'] = 'Bienvenida';
			$data['entries'] = $this->modelo->getAnuncios(Models\Anuncios::Usuario, Session::get('userdata')->id);//, Models\Admin::Id);

            View::renderTemplate('header', $data);
            View::renderTemplate('navbar', $data);
            View::render('admin/dashboard', $data);
            View::renderTemplate('footer', $data);
    
            //$data['title'] = $this->language->get('titles', $index);
            //$data['subtitle'] = $this->language->get('subtitles', $index);
            //$data['entries'] = $this->modelo->getDirectorio($index);

            
        }

        public function index()
        {

            if(Session::get('loggin') == true) { Url::redirect('admin'); }

			$data['title'] = 'Inicio';
			$data['entries'] = $this->modelo->getAnuncios(Models\Anuncios::Publico);

            View::renderTemplate('header', $data);
            View::renderTemplate('navbar', $data);
            View::render('index', $data);
            View::renderTemplate('footer', $data);
        }
    
       
    
    }
