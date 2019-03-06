<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('signupModel');
    }

    public function index()
    {
        $this->load->view('signup');
    }

    function kayitOl()
    {
        $ad    = $this->input->post('name');
        $soyad = $this->input->post('surname');
        $meslek  = $this->input->post('job');
        $email = $this->input->post('email');
        $parola = $this->input->post('password');

        $uyeler = array('name' => $ad,
            'lastname' => $soyad,
            'job' => $meslek,
            'email'   => $email,
            'password' => $parola);

        $ekle = $this->signupModel->uyeKayit($uyeler);

        echo $ekle  ? "ok" : "hata";
    }

}
