<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Site extends CI_Controller {
	public function index()
	{
		$this->load->view('view_index.php');
		$this->load->view('view_footer.php');
	}
	public function home($name){
		if(isset($name))
			$themeName = $name;
		else
		$themeName = "grey";
		$data['title'] = "Home";
		$data['theme'] = $themeName;
		$this->load->view('view_header.php');
		$this->load->view('view_navigation.php');
		$this->load->view('view_home.php');
		$this->load->view('view_footer.php');
	}
}
