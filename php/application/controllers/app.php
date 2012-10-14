<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class App extends CI_Controller {


  public function __construct()
   {
      parent::__construct();
      $this->load->model('App_model');
    
 $userid = $this->session->userdata('userid');
      if($userid<1){
      redirect('login');
      }
 
      
   }
   
   public function index(){
 
   $this->load->view('appointment/new_app_view');
   
   }
   
   public function edit(){
   $data =  $this->session->all_userdata();
 
   $this->load->view('appointment/edit_app_view',$data);
   
   }
   
   public function save(){
 
   $this->load->view('appointment/new_app_summary_view');
   
   }
   
   public function slot(){
        $data = $this->input->post();
		$app = array (
			'title' => $data['title'],
			'description' => $data['description'],
			'duration' => $data['duration'],
			'participants' => $data['participants']
		);

		//verify data

		$this->session->set_userdata($app);
		$this->load->view('appointment/new_slot_view');  
   }
   
   public function slot2(){
		$this->load->view('appointment/new_slot_view');  
   }
   
   public function new_slot() {

		$data = $this->input->post();
	
        $slot = array (
			'startdate' => $data['startdate'],
			'starttime' => $data['starttime']/*,
			'enddate' => $data['enddate'],
			'endtime' => $data['endtime']*/
		);
		
		if(isset($data['allday'])){
			$slot['allday']=TRUE;
		}
		
		if(($slots=$this->session->userdata('slots'))==FALSE){
		$slots= array();
		}
		array_push($slots, $slot);

		$this->session->unset_userdata('slots');
		$this->session->set_userdata('slots', $slots);

		
		if (isset($_POST['finish'])/*=='Next Slot'*/) {
		  $data =  $this->session->all_userdata();
		
			$this->load->view('appointment/new_app_summary_view',$data);
		} else {
			$this->load->view('appointment/new_slot_view');
		}
	}
	
	 public function submit(){
	
		
		redirect('home'); 
   }
   
} 
