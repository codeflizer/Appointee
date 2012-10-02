<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Appoint.ee</title>
	
	<link rel="stylesheet" href="http://jquerymobile.com/demos/1.1.1/css/themes/default/jquery.mobile-1.1.1.css" />
	<link rel="stylesheet" href="style.css" />
	
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="http://jquerymobile.com/demos/1.1.1/js/jquery.mobile-1.1.1.js"></script>
</head>
<body>

<div data-role="page" id="contacts_detail">
    <div data-theme="a" data-role="header">
        <a data-role="button" href="<?=base_url()?>" data-icon="arrow-l" data-iconpos="left"
        class="ui-btn-left">
            Back
        </a>
        <h3>
            Appoint.ee
        </h3>
    </div>
    <div data-role="content">
		<ul data-role="listview" data-divider-theme="d" data-inset="false">
			<li data-role="list-divider" role="heading">Forgot your password?</li>
			<li data-theme="c">
				<fieldset data-role="controlgroup">
					<label for="textinput12">  </label> <input name=""
						id="textinput12" placeholder="E-Mail" value="" type="text">
				</fieldset>
			</li>

			
		</ul><br />
				<a data-role="button" data-transition="fade" href="#complete"
			data-rel="dialog">Send me a new password!</a>
    </div>
</div>
<!-- Complete popup -->
<div data-role="page" id="complete" >
    <div data-theme="a" data-role="header">
		<h3>
           Appoint.ee
        </h3>
    </div>
	<div data-role="content" style="padding: 15px">
		<h3>We have sent you a new password! </h3>
        <a data-role="button" data-transition="fade" data-theme="c" href="<?=base_url()?>">
            Close
        </a>
	</div>
</div>

</body>
</html>
