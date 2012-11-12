<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
	<title>Appoint.ee</title>
	<?php includeCss() ?>
</head>
<body>

<div data-role="page" id="personal">
	<div data-theme="a" data-role="header">
		<div class="header_text">
			<img src="<?=base_url() ?>asset/images/Settings.png">
		</div>
		<a data-role="button" href="<?=base_url().'settings'?>" data-transition="fade"
			 data-icon="arrow-l" data-iconpos="left"
			class="ui-btn-left" data-ajax="false"> Back </a>
	</div>
	<form action="<?=base_url()?>settings/save_person" name="app" method="post" accept-charset="utf-8">	
	<div data-role="content" style="padding: 15px">
		<ul data-role="listview" data-divider-theme="d" data-inset="false">
			<li data-role="list-divider" role="heading">Personal Settings</li>
			<li data-theme="c">
				<fieldset data-role="controlgroup">
					<label for="textinput12"> First Name </label> <input name="first_name"
						id="first_name"  value="<?=$first_name?>" type="text">
				</fieldset>
			</li>
			<li data-theme="c">
				<fieldset data-role="controlgroup">
					<label for="textinput12"> Last Name </label> <input name="last_name"
						id="last_name" placeholder="" value="<?=$last_name?>" type="text">
				</fieldset>
			</li>
			<li data-theme="c"><input type="submit" value="Save" onclick="formvalidation('app');return false;"></li>
		</ul>
	</div>
	
		<script type="text/javascript">
		
	function formvalidation(form) {
     
       
        var x=document.forms["app"]["first_name"].value;
        if (x==null || x.trim()=="") {
           $( "#formValidation" ).popup( "open" );
            return false;
        }
        var y=document.forms["app"]["last_name"].value;
        if (y==null || y.trim()=="") {
        $( "#formValidation" ).popup( "open" );
            return false;
        }
        
        if (x!=y) {
           $( "#formValidation" ).popup( "open" );
            return false;
        }
       
        form.submit();
        
    }
</script>
	
	</form>
	

	
	<!-- Pop-up Begin -->
		<div data-role="popup" id="formValidation" 
			data-dismissable="false" class="appointee_popup"
			data-overlay-theme="a">
			<div data-theme="e" data-role="header" class="dialog_header">
				Form Validation
			</div>
			<p>
				<b>First Name or Last Name cannot be empty.</b>
			</p>
			<p>
				<a href="#" data-role="button" data-rel="back">Close</a>
			</p>
		</div>
		<!-- Pop-up End -->
	
</div>

</body>
</html>
