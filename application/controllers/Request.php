<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Request extends CI_Controller {
	function __construct() {
        	parent::__construct();
			$this->load->library('session');
			
			
	}
	public function logIn(){
		$this->load->model('User');
		$obj =  $this->User->signIn($this->input->post('user'),$this->input->post('password'));
		echo $this->session->userdata('email');
	}
	public function logOut(){
		$this->load->model('User');
		$obj =  $this->User->signOut();
		echo $this->session->userdata('email');
	}
}