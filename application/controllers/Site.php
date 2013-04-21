<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Site extends CI_Controller {
	public function index()
	{
		$this->home("green");
	}
	public function home($name){
		if(isset($name))
			$themeName = $name;
		else
			$themeName = "dark_red";
		$data['title'] = "Home";
		$data['theme'] = new Theme($themeName);
		$this->load->view('view_header.php');
		$this->load->view('view_navigation.php');
		$this->load->view('view_home.php');
		$this->load->view('view_footer.php');
		$this->load->view('css_songInfoBar.php', $data);
		$this->load->view('css_main.php', $data);
	}
}
class Theme{
		public $name;
		public $bgColor;
		function __construct($themeName) {
			$this->name = $themeName;
			$this->bgColor = new BgColor($themeName);
   		}
}
class BgColor{
		public $songInfoBar;
		public $songCard;
		public $controllerWrapper;
		function __construct($themeName) {
       		if($themeName=='dark_blue'){
       			$this->songInfoBar = '#000022';
				$this->songCard = '#000033';
				$this->controllerWrapper='#000011';
       		}
			if($themeName=='dark_red'){
       			$this->songInfoBar = '#220000';
				$this->songCard = '#330000';
				$this->controllerWrapper='#110000';
       		}
			if($themeName=='light_blue'){
       			$this->songInfoBar = '#009adb';
				$this->songCard = '#10a9e6';
				$this->controllerWrapper='#001a24';
       		}
			if($themeName=='mango'){
       			$this->songInfoBar = '#f04800';
				$this->songCard = '#ff570f';
				$this->controllerWrapper='#732200';
       		}
			if($themeName=='lime'){
       			$this->songInfoBar = '#319400';
				$this->songCard = '#40a110';
				$this->controllerWrapper='#123600';
       		}
			if($themeName=='green'){
       			$this->songInfoBar = '#194006';
				$this->songCard = '#274d15';
				$this->controllerWrapper='#0b1c03';
       		}
   		}
}
