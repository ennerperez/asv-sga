<?php
    
    namespace Controllers;
    
    use Core\View;
    use Core\Controller;
    
    use Helpers\Session;
    use Helpers\Password;
    use Helpers\Url;
    
    use Models;
    
    class Admin extends Controller 
    {
        private $modelo;
        public function __construct()
        {
            parent::__construct();
            //$this->language->load('Admin');
            $this->modelo = new \Models\Admin();
        }
    
        public function login()
        {
            if(isset($_POST['submit'])){
    
                $username = $_POST['username'];
                $password = $_POST['password'];
    
                $_hash = $this->modelo->getHash($username);
    
                if(Password::verify($password, $_hash) == false){
                    die('wrong username or password');
                }
                else{
                    Session::set('loggin',true);
					Session::set('userdata', $this->modelo->getData($username, $_hash));
                }
            }

            //var_dump(Session::get('userdata')->dni);

            if (Session::get('userdata')->confidencial == 1 && (int)Session::get('userdata')->dni < 0)
            {
                Url::redirect('admin/registro');
            }
            else
            {
                Url::redirect('admin');
            }
        }
    
        public function logout(){   
			Session::set('loggin',false);
            Session::destroy();
            Url::redirect('');
        }

        public function registro()
        {
            if(Session::get('loggin') == false) { Url::redirect(''); }

            $data['title'] = 'Registro';
			//$data['entries'] = $this->modelo->getAnuncios(Models\Anuncios::Usuario, Session::get('userdata')->id);//, Models\Admin::Id);

            View::renderTemplate('header', $data);
            View::renderTemplate('navbar', $data);
            View::render('admin/registro', $data);
            View::renderTemplate('footer', $data);
        }
        
    }
