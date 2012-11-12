<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
	<title>Appoint.ee</title>
	
	<link rel="stylesheet" href="http://jquerymobile.com/demos/1.1.1/css/themes/default/jquery.mobile-1.1.1.css" />
	<link rel="stylesheet" href="style.css" />
	
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="http://jquerymobile.com/demos/1.1.1/js/jquery.mobile-1.1.1.js"></script>
</head>
<body>

<div data-role="page" id="contacts_detail">
    <div data-theme="a" data-role="header">
        <a data-role="button" href="<?=base_url().'contacts'?>" data-icon="arrow-l" data-iconpos="left"
        class="ui-btn-left">
            Back
        </a>
		<div class="header_text_2">
			<img src="<?=base_url() ?>asset/images/Contacts.png">
		</div>
    </div>
    
    <div data-role="content">
    <form action="<?=base_url()?>contacts/add_contact" name="app" method="post" accept-charset="utf-8">	
		<ul data-role="listview" data-divider-theme="d" data-inset="false">
			<li data-role="list-divider" role="heading">Add Contact</li>
			
			<li data-theme="c">
				<fieldset data-role="controlgroup">
					<label for="first_name"> </label>
					<?php 
					$data = array(
                          'name'        => 'first_name',
                          'id'          => 'first_name',
                          'maxlength'   => '30',
                          'placeholder' => 'First Name',
                    );
					
					echo form_input($data);  
					?>
				</fieldset>
			</li>
			<li data-theme="c">
				<fieldset data-role="controlgroup">
					<label for="last_name"> </label> 
					<?php 
					$data = array(
                          'name'        => 'last_name',
                          'id'          => 'last_name',
                          'maxlength'   => '30',
                          'placeholder' => 'Last Name',
                    );
					
					echo form_input($data);  
					?>
			
				</fieldset>
			</li>
			<li data-theme="c">
				<fieldset data-role="controlgroup">
					<label for="textinput12"> </label> 
					<?php 
					$data = array(
                          'name'        => 'mail',
                          'id'          => 'mail',
                          'maxlength'   => '30',
                          'placeholder' => 'E-Mail',
                    );
					
					echo form_input($data);  
					?>
				
				</fieldset>
			</li>
				<input type="submit" name ="add" value="Add" onclick="formvalidation('app');return false;">
		</ul><br />
		
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
        
        var y=document.forms["app"]["mail"].value;
        if (y==null || y.trim()=="") {
        $( "#formValidation" ).popup( "open" );
            return false;
        }
        
       
        form.submit();
        
    }
</script>

			</form>
    </div>
    
    <!-- Pop-up Begin -->
		<div data-role="popup" id="formValidation" 
			data-dismissable="false" class="appointee_popup"
			data-overlay-theme="a">
			<div data-theme="e" data-role="header" class="dialog_header">
				Form Validation
			</div>
			<p>
				<b>Fields cannot be empty!</b>
			</p>
			<p>
				<a href="#" data-role="button" data-rel="back">OK</a>
			</p>
		</div>
		<!-- Pop-up End -->
</div>

</body>
</html>
