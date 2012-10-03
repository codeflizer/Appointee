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
        $app = array (
			'startdate' => $data['startdate'],
			'starttime' => $data['starttime']/*,
			'enddate' => $data['enddate'],
			'endtime' => $data['endtime']*/
		);
		
		if(isset($data['allday'])){
			$app['allday']=TRUE;
		}

		$this->session->set_userdata($app);
		
		if (isset($_POST['finish'])/*=='Next Slot'*/) {
			$this->load->view('appointment/new_app_summary_view');
		} else {
			$this->load->view('appointment/new_slot_view');
		}
	}
	
	 public function submit(){
	
		
		redirect('home'); 
   }
   
} 
