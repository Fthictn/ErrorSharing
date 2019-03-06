<?php

class SignupModel extends CI_Model{

	function uyeKayit($arrKayit=array()){
		$this->db->insert("userlogin", $arrKayit);
		return $this->db->insert_id();
	}

}