<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Settings extends CI_Controller {

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
    //load MainModel and get data for main menu
    $this->load->model('Settings_model');
    
    //load view with data
		$this->load->view('settings_general');
		
	}
  
  
  public function logout(){
      //logout
      session_destroy();
      //$this->load->helper('userid');
      redirect(base_url()); 
  }
  
  public function password_menu(){
      $this->load->view('settings_password');
  }
  
    public function personal_menu(){
      $this->load->view('settings_personal');
  }
  
    public function email_menu(){
      $this->load->view('settings_email');
  }
  
    public function delete_menu(){
      $this->load->view('settings_delete');
  }
  
}
?>
