<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
* My controller
*/
class MY_Controller extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$controller = $this->uri->rsegment(1);
		switch ($controller) {
			case 'administrator':
				//Xu ly trang admin
				$this->load->helper('admin');
				break;
			
			default:
				
				break;
		}
	}
}