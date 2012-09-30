<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Settings extends CI_Controller {
 
 
 public function __construct()
   {
   parent::__construct();
 $userid = $this->session->userdata('userid');
      if($userid<1){
      redirect('login');
      }
 }

 public function index(){
  
   $this->load->view('settings/settings_view');
   }
   
   public function personal(){
   $this->load->view('settings/personal_view');
   }
   
   
   public function password(){
   $this->load->view('settings/password_view');
   }
   
   
   public function email(){
   $this->load->view('settings/email_view');
   }
   
   
   public function delete(){
   $this->load->view('delete_view');
   }

}
