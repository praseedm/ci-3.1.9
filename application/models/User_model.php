<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
    function getUsers() {
        $this->load->database();
//        $this->load->helper('html');
//        echo br(3); // 3 br tags
        //$this->load->library('form_validation'); // Using library
//        $this->load->helper('common_helper'); // custom helper
//        echo add(4,2);
        $query = $this->db->get("users_test"); // Use query builder
        //$query = $this->db->get_where("users_test", array('id'=>'2'));
        return ($query->result_array());
    }
}