<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_model extends CI_Model { 


  public function get_contacts($userid){

     
      //retrieve all users
      $users = $this->db->query('SELECT * FROM users');
      $users = $users->result_array();    
      $data['users'] = $users;
    
       return $data;
    }
    
    
   public function get_contact($id){
    $query = $this->db->query('SELECT mail, first_name, last_name 
                                                FROM users u 
                                                WHERE uid='.$id
                                        );
     
     $row = $query->row(); 
       return $row;  
    }
    
    


}
