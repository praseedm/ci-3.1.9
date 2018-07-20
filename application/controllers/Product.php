<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller
{
    function index($arg='') {
        echo '<h3>'.$arg.'</h3>';
        $this->load->view('product_view');
    }
}