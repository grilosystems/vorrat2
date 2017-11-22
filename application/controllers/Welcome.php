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
	}

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
