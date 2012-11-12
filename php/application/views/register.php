<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
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
    
   
    <div data-role="content">
    
     <form action="<?=base_url()?>login/create_account" name="app" method="post" accept-charset="utf-8">	
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
                          'name'        => 'password2',
                          'id'          => 'password2',
                          'maxlength'   => '30',
                          'placeholder' => 'Confirm Password'
                    );
					
					echo form_password($data);  
					?>
				</fieldset>
			</li>	
		</ul><br />
		
		
		<script type="text/javascript">
		
		function formsubmit(form){
		form.submit();
		}
		
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
        if (y==null || y.trim()==""||y.length<6) {
        $( "#formValidation" ).popup( "open" );
            return false;
        }
        
        
         var y=document.forms["app"]["checkbox-1"].checked;
        if (!y) {
        $( "#formValidation3" ).popup( "open" );
            return false;
        }
        
         var x=document.forms["app"]["password"].value;
        if (x==null || x.trim()==""||x.length<6) {
           $( "#formValidation2" ).popup( "open" );
            return false;
        }
        var y=document.forms["app"]["password2"].value;
        if (y==null || y.trim()==""||y.length<6) {
        $( "#formValidation2" ).popup( "open" );
            return false;
        }
        
        if(x!=y){
         $( "#formValidation2" ).popup( "open" );
            return false;
        }else {
        form.submit();
        }
        
    }
</script>
		
		
			
		
							<fieldset data-role="controlgroup">
					<input type="checkbox" name="checkbox-1" id="checkbox-1" class="custom" />
<label for="checkbox-1">I agree with the <a href="">Terms of Use</a></label>
				</fieldset><br />
				 <input type="submit" name ="Sign up for Appoint.ee" value="Sign up for Appoint.ee" onclick="formvalidation('app');return false;">
	
		 </form>		
    </div>
   
   
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
				<!--a href="<?=base_url().'login'?>" data-role="button">Close</a-->
				<a  data-role="button">Close</a>
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
				<b>First Name and Last Name cannot be empty or Email invalid!</b>
			</p>
			<p>
				<a href="#" data-role="button" data-rel="back">OK</a>
			</p>
		</div>
		<!-- Pop-up End -->
		
		<!-- Pop-up Begin -->
		<div data-role="popup" id="formValidation2" 
			data-dismissable="false" class="appointee_popup"
			data-overlay-theme="a">
			<div data-theme="e" data-role="header" class="dialog_header">
				Form Validation
			</div>
			<p>
				<b>Password too short or fields do not match!</b>
			</p>
			<p>
				<a href="#" data-role="button" data-rel="back">OK</a>
			</p>
		</div>
		<!-- Pop-up End -->
		
		<!-- Pop-up Begin -->
		<div data-role="popup" id="formValidation3" 
			data-dismissable="false" class="appointee_popup"
			data-overlay-theme="a">
			<div data-theme="e" data-role="header" class="dialog_header">
				Terms & Conditions
			</div>
			<p>
				<b>Please agree to our Terms and Conditions!</b>
			</p>
			<p>
				<a href="#" data-role="button" data-rel="back">OK</a>
			</p>
		</div>
		<!-- Pop-up End -->
</div>

</body>
</html>
