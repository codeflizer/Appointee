<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
  
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
     $data = $this->Home_model->get_data_for_main_screen($this->session->userdata('userid'));
    $this->load->view('home_view', $data);
		
	}
	
	public function logout(){
	 $this->session->sess_destroy();
     redirect(login);
    }
	
     public function history(){
  
        
         //get data from the model
        $data = $this->Home_model->get_data_for_history($this->session->userdata('userid'));
        //foreach ($data['appointments'] as $appointment)
    
           // array_multisort($datum, SORT_ASC, $termin);
            
            //load view for history
            $this->load->view('history/history_view', $data);
            
            
  }
  
 
  //function that loads detail view of an appointment
  public function appointment($id){
  error_log($id);
    
    //load detail information about appointment from database
    $data = $this->Home_model->get_appointment_data($id);
    
    
    $this->load->view('appointment/app_view', $data);
    
  }
  


 
 
  
  
 


}

