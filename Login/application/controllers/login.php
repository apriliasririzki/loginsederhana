<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('username')) {
			redirect('welcome');
		}else{
		$this->load->view('login_view');
	}
	}
	public function ceklogin(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->load->model('model_login');
		$query=$this->model_login->ambillogin($username,$password);
		if ($query->num_rows()>0){
			foreach ($query->result() as $row) {
				$sess = array('username' => $row->username,
								'password'=> $row->password
			);
			}
		$this->session->set_userdata($sess);

		redirect('welcome');
		}
		else{
			$this->session->set_flashdata('info','Maaf username dan password anda salah!');
			redirect('login');
		}
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}
