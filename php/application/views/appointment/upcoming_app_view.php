<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
	<title>Appoint.ee</title>
	
	<?php includeCss() ?>
</head>
<body>

<div data-role="page" id="detail">
    <div data-theme="a" data-role="header">
		<div class="header_text_2">
			<img src="<?=base_url() ?>asset/images/details.png">
		</div>
        <a data-role="button" data-transition="fade" href="<?=base_url().'home'?>" data-icon="arrow-l"
        data-iconpos="left" class="ui-btn-left">
            Back
        </a>
    </div>
	<div data-role="content" style="padding: 15px">
		<ul data-role="listview" data-divider-theme="d" data-inset="false">
			<li data-role="list-divider" role="heading">
				Summary
			</li>
			<li data-theme="c" data-icon="gear">
				<h3><?=$appinfo->title ?></h3>
				<p><?=$appinfo->description ?><br/>
				
				
				from <i><b><?php echo getName($appinfo->author) ?> 
						</b></i><br /> 
				<?php
        date_default_timezone_set('UTC');
						
						
						         $ci =& get_instance();
						         $userid=$ci->session->userdata('userid');
						        $participants=getParticipants($appinfo->aid, $userid);
						        
						 if(!empty($participants)){
						        echo 'with ';
						        }
						
						        foreach ($participants as $participant){
						              echo  $participant['first_name'].' '.$participant['last_name'].', ';
						        }
						    ?>  
				
				</i></p>
			</li>
			<li data-role="list-divider" role="heading">
				Timeslots
			</li>
      
      <?php
      $starttime = date_create_from_format('Y-m-d H:i:s', $timeslot['startdate']);
      $endtime = date_create_from_format('Y-m-d H:i:s', $timeslot['enddate']); 
      
      
			  $day= $starttime->format('l');
			   $day2= $starttime->format('M j, Y');
			   $day3= $starttime->format('H:i A');
			   $day4= $endtime->format('H:i A');
      
      ?>
      

			 <li data-theme="c" data-icon="appointee-edit" class="appointee-date"> 
			 <h3><?=$day.', ';?> <small><?=$day2?> </small></h3>
			      <p> <b><?=$day3.' - '.$day4;  ?>  </b><br/>
			      <?php if (isset($timeslot['location']))
			      echo $timeslot['location']?>
			      </p>    
			<p class="ui-li-aside">in <strong>2</strong> days</p>
			<?php 
			if(!empty($participants)){
			echo '<p align=right>'.$timeslot['number_of_ack'].' Acknowledgements </p>'; 
			}?>
      </li>

		 <a data-role="button" data-transition="fade" href="<?=base_url().'home/cancel/'.$appinfo->aid?>" data-icon="delete"
        data-iconpos="left">
            Cancel Request
        </a>		
		</ul>
       
	</div>
</div>

</body>
</html>
