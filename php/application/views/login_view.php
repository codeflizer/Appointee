<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Appoint.ee</title>
	<?php includeCss() ?>
	
</head>
<body>
	<div data-role="page" data-theme="a" id="page12">
		<div data-role="content" style="padding: 15px">
			<div style="text-align: center;">
				<img src="<?php echo base_url() ?>asset/images/Logo.png">
			</div>
			<?php echo form_open('login/verify_credentials') ?>
			<div data-role="fieldcontain">
				<fieldset data-role="controlgroup">       
					<label for="mail"> </label> 
					
					<?php 
					$data = array(
                          'name'        => 'mail',
                          'id'          => 'mail',
                          'maxlength'   => '20',
                          'placeholder' => 'E-Mail-Address',
                    );
					
					echo form_input($data) ?>
					
				</fieldset>
			</div>
			<div data-role="fieldcontain">
				<fieldset data-role="controlgroup">
					<label for="password"> </label> 
					
					<?php 
					$data = array(
                          'name'        => 'password',
                          'id'          => 'password',
                          'maxlength'   => '50',
                          'placeholder' => 'Password',
                    );
					
					echo form_password($data) ?>
					
				</fieldset>
			</div>
			<input id="remember" name="" type="checkbox" data-mini="true" >
						<label for="remember">
							Remember me
						</label><br />
			
            <?php echo form_submit('Login','Login'); ?>
            </form>
             <div>
            <p style="text-align: center; ">
                <a data-mce-href="Password.html" href="<?=base_url().'login/forgot_password'?>" style="">
                    <b>
                        Forgot your password?
                    </b>
                </a>
            </p>
			</div>
            
			<h4 style="text-align: center;">No account?</h4>
			<a data-role="button" data-transition="fade" data-theme="b"
				href="<?=base_url().'login/register'?>"> Sign up for Appoint.ee </a>
		</div>
	</div>
    
</body>
</html>
