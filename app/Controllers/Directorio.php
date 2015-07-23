<?php

namespace Controllers;

use Core\View;
use Core\Controller;
use Helpers\Session;
use Helpers\Url;
use Models;

class Directorio extends Controller {
	private $modelo;
	public function __construct() {
		parent::__construct ();
		$this->language->load ( 'Directorio' );
		$this->modelo = new \Models\Directorio ();
	}
	private function render($data, $mode = 'lists') {
		View::renderTemplate ( 'header', $data );
		View::renderTemplate ( 'navbar', $data );
		View::render ( $mode . '/directorio', $data );
		View::renderTemplate ( 'footer', $data );
	}
	public function nuevo($index = Models\Directorios::General) {
		if (Session::get ( 'loggin' ) == false) {
			Url::redirect ( '' );
		}
		
		$data ['title'] = $this->language->get ( 'titles', $index );
		$data ['subtitle'] = $this->language->get ( 'subtitles', $index );
		// $data['entries'] = $this->modelo->getDirectorio($index);
		
		$this->render ( $data, 'editors' );
	}
	public function index($index = Models\Directorios::General) {
		if (Session::get ( 'loggin' ) == false) {
			Url::redirect ( '' );
		}
		
		$data ['title'] = $this->language->get ( 'titles', $index );
		$data ['subtitle'] = $this->language->get ( 'subtitles', $index );
		$data ['entries'] = $this->modelo->getDirectorio ( $index );
		
		$this->render ( $data );
	}
	public function adultos() {
		return $this->index ( Models\Directorios::Adulto );
	}
	public function nuevo_adulto() {
		return $this->nuevo ( Models\Directorios::Adulto );
	}
	public function guardar_adulto() {
		if (isset ( $_POST ['submit'] )) {
			
			$id = $_POST ['id'];
			$dni = $_POST ['dni'];
			$nombre = $_POST ['nombre'];
			$nombre2 = $_POST ['nombre2'];
			$apellido = $_POST ['apellido'];
			$apellido2 = $_POST ['apellido2'];
			$nacimiento = $_POST ['nacimiento'];
			$estado = $_POST ['estado'];
			$nacionalidad = $_POST ['nacionalidad'];
			$genero = $_POST ['genero'];
			$telefono = $_POST ['telefono'];
			$movil = $_POST ['movil'];
			$fax = $_POST ['fax'];
			$correo = $_POST ['correo'];
			$direccion = $_POST ['direccion'];
			
			$region = $_POST ['region'];
			$distrito = $_POST ['distrito'];
			$grupo = $_POST ['grupo'];
			$cargo = $_POST ['cargo'];
			$registro = $_POST ['registro'];
			
			$this->modelo = new \Models\Directorio ();
			
			$this->modelo->id = $id;
			$this->modelo->dni = $dni;
			$this->modelo->clase = 1;
			$this->modelo->nombre = $nombre;
			$this->modelo->nombre2 = $nombre2;
			$this->modelo->apellido = $apellido;
			$this->modelo->apellido2 = $apellido2;
			$this->modelo->nacimiento = $nacimiento;
			$this->modelo->estado = $estado;
			$this->modelo->nacionalidad = $nacionalidad;
			$this->modelo->genero = $genero;
			$this->modelo->telefono = $telefono;
			$this->modelo->movil = $movil;
			$this->modelo->fax = $fax;
			$this->modelo->correo = $correo;
			$this->modelo->direccion = $direccion;
			
			if ($this->modelo->Guardar () == TRUE) {
				$miembro = new \Models\Miembro ();
				$miembro->directorio = $this->modelo->id;
				$miembro->clase = $this->modelo->clase;
				$miembro->region = $region;
				$miembro->distrito = $distrito;
				$miembro->grupo = $grupo;
				$miembro->cargo = $cargo;
				$miembro->registro = $registro;
				
				if ($miembro->Guardar () == TRUE) {
					Url::redirect ( 'adultos/nuevo' );
				} else {
					var_dump ( $miembro );
				}
			} else {
				var_dump ( $this->modelo );
			}
		}
	}
	public function jovenes() {
		return $this->index ( Models\Directorios::Joven );
	}
	public function patrocinantes() {
		return $this->index ( Models\Directorios::Patrocinante );
	}
	public function usuarios() {
		return $this->index ( Models\Directorios::Usuario );
	}
	
