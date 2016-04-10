<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
* Login
*/
class Login extends MY_Controller{
	public function index(){
        $query=$this->db->query("SELECT * FROM admin");
        $data=$query->result_array();
        echo "<pre>";
        print_r($data);
        echo "</pre>";
	}
	public function record(){
        $this->db->select("userid, email, last_name first_name");
        $query=$this->db->get("admin");
        $data=$query->result_array();
        echo "<pre>";
        print_r($data);
        echo "</pre>";
	}
}