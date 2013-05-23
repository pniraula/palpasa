<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Request extends CI_Controller {
	function __construct() {
        	parent::__construct();
			$this->load->library('session');			
	}
	public function logIn(){
		$this->load->model('User');
		$obj =  $this->User->signIn($this->input->post('user'),$this->input->post('password'));
		echo $this->session->userdata('userId');
	}
	public function logOut(){
		$this->load->model('User');
		$obj =  $this->User->signOut();
		echo $this->session->userdata('email');
	}
	public function signUp(){
		$this->load->model('User');
		$firstName = $this->input->post('firstName');
		$lastName = $this->input->post('lastName');
		$email = $this->input->post('emailId');
		$password = $this->input->post('pass');
		echo $this->User->signUp($firstName, $lastName, $email, $password);
	}
	public function search(){
		$this->load->model('Search');
		echo json_encode($this->Search->search($this->input->post('val')));
	}
	public function addStation(){
		$this->load->model('Station');
		$name = $this->input->post('station_name');
		$id = $this->input->post('type_id');
		$type = $this->input->post('type_name');
		echo $this->Station->add_station($name, $id, $type);
	}
	public function removeStation(){
		$this->load->model('Station');
		$id = $this->input->post('id');
		echo $this->Station->remove_station($id);
	}
	public function songList(){
		$this->load->model('Station');
		$id = $this->input->post('id');
		echo json_encode($this->Station->song_list($id));
	}
	public function favList(){
		$this->load->model('Station');
		echo json_encode($this->Station->fav_list());
	}
	public function songDetail(){
		$this->load->model('Station');
		$id = $this->input->post('id');
		echo json_encode($this->Station->song_detail($id));
	}
	public function rate(){
		$this->load->model('Station');
		$val = $this->input->post('val');
		$id = $this->input->post('id');
		$station = $this->input->post('station');
		echo json_encode($this->Station->rate_song($val, $station, $id));
	}
}