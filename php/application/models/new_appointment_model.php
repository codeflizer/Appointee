<?php
if (!defined('BASEPATH'))
	exit ('No direct script access allowed');

class New_appointment_model extends CI_Model {

	function __construct() {
		// Call the Model constructor
		parent :: __construct();
	}

	function create_Appointment($data) {
		 $this->load->database();
      
      
     $sql = "INSERT INTO appointments (title, description) VALUES('".$data['title']."','".$data['description']."')";
     $this->db->query($sql);

	}

	//saves
	public function get_data_for_main_screen() {

		//id of current user
		$userID = 1;

		//prepare database
		$this->load->database();

	}

}
?>

