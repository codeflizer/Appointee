<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Appoint.ee</title>
	<?php includeCss() ?>
</head>
<body>

<div data-role="page" id="settings">
	<div data-theme="a" data-role="header">
		<h3>Settings</h3>
		<a data-role="button" data-transition="fade" href="<?=base_url() ?>home"
			data-icon="arrow-l" data-iconpos="left" class="ui-btn-left" data-ajax="false">
			Back </a>
	</div>
	<div data-role="content" style="padding: 15px">
		<ul data-role="listview" data-divider-theme="d" data-inset="false">
			<li data-role="list-divider" role="heading">Overview</li>
			<li data-theme="c"><a href="<?=base_url() ?>settings/personal" data-ajax="false">
					<h3>Personal Settings</h3>
					<p>Change your first and last name</p>
			</a></li>
			<li data-theme="c"><a href="<?=base_url() ?>settings/email" data-ajax="false">
					<h3>E-Mail Settings</h3>
					<p>Change your e-mail address.</p>
			</a></li>
			<li data-theme="c"><a href="<?=base_url() ?>settings/password" data-ajax="false">
					<h3>Password Settings</h3>
					<p>Change your password.</p>
			</a></li>
			<li data-theme="c"><a href="<?=base_url() ?>home/logout" data-ajax="false">
					<h3>Logout</h3>
					<p></p>
			</a></li>
			<li data-theme="c"><a href="<?=base_url() ?>settings/delete" data-ajax="false">
					<h3>Delete</h3>
					<p></p>
			</a></li>
		</ul>
	</div>
</div>

</body>
</html>
