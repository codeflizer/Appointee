<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Appoint.ee</title>
	
	<link rel="stylesheet" href="http://jquerymobile.com/demos/1.1.1/css/themes/default/jquery.mobile-1.1.1.css" />
	<link rel="stylesheet" href="style.css" />
	
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="http://jquerymobile.com/demos/1.1.1/js/jquery.mobile-1.1.1.js"></script>
</head>
<body>

<div data-role="page" id="detail">
    <div data-theme="a" data-role="header">
        <h3>
            Details
        </h3>
        <a data-role="button" data-transition="fade" href="Menu.html" data-icon="arrow-l"
        data-iconpos="left" class="ui-btn-left">
            Back
        </a>
    </div>
  <?php echo form_open('home/send_reply') ?>
	<div data-role="content" style="padding: 15px">
		<ul data-role="listview" data-divider-theme="d" data-inset="false">
			<li data-role="list-divider" role="heading">
				Summary
			</li>
			<li data-theme="c" data-icon="gear">
				<h3><?=$appinfo->title ?></h3>
				<p><?=$appinfo->description ?></i></p>
			</li>
			<li data-role="list-divider" role="heading">
				Timeslots
			</li>
      
      <?php 
      foreach($timeslots as $timeslot) { 
      $starttime = date_create_from_format('Y-m-d H:i:s', $timeslot['start_time']);
      $endtime = date_create_from_format('Y-m-d H:i:s', $timeslot['start_time']); 
           
      ?>
			<li data-theme="c" data-icon="gear">
				<label for="slider2" class="slot_label"><?php echo date_format($starttime, 'D dS \o\f F \, Y'); ?>, <br />  <?php echo date_format($starttime, 'g:i a'); ?> until <?php echo date_format($endtime, 'g:i a');  ?> 
			<p align=right> <?php echo $timeslot['number_of_ack'] ?> Acknowledgements </p>
				<div class="slot_toggle">
        
        <?php 
					$data = array(
              'name'        => 'selected'.$timeslot['tid'],
              'id'          => 'selected'.$timeslot['tid'],
              'value'       => 'accept',
              'checked'     => TRUE,
              'style'       => 'margin:10px',
            );

          echo form_checkbox($data); ?>
			</li>
      
				
		</ul><br />
        <?php }
        echo form_submit('Submit','Submit'); ?>
        
	</div>
  </form>
</div>

</body>
</html>