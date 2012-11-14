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
      $this->session->unset_userdata('duration');
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
  
    public function upcoming($id){
    
    //load detail information about appointment from database
    $appinfo = $this->Home_model->get_appointment_data($id);
    $timeslot = $this->Home_model->get_timeslot($id);
    $data = array (
          'appinfo' =>  $appinfo,
          'timeslot' =>  $timeslot
    );
    
    
                                        
    $this->load->view('appointment/upcoming_app_view', $data);
    
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
    $userid=$this->session->userdata('userid');
   $participants=getOtherParticipants($appinfo->aid, $userid);
    if(empty($participants)){
     $this->load->view('appointment/appointment_reply_single', $data);
     }else {
        $this->load->view('appointment/appointment_reply', $data);
     }
						        
   
    

    
  }
  
  public function send_reply()
  {
    $post=$this->input->post();
    $aid=$post['aid'];
  $number_participants=$this->Home_model->number_participants($aid);
    $number_replies=$this->Home_model->number_replies($aid);
    //update replies
    $this->Home_model->set_replies($aid, $number_replies+1);
     $userid = $this->session->userdata('userid');
     
   
   //if rejected
   if (isset($_POST['reject'])){
    //update participance
     $this->Home_model->set_replied($aid, $userid,2); 
     
   } else { 
    
    
   
    //update timeslot ack 
    $timeslots=$this->Home_model->get_timeslots_for_appointment($aid);
   $replied=false;
    foreach($timeslots as $timeslot){
        $tid=$timeslot['tid'];
        if(isset($post[$tid])){
            $replied=true;
            $this->Home_model->increase_ack_for($tid);
        }
    }
    //did check one slot
    if($replied){
        $this->Home_model->set_replied($aid, $userid,3);
    } else {
    $this->Home_model->set_replied($aid, $userid,2);
    }
    
   }
    $timeslots=$this->Home_model->get_timeslots_for_appointment($aid);
    $number_participants_not_rejected=$this->Home_model->number_participants_not_rejected($aid);
    $found=false;
    error_log('$number_replies+1v'.$number_replies+1 );
    error_log('$number_part '.$number_participants );
    if($number_replies+1==$number_participants){
        foreach ($timeslots as $timeslot){
            if($timeslot['number_of_ack']==$number_participants_not_rejected){
                $found=true;
                 $this->Home_model->set_timeslot($aid,$timeslot['tid']);
                 $this->Home_model->set_scheduled($aid);
                 
               
            }
        }
        if(!$found){
        $this->load->model('App_model');
         $this->App_model->cancel($aid);  
        } 
            
    }
    
     $this->index();
  }
  
  public function send_reply_single()
  {
  
  $tid=$this->input->post('timeslots');
    $aid=$this->input->post('aid');
    
    $this->Home_model->set_timeslot($aid,$tid);
    $this->Home_model->set_scheduled($aid);   
     $data=$this->Home_model->get_data_for_main_screen($this->session->userdata('userid'));
      $this->load->view('/home_view',$data);
  }
  
  public function cancel($aid){
  $this->load->model('App_model');

    $this->App_model->cancel($aid);
    $this->index();
      
  }
  


 
 
  
  
 


}

