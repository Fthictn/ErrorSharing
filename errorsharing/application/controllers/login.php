<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('errorModel');
		$this->data['errors'] = $this->errorModel->errorListe();
	}

	public function index()
	{
		$this->load->view('login',$this->data);
	}

	function girisYap(){
		$email = $this->input->post('email');
		$parola = $this->input->post('password');

		$this->db->where('email',$email);
		$this->db->where('password',$parola);

		$this->db->limit(1);
		$uye=$this->db->get('userlogin');
		if($uye->num_rows() == 1){
			$_SESSION['id'] = $uye->row()->id;
			$_SESSION['name'] = $uye->row()->name;
			$_SESSION['job'] = $uye->row()->job;
			$_SESSION['lastname'] = $uye->row()->lastname;
			$_SESSION['email'] = $uye->row()->email;
			$_SESSION['password'] = $uye->row()->password;
			echo "ok";
		}else{
			echo "hata";
		}
	}

	function cikisYap(){
		session_destroy();
		redirect('');
	}
}