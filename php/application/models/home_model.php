
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model { 

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    
    
    //retrieves all data that is needed for main screen and returns it
    public function get_data_for_main_screen($userid){
 
      
      //retrieve Appointment Requests
      $appointmentRequests = $this->db->query(  'SELECT a.aid, title, description, author, p.read 
                                                FROM appointments a, participants p 
                                                WHERE a.aid=p.aid AND a.author<>'.$userid.' 
                                                AND p.uid='.$userid.'
                                                AND p.status<>2 
                                                AND a.status=1');
                                                
      $appointmentRequests = $appointmentRequests->result_array();
      $data['appointmentRequests'] = $appointmentRequests;
      
      
       
       //retrieve Open Requests
      $openRequests = $this->db->query(         'SELECT a.aid, title, description, author 
                                                FROM appointments a 
                                                WHERE a.author='.$userid. '
                                                AND a.status=1');
      $openRequests = $openRequests->result_array();
      $data['openRequests'] = $openRequests;
      
      //retrieve Upcoming Appointments
      $upcomingAppointments = $this->db->query('SELECT a.aid, title, description, author 
                                                FROM appointments a 
                                                WHERE a.author='.$userid.' 
                                                AND a.status=0
                                                UNION 
                                                SELECT a.aid, title, description, author 
                                                FROM appointments a 
                                                INNER JOIN participants p 
                                                ON p.aid=a.aid  
                                                WHERE  p.uid = '.$userid.' 
                                                AND p.status<>2
                                                AND a.status =0');


      $upcomingAppointments = $upcomingAppointments->result_array();
      $data['upcomingAppointments'] = $upcomingAppointments;
    
       return $data;
       
       
    }
    
  
    
    //retrieves all Data needed for History and returns them
    public function get_data_for_history($userid){
     
      //retrieve Appointments
      $appointments = $this->db->query('SELECT a.aid, title, description, author 
                                                FROM appointments a 
                                                WHERE a.author='.$userid.' 
                                                UNION 
                                                SELECT a.aid, title, description, author 
                                                FROM appointments a 
                                                INNER JOIN participants p 
                                                ON p.aid=a.aid  
                                                WHERE  p.uid = '.$userid  
                                        );
      $appointments = $appointments->result_array();
      $data['appointments'] = $appointments;
    
       return $data;
    }
    
    public function get_appointment_data($id){
    $query = $this->db->query('SELECT aid, title, description, author 
                                                FROM appointments a 
                                                WHERE a.aid='.$id
                                        );
     
     $row = $query->row(); 
       return $row;  
    }
    
    



}

?>

