<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
	<title>Appoint.ee</title>
	<link rel="stylesheet" href="style.css" />
	<link rel="stylesheet" href="http://jquerymobile.com/demos/1.1.1/css/themes/default/jquery.mobile-1.1.1.css" />
	
	
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
    
    <form action="<?=base_url()?>contacts/contact_update" name="app" method="post" accept-charset="utf-8">	
		<ul data-role="listview" data-divider-theme="d" data-inset="false">
			<li data-role="list-divider" role="heading">Edit Contact</li>
			<li data-icon="arrow-u">
				<div style="display: inline-block; float:left; height: 50px;">
				<img style="width: 50px; height: 50px" src="http://your.asda.com/assets/athletes/avatar-blank-695c8f738ed7f135c0a9f4f825da458f.jpg">
				</div>
				<a data-transition="fade" href="#"  
					data-ajax="false" style="height: 22px; padding-top: 16px;"f>
			Upload Photo </a>
			</li>
			
			<li data-theme="c">
				<fieldset data-role="controlgroup">
				 <input name="uid"
						id="uid" type="hidden" value="<?=$uid?>">
				
				
					<label for="first_name"> </label>
					<?php 
					$data = array(
                          'name'        => 'first_name',
                          'id'          => 'first_name',
                          'maxlength'   => '30',
                          'value' => $first_name,
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
                          'value' => $last_name,
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
                          'value' => $mail,
                    );
					
					echo form_input($data);  
					?>
				
				</fieldset>
			</li>
				<input type="submit" name="save" value="Save" onclick="formvalidation('app');return false;">
		
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
        
        if (x!=y) {
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
				<a href="#" data-role="button" data-rel="back">Close</a>
			</p>
		</div>
		<!-- Pop-up End -->
</div>

</body>
</html>
