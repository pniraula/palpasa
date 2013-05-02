<?php
	/**
	 * This model extracts user related information such as login, user name.
	 * This model is also used in first time user sign up
	 */
	class User extends CI_Model {
		
		function __construct() {
        	parent::__construct();
		}
		public function signIn($username, $password){
			$data =array('email'=>'');
			$query = $this->db->query("select * from users where USER_ID = '$username' and PASSWORD ='$password'");
			foreach($query->result() as $row)
			{
			   $data['email'] = $row->USER_ID;
			   $userInfo =  array(
                   'email'     => $row->USER_ID,
                   'loggedIn' => TRUE
               );
			   $this->session->set_userdata($userInfo);
			}
			return $data;
		}
		public function signOut(){
			 logOut();
			 $this->session->set_userdata(array('email' => '', 'loggedIn' => ''));
			
		}
	}
	
?>