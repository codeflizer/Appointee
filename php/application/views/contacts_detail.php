<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Appoint.ee</title>
	
	<?php includeCss() ?>
</head>
<body>

<div data-role="page" id="contacts_detail">
    <div data-theme="a" data-role="header">
        <a data-role="button" data-theme="a" href="../editContact/" class="ui-btn-right">
            Edit
        </a>
        <a data-role="button" href="../contacts_tab/" data-icon="arrow-l" data-iconpos="left"
        class="ui-btn-left">
            Back
        </a>
        <h3>
            Contacts
        </h3>
    </div>
    <div data-role="content">
		<ul data-role="listview" data-divider-theme="d" data-inset="false">
			<li data-role="list-divider" role="heading">Details</li>
		</ul>
		<div class="contact_header">
			<div style="display: inline-block; float:left; height: 100px;">
				<img style="width: 100px; height: 100px" src="http://your.asda.com/assets/athletes/avatar-blank-695c8f738ed7f135c0a9f4f825da458f.jpg">
			</div>
			<h3 style="display: inline-block;">
				Lorenz Test
			</h3>
			<ul data-role="listview" data-divider-theme="d" data-inset="true">
				<li data-role="list-divider" role="heading">
					E-Mail
				</li>
				<li data-theme="c">
					lorenz@example.com
				</li>
			</ul><br />
			<a data-role="button" data-transition="fade" href="/appoint/newAppointment/"  data-ajax="false">
			New Appointment </a>
		</div>
    </div>
</div>

</body>
</html>
