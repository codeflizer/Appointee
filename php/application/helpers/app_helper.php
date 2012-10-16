<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('includeCss'))
{
	function includeCss()
	{

	    $ci =& get_instance();
        $ci->load->helper('url');
		
	echo '<link rel="stylesheet"  type="text/css"  href="'.base_url().'asset/jquery/jquery.mobile-1.2.0.css" />
	<link rel="stylesheet"  type="text/css" href="'.base_url().'asset/style.css" />
	<script src="'.base_url().'asset/jquery/jquery-1.7.1.min.js"></script>
	<script src="'.base_url().'asset/jquery/jquery.mobile-1.2.0.js"></script>
	<style>
		h5 { margin-top:0px ! important;}
		a p { margin-bottom:0px ! important;}

		.ui-li-thumb, .ui-li-icon {
			left: 1px;
			max-height: 50px; 
			max-width: 50px;
			position: absolute;
			top: 0;
		}

		.header_text {
			text-align: center; 
			margin-top: 5px;
		}

		.ui-field-contain, fieldset.ui-field-contain {
			border-width: 0px ! important;
		}
		.loginform #textinput8, .loginform #textinput9, .loginform .ui-checkbox {
			margin-top: 10px ! important;
		}

		.contact_header {
			margin-top: 30px;
		}

		.contact_header h3{
			margin: 20px 0 0 40px;
		}
		.contact_header ul{
			margin: 80px 0 0 0 ! important;
		}

		/** icons **/

		.ui-icon-appointee-home {
			background-image: url("images/iconic/white/home_12x12.png");
			background-position:3px;
		}

		.ui-icon-appointee-history {
			background-image: url("images/iconic/white/list_12x11.png");
			background-position:3px;
		}

		.ui-icon-appointee-contacts {
			background-image: url("images/iconic/white/user_9x12.png");
			background-position:4px 3px;
		}

		.ui-icon-appointee-plus {
			background-image: url("images/iconic/white/plus_alt_12x12.png");
			background-position:3px;
		}

		.ui-icon-appointee-edit {
			background-image: url("images/iconic/white/pen_alt_stroke_12x12.png");
			background-position:3px;
		}
	</style>
	
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


