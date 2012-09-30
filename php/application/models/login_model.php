
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model { 

 public function check_Login_Data($email, $password){

    
      //prepare database
      $this->load->database();
      
      //retrieve user info
      $user = $this->db->query('SELECT * FROM users WHERE mail="'.$email.'"');
      $user = reset($user->result_array());
      
      //if password is right, return userid
      if ($user['password']==$password)
      {
          return $user['uid'];
          
      //else return 0
      } else {
          return 0;
      }
       
       
    }

}
?>
