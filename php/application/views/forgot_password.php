<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
	<title>Appoint.ee</title>
	
	<?php includeCss() ?>
</head>
<body>

<div data-role="page" id="contacts_detail" data-ajax="false">
    <div data-theme="a" data-role="header" data-ajax="false">
        <a data-role="button" href="<?=base_url()?>" data-icon="arrow-l" data-iconpos="left"
        class="ui-btn-left" data-ajax="false">
            Back
        </a>
        <div style="text-align: center; margin-top: 5px;">
			<img src="<?=base_url() ?>asset/images/Logo_small.png">
		</div>
    </div>
   
    <div data-role="content" data-ajax="false">
      <form action="" name="app" method="post" accept-charset="utf-8">	
		<ul data-role="listview" data-divider-theme="d" data-inset="false">
			<li data-role="list-divider" role="heading">Forgot your password?</li>
			<li data-theme="c">
				<fieldset data-role="controlgroup">
					<label for="textinput12">  </label> <input name="mail"
						id="mail" placeholder="E-Mail" value="" type="text">
				</fieldset>
			</li>

			
		</ul><br />
		</form>
		
		
		<script type="text/javascript">
		
	function popup() {
	
	 var x=document.forms["app"]["mail"].value;
        if (x==null || x.trim()=="") {
           $( "#formValidation" ).popup( "open" );
           
        }else {
     
       
       
        $( "#complete" ).popup( "open" );
        }
     
        
    }
</script>
		
		
				<a data-role="button" data-transition="fade" onclick="popup();"
			data-rel="dialog">Send me a new password!</a>

    </div>
    
   <!-- Pop-up Begin -->
		<div data-role="popup" id="complete" 
			data-dismissable="false" class="appointee_popup"
			data-overlay-theme="a">
			<div data-theme="e" data-role="header" class="dialog_header">
				Appoint.ee
			</div>
			<p>
				<b>We have sent you a new password!</b>
			</p>
			<p>
				<a href="<?=base_url().'/login'?>" data-role="button" >OK</a>
			</p>
		</div>
		<!-- Pop-up End -->
		
		 <!-- Pop-up Begin -->
		<div data-role="popup" id="formValidation" 
			data-dismissable="false" class="appointee_popup"
			data-overlay-theme="a">
			<div data-theme="e" data-role="header" class="dialog_header">
				Form Validation
			</div>
			<p>
				<b>Email cannot be empty!</b>
			</p>
			<p>
				<a href="#" data-role="button" data-rel="back">OK</a>
			</p>
		</div>
		<!-- Pop-up End -->
   
 
</div>

 




</body>
</html>
