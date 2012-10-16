<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacts extends CI_Controller {

 public function __construct()
   {
   parent::__construct();
     $this->load->model('Contact_model');
    $userid = $this->session->userdata('userid');
      if($userid<1){
      redirect('login');
      }
 }


 public function index(){
  
  
      //get Data from the model...
  
    $data = $this->Contact_model->get_contacts($this->session->userdata('userid'));
  
    //load view for contacts_general
    $this->load->view('contacts/contacts_view', $data); 
  }
   
    
  public function contact_add(){
      $this->load->view('contacts/add_view');
  }
  
  public function contact_detail($id){
  
  
    $data = $this->Contact_model->get_contact($id);

    //load view for contacts_general  
      $this->load->view('contacts/detail_view',$data);  
  }
  
  public function contact_edit(){
      
      $this->load->view('contacts/edit_view');  
  }
  
  public function upload_photo(){
      
      $this->load->view('contacts/edit_view');  
  }
  
  public function contact_update(){
      
      $this->index(); 
  }
  

}