	// public function distribucion()
	// {
	// //header('Content-Type: application/text');
	// //echo json_encode('[{"name":"Adultos","1":300,"2":350,"3":300,"4":0,"5":0,"6":0},{"name":"Jovenes","1":130,"2":100,"3":140,"4":200,"5":150,"6":150}]');
	// //echo json_encode('[{data1: [30, 20, 50, 40, 60, 50]},{data2: [200, 130, 90, 240, 130, 220]},{data3: [300, 200, 160, 400, 250, 250]}]');
	// //echo "[{name: 'www.site1.com', upload: 200, download: 200, total: 400},{name: 'www.site2.com', upload: 100, download: 300, total: 400},{name: 'www.site3.com', upload: 300, download: 200, total: 500},{name: 'www.site4.com', upload: 400, download: 100, total: 500}]";
	// //echo "1,2,3,4,5";
	// echo "'www.site1.com',200,200,400";
	// //ech'www.site2.com',upload=>100, download=>300, total=>400o array(
	// // array(name=> 'www.site1.com',upload=>200, download=>200, total=>400),
	// // array(name=> 'www.site2.com',upload=>100, download=>300, total=>400)
	// // );
	// }
	
	// API
	public function get_creencias() {
		header ( 'Content-Type: application/json' );
		echo json_encode ( $this->modelo->getCreencias () );
	}
	public function get_ocupaciones() {
		header ( 'Content-Type: application/json' );
		echo json_encode ( $this->modelo->getOcupaciones () );
	}
	public function get_contadores() {
		if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
			$key = $_POST ["key"];
			$grupo = $_POST ["grupo"];
			if (isset ( $key ) && isset ( $grupo )) {
				$admin = new \Models\Admin ();
				if ($admin->getAuth ( $key ) > 0) {
					header ( 'Content-Type: application/json' );
					echo json_encode ( $this->modelo->countDirectorio ( $grupo ) );
					return http_response_code ( 200 );
				}
			}
			return http_response_code ( 401 );
		}
		return http_response_code ( 501 );
	}
	public function get_adultos() {
		if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
			$key = $_POST ["key"];
			$grupo = $_POST ["grupo"];
			if (isset ( $key ) && isset ( $grupo )) {
				$admin = new \Models\Admin ();
				if ($admin->getAuth ( $key ) > 0) {
					header ( 'Content-Type: application/json' );
					echo json_encode ( $this->modelo->getDirectorio ( $grupo, 1 ) );
					return http_response_code ( 200 );
				}
			}
			return http_response_code ( 401 );
		}
		return http_response_code ( 501 );
	}
	public function get_jovenes() {
		if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
			$key = $_POST ["key"];
			$grupo = $_POST ["grupo"];
			if (isset ( $key ) && isset ( $grupo )) {
				$admin = new \Models\Admin ();
				if ($admin->getAuth ( $key ) > 0) {
					header ( 'Content-Type: application/json' );
					echo json_encode ( $this->modelo->getDirectorio ( $grupo, 2 ) );
					return http_response_code ( 200 );
				}
			}
			return http_response_code ( 401 );
		}
		return http_response_code ( 501 );
	}
	public function set_adultos() {
		if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
			$key = $_POST ["key"];
			$grupo = $_POST ["grupo"];
			if (isset ( $key ) && isset ( $grupo )) {
				$admin = new \Models\Admin ();
				if ($admin->getAuth ( $key ) > 0) {
					
					$id = $_POST ['id'];
					$dni = $_POST ['dni'];
					$nombre = $_POST ['nombre'];
					$nombre2 = $_POST ['nombre2'];
					$apellido = $_POST ['apellido'];
					$apellido2 = $_POST ['apellido2'];
					$nacimiento = $_POST ['nacimiento'];
					$estado = $_POST ['estado'];
					$genero = $_POST ['genero'];
					$nacionalidad = $_POST ['nacionalidad'];
					$telefono = $_POST ['telefono'];
					$movil = $_POST ['movil'];
					$fax = $_POST ['fax'];
					$correo = $_POST ['correo'];
					$direccion = $_POST ['direccion'];
					
					$miembro = $_POST ['miembro'];
					
					$region = $_POST ['region'];
					$distrito = $_POST ['distrito'];
					$cargo = $_POST ['cargo'];
					$registro = $_POST ['registro'];
					
					$this->modelo = new \Models\Directorio ();
					
					$this->modelo->id = $id;
					$this->modelo->dni = $dni;
					$this->modelo->clase = 1;
					$this->modelo->nombre = $nombre;
					$this->modelo->nombre2 = $nombre2;
					$this->modelo->apellido = $apellido;
					$this->modelo->apellido2 = $apellido2;
					$this->modelo->nacimiento = $nacimiento;
					$this->modelo->estado = $estado;
					$this->modelo->nacionalidad = $nacionalidad;
					$this->modelo->genero = $genero;
					$this->modelo->telefono = $telefono;
					$this->modelo->movil = $movil;
					$this->modelo->fax = $fax;
					$this->modelo->correo = $correo;
					$this->modelo->direccion = $direccion;
					
					if ($this->modelo->Guardar () == TRUE) {
						$miembro = new \Models\Miembro ();
						$miembro->id = $miembro;
						$miembro->directorio = $this->modelo->id;
						$miembro->clase = $this->modelo->clase;
						$miembro->region = $region;
						$miembro->distrito = $distrito;
						$miembro->grupo = $grupo;
						$miembro->cargo = $cargo;
						$miembro->registro = $registro;
						
						if ($miembro->Guardar () == TRUE) {
							header ( 'Content-Type: application/json' );
							echo json_encode($this->modelo->id != 0);
							return http_response_code ( 200 );
						} else {
							return http_response_code ( 502 );
						}
					} else {
						return http_response_code ( 501 );
					}
				}
			}
		}
	}
	
	public function set_jovenes() {
		if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
			$key = $_POST ["key"];
			$grupo = $_POST ["grupo"];
			if (isset ( $key ) && isset ( $grupo )) {
				$admin = new \Models\Admin ();
				if ($admin->getAuth ( $key ) > 0) {
						
					$id = $_POST ['id'];
					$dni = $_POST ['dni'];
					$nombre = $_POST ['nombre'];
					$nombre2 = $_POST ['nombre2'];
					$apellido = $_POST ['apellido'];
					$apellido2 = $_POST ['apellido2'];
					$nacimiento = $_POST ['nacimiento'];
					$estado = $_POST ['estado'];
					$genero = $_POST ['genero'];
					$nacionalidad = $_POST ['nacionalidad'];
					$telefono = $_POST ['telefono'];
					$movil = $_POST ['movil'];
					$fax = $_POST ['fax'];
					$correo = $_POST ['correo'];
					$direccion = $_POST ['direccion'];
						
					$miembro = $_POST ['miembro'];
						
					$region = $_POST ['region'];
					$distrito = $_POST ['distrito'];
					//$cargo = $_POST ['cargo'];
					$registro = $_POST ['registro'];
						
					$this->modelo = new \Models\Directorio ();
						
					$this->modelo->id = $id;
					$this->modelo->dni = $dni;
					$this->modelo->clase = 1;
					$this->modelo->nombre = $nombre;
					$this->modelo->nombre2 = $nombre2;
					$this->modelo->apellido = $apellido;
					$this->modelo->apellido2 = $apellido2;
					$this->modelo->nacimiento = $nacimiento;
					$this->modelo->estado = $estado;
					$this->modelo->nacionalidad = $nacionalidad;
					$this->modelo->genero = $genero;
					$this->modelo->telefono = $telefono;
					$this->modelo->movil = $movil;
					$this->modelo->fax = $fax;
					$this->modelo->correo = $correo;
					$this->modelo->direccion = $direccion;
						
					if ($this->modelo->Guardar () == TRUE) {
						$miembro = new \Models\Miembro ();
						$miembro->id = $miembro;
						$miembro->directorio = $this->modelo->id;
						$miembro->clase = $this->modelo->clase;
						$miembro->region = $region;
						$miembro->distrito = $distrito;
						$miembro->grupo = $grupo;
						//$miembro->cargo = $cargo;
						$miembro->registro = $registro;
	
						if ($miembro->Guardar () == TRUE) {
							header ( 'Content-Type: application/json' );
							echo json_encode($this->modelo->id != 0);
							return http_response_code ( 200 );
						} else {
							return http_response_code ( 502 );
						}
					} else {
						return http_response_code ( 501 );
					}
				}
			}
		}
	}
}
