<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('errorModel');
		@$this->data['profil'] = $_SESSION["id"];
		$this->data['errors'] = $this->errorModel->errorListe();
	}

	public function index()
	{
		$this->load->view('homepage',$this->data);
	}


}
