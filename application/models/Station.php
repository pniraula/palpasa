<?php
	class Station extends CI_Model {
		function __construct() {
        	parent::__construct();
			$this->load->library('session');
		}
		public function stations($user){
			$query = $this->db->query("select * from station where USER_ID = '$user' ORDER BY STATION_NAME ASC");
			$rData = array();
			foreach($query->result() as $row)
			{
			  array_push($rData, array('name'=>$row->STATION_NAME, 'id'=>$row->STATION_ID));
			}
			return $rData;
		}
		public function add_station($name, $id, $type){
			$userId = $this->session->userdata('userId');
			$values = array('STATION_ID' => null,
							'USER_ID'=> $userId, 
							'STATION_NAME'=>$name,
							'STATION_TYPE'=>$type,
							'TYPE_ID'=>$id);
			//$sql = "INSERT INTO station VALUES(,'$this->db->escape($userId)',  '$this->db->escape($name)', '$this->db->escape($type)', '$this->db->escape($id)')";
			$this->db->insert('station',$values);
			echo $this->db->insert_id();
		}
		public function remove_station($id){
			$sql = "DELETE FROM station WHERE STATION_ID=?";
			$this->db->query($sql, $id);
		}
		public function song_list($id){
			$query = $this->db->query("select SONG_ID from song where 
										ARTIST_ID = (SELECT TYPE_ID FROM STATION WHERE STATION_ID = '$id')
										AND SONG_ID NOT IN (SELECT SONG_ID FROM likes WHERE STATION_ID ='$id' and LIKE_VAL='0')");
			$rData = array();
			foreach($query->result() as $row)
			{
			  array_push($rData, $row->SONG_ID);
			}
			return $rData;
		}
		public function fav_list(){
			$userId = $this->session->userdata('userId');
			$query = $this->db->query("select SONG_ID from likes where USER_ID = '$userId' and LIKE_VAL = '2'");
			$rData = array();
			foreach($query->result() as $row)
			{
			  array_push($rData, $row->SONG_ID);
			}
			return $rData; 
		}
		public function song_detail($id){
			$query = $this->db->query("select img.IMG_LOCATION, sg.LOCATION, sg. LYRICS, sg.SONG_NAME, art.ARTIST_NAME,art.ABOUT, alb.ALBUM_NAME, lk.LIKE_VAL
										from song sg INNER JOIN artists art ON sg.ARTIST_ID = art.ARTIST_ID 
										INNER JOIN album alb ON sg.ALBUM_ID=alb.ALBUM_ID 
										LEFT JOIN likes lk ON sg.SONG_ID = lk.SONG_ID
										LEFT JOIN images img ON sg.ARTIST_ID = img.ARTIST_ID
										where sg.SONG_ID= '$id'");
			$rData = array();
			foreach($query->result() as $row)
			{
			  $this->session->set_userdata('key', generateRandomString());
			  array_push($rData, array('url'=>encode('http://localhost/mob/'.$row->LOCATION, $this->session->userdata('key')), 
			  							'name'=>$row->SONG_NAME,
										'album'=>$row->ALBUM_NAME,
										'artist'=>$row->ARTIST_NAME,
										'about' =>$row->ABOUT,
										'image' =>$row->IMG_LOCATION,
										'rate'=>$row->LIKE_VAL, 
										'lyrics'=>$row->LYRICS));
			}
			return $rData;
		}
		
		public function rate_song($val, $station, $id){
			$userId = $this->session->userdata('userId');
			$query = $this->db->query("SELECT SONG_ID FROM likes WHERE SONG_ID='$id' and STATION_ID ='$station'");
			$res = $query->result();
			if(sizeof($res)>0){
				$q = "UPDATE likes SET LIKE_VAL = $val where STATION_ID = '$station' and SONG_Id = '$id'";
				$this->db->query($q);
			}else{
				$q = "INSERT INTO likes VALUES($userId, $station, $id, $val)";
				$this->db->query($q);
			}
		}
	}
	
?>