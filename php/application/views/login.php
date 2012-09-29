<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Appoint.ee</title>
	
	<link rel="stylesheet" href="<?=base_url() ?>asset/jquery.mobile-1.1.1.css" />
  <?php $this->load->helper('url') ?>
	<link rel="stylesheet" href="<?=base_url() ?>asset/style.css" />
	
	<script src="<?=base_url() ?>asset/jquery-1.7.1.min.js"></script>
	<script src="<?=base_url() ?>asset/jquery.mobile-1.1.1.js"></script>
</head>
<body>
<form method="post" accept-charset="utf-8" action="login/perform_login/"  id="login" />
 
	<div data-role="page" data-theme="a" id="page12">
		<div data-role="content" style="padding: 15px">
			<div style="text-align: center;">
				<img src="<?=base_url() ?>asset/images/Logo.png">
			</div>
			<div data-role="fieldcontain">
				<fieldset data-role="controlgroup">       
					<label for="textinput8"> </label> <input name="mail"
						id="mail" placeholder="E-Mail-Address" value="" type="text">
				</fieldset>
			</div>
			<div data-role="fieldcontain">
				<fieldset data-role="controlgroup">
					<label for="textinput9"> </label> <input name="password"
						id="password" placeholder="Password" value="" type="password">
				</fieldset>
			</div>
			<!--<input type="submit" value="Login">-->
      <input type="submit" value="Login" />
			<h4 style="text-align: center;">No account?</h4>
			<a data-role="button" data-transition="fade" data-theme="b"
				href="#page12"> Sign up for Appoint.ee </a>
		</div>
	</div>
  
</form>

</body>
</html>
