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
   
   public function delete_session_data(){
   $this->session->unset_userdata('slots');
     $this->session->unset_userdata('title');
     $this->session->unset_userdata('description');
     $this->session->unset_userdata('participants');
   }
	
	public function index()
	{
	$this->delete_session_data();
     $data = $this->Home_model->get_data_for_main_screen($this->session->userdata('userid'));
     
    $this->load->view('home_view', $data);
		
	}
	
	public function logout(){
	 $this->session->sess_destroy();
     redirect('home');
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
    
    //load detail information about appointment from database
    $appinfo = $this->Home_model->get_appointment_data($id);
    $timeslots = $this->Home_model->get_timeslots_for_appointment($id);
    $data = array (
          'appinfo' =>  $appinfo,
          'timeslots' =>  $timeslots
    );
    
    
                                        
    $this->load->view('appointment/app_view', $data);
    
  }
  
  //function that loads reply view for an appointment
  public function reply($id)
  {
      //load detail information about appointment from database
    $appinfo = $this->Home_model->get_appointment_data($id);
    $timeslots = $this->Home_model->get_timeslots_for_appointment($id);
    $data = array (
          'appinfo' =>  $appinfo,
          'timeslots' =>  $timeslots
    );
    
    
    $data=$this->Home_model->get_data_for_main_screen($this->session->userdata('userid'));
    $this->load->view('appointment/appointment_reply', $data);
  }
  
  public function send_reply()
  {
  error_log('angefangen');
     $data=$this->input->post('selected14');
  error_log('ende');
      $this->load->view('/home_view');
  }
  
  public function cancel($aid){
  $this->load->model('App_model');

    $this->App_model->cancel($aid);
    error_log('hh');
    $this->index();
      
  }
  


 
 
  
  
 


}

