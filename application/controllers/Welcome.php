<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Usuario');
	}

	public function index()
	{
		$this->load->view('head');
		$this->load->view('login');
		$this->load->view('footer');
	}

	public function login($emailUser, $passwordUser)
	{
		if(!is_null($emailUser) && !is_null($passwordUser)){
			if($this->Usuario->searchUsuario($emailUser)) 
				redirect('welcome/accountUser', 'refresh');
			else
				redirect('http://www.grilosystems.com.mx', 'refresh');
		}
	}

	public function accountUser()
	{
		$this->load->view('head');
		$this->load->view('navMenu');
		$this->load->view('account');
		$this->load->view('footer');
	}

}
