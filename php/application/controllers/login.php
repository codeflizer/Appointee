<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {


  public function __construct()
   {
      parent::__construct();
      $this->load->model('Login_model');
      
      $userid = $this->session->userdata('userid');
     
      if($userid!=0){
      redirect('home');
      }    
   }
   
	 public function index()
	 { 
	   	$this->load->view('login_view');
	 }
	 
	public function verify_credentials(){

       //else, validate user data
      $this->load->model('Login_model');
      $userid = $this->Login_model->check_Login_Data($this->input->post('mail'), $this->input->post('password'));
      
      //if user data is valid, initialize session and forward to main page
      if ($userid >= 1) {
            $this->session->set_userdata('userid',$userid);      
      } 
          redirect('home');
      }   
      
       public function register()
	 { 
	   	$this->load->view('register');
	 }    
}
