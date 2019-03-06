<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Members extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('errorModel');
        $id = $_SESSION["id"];
        $this->data['members'] = $this->errorModel->members();
    }

    public function index()
    {
        $this->load->view('members',$this->data);
    }

}
