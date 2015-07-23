<?php

namespace Controllers;

use Core\View;
use Core\Controller;
use Helpers\Session;
use Helpers\Password;
use Helpers\Url;
use Models;

class Admin extends Controller {
	private $modelo;
	public function __construct() {
		parent::__construct ();
		// $this->language->load('Admin');
		$this->modelo = new \Models\Admin ();
	}
	public function login() {
		if (isset ( $_POST ['submit'] )) {
			
			$username = $_POST ['username'];
			$password = $_POST ['password'];
			
			$_hash = $this->modelo->getHash ( $username );
			
			if (Password::verify ( $password, $_hash ) == false) {
				die ( 'wrong username or password' );
			} else {
				Session::set ( 'loggin', true );
				Session::set ( 'userdata', $this->modelo->getData ( $username, $_hash ) );
			}
		}
		
		// var_dump(Session::get('userdata')->dni);
		
		if (Session::get ( 'userdata' )->confidencial == 1 && ( int ) Session::get ( 'userdata' )->dni < 0) {
			Url::redirect ( 'admin/registro' );
		} else {
			Url::redirect ( 'admin' );
		}
	}
	public function logout() {
		Session::set ( 'loggin', false );
		Session::destroy ();
		Url::redirect ( '' );
	}
	public function registro() {
		if (Session::get ( 'loggin' ) == false) {
			Url::redirect ( '' );
		}
		
		$data ['title'] = 'Registro';
		// $data['entries'] = $this->modelo->getAnuncios(Models\Anuncios::Usuario, Session::get('userdata')->id);//, Models\Admin::Id);
		
		View::renderTemplate ( 'header', $data );
		View::renderTemplate ( 'navbar', $data );
		View::render ( 'admin/registro', $data );
		View::renderTemplate ( 'footer', $data );
	}
	
	// API
	public function autorizar() {
		if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
			$key = $_POST ["key"];
			if (isset ( $key )) {
				if ($this->modelo->getAuth ( $key ) > 0) {
					return http_response_code ( 200 );
				}
			}
			return http_response_code ( 401 );
		}
		return http_response_code ( 501 );
	}
	public function generar() {
		if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
			$clave = $_POST ["clave"];
			if (isset ( $clave )) {
				header ( 'Content-Type: text/plain' );
				echo Password::make ( $clave );
				return http_response_code ( 200 );
			}
		}
		return http_response_code ( 501 );
	}
	public function iniciar() {
		if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
			
			if ($this->autorizar () != http_response_code ( 200 )) {
				return http_response_code ( 401 );
			}
			
			$usuario = $_POST ["usuario"];
			$clave = $_POST ["clave"];
			if (isset ( $usuario ) && isset ( $clave )) {
				$_hash = $this->modelo->getHash ( $usuario );
				if (Password::verify ( $clave, $_hash ) == true) {
					$data = $this->modelo->getData ( $usuario, $_hash );
					if (isset ( $data )) {
						header ( 'Content-Type: application/json' );
						echo json_encode ( $data );
						return http_response_code ( 200 );
					}
				}
				return http_response_code ( 401 );
			}
		}
		
		return http_response_code ( 501 );
	}
}