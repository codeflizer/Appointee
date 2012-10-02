<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('includeCss'))
{
	function includeCss()
	{

	    $ci =& get_instance();
        $ci->load->helper('url');
		
	echo '<link rel="stylesheet"  type="text/css"  href="'.base_url().'asset/jquery.mobile-1.1.1.css" />
	<script src="'.base_url().'asset/jquery-1.7.1.min.js"></script>
	<script src="'.base_url().'asset/jquery.mobile-1.1.1.js"></script>
	<link rel="stylesheet"  type="text/css" href="'.base_url().'asset/style.css" />';
	
	
	}
}


