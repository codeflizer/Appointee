<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Appoint.ee</title>
	
	<?php includeCss() ?>
	<script>
		$(document).ready(function() {
			// open popup
			$( "#popupBasic" ).popup( "open" );
		});
	</script>
</head>
<body>

<div data-role="page" id="home">
	<div data-theme="a" data-role="header">
	
		<a data-role="button" data-transition="fade" href="<?=base_url() ?>settings/"
			data-icon="gear" data-iconpos="notext" class="ui-btn-right"
			data-theme="c" data-ajax="false"> </a>
			
		<div style="text-align: center; margin-top: 5px;">
		
			<img src="<?=base_url() ?>asset/images/Logo_small.png">
			
		</div>
	</div>
	<div data-role="content" style="padding: 15px">
	
		<a data-role="button" data-transition="fade" href="<?=base_url()?>app"  data-ajax="false" data-icon="appintee-plus">
			New Appointment </a>
			
			<br />
			
		<ul data-role="listview" data-divider-theme="d" data-inset="false">
			<li data-role="list-divider" role="heading">Inbox</li>


	        <?php foreach ($appointmentRequests as $request) {?>
	        <li data-theme="c">
	            <a href="<?=base_url() ?>home/appointment/<?php echo $request['aid']?>" data-transition="slide"  data-ajax="false">
					<h5><?php echo $request['title']; ?></h5>
					<p>
						<?php echo $request['description']; ?> <br />
						from <i><?php echo getName($request['author']) ?> 
						</i>
						with <i>
						 <?php
						
						
						         $ci =& get_instance();
						         $userid=$ci->session->userdata('userid');
						        $participants=getParticipants($request['aid'], $userid);
						
						        foreach ($participants as $participant){
						              echo  $participant['first_name'].' '.$participant['last_name'].', ';
						        }
						    ?> 
						    </i> 
					</p>
			    </a>
			 </li>
	  
	  
	  
			<li data-role="list-divider" role="heading">Waiting for Response</li>


	  <?php foreach ($openRequests as $request) {?>
	  <li data-theme="c"><a href="<?=base_url() ?>home/appointment/<?php echo $request['aid']?>" data-transition="slide"  data-ajax="false">
					<h5><?php echo $request['title']; ?> </h5>
					<p>
						<?php echo $request['description']; ?> <br />
						<i>with 
						    <?php
						
						
						         $ci =& get_instance();
						         $userid=$ci->session->userdata('userid');
						        $participants=getParticipants($request['aid'], $userid);
						
						        foreach ($participants as $participant){
						              echo  $participant['first_name'].' '.$participant['last_name'].', ';
						        }
						    ?>  
						      
					    </i>
					</p>
			</a></li>
	  <?php } ?>
	  
	   <?php } ?>

			<li data-role="list-divider" role="heading">Upcoming Events</li>   
	  
	          <?php foreach ($upcomingAppointments as $request) {?>
	          <li data-theme="c">
	            <a href="<?=base_url() ?>home/appointment/<?php echo $request['aid']?>" data-transition="slide"  data-ajax="false">
					   <h5><?php echo $request['title']; ?> </h5>
					   <p>
						 <?php echo $request['description']; ?> <br />
						   <i>with 
						    <?php
						
						
						         $ci =& get_instance();
						         $userid=$ci->session->userdata('userid');
						        $participants=getParticipants($request['aid'], $userid);
						
						        foreach ($participants as $participant){
						              echo  $participant['first_name'].' '.$participant['last_name'].', ';
						        }
						    ?>  
						      
					    </i>
					   </p>
			      </a>
			 </li>
	          <?php } ?>
	  
	
	
		</ul>
		
		    <div data-role="popup" id="popupBasic" 
			data-dismissable="false" class="appointee_popup"
			data-overlay-theme="a">
			<div data-theme="e" data-role="header" class="dialog_header">
				Appointment Request Sent
			</div>
			<p>Your appointment request <b><?=$title?></b> was successfully sent to <b>
			<?php foreach($partic as $part){
			    echo $part.','; 
			}?>
			</b>
			</p>
			<p><a href="<?=base_url() ?>home" data-role="button">Close</a></p>
		    </div>
		
		
		
			
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
