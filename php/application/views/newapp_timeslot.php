<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Appoint.ee</title>
	
	<?php includeCss() ?>

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
	
	  <form action="http://localhost/appoint/new_appointment/newapp_timeslot" method="post" accept-charset="utf-8">
		<ul data-role="listview" data-divider-theme="d" data-inset="false">
			<li data-role="list-divider" role="heading">
				1. Timeslot
			</li>
			<li data-theme="c">
				<h3>Start</h3>
				<label for="startdate"></label>
				<input name="startdate" id="startdate" type="date" data-role="datebox"  data-options='{"mode": "calbox"}' placeholder="Start Date"/>
				
				<label for="allday">All-day</label>   
				<input type="checkbox" name="allday" id="allday" />
				 
				   
				<label for="starttime"></label>
				<input name="starttime" id="starttime" type="date" data-role="datebox" data-options='{"mode": "timebox"}' placeholder="Start Time"/>
			</li>
			<li data-theme="c">
				<h3>End</h3>
				<label for="enddate"></label>
				<input name="enddate" id="enddate" type="date" data-role="datebox" data-options='{"mode": "calbox"}' placeholder="End Date" disabled="disabled"/> 
				   
				<label for="endtime"></label>
				<input name="endtime" id="endtime" type="date" data-role="datebox" data-options='{"mode": "timebox"}' placeholder="End Time" disabled="disabled"/>
			</li>
				
		</ul><br />
        <?php echo form_submit('next','Next Slot'); ?>
        <?php echo form_submit('finish','Finish'); ?>
    </form>         
	</div>
	
</div>
</body>
</html>
