<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Appoint.ee</title>
	
	<?php includeCss() ?>
	
	<script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/latest/jqm-datebox.core.min.js"></script>
	<script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/latest/jqm-datebox.mode.calbox.min.js"></script>
	<script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/i18n/jquery.mobile.datebox.i18n.en_US.utf8.js"></script>
	<script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/1.1.0/jqm-datebox-1.1.0.mode.durationbox.js"></script>
</head>
<body>

<div data-role="page" id="new_app_1">
    <div data-theme="a" data-role="header">
        <a data-role="button" data-transition="fade" href="#discard" class="ui-btn-right"
			data-rel="dialog">
            Discard
        </a>
		<h3>
            New Appointment
        </h3>
        <a data-role="button" data-transition="fade" href="../main/main_tab/" data-icon="arrow-l"
        data-iconpos="left" class="ui-btn-left" data-ajax="false">
            Back
        </a>
    </div>
	<div data-role="content" style="padding: 15px">
		<ul data-role="listview" data-divider-theme="d" data-inset="false">
			<li data-role="list-divider" role="heading">
				General Information
			</li>
			<li data-theme="c">
				<fieldset data-role="controlgroup">
					<label for="textinput1">
					</label>
				<input name="" id="textinput1" placeholder="Title" value="" type="text">
				</fieldset>
			</li>
			<li data-theme="c">
				<label for="textarea1">
				</label>
				<textarea name="" id="textarea1" placeholder="Description"></textarea>
			</li>
			<li data-theme="c">
				<fieldset data-role="controlgroup">
				<label for="mydate"></label>

				<input name="mydate" id="mydate" type="date" data-role="datebox"
					data-options='{"mode": "durationbox"}' placeholder="Length">
				</fieldset>
			</li>
			<li data-theme="c">
				<fieldset data-role="controlgroup">
				<label for="textarea2">
				</label>
				<textarea name="" id="textarea2" placeholder="Participants"></textarea>
				</fieldset>
			</li>
				
		</ul><br />
		<a data-role="button" data-transition="fade" data-theme="c" href="newapp_timeslot/">
			Next
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
