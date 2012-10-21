<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class History extends CI_Controller {
  
    //constructor checks, if user is logged in
   function __construct()
   {
      parent::__construct();
      $this->load->model('Home_model');
      $userid = $this->session->userdata('userid');
      if($userid<1){
      redirect('login');
      }

   }
	
	public function index()
	{
       
         //get data from the model
        $data = $this->Home_model->get_data_for_history($this->session->userdata('userid'));
        //foreach ($data['appointments'] as $appointment)
    
           // array_multisort($datum, SORT_ASC, $termin);
            
            //load view for history
            $this->load->view('history/history_view', $data);
	}
	
 
  //function that loads detail view of an appointment
  public function appointment($id){
  
     $timeslot = $this->Home_model->get_first_timeslot($id);
    
    //load detail information about appointment from database
    $data = $this->Home_model->get_appointment_data($id);

     $data = array (
          'appinfo' =>  $data,
          'timeslot' =>  $timeslot,
          'aid'=> $id
    );
    
     
    
    $this->load->view('history/app_view', $data);
    
  }
  


 
 
  
  
 


}

