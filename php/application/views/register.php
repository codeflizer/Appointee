<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Appoint.ee</title>
	
		<?php includeCss() ?>
</head>
<body>

<div data-role="page" id="contacts_detail">
    <div data-theme="a" data-role="header">
        <a data-role="button" href="<?=base_url()?>" data-icon="arrow-l" data-iconpos="left"
        class="ui-btn-left">
            Back
        </a>
		<div class="header_text">
			<img src="<?=base_url() ?>asset/images/Logo_small.png">
		</div>
    </div>
    <?php echo form_open('login/create_account') ?>
    <div data-role="content">
		<ul data-role="listview" data-divider-theme="d" data-inset="false">
			<li data-role="list-divider" role="heading">Sign up</li>
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
					<label for="last_name"> </label> <?php 
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
					<label for="mail"> </label> <?php 
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
      
      <li data-theme="c">
				<fieldset data-role="controlgroup">
					<label for="password"> </label> <?php 
					$data = array(
                          'name'        => 'password',
                          'id'          => 'password',
                          'maxlength'   => '30',
                          'placeholder' => 'Password'
                    );
					
					echo form_password($data);  
					?>
				</fieldset>
			</li>
		<li data-theme="c">
				<fieldset data-role="controlgroup">
					<label for="password"> </label> <?php 
					$data = array(
                          'name'        => 'password',
                          'id'          => 'password',
                          'maxlength'   => '30',
                          'placeholder' => 'Confirm Password'
                    );
					
					echo form_password($data);  
					?>
				</fieldset>
			</li>	
		</ul><br />
						<fieldset data-role="controlgroup">
					<input type="checkbox" name="checkbox-1" id="checkbox-1" class="custom" />
<label for="checkbox-1">I agree with the <a href="<?=base_url().'login'?>">Terms of Use</a></label>
				</fieldset><br />
				
    </div>
    </form>
    <!--<?php echo form_submit('Sign up for Appoint.ee','Sign up for Appoint.ee'); ?>-->
    <a data-role="button" data-transition="fade" href="#popupBasic" 
			 data-position-to="window" data-rel="popup">Sign up for Appoint.ee</a>
	
		<!-- Pop-up Begin -->
		<div data-role="popup" id="popupBasic" 
			data-dismissable="false" class="appointee_popup"
			data-overlay-theme="a">
			<div data-theme="e" data-role="header" class="dialog_header">
				Thank You For Signing Up!
			</div>
			<p>
				You will receive an email to confirm your e-mail-address. After that you can use Appoint.ee.
			</p>
			<p>
				<a href="<?=base_url().'login'?>" data-role="button">Close</a>
			</p>
		</div>
		<!-- Pop-up End -->	
</div>

</body>
</html>
