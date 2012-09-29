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

<div data-role="page" id="new_app_2">
    <div data-theme="a" data-role="header">
        <a data-role="button" data-transition="fade" href="#page10" class="ui-btn-right">
            Discard
        </a>
		<h3>
            New Appointment
        </h3>
        <a data-role="button" data-transition="fade" href="../newapp_general" data-icon="arrow-l"
        data-iconpos="left" class="ui-btn-left">
            Back
        </a>
    </div>
	<div data-role="content" style="padding: 15px">
		<ul data-role="listview" data-divider-theme="d" data-inset="false">
			<li data-role="list-divider" role="heading">
				1. Timeslot
			</li>
			<li data-theme="c">
				<h3>Start</h3>
				<label for="mydate"></label>
				<input name="mydate" id="mydate" type="date" data-role="datebox"
				   data-options='{"mode": "calbox"}' placeholder="Start Date">
				   
				<input type="checkbox" name="checkbox-1" id="checkbox-1" class="custom" />
				<label for="checkbox-1">All-day</label>   
				   
				<label for="mydate"></label>
				<input name="mydate" id="mydate" type="date" data-role="datebox"
				   data-options='{"mode": "timebox"}' placeholder="Start Time">
			</li>
			<li data-theme="c">
				<h3>End</h3>
				<label for="mydate"></label>
				<input name="mydate" id="mydate" type="date" data-role="datebox"
				   data-options='{"mode": "calbox"}' placeholder="End Date" disabled="disabled"> 
				   
				<label for="mydate"></label>
				<input name="mydate" id="mydate" type="date" data-role="datebox"
				   data-options='{"mode": "timebox"}' placeholder="End Time" disabled="disabled">
			</li>
				
		</ul><br />
        <a data-role="button" data-transition="fade" data-theme="c" href="../save_timeslot_and_clear/" data-icon="plus"
        data-iconpos="left">
            Add &amp; next Slot
        </a>
        <a data-role="button" data-transition="fade" href="../add_and_finish/" data-icon="check">
            Add &amp; finish
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
