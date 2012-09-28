<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main_model extends CI_Model {


    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    
    
    //retrieves all data that is needed for main screen and returns it
    public function get_data_for_main_screen($userid){
    
      //prepare database
      $this->load->database();
      
      //retrieve Appointment Requests
      $appointmentRequests = $this->db->query('SELECT title, description, author FROM appointments a, participants p WHERE a.aid=p.aid AND a.author<>'.$userid.' AND p.read=FALSE AND p.uid='.$userid);
      $appointmentRequests = $appointmentRequests->result_array();
      $data['appointmentRequests'] = $appointmentRequests;
       
       //retrieve Open Requests
      $openRequests = $this->db->query('SELECT * FROM appointments');
      $openRequests = $openRequests->result_array();
      $data['openRequests'] = $openRequests;
      
      //retrieve Upcoming Appointments
      $upcomingAppointments = $this->db->query('SELECT * FROM appointments');
      $upcomingAppointments = $upcomingAppointments->result_array();
      $data['upcomingAppointments'] = $upcomingAppointments;
    
       return $data;
       
       
    }
    
    
    
    //retrieves all contacts and returns them
    public function get_contacts(){
    
              //id of current user
      $userID = 1;
    
      //prepare database
      $this->load->database();
     
      //retrieve all users
      $users = $this->db->query('SELECT * FROM users');
      $users = $users->result_array();    
      $data['users'] = $users;
    
       return $data;
    }
    
    
    //retrieves all Data needed for History and returns them
    public function get_data_for_history($userid){
    
              //id of current user
      $userID = 1;
    
      //prepare database
      $this->load->database();
     
      //retrieve Appointments
      $appointments = $this->db->query('SELECT * FROM appointments');
      $appointments = $appointments->result_array();
      $data['appointments'] = $appointments;
    
       return $data;
    }
    






}

?>


