<?php 
/**
* My controller
*/
class MY_Controller extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$controller = $this->uri->segment(1);
		echo $controller;
	}
	
}