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
		<div style="text-align: center; margin-top: 5px;">
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
			
		</ul><br />
						<fieldset data-role="controlgroup">
					<input type="checkbox" name="checkbox-1" id="checkbox-1" class="custom" />
<label for="checkbox-1">I agree with the <a href="#">Terms of Use</a></label>
				</fieldset><br />
				
    </div>
    </form>
    <a data-role="button" data-transition="fade" href="#complete"
			data-rel="dialog">Sign up for Appoint.ee</a>
</div>
<!-- Complete popup -->
<div data-role="page" id="complete" >
    <div data-theme="a" data-role="header">
		<h3>
           Appoint.ee
        </h3>
    </div>
	<div data-role="content" style="padding: 15px">
		<h3>Thank You For Signing Up! </h3>
		You will receive an email to confirm your e-mail-address. After that you can use Appoint.ee.
        <a data-role="button" data-transition="fade" data-theme="c" data-ajax="true" href="../login">
            Close
        </a>
	</div>
</div>

</body>
</html>
