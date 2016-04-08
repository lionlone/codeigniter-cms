<?php 
	if (!defined('BASEPATH')) exit('No direct script access allowed');
	/**
	* Page home
	*/

	class Admin extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->helper('admin');
		}
	    public function index(){
			$this->action();
	    }
	    public function action(){
	    	$data['manage'] = $this->uri->rsegment(3);
	    	if (empty($data['manage'])) {
	    		$data['manage'] = "home";
	    	}
			$this->load->view('admin/layout', $data);
	    }
    }