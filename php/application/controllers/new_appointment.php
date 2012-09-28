<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class New_appointment extends CI_Controller {


     
  function __construct()
   {
      parent::__construct();
      
      //if user is not logged in, redirect to login page
      $this->load->helper('url');
      session_start();
      if ( !isset($_SESSION['userid']) ) {
         redirect(base_url());
      }
   }

	
	public function index()
	{
		$this->load->view('newapp_general');
		
	}
  
  //function that loads the timeslot menu
  public function newapp_timeslot(){
  $this->load->view('newapp_timeslot');
  
  }
  //function that loads the general new appointment menu 
  public function newapp_general(){
		$this->load->view('newapp_general');
  }
  
  public function save_timeslot_and_clear(){
  //save timeslot in database and clear all inputs to default
  }
  
  public function add_and_finish(){
  //save timeslot in database
  
  //continue to summary
  $this->load->view('newapp_summary');
  }
              
  public function send_request(){
    //check login data
    
    //forward to main screen
    header('Location: ../../main/main_tab/'); 
  }

}

?>
