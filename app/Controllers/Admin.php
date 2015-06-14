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
                    Url::redirect('admin');
                }
            }           
    
        }
    
        public function logout(){   
            Session::destroy();
            Url::redirect('');
        }

    }
