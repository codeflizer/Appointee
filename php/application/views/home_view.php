<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
	<title>Appoint.ee</title>
	
	<?php includeCss() ?>
</head>
<body>

<div data-role="page" id="home">
	<div data-theme="a" data-role="header">
	
		<a data-role="button" data-transition="fade" href="<?=base_url() ?>settings/"
			data-icon="gear" data-iconpos="notext" class="ui-btn-right"
			data-theme="c" data-ajax="false"> </a>
		<div class="header_text">
			<img src="<?=base_url() ?>asset/images/Logo_small.png">
		</div>
		<a data-role="button" data-transition="fade" href="<?=base_url()?>app"  data-ajax="false" data-icon="appintee-plus" data-icon="arrow-l"
        data-iconpos="left" class="ui-btn-left">
            New
        </a>
	</div>
	<div data-role="content" style="padding: 15px">
	
			
		<ul data-role="listview" data-divider-theme="d" data-inset="false">
			<li data-role="list-divider" role="heading">Inbox</li>

           
	        <?php
	         if(empty($appointmentRequests)){
            echo '<li><i><small>There are no Incoming Requests</small></i></li>';
            }
	        
	         foreach ($appointmentRequests as $request) {?>
	        <li data-theme="c">
	            <a href="<?=base_url() ?>home/reply/<?php echo $request['aid']?>" data-transition="slide"  data-ajax="false">
					<h5><?php echo $request['title']; ?></h5>
					<p>
						<?php echo $request['description']; ?> <br />
						from <i><?php echo getName($request['author']) ?> 
						</i>
						 <i>
						<?php
        date_default_timezone_set('GMT');
						
						
						         $ci =& get_instance();
						         $userid=$ci->session->userdata('userid');
						        $participants=getParticipants($request['aid'], $userid);
						        
						        $first=true;
						        $rejected=false;
						        foreach ($participants as $participant){
						        // error_log(getName($participant['uid']));
						            if(!rejected($request['aid'], $participant['uid'])){
						                
						                if($participant['uid']!=$userid){
						                if($first){
						                echo 'with ';
						                $first=false;
						                }
						              echo  $participant['first_name'].' '.$participant['last_name'].', ';
						             } }
						              else {
						              $rejected=true;
						              }
						        }
						        if($rejected){
						            echo ' rejected by ';
					                foreach ($participants as $participant){
					                
					                    if(rejected($request['aid'], $participant['uid'])){
					                     
					                      if($participant['uid']==$userid){
					                        echo 'me, ';
					                      }else {
					                        echo $participant['first_name'].' '.$participant['last_name'].', ';
					                      }
					                   }
					                }
						        }
						        
						        
						    ?>  
						    </i> 
					</p>
			    </a>
			 </li>
	  
	  <?php } ?>
	  
			<li data-role="list-divider" role="heading">Waiting for Response</li>


	  <?php
	   if(empty($openRequests)){
            echo '<li><i><small>There are no Open Requests</small></i></li>';
	  }
	   foreach ($openRequests as $request) {?>
	  <li data-theme="c"><a href="<?=base_url() ?>home/appointment/<?php echo $request['aid']?>" data-transition="slide"  data-ajax="false">
					<h5><?php echo $request['title']; ?> </h5>
					<p><?=$request['description'] ?><br/>
					
				from <i><b>
				<?php 
				$ci =& get_instance();
				$userid=$ci->session->userdata('userid');
				
				if($userid==$request['author']){
				    echo 'me';
				}else {
				echo getName($request['author']);
				} ?> 
						</b>
						   <?php
        date_default_timezone_set('GMT');
						
						
						         $ci =& get_instance();
						         $userid=$ci->session->userdata('userid');
						        $participants=getParticipants($request['aid'], $userid);
						        
						        $first=true;
						        $rejected=false;
						        foreach ($participants as $participant){
						        // error_log(getName($participant['uid']));
						            if(!rejected($request['aid'], $participant['uid'])){
						             if($participant['uid']!=$userid){
						                if($first){
						                echo 'with ';
						                $first=false;
						                }
						              echo  $participant['first_name'].' '.$participant['last_name'].', ';
						              }}
						              else {
						              $rejected=true;
						              }
						        }
						        if($rejected){
						            echo ' rejected by ';
					                foreach ($participants as $participant){
					                
					                    if(rejected($request['aid'], $participant['uid'])){
					                     
					                      if($participant['uid']==$userid){
					                        echo 'me, ';
					                      }else {
					                        echo $participant['first_name'].' '.$participant['last_name'].', ';
					                      }
					                   }
					                }
						        }
						        
						        
						     ?>  
					    </i>
					</p>
			</a></li>
	  <?php } ?>
	  
	   

			<li data-role="list-divider" role="heading">Upcoming Events</li>   
	  
	          <?php 
	          if(empty($upcomingAppointments)){
            echo '<li><i><small>There are no Upcoming Events</small></i></li>';
	  }
	          
	          foreach ($upcomingAppointments as $request) {?>
	          <li data-theme="c">
	            <a href="<?=base_url() ?>home/upcoming/<?php echo $request['aid']?>" data-transition="slide"  data-ajax="false">
					   <h5><?php echo $request['title']; ?> </h5>
					  <p>
						<?php echo $request['description']; ?> <br />
						
						
						<?php 
						  $ci =& get_instance();
						         $userid=$ci->session->userdata('userid');
						
						if ($request['author']!=$userid) {?>from <i><?php echo getName($request['author']) ?> 
						</i><?php }?>
						 <i>
						   <?php
        date_default_timezone_set('GMT');
						
						
						         $ci =& get_instance();
						         $userid=$ci->session->userdata('userid');
						        $participants=getParticipants($request['aid'], $userid);
						        
						        $first=true;
						        $rejected=false;
						        foreach ($participants as $participant){
						        // error_log(getName($participant['uid']));
						            if(!rejected($request['aid'], $participant['uid'])){
						             if($participant['uid']!=$userid){
						                if($first){
						                echo 'with ';
						                $first=false;
						                }
						              echo  $participant['first_name'].' '.$participant['last_name'].', ';
						              }}
						              else {
						              $rejected=true;
						              }
						        }
						        if($rejected){
						            echo ' rejected by ';
					                foreach ($participants as $participant){
					                
					                    if(rejected($request['aid'], $participant['uid'])){
					                     
					                      if($participant['uid']==$userid){
					                        echo 'me, ';
					                      }else {
					                        echo $participant['first_name'].' '.$participant['last_name'].', ';
					                      }
					                   }
					                }
						        }
						        
						      ?>   
						      
					    </i>
					    <br/> 
					    
					    <?php
					    $ci->load->model('Home_model');
					     $timeslot = $ci->Home_model->get_timeslot($request['aid']);
					     
      $starttime = date_create_from_format('Y-m-d H:i:s', $timeslot['startdate']);
      $endtime = date_create_from_format('Y-m-d H:i:s', $timeslot['enddate']); 
      
      
			  $day= $starttime->format('l');
			   $day2= $starttime->format('M j,');
			   $day3= $starttime->format('H:i A');
			   $day4= $endtime->format('H:i A');
      
      ?>
      

			
			 <?=$day.', '.$day2.' '.$day3.' - '.$day4;  ?>  
			        
			<p class="ui-li-aside">in <strong><?=get_days_remaining($starttime);?></strong> days <strong><?=get_hours_remaining($starttime);?></strong> hours </p>
					   </p>
			      </a>
			 </li>
	          <?php } ?>
	  
	
	
		</ul>
	</div>
	<div data-role="footer" data-position="fixed">
		<div data-role="navbar" data-iconpos="top" data-theme="c">
			<ul>
				<li><a href="<?=base_url() ?>home" data-theme="" data-icon="appointee-home" data-ajax="false"
					class="ui-btn-active ui-state-persist">Home</a></li>
				<li><a href="<?=base_url() ?>home/history" data-theme="" data-icon="appointee-history" data-ajax="false"
					>History</a></li>
				<li><a href="<?=base_url() ?>contacts" data-theme="" data-icon="appointee-contacts" data-ajax="false"
					>Contacts</a></li>
			</ul>
		</div>
	</div>
</div>

</body>
</html>
