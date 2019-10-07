<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
		parent::__construct();

		$username=$this->session->userdata('username');
		if(empty($username)){
			$this->session->sess_destroy();
			redirect('login');
		}

	}
	public function index()
	{
		$this->load->model('model_login');
		//$this->model_login->keamanan();
		$this->load->view('welcome_message');
	}
}
