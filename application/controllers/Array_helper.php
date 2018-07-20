<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Array_helper extends CI_Controller
{
    function index() {
        $this->load->helper('array');

        $data['seo'] = array(
            "meta-desc" => "This is page description",
            "meta-key" => "this,is,page,desc",
            "title" => "My Page"
        );
        $this->load->view('arrayhelper_view',$data);
    }
}