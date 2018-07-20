<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_details extends CI_Controller {

    public function index() {
        $this->load->model('user_model');
        $data['users'] = $this->user_model->getUsers();
        $this->load->view('user_details',$data);
    }
}