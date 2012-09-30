<?php
if (!defined('BASEPATH'))
	exit ('No direct script access allowed');

class New_appointment extends CI_Controller {

	function __construct() {
		parent :: __construct();
		$this->load->library('session');

		//if user is not logged in, redirect to login page
		if (isset ($_SESSION['userid'])) {
			redirect('main');
		}

	}

	public function start() {
		$this->load->view('newapp_general');

	}

	public function create() {

		$data = $this->input->post();

		$app = array (
			'title' => $data['title'],
			'description' => $data['description'],
			'duration' => $data['duration'],
			'participants' => $data['participants']
		);

		//verify data

		$this->session->set_userdata($app);
		$this->load->view('newapp_timeslot');

		//$d['fick']=$this->session->userdata('title');
		// $this->load->view('test',$d);

		//$this->output->enable_profiler(TRUE);
 
	}

	//function that loads the timeslot menu
	public function newapp_timeslot() {
	

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

		$p['fick']=isset($_POST['next']);
		$p['dich']=isset($_POST['finish']);
		//$this->load->view('test',$p);
		
		if ($_POST['next']=='Next Slot') {
			$this->load->view('newapp_timeslot');
		} else {
			$this->load->view('newapp_summary');
		}
	}



	public function send_request() {

		//$this->load->model('New_appointment_model');
		//$data = $this->session->all_userdata();
		//$this->New_appointment_model->create_Appointment($data);

	//check login data

	//forward to main screen
	//header('Location: ../../main/main_tab/');
	
	}

}
?>
