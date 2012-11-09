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
				<p><?=$appinfo->description ?><br /> with
				<?php
        date_default_timezone_set('UTC');
						
						
						         $ci =& get_instance();
						         $userid=$ci->session->userdata('userid');
						        $participants=getParticipants($appinfo->aid, $userid);
						
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
      foreach($timeslots as $timeslot){
      $starttime = date_create_from_format('Y-m-d H:i:s', $timeslot['start_time']);
      $endtime = date_create_from_format('Y-m-d H:i:s', $timeslot['start_time']); 
      
      ?>
      
			<li data-theme="c" data-icon="gear">	
     <h3><small> <?php echo date_format($starttime, 'D dS \o\f F \, Y'); ?></small></h3>, <br />  <p><strong><?php echo date_format($starttime, 'g:i a'); ?> - <?php echo date_format($endtime, 'g:i a');  ?> </strong></p>
			<p class="ui-li-aside">in <strong>2</strong> days</p>
			<p align=right> <?php echo $timeslot['number_of_ack'] ?> Acknowledgements </p>
      </li>
      <?php } ?>
				
		</ul><br />
        <a data-role="button" data-transition="fade" href="<?=base_url().'home/cancel/'.$appinfo->aid?>" data-icon="delete"
        data-iconpos="left">
            Cancel Request
        </a>
	</div>
</div>

</body>
</html>
