<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Appoint.ee</title>
<link rel="stylesheet"
	href="http://jquerymobile.com/demos/1.1.1/css/themes/default/jquery.mobile-1.1.1.css" />
<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script
	src="http://jquerymobile.com/demos/1.1.1/js/jquery.mobile-1.1.1.js"></script>
</head>
<body>
	<div data-role="page" data-theme="a" id="page12">
		<div data-role="content" style="padding: 15px">
			<div style="text-align: center;">
				<img src="images/Logo.png">
			</div>
			<div data-role="fieldcontain">
				<fieldset data-role="controlgroup">
					<label for="textinput8"> </label> <input name="mail"
						id="textinput8" placeholder="E-Mail-Address" value="" type="text">
				</fieldset>
			</div>
			<div data-role="fieldcontain">
				<fieldset data-role="controlgroup">
					<label for="textinput9"> </label> <input name="password"
						id="textinput9" placeholder="Password" value="" type="password">
				</fieldset>
			</div>
			<!--<input type="submit" value="Login">-->
			<!--<p><?=anchor('menu');?></p>	-->		
			<a data-role="button" data-transition="fade" data-theme="a"
				href="login"> Login </a>
			<h4 style="text-align: center;">No account?</h4>
			<a data-role="button" data-transition="fade" data-theme="b"
				href="#page12"> Sign up for Appoint.ee </a>
		</div>
	</div>
</body>
</html>
