<?php
/**
* 
*/
class Administrator_model extends MY_Model{
	
	function __construct(){
		parent::__construct();
	}
	var $table = "admin";
	var $key = "userid";
}