<?php 
	function public_url($url = ""){
		return base_url('public/'.$url);
	}
	function dev_url(){
		return "http://ivoc.vn";
	}