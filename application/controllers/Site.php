<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Site extends CI_Controller {
	public function index()
	{
		parent::__construct();
		
		$this->load->library('session');
		if(is_logged_in()){
			$this->home();
		}else{
			$this->load->view('view_index.php');
			$this->load->view('view_footer.php');
		}
	}
	public function home(){
		if(is_logged_in()){
			$this->load->model('Station');
			$themeName = "grey";
			$userId =  $this->session->userdata('userId');
			$stationData = $this->Station->stations($userId);
			$data['title'] = "Home";
			$data['theme'] = $themeName;
			$data['userId'] = $userId;
			$data['stations'] = $stationData;
			$this->load->view('view_header.php');
			$this->load->view('view_navigation.php');
			$this->load->view('view_home.php', $data);
			$this->load->view('view_footer.php');
		}else{
			redirect('', 'location'); 
		}
	}
}
