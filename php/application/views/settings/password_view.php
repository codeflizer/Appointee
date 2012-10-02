<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Appoint.ee</title>
	<?php includeCss() ?>
</head>
<body>

<div data-role="page" id="password">
	<div data-theme="a" data-role="header">
		<div class="header_text">
			<img src="<?=base_url() ?>asset/images/Settings.png">
		</div>
		<a data-role="button" href="../" data-transition="fade"
			href="../" data-icon="arrow-l" data-iconpos="left"
			class="ui-btn-left"> Back </a>
	</div>
	<div data-role="content" style="padding: 15px">
		<ul data-role="listview" data-divider-theme="d" data-inset="false">
			<li data-role="list-divider" role="heading">Password Settings</li>
			<li data-theme="c">
				<fieldset data-role="controlgroup">
					<label for="textinput12"> Old Password </label> <input name=""
						id="textinput12" placeholder="" value="" type="password">
				</fieldset>
			</li>
			<li data-theme="c">
				<fieldset data-role="controlgroup">
					<label for="textinput12"> New Password </label> <input name=""
						id="textinput12" placeholder="" value="" type="password">
				</fieldset>
			</li>
			<li data-theme="c">
				<fieldset data-role="controlgroup">
					<label for="textinput12"> Confirm Password </label> <input name=""
						id="textinput12" placeholder="" value="" type="password">
				</fieldset>
			</li>
			<li data-theme="c"><input type="submit" value="Save" /></li>
		</ul>
	</div>
</div>

</body>
</html>