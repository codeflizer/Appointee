<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Appoint.ee</title>
	<?php includeCss() ?>
</head>
<body>

<div data-role="page" id="personal">
	<div data-theme="a" data-role="header">
		<div class="header_text">
			<img src="<?=base_url() ?>asset/images/Settings.png">
		</div>
		<a data-role="button" href="../" data-transition="fade"
			href="../" data-icon="arrow-l" data-iconpos="left"
			class="ui-btn-left" data-ajax="false"> Back </a>
	</div>
	<div data-role="content" style="padding: 15px">
		<ul data-role="listview" data-divider-theme="d" data-inset="false">
			<li data-role="list-divider" role="heading">Personal Settings</li>
			<li data-theme="c">
				<fieldset data-role="controlgroup">
					<label for="textinput12"> First Name </label> <input name=""
						id="textinput12" placeholder="" value="" type="text">
				</fieldset>
			</li>
			<li data-theme="c">
				<fieldset data-role="controlgroup">
					<label for="textinput12"> Last Name </label> <input name=""
						id="textinput12" placeholder="" value="" type="text">
				</fieldset>
			</li>
			<li data-theme="c"><input type="submit" value="Save"></li>
		</ul>
	</div>
</div>

</body>
</html>
