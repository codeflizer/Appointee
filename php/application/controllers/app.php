<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class App extends CI_Controller {


  public function __construct()
   {
      parent::__construct();
      $this->load->model('App_model');
      $this->load->model('Home_model');
      $this->load->model('Contact_model');
    
 $userid = $this->session->userdata('userid');
      if($userid<1){
      redirect('login');
      }
 
      
   }
   
   public function index(){
   
    $data =  $this->session->all_userdata();
     $this->load->view('appointment/new_app_view',$data);
    }
   
   public function contact($par){ 
        $user = $this->Contact_model->get_contact($par);
        $data['par']=$user->first_name.' '.$user->last_name;
         $this->load->view('appointment/new_app_view',$data);
   }
   
   public function edit(){
   $data =  $this->session->all_userdata();
 
   $this->load->view('appointment/edit_app_view',$data);
   
   }
   
   public function save(){
   
         $data = $this->input->post();
		$app = array (
			'title' => $data['title'],
			'description' => $data['description'],
			'duration' => $data['duration'],
			'participants' => $data['participants']
		);
		
		//error_log($data['title']);
		//error_log($data['description']);
		//error_log($data['participants'][1]);
		//error_log($data['participants'][0]);
		//error_log($data['participants'][2]);

		//validate data
		$this->form_validation->set_rules('title', 'Title', 'trim|required');
		$this->form_validation->set_rules('description', 'Description', 'trim|required');
	
	    

		if ($this->form_validation->run() == FALSE )
		{
		
		    $data = $this->input->post();
			$this->load->view('appointment/edit_app_view',$data);
		}
		else
		{
		$this->session->set_userdata($app);
		 $data =  $this->session->all_userdata();
		$this->load->view('appointment/new_app_summary_view',$data);  
		}  
   }
   
   public function slot(){ 
        $data = $this->input->post();
		$app = array (
			'title' => $data['title'],
			'description' => $data['description'],
			'duration' => $data['duration'],
			'participants' => $data['participants']
		);
		
		//error_log($data['title']);
		//error_log($data['description']);
		//error_log($data['participants'][1]);
		//error_log($data['participants'][0]);
		//error_log($data['participants'][2]);

		//validate data
		$this->form_validation->set_rules('title', 'Title', 'trim|required');
		$this->form_validation->set_rules('description', 'Description', 'trim|required');
	
	    

		if ($this->form_validation->run() == FALSE )
		{
		
		    $data = $this->input->post();
			$this->load->view('appointment/new_app_view',$data);
		}
		else
		{
		$this->session->set_userdata($app);
		$this->load->view('appointment/new_slot_view');  
		}
   }
   
   public function slot2(){
		$this->load->view('appointment/new_slot_view');  
   }
   
   public function new_slot() {

		$data = $this->input->post();
	
        $slot = array (
			'startdate' => $data['startdate'],
			'starttime' => $data['starttime'],
			'enddate' => $data['enddate'],
			'endtime' => $data['endtime'],
			'location' => $data['location']
		);
		
		if(isset($data['allday'])){
			$slot['allday']=TRUE;
		}
		
		//validate data
		$this->form_validation->set_rules('startdate', 'Start Day', 'trim|required');
		$this->form_validation->set_rules('starttime', 'Start Time', 'trim|required');

		if ($this->form_validation->run() == FALSE)
		{
		
		    $data = $this->input->post();
			$this->load->view('appointment/new_slot_view',$data);
		}
		else
		{
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
		
		
		
		
	}
	
	 public function submit(){
	    $appointment =  $this->session->all_userdata();

	 $this->App_model->create_appointment($appointment);
	   
     $data = $this->Home_model->get_data_for_main_screen($this->session->userdata('userid')); 
     $data['title']=$appointment['title'];
     $data['partic']=$appointment['participants'];
     	  
   

    $this->load->view('home_view_popup', $data);
   }
   
   public function summary(){

	    $data =  $this->session->all_userdata();	
		$this->load->view('appointment/new_app_summary_view',$data);
		
   }
   
   public function editslot($id){

	    //get slot
	    
	    
	   $slots = $this->session->userdata('slots');
	   
	   $slot= $slots[$id];
	   $slot['id']=$id;
	    
	    //load view
		$this->load->view('appointment/edit_slot_view',$slot);
		
   }
   
    public function save_edit(){
    
    $data = $this->input->post();
	
        $slot = array (
			'startdate' => $data['startdate'],
			'starttime' => $data['starttime'],
			'enddate' => $data['enddate'],
			'endtime' => $data['endtime']
		);
		
		if(isset($data['allday'])){
			$slot['allday']=TRUE;
		}
		
		//validate data
		$this->form_validation->set_rules('startdate', 'Day', 'trim|required');
		$this->form_validation->set_rules('starttime', 'Time', 'trim|required');

		if ($this->form_validation->run() == FALSE)
		{
		
		    $data = $this->input->post();
			$this->load->view('appointment/edit_slot_view',$data);
		}
		else
		{
		   $slots[$data['id']]=$slot;

		    $this->session->unset_userdata('slots');
		    $this->session->set_userdata('slots', $slots);
		    $data =  $this->session->all_userdata();
		    $this->load->view('appointment/new_app_summary_view',$data);
		
	
		
		}
   }
   
}
