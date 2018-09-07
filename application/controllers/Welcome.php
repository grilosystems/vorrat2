<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Usuario');
		$this->load->model('Personal');
		$this->load->library('encryption');
		$this->encryption->initialize(
			array(
				'cipher' => 'aes-128',
				'mode' => 'ctr',
				'key' => '4kKXb1a9Cq'
			)
		);
	}

	public function index()
	{
		$this->load->view('head');
		$this->load->view('login');
	}

	public function login($solicitud=null)
	{	
		log_message('error', 'Crea login');
		log_message('error', 'Solicitud: '.$solicitud);
		switch ($solicitud) {
			case null:
				$postdata = file_get_contents("php://input");

				if(is_null($postdata) || $postdata=='{}'){
					$email = null;
					$data_usuario = array(
			    		'findUser'=>false,
			    		'error'=>'No se indico la cuenta.'
			    	);
				} else {
					$request = json_decode($postdata);
			    	$email = $request->user;
			    	$pass = $request->pass;
				}

			    if(!empty($email) && !is_null($email)){
			    	if($this->Usuario->searchUsuario($email)){
			    		$info_usuario = $this->Usuario->getUsuarioByCuenta($email);
			    		if($info_usuario['clave']==$pass){
			    			$uriSecret = $this->encryption->encrypt($email.','.$pass);
			    			$uriSecret = str_replace('/', '~', $uriSecret);
			    			$uriSecret = str_replace('+', '_', $uriSecret);
			    			$uriSecret = str_replace('=', '-', $uriSecret);

				    		$data_usuario = array(
				    			'findUser'=>true,
				    			'id_usuario'=>$info_usuario['idusuario'],
				    			'email'=>$info_usuario['cuenta'],
				    			'id_personal'=>$info_usuario['idPersonal'],
				    			'id_tipo'=>$info_usuario['idtipoUsuario'],
				    			'uri'=>$uriSecret,
				    			'access'=>'/welcome/accountUser/'
				    		);

				    		log_message('error', 'Usuario encontrado: '.$data_usuario['email']);
			    		}
			    	}
			    }

				$response = json_encode($data_usuario);
				echo $response;
				break;
			case '1':
				echo '/welcome/newAccount/';
				break;
			case '2':
				echo '/welcome/recoverPassword/';
				break;
			default:
				# code...
				break;
		}
		 
	}

	public function accountUser($accesUser)
	{
		$accesUser = str_replace('~', '/', $accesUser);
	    $accesUser = str_replace('_', '+', $accesUser);
	    $accesUser = str_replace('-', '=', $accesUser);

		if(!empty($accesUser) && !is_null($accesUser)){
			$uriSecret = $this->encryption->decrypt($accesUser);
			list($usuario, $pass) = explode(',', $uriSecret);

			if($this->Usuario->searchUsuario($usuario)) {
				$info_usuario = $this->Usuario->getUsuarioByCuenta($usuario);

				if($info_usuario['clave']==$pass){
					
					$info_personal = $this->Personal->getPersonalById($info_usuario['idPersonal']);
					$data_usuario = array(
						'usuario'=>$usuario,
						'pass'=>$pass,
						'nombre'=>$info_personal['nombre'],
						'cargo'=>$info_personal['cargo'],
						'tipoUsuario'=>$info_personal['tipo'],
						'logged_in'=>true
					);
					
					$this->session->set_userdata($data_usuario);
					$this->load->view('head');
					$this->load->view('navMenu');
					$this->load->view('account');
					$this->load->view('footer');
				} else {
					redirect('welcome', 'refresh');
				}
			} else {
				redirect('welcome', 'refresh');
			}		
		} else {
			redirect('welcome', 'refresh');
		}
	}

	public function recoverPassword($user=null)
	{
		$this->load->view('head');
		$this->load->view('forgotpassword');	
	}

	public function newAccount()
	{
		$this->load->view('head');
		$this->load->view('registeraccount');	
	}

	public function test()
	{
		$new_Person = array(
			'cargo' => 'Almacen 6',
			'nombre' => 'Rubén Perez',
			'tipo' => '2'
		);

		$this->Personal->savePersonal($new_Person);
	}

}
