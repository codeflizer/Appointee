<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_model extends CI_Model { 


  public function get_contacts($userid){

     
      //retrieve all users
      $users = $this->db->query('SELECT * FROM users u ORDER BY u.first_name ASC');
      $users = $users->result_array();    
      $data['users'] = $users;
    
       return $data;
    }
    
    
   public function get_contact($id){
    $query = $this->db->query('SELECT uid, mail, first_name, last_name 
                                                FROM users u 
                                                WHERE uid='.$id.' ORDER BY first_name ASC'
                                        );
     
     $row = $query->row(); 
       return $row;  
    }
    
    
    public function add_contact($post){
    
         $data = array(
               'first_name' => $post['first_name'] ,
               'last_name' => $post['last_name'] ,
               'mail' => $post['mail'],
                'password' => "test"
              
        );

        $this->db->insert('users', $data); 
    }
    
        public function update_contact($post){
    
         $data = array(
               'first_name' => $post['first_name'] ,
               'last_name' => $post['last_name'] ,
               'mail' => $post['mail']
               
              
        );

        $this->db->where('uid', $post['uid']);
        $this->db->update('users', $data); 
    }
    
     public function update_me($post){
    
         $data = array(
               'first_name' => $post['first_name'] ,
               'last_name' => $post['last_name'] ,
        );

        $this->db->where('uid', $post['uid']);
        $this->db->update('users', $data); 
    }
    
     public function update_email($uid,$mail){
     
     $data = array(
               'mail' => $mail
        );

        $this->db->where('uid', $uid);
        $this->db->update('users', $data); 
  
  
  }
  
    public function update_pw($uid,$pw){
     
     $data = array(
               'password' => $pw
        );

        $this->db->where('uid', $uid);
        $this->db->update('users', $data); 
  
  
  }

}
