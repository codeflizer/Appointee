<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('includeCss'))
{
	function includeCss()
	{

	    $ci =& get_instance();
        $ci->load->helper('url');
		
	echo '<link rel="stylesheet"  type="text/css"  href="'.base_url().'asset/green/Appointee.min.css" />
	<link rel="stylesheet"  type="text/css"  href="'.base_url().'asset/green/jquery.mobile.structure-1.2.0.min.css" />
	<link rel="stylesheet"  type="text/css" href="'.base_url().'asset/style.css" />
	<script src="'.base_url().'asset/jquery/jquery-1.7.1.min.js"></script>
	<script src="'.base_url().'asset/jquery/jquery.mobile-1.2.0.js"></script>
	<script src="<?=base_url()?>asset/autocomplete/jqm.autoComplete-1.4.3-min.js"></script>
	
	';
	
	
	}
	
	 function getName($uid){
	 
	 
    $ci =& get_instance();
     $query = $ci->db->query('SELECT first_name, last_name 
                                                FROM users u 
                                                WHERE uid='.$uid
                                        );
     
     $row = $query->row(); 
       $name= $row->first_name.' '.$row->last_name;
       return $name;  
    }
    
    function getAuthor($aid){
	 
	 
    $ci =& get_instance();
     $query = $ci->db->query('SELECT first_name, last_name 
                                                FROM appointments a, users u 
                                                WHERE a.aid='.$aid.'
                                                AND u.uid=a.author'
                                                
                                        );
     
     $row = $query->row(); 
       $name= $row->first_name.' '.$row->last_name;
       return $name;  
    }
    
    function getParticipants($aid, $userid){
    $ci =& get_instance();
                                                
    $query ='SELECT u.first_name, u.last_name 
            FROM  users u, participants p
            WHERE p.aid='.$aid.'
            AND p.uid = u.uid
            AND p.uid<>'.$userid.'';
    $participants = $ci->db->query($query  );
                                                
                                      
                                                
    $participants = $participants->result_array();
    return $participants;
     
        
      
      }
      
    
    
}


