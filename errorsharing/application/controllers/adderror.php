<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adderror extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('errorModel');
    }

    public function index()
    {
        $this->load->view('adderror');
    }

    public function errorEkle()
    {
    	$subject = $this->input->post('subject');
		$problem = $this->input->post('problem');
		$answer = $this->input->post('answer');
		$user_id = $this->input->post('user_id');

		$error = array('topic' 	=> $subject,
					   'error' => $problem,
					   'solution' => $answer,
					   'userId' => $user_id);

		$ekle = $this->errorModel->errorKayit($error);

		echo $ekle  ? "ok" : "hata";
    }

    function error_guncelle($id,$topic,$problem,$answer){

        $error = array('topic'  => $topic,
                       'error' => $problem,
                       'solution' => $answer);
        
        $ekle = $this->errorModel->errorGuncelle($error,$id);

        echo $ekle  ? "ok" : "hata";
    }

    function error_sil($id){
        $this->errorModel->errorSil($id);
    }

    function member_sil($id){
        $this->errorModel->memberSil($id);
    }


}
