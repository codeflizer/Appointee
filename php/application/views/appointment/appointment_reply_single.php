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
        <a data-role="button" data-transition="fade" href="<?=base_url() ?>home" data-icon="arrow-l"
        data-iconpos="left" class="ui-btn-left">
            Back
        </a>
    </div>
    <form action="<?=base_url()?>home/send_reply_single" name="app" method="post" accept-charset="utf-8" data-ajax="false">	
	<div data-role="content" style="padding: 15px">
		<ul data-role="listview" data-divider-theme="d" data-inset="false">
			<li data-role="list-divider" role="heading">
				Summary single
			</li>
			<li data-theme="c" data-icon="gear">
				<h3><?=$appinfo->title ?></h3>
				<p><?=$appinfo->description ?><br/>
				
				
				from <i><b><?php echo getName($appinfo->author) ?> 
						</b></i>
				
				
				<br /> 
				</p>
			</li>
			<li data-role="list-divider" role="heading">
				Timeslots
			</li>
			<input type="hidden" name="aid" value="<?=$appinfo->aid?>">
      
      <?php 
      	 date_default_timezone_set('GMT');
      foreach($timeslots as $timeslot) { 
       
      $starttime = date_create_from_format('Y-m-d H:i:s', $timeslot['start_time']);
      $endtime = date_create_from_format('Y-m-d H:i:s', $timeslot['end_time']); 
      
      
			  $day= $starttime->format('l');
			   $day2= $starttime->format('M j, Y');
			   $day3= $starttime->format('H:i A');
			   $day4= $endtime->format('H:i A');
      ?>
			<li data-theme="c" data-icon="appointee-edit" class="appointee-date"> 
				<label for="slider2" class="slot_label">
				<h3><?=$day.', ';?> <small><?=$day2?> </small></h3>
			      <p> <b><?=$day3.' - '.$day4;  ?>  </b><br/>
			      <?php if (isset($timeslot['location']))
			      echo $timeslot['location']?>
			      </p>    
			<p class="ui-li-aside">in <strong><?=get_days_remaining($starttime);?></strong> days <strong><?=get_hours_remaining($starttime);?></strong> hours </p>
			
				<div class="slot_toggle">
        
       
        <?php 
					$data = array(
              'name'        => 'timeslots',
              'id'          => 'timeslots',
              'value'       => $timeslot['tid'],
              'style'       => 'margin:10px',
            );

          echo form_radio($data); ?>
			</li>
      
				
	
        <?php }
        echo form_submit('Submit','Submit'); ?>
      
       
         <a data-role="button" data-transition="fade" href="<?=base_url().'home/cancel/'.$appinfo->aid?>" data-icon="delete"
        data-iconpos="left">
            Reject
        </a>
          </ul>
	</div>
  </form>
</div>

</body>
</html>
