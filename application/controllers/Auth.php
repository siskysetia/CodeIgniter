<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index(){
	$this->form_validation->set_rules('username','Username','trim|required|valid_username');
	$this->form_validation->set_rules('password','Password','trim|required');
	if($this->form_validation->run() == false) {
		$data['title'] = 'Login Aplikasi Koperasi';
		$this->load->view('auth/login');	
		}	
	}
}