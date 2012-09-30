<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

   //constructor that starts the session
   public function __construct()
   {
      parent::__construct();
      $this->load->library('session');
      session_start();
      if (isset($_SESSION['userid']) ) {
         redirect('main');
      }
      
   }

   //index to be called when app starts
	 public function index()
	 { 
	   	$this->load->view('login');
	 }


   //perform login --> validates user data and starts session
	 public function perform_login(){
  
      //else, validate user data
      $this->load->model('Login_model');
      $userid = $this->Login_model->check_Login_Data($this->input->post('mail'), $this->input->post('password'));
      
      //if user data is valid, initialize session and forward to main page
      if ($userid != 0) {
            $_SESSION['userid'] = $userid;    
      } 
        redirect('main');
      

      }       

  


}

?>

