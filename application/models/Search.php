<?php
	class Search extends CI_Model {
		function __construct() {
        	parent::__construct();
		}
		public function search($val){
			//get searched genre
			$query = $this->db->query("select GENRE_ID, GENRE_NAME from genre where GENRE_NAME like '%$val%' ORDER BY GENRE_NAME ASC LIMIT 3");
			$rData = array();
			foreach($query->result() as $row)
			{
			  array_push($rData, array('name'=>$row->GENRE_NAME, 'id'=>$row->GENRE_ID, 'type'=>'genre'));
			}
			
			//get searched artist
			$query = $this->db->query("select ARTIST_ID, ARTIST_NAME from artists where ARTIST_NAME like '%$val%' ORDER BY ARTIST_NAME ASC LIMIT 4");
			foreach($query->result() as $row)
			{
			  array_push($rData, array('name'=>$row->ARTIST_NAME, 'id'=>$row->ARTIST_ID, 'type'=>'artist'));
			}
			return $rData;
		}
	}
	
?>