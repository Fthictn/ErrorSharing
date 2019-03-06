<?php

class ErrorModel extends CI_Model{

	function errorKayit($arrKayit=array()){
		$this->db->insert("errorpost", $arrKayit);
		return $this->db->insert_id();
	}

	function errorListe(){
		$this->db->select('userlogin.name,userlogin.lastname,errorpost.postId,errorpost.userId,errorpost.topic,errorpost.error,errorpost.solution,errorpost.postLike,errorpost.postDislike');
		$this->db->join('errorpost','errorpost.userId=userlogin.id');
		$this->db->order_by('errorpost.postId','desc');
		$sonuc = $this->db->get('userlogin');
		return ($sonuc->num_rows() > 0) ? $sonuc->result() : FALSE;
	}

	function myErrors($id){
		$this->db->where('userId',$id);
		$this->db->order_by('postId','desc');
		$sonuc = $this->db->get('errorpost');
		return ($sonuc->num_rows() > 0) ? $sonuc->result() : FALSE;
	}

	function allErrors(){
		$this->db->order_by('postId','desc');
		$sonuc = $this->db->get('errorpost');
		return ($sonuc->num_rows() > 0) ? $sonuc->result() : FALSE;
	}

	function errorGuncelle($arrKayit = array(),$id){
		$this->db->where('postId',$id);
		$id = $this->db->update('errorpost',$arrKayit);
		return $id;
	}

	function errorSil($id){
		$this->db->where('postId',$id);
		$this->db->delete("errorpost");
	}

	function members(){
		$sonuc = $this->db->get('userlogin');
		return ($sonuc->num_rows() > 0) ? $sonuc->result() : FALSE;
	}

	function memberSil($id){
		$this->db->where('id',$id);
		$this->db->delete("userlogin");
	}


}