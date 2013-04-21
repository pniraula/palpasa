<?php
	class Test extends CI_Model {
		
		function __construct() {
        	parent::__construct();
			$this->load->database();
		}
		public function show($limit){
			$query = $this->db->query("select * from song LIMIT $limit");
			foreach($query->result() as $row)
			{
			  echo $row->SONG_NAME.'<br>';
			}
		}
	}
	
?>