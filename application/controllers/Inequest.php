<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Request extends CI_Controller {
	function __construct() {
        	parent::__construct();
	}
	public function get_stations(){
		$this->load->model('Station');
		$userId =  $this->session->userdata('userId');
		$stationData = $this->Station->stations($userId);
		return $stationData;
	}
}