<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('errorModel');
        $id = $_SESSION["id"];
        if($_SESSION["name"] == "admin")
        {
            $this->data['myerrors'] = $this->errorModel->allErrors();
        }
        else
        {
            $this->data['myerrors'] = $this->errorModel->myErrors($id);   
        }
    }

    public function index()
    {
        $this->load->view('profile',$this->data);
    }

}
