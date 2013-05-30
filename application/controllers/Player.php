<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Player extends CI_Controller {
	function __construct() {
        	parent::__construct();
	}
	public function getSong($id){
		if(is_logged_in()){
			$this->load->library('user_agent');
			$key = $this->session->userdata('key');
			echo $this->agent->referrer();
			if($this->agent->is_referral()){
				if($key){
					$song = decode($id, $key);
					$this->session->unset_userdata('key');
					header("Location: ".$song);
				}else{
					echo "Forbidden";
				}
			}else{
				echo "Forbidden";
			}
		}
	}
}
?>