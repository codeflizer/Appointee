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
        <a data-role="button" href="<?=base_url().'contacts'?>" data-icon="arrow-l" data-iconpos="left"
        class="ui-btn-left">
            Back
        </a>
		<div class="header_text_2">
			<img src="<?=base_url() ?>asset/images/Contacts.png">
		</div>
    </div>
    
    <div data-role="content">
     <?php echo form_open('contacts/contact_update') ?>
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
				<?php echo form_submit('save','Save'); ?>	
		
		</ul><br />
			</form>
    </div>
</div>

</body>
</html>
