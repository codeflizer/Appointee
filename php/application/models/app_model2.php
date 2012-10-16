
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class App_model extends CI_Model { 

	public function create_appointment($data){
    
        $title=$data['title'];
        $description=$data['description'];
        $userid = $data['userid'];
        
        //insert appointment
        $data = array(
               'title' => $title ,
               'description' => $description ,
               'author' => $userid,
               'status'=> 1
        );

        $this->db->insert('appointments', $data); 
        
        
        // get appointment id of insert
        $aid=$this->db->insert_id();
        
        
        //get participants
        $participants=$this->session->userdata('participants');
        
        // split participants
        $participants  = explode(",", $participants);

         $count = count($participants);
        for ($i = 0; $i < $count; $i++) {
           
            //split into first and last name
            $name  = explode(" ", $participants[$i]);
        
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
        //create slots
        $slots=$data['slots'];
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
    
         
         }
    }
}
?>
