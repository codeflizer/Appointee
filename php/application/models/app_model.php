
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class App_model extends CI_Model { 

	public function create_appointment($data){
	date_default_timezone_set('UTC');
    
        $title=$data['title'];
        $description=$data['description'];
        $userid = $data['userid'];
        $slots = $data['slots'];
        $duration = $data['duration'];
        $durst_string=substr($duration, strlen($duration)-8, strlen($duration));	
        
        //insert appointment
        $data = array(
               'title' => $title ,
               'description' => $description ,
               'author' => $userid,
               'status'=> 1,
               'duration'=> $durst_string
        );

        $this->db->insert('appointments', $data); 
        
        
        // get appointment id of insert
        $aid=$this->db->insert_id();
        
        
        //get participants
        $participants=$this->session->userdata('participants');
        
        // split participants

         $count = count($participants);
        for ($i = 0; $i < $count; $i++) {
           
            //split into first and last name
            $name  = explode(" ", trim($participants[$i]));
        
            //retrieve uid
            $uid=$this->retrieve_uid($name[0],$name[1]);
            
            //insert
            $data = array(
                   'aid' => $aid,
                   'uid' => $uid,
                   'read' => 0,
                   'status'=> 0
            );

            $this->db->insert('participants', $data); 
        
        }
        
        
        //write timeslots into database
        //for each slot 
        foreach ($slots as $slot)
        {
        
        $starttime = DateTime::createFromFormat('m/d/Y h:i A', $slot['startdate'].' '.$slot['starttime']);
        
          //if endtime hasn't been entered, set enddate to same value as startdate
           if ($slot['enddate'] == ''){   	  
			  $dur=substr($duration, strlen($duration)-8, strlen($duration));			  
			  $dur=(explode(':',$dur,3));			  
			  $timest=$starttime->getTimestamp();			  
			 $timest+=$dur[0]*60*60+$dur[1]*60;			  
			  $dateString = date('YmdHis', $timest);
            $endtime= new DateTime($dateString);
          } else {
          
           $endtime = DateTime::createFromFormat('m/d/Y h:i A', $slot['enddate'].' '.$slot['endtime']);
          }   
          
          $single_slot = array (
              'aid' => $aid,
			        'start_time' => $starttime->format('Y-m-d H:i:s'),
			        'end_time' => $endtime->format('Y-m-d H:i:s'),
              //'duration' => $duration, //standard value - still needs to be changed
               'location' => $slot['location']
          );
          
          //insert array into database
          $this->db->insert('timeslots', $single_slot);
        }
    }
    
    function retrieve_uid($first_name, $last_name){
    
          //retrieve uid
        $query = $this->db->query('SELECT uid 
                                                    FROM users u
                                                    WHERE u.first_name = "'.$first_name.'"
                                                    AND u.last_name = "'.$last_name.'"'
                                            );
         $row = $query->row(); 
         return $row->uid;
     
    }
    
    function cancel($aid){
    
    //author or participant?
    
     $query = $this->db->query('SELECT author 
                                FROM appointments a
                                WHERE a.aid='.$aid);
         $author = $query->row()->author; 
         
        $userid =$this->session->userdata('userid');
       
         //if author - cancel appointment
         if($author==$userid) {
       
            $data = array(
               'status' => 2
            );

            $this->db->where('aid', $aid);
            $this->db->update('appointments', $data); 
             
         } else {
         // if participant cancel participation
             $data = array(
               'status' => 2
            );
             $where = array(
                 'aid' => $aid,
                 'uid'   => $userid
            );
            
            $this->db->where($where);
            $this->db->update('participants', $data);      
         }
    }
}
?>
