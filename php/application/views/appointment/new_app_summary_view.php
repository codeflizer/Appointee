<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Appoint.ee</title>
	
	<?php includeCss() ?>
	<link rel="stylesheet" type="text/css" href="http://dev.jtsage.com/cdn/datebox/latest/jqm-datebox.min.css" /> 
    <script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/latest/jqm-datebox.core.min.js"></script>
	<script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/latest/jqm-datebox.mode.calbox.min.js"></script>
	<script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/i18n/jquery.mobile.datebox.i18n.en_US.utf8.js"></script>
	<script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/1.1.0/jqm-datebox-1.1.0.mode.durationbox.js"></script>
</head>
<body>

<div data-role="page" id="new_app_3">
    <div data-theme="a" data-role="header">
         <a data-role="button" data-transition="fade" href="<?=base_url().'home'?>" class="ui-btn-right"
			data-ajax="false">
            Discard
        </a>
		<div class="header_text">
			<img src="<?=base_url() ?>asset/images/Appointment.png">
		</div>
         <a data-role="button" data-transition="fade" href="<?=base_url().'app/slot'?>" data-icon="arrow-l"
        data-iconpos="left" class="ui-btn-left" data-ajax="false">
            Back
        </a>
    </div>
	<div data-role="content" style="padding: 15px">
		<ul data-role="listview" data-divider-theme="d" data-inset="false">
			<li data-role="list-divider" role="heading">
				Summary
			</li>
			<li data-theme="c" data-icon="appointee-edit">
				
				<h3>Tennis Match</h3>
				<p>Lorem Ipsum lorem ipsum<br /> with <i>Bla bla</i></p>
				
			</li>
			<li data-role="list-divider" role="heading">
				Timeslots
			</li>
			<li data-theme="c" data-icon="appointee-edit">
				<a href="<?=base_url('app/slot')?>">
				Monday, September 9, 2012, <br />5pm-6pm
				</a>
			</li>
			<li data-theme="c" data-icon="appointee-edit">
				<a href="<?=base_url('app/slot')?>">
				Monday, September 9, 2012, <br />7pm-8pm
				</a>
			</li>
			<li data-theme="c" data-icon="appointee-edit">
				<a href="<?=base_url('app/slot')?>">
				Monday, September 9, 2012, <br />8pm-9pm
				</a>
			</li>
				
		</ul><br />
        <a data-role="button" data-transition="fade" data-theme="c" href="<?=base_url()?>/app/slot2" data-icon="plus"
        data-iconpos="left">
            Add new Timeslot
        </a>
        <a data-role="button" data-transition="fade" href="<?=base_url()?>/app/submit" data-icon="check"
        data-iconpos="left" data-ajax="false">
            Send Request
        </a>
	</div>
</div>
<!-- Discard popup -->
<div data-role="page" id="discard" >
    <div data-theme="a" data-role="header">
		<h3>
           
        </h3>
    </div>
	<div data-role="content" style="padding: 15px">
		<h3>Do you really want to discard the new appointment?</h3>
        <a data-role="button" data-transition="fade" data-theme="c" href="Menu.html"  data-ajax="false">
            Yes
        </a>
        <a data-role="button" data-transition="fade" data-theme="c" href="#new_app_2">
            No
        </a>
	</div>
</div>

</body>
</html>
