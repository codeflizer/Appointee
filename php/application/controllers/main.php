<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
  
    //constructor checks, if user is logged in
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
 
    //redirect to main tab
    $this->main_tab();
		
	}
  
  //function that loads detail view of an appointment
  public function appointment_details(){
    //load detail information about appointment from database
    
    //present detail view 
    $this->load->view('apppointment_detail', $data);
    
  }
  

  
  //functions to navigate through tabs for home, history and contacts
  public function history_tab(){
    //get data from the model
    $this->load->model('Main_model');
    $data = $this->Main_model->get_data_for_history($_SESSION['userid']);
    foreach ($data['appointments'] as $appointment)
    
    array_multisort($datum, SORT_ASC, $termin);
    //load view for history
    $this->load->view('history', $data);
  }
  
  public function contacts_tab(){
  
    //get Data from the model...
    $this->load->model('Main_model');
    $data = $this->Main_model->get_contacts();
  
    //load view for contacts_general
    $this->load->view('contacts_general', $data);
  }
  
  public function main_tab(){
  
    //get Data from the model
    $this->load->model('Main_model');
    $data = $this->Main_model->get_data_for_main_screen($_SESSION['userid']);
    //load view for main
    $this->load->view('main', $data);
  }
  
  public function add_contact(){
      //load view
      $this->load->view('main', $data);
  }
  
  public function contact_detail(){
  
      //load view
      $this->load->view('contacts_detail');  
  }
  
  public function edit_contact(){
      
      $this->load->view('contacts_edit');  
  }


}

?>
