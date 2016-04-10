<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| BREADCRUMB CONFIG
| -------------------------------------------------------------------
| This file will contain some breadcrumbs' settings.
|
| $config['crumb_divider']		The string used to divide the crumbs
| $config['tag_open'] 			The opening tag for breadcrumb's holder.
| $config['tag_close'] 			The closing tag for breadcrumb's holder.
| $config['crumb_open'] 		The opening tag for breadcrumb's holder.
| $config['crumb_close'] 		The closing tag for breadcrumb's holder.
|
| Defaults provided for twitter bootstrap 2.0
*/
$config['crumb_home'] = '<li class="crumb-icon"><a href="" title=""><span class="glyphicon glyphicon-home"></span></a></li>';
$config['tag_open'] = '<ol class="breadcrumb">';
$config['tag_close'] = '</ol>';
$config['crumb_open'] = '<li>';
$config['crumb_last_open'] = '<li class="crumb-icon">';
$config['crumb_close'] = '</li>';


/* End of file breadcrumbs.php */
/* Location: ./application/config/breadcrumbs.php */
/*<ol class="breadcrumb">
    
    
   <li>
       <a href="">Tài khoản</a>
   </li>
   <li>
       <a href="">Ban quản trị</a>
   </li>
   <li class="current">
       <a href="">Danh sách</a>
   </li>
</ol>*/