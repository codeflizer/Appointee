<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Settings extends CI_Controller {
 
 
 public function __construct()
   {
   parent::__construct();
 $userid = $this->session->userdata('userid');
      if($userid<1){
      redirect('login');
      }
       $this->load->model('Contact_model');
 }

 public function index(){
  
   $this->load->view('settings/settings_view');
   }
   
   public function personal(){
   
    $data = $this->Contact_model->get_contact($this->session->userdata('userid'));
   
   $this->load->view('settings/personal_view',$data);
   }
   
   public function save_personal(){
   
    $post=$this->input->post();
    $post['uid']=$this->session->userdata('userid');
     
      $this->Contact_model->update_me($post);
      
   $this->load->view('settings/settings_view');
   }
   
   
   public function password(){
   $data = $this->Contact_model->get_contact($this->session->userdata('userid'));
   $this->load->view('settings/password_view',$data);
   }
   
   public function save_password(){
    $post=$this->input->post();
    $this->Contact_model->update_pw($this->session->userdata('userid'),$post['password']);
   $this->load->view('settings/settings_view');
   }
   
   
   public function email(){
   $data = $this->Contact_model->get_contact($this->session->userdata('userid'));
   $this->load->view('settings/email_view',$data);
   }
   
   public function save_email(){
    $post=$this->input->post();
    $this->Contact_model->update_email($this->session->userdata('userid'),$post['mail']);
   $this->load->view('settings/settings_view');
   }
   
   
   public function delete(){
   $this->session->sess_destroy();
   
   $this->load->view('settings/delete_view');
   }

}
