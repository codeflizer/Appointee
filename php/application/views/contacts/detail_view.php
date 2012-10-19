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
        <a data-role="button" data-theme="a" href="<?=base_url().'contacts/contact_edit'?>" class="ui-btn-right">
            Edit
        </a>
        <a data-role="button" href="<?=base_url().'contacts'?>" data-icon="arrow-l" data-iconpos="left"
        class="ui-btn-left">
            Back
        </a>
		<div class="header_text">
			<img src="<?=base_url() ?>asset/images/Contacts.png">
		</div>
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
				<?=$first_name.' '.$last_name?>
			</h3>
			<ul data-role="listview" data-divider-theme="d" data-inset="true">
				<li data-role="list-divider" role="heading">
					E-Mail
				</li>
				<li data-theme="c">
					<?=$mail?>
				</li>
			</ul><br />
			<a data-role="button" data-transition="fade" href="<?=base_url().'app/contact/'.$uid?>"  data-ajax="false">
			New Appointment </a>
		</div>
    </div>
</div>

</body>
</html>
