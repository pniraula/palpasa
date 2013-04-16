<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Site extends CI_Controller {
	public function index()
	{
		$this->home();
	}
	public function home(){
		$data['title'] = "Home";
		$this->load->model('Test');
		$data['content'] = $this->Test->show();
		$this->load->view('view_header.php',$data);
		$this->load->view('view_home.php');
		$this->load->view('view_footer.php');
	}
}