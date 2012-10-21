<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Appoint.ee</title>
	
	<?php includeCss() ?>
</head>
<body>

<div data-role="page" id="detail">
    <div data-theme="a" data-role="header">
		<div class="header_text_2">
			<img src="<?=base_url() ?>asset/images/details.png">
		</div>
        <a data-role="button" data-transition="fade" href="<?=base_url().'history'?>" data-icon="arrow-l"
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
				<h3><?=$appinfo->title?></h3>
				<p><?=$appinfo->description?><br /> with <i>
				
				<?php
						 date_default_timezone_set('UTC');
						
						         $ci =& get_instance();
						         $userid=$ci->session->userdata('userid');
						         error_log($aid);
						        $participants=getParticipants($aid, $userid);
						
						        foreach ($participants as $participant){
						              echo  $participant['first_name'].' '.$participant['last_name'].', ';
						        }
						    ?>  
				</i>
				</p>
			</li>
			<li data-role="list-divider" role="heading">
				Timeslots
			</li>
			<?php
     
      $starttime = date_create_from_format('Y-m-d H:i:s', $timeslot['start']);
      $endtime = date_create_from_format('Y-m-d H:i:s', $timeslot['end']); 
      
      ?>
      
			<li data-theme="c" data-icon="gear">
      <?php echo date_format($starttime, 'D dS \o\f F \, Y'); ?>, <br />  <?php echo date_format($starttime, 'g:i a'); ?> until <?php echo date_format($endtime, 'g:i a');  ?> 
			<p align=right> <?php echo $timeslot['ack'] ?> Acknowledgements </p>
      </li>
      
				
		</ul><br />
	</div>
</div>

</body>
</html>
