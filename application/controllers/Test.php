<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
    public function index(){
        $this->load->model('my_model');
        $fn = $this->my_model->firstName();
        echo($fn);
    }
}