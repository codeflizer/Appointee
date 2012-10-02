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
		<div class="header_text">
			<img src="<?=base_url() ?>asset/images/Appointment.png">
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
				<h3><?=$title?></h3>
				<p><?=$description?><br /> with <i><?=$author?></i></p>
			</li>
			<li data-role="list-divider" role="heading">
				Timeslots
			</li>
			<li data-theme="c" data-icon="gear">
				Monday, September 9, 2012, <br />5pm-6pm
			</li>
			<li data-theme="c" data-icon="gear">
				Monday, September 9, 2012, <br />5pm-6pm
			</li>
			<li data-theme="c" data-icon="gear">
				Monday, September 9, 2012, <br />5pm-6pm
			</li>
				
		</ul><br />
        <a data-role="button" data-transition="fade" href="Menu.html" data-icon="delete"
        data-iconpos="left">
            Cancel Request
        </a>
	</div>
</div>

</body>
</html>
