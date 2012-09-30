
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class App_model extends CI_Model { 


	function create_Appointment($data) {
   
     $sql = "INSERT INTO appointments (title, description) VALUES('".$data['title']."','".$data['description']."')";
     $this->db->query($sql);

	}

}
?>
