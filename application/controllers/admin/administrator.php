<?php 
	if (!defined('BASEPATH')) exit('No direct script access allowed');
	/**
	* Page administrator
	*/
	class Administrator extends MY_Controller {
		public $data = array();
		function __construct(){
			parent::__construct();
			$this->load->model('admin/administrator_model');
			$this->load->library('breadcrumbs');
		}
	    function index(){
	    	$this->display();
	    }
	    function display($data = array()){
	    	if ( $this->uri->rsegment(2) == 'display') {
	    		return FALSE;
	    	}
	    	$data['tpl'] = $this->uri->rsegment(2);
			$this->load->view('admin/layout', $data);
	    }
	    function listuser(){

			$field = array('email', 'first_name', 'last_name', 'username', 'title');
			$table = 'admin';
			$table_join['groups_user'] = array(
				'col' => 'group_id',
				'join_type' => 'left'
			);
			$data['list'] = $this->administrator_model->join_table($field, $table_join, $table);
			$this->display($data);
			//pre($data);
	    }
	    function active(){
	    	echo display_breadcrumb($this->uri->rsegment(2));
	    }
    }