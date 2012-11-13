
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
      $upcomingAppointments = $this->db->query('SELECT DISTINCT a.aid, a.title, a.description, a.author
                                                FROM appointments a, timeslots t, participants p
                                                WHERE (a.author='.$userid.'
                                                AND a.status=0
                                                AND a.tid=t.tid
                                                AND (t.end_time > now()))
                                                OR (a.aid=p.aid
                                                AND p.uid='.$userid.'
                                                AND a.status=0
                                                AND a.tid=t.tid
                                                AND (t.end_time > now()))                
                                        ');


      $upcomingAppointments = $upcomingAppointments->result_array();
      $data['upcomingAppointments'] = $upcomingAppointments;
    
       return $data;
       
       
    }
    
  
    
   
    
    public function get_data_for_history($userid){
     
     
      //retrieve Appointments
      $appointments = $this->db->query('SELECT DISTINCT a.aid, a.title, a.description, a.author
                                                FROM appointments a, timeslots t, participants p
                                                WHERE (a.author='.$userid.'
                                                AND a.status=0
                                                AND a.tid=t.tid
                                                AND (t.end_time < now()))
                                                OR (a.aid=p.aid
                                                AND p.uid='.$userid.'
                                                AND a.status=0
                                                AND a.tid=t.tid
                                                AND (t.end_time < now())
                                                OR (a.aid=p.aid
                                                AND p.uid='.$userid.'
                                                AND p.status=2)
                                                OR (a.author='.$userid.'
                                                AND a.status=2)) 
                                                ORDER BY t.end_time DESC               
                                        ');
      $appointments = $appointments->result_array();
      $data['appointments'] = $appointments;
    
       return $data;
    }
    
    public function get_appointment_data($id){
    
    $query = $this->db->query('SELECT * 
                                                FROM appointments a 
                                                WHERE a.aid='.$id
                                        );
     
     $row = $query->row(); 
       return $row;  
    }
    
    public function get_timeslots_for_appointment($id){
    
    //retrieve all timeslots that belong to the appointment
    $query = $this->db->query('SELECT * 
                                FROM timeslots ts 
                                WHERE ts.aid='.$id
                                        );
                                        
    //return all those timeslots
    $timeslots = $query->result_array();
    return $timeslots;
    
    }
    
     public function get_first_timeslot($id){
    
    //retrieve all timeslots that belong to the appointment
    $query = $this->db->query('SELECT * 
                                FROM timeslots ts 
                                WHERE ts.aid='.$id
                                        );
                                        
   $row= $query->row(0);
  
    $data['start']= $row->start_time;
     $data['end']= $row->end_time;
     $data['number_of_ack']= $row->number_of_ack;
     $data['location']= $row->location;
    return $data;
    
    }
    
    public function set_scheduled($aid){
    
     $data = array(
               'status' => 0
            );

            $this->db->where('aid', $aid);
            $this->db->update('appointments', $data); 
    
    
    }
    
     public function set_timeslot($aid,$tid){
    
    
    
     $data = array(
               'tid' => $tid
            );

            $this->db->where('aid', $aid);
            $this->db->update('appointments', $data); 
    
    
    }
    
   public function get_timeslot($aid){
   
   $query = $this->db->query('SELECT ts.start_time, ts.end_time, ts.number_of_ack, ts.location
                                FROM timeslots ts, appointments a
                                WHERE a.aid='.$aid.'
                                AND a.tid=ts.tid'
                                
                                        );
                                        
   $row= $query->row(0);
  
    $data['startdate']= $row->start_time;
     $data['enddate']= $row->end_time;
     $data['number_of_ack']= $row->number_of_ack;
     $data['location']= $row->location;
    return $data;
   
   
   }
   
    function number_participants($aid){
  
                                                    
        $query ='SELECT * 
                FROM  participants p, appointments a
                WHERE p.aid='.$aid.'
                AND a.aid = '.$aid;
        $participants = $this->db->query($query);
                                                    
                                          
                                                    
        $participants = $participants->result_array();
        return sizeof($participants); 
    }
      
    public function number_replies($aid){
                                                 
        $query ='SELECT a.replies
                FROM  appointments a
                WHERE a.aid = '.$aid;
        $replies = $this->db->query($query);  
         $row= $replies->row(0);                              
        $number = $row->replies;
        return $number; 
      }
    
    
   public function set_replies($aid, $replies){
    
    
        $data = array(
               'replies' => $replies
            );
            $this->db->where('aid', $aid);
            $this->db->update('appointments', $data); 
    }
    
    public function increase_ack_for($tid){
    
    $this->db->where('tid', $tid);
    $this->db->set('number_of_ack', 'number_of_ack+1', FALSE);
    $this->db->update('timeslots');
    
    
    }


}

?>

