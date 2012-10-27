<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
	<title>Appoint.ee</title>
	
	<?php includeCss() ?>
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>asset/datebox/jqm-datebox.min.css" /> 
	 <link rel="stylesheet" href="<?=base_url()?>asset/autosuggest/token-input.css" type="text/css" />
	<script type="text/javascript" src="<?=base_url()?>asset/datebox/jqm-datebox.core.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>asset/datebox/jqm-datebox.mode.calbox.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>asset/datebox/jqm-datebox.mode.datebox.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>asset/datebox/jquery.mobile.datebox.i18n.en_US.utf8.js"></script>
	<script type="text/javascript" src="<?=base_url()?>asset/datebox/jqm-datebox-1.1.0.mode.durationbox.js"></script>
   
     
   
   	

</head>
<body>
 
<div data-role="page" id="new_app_1">

    <div data-theme="a" data-role="header">
    
    <a data-role="button" data-transition="fade" href="#popupBasic" class="ui-btn-right"
			 data-position-to="window" data-rel="popup">
            Discard
        </a>

		<div class="header_text">
			<img src="<?=base_url() ?>asset/images/Appointment.png">
		</div>
        <a data-role="button" data-transition="fade" href="<?=base_url().'home'?>" data-icon="arrow-l"
        data-iconpos="left" class="ui-btn-left" data-ajax="false">
            Back
        </a>
    </div>
	<div data-role="content" style="padding: 15px">
	<form action="<?=base_url()?>app/save" name="app" data-ajax="false"  method="post" accept-charset="utf-8">	
		<ul data-role="listview" data-divider-theme="d" data-inset="false">
			<li data-role="list-divider" role="heading">
			Participants
			</li>
			<li data-theme="c">
				<div class="as_participants">
					<input type="text" id="demo-input-local-custom-formatters" data-role="none" class="asg"/>
						<script type="text/javascript">
						$(document).ready(function() {
						
						
							// entries
							$("#demo-input-local-custom-formatters").tokenInput([
							
							<?php 
						
						$ci =& get_instance();
						 $users = $ci->db->query(  'SELECT u.first_name, u.last_name, u.mail FROM users u');
                         $users = $users->result_array();
							
					
						foreach ($users as $user) { ?>
						
						{
								"first_name": "<?=$user['first_name']?>",
								"last_name": "<?=$user['last_name']?>",
								"email": "<?=$user['mail']?>",
								"url": "http://your.asda.com/assets/athletes/avatar-blank-695c8f738ed7f135c0a9f4f825da458f.jpg"
							},
						<?php } ?>
						
						  ],
							
	                         {
							  propertyToSearch: "first_name",
							  resultsFormatter: function(item){ return "<li>" + "<img src='" + item.url + "' title='" + item.first_name + " " + item.last_name + "' height='25px' width='25px' />" + "<div style='display: inline-block; padding-left: 10px;'><div class='full_name'>" + item.first_name + " " + item.last_name + "</div><div class='email'>" + item.email + "</div></div></li>" },
							  tokenFormatter: function(item) { return "<li><p>" + item.first_name + " <b>" + item.last_name + "</b></p></li> <input value='"  + item.first_name + " " + item.last_name + "' type='hidden' name='participants[]' />" },
							  // pre-populated entries
							  prePopulate: [

								<?php 
					
						//multiple participants already set?
						if (!isset($participants)){
						   //if not is an initial participant set by referring from contact
						   if(isset($par)){
							 $participants[]=$par;
							} else {
							    $participants=array();
							}
							 
						} ?>
						
						 <?php
						
						$ci =& get_instance();
						 $users = $ci->db->query(  'SELECT u.first_name, u.last_name, u.mail
						                              FROM users u');
                         $users = $users->result_array();
							
					
						foreach ($users as $user) { 

						$name =$user['first_name'].' '.$user['last_name'];
						
							foreach($participants as $part){
		
							
							    if($name==trim($part)){
							    error_log('found '.$name) ?>
							    
							    {
							   "first_name": "<?=$user['first_name']?>",
								"last_name": "<?=$user['last_name']?>",
								"email": "<?=$user['mail']?>",
								"url": "http://your.asda.com/assets/athletes/avatar-blank-695c8f738ed7f135c0a9f4f825da458f.jpg"
									},
							        
							    <?php } 
							}	}?>		
								]
						  } );
						});
						</script>
				</div>
			</li>	
			
			<li data-role="list-divider" role="heading">
				General Information
			</li>
			
			<li data-theme="c">
			 
				<fieldset data-role="controlgroup">
					<label for="title"> <?php echo form_error('title'); ?>
					</label>
					
				<?php 
				
				if (!isset($title)){
				    $title='';
				}
					$data = array(
                          'name'        => 'title',
                          'id'          => 'title',
                          'maxlength'   => '30',
                          'placeholder' => 'Title',
                          'value'       => $title
                    );
					
					echo form_input($data); 
				?>
				
				</fieldset>
			</li>
			<li data-theme="c">
				<label for="description"> <?php echo form_error('description'); ?>
				</label>
				
				<?php 
				
				if (!isset($description)){
				    $description='';
				}
				
					$data = array(
                          'name'        => 'description',
                          'id'          => 'description',
                          'placeholder' => 'Description',
                           'value'       => $description
                    );
					
					echo form_textarea($data);
				?>
				
			</li>
			<li data-theme="c">
				
				<label for="duration"><?php echo form_error('duration'); ?></label>
				
				<?php 
				if (!isset($duration)){
				    $duration='';
				} ?>
				 
			    <input name="duration" id="duration" value="<?=$duration?>" placeholder="Duration" type="text" data-role="datebox" data-options='{"mode":"durationbox", "useNewStyle":true}' />
			 
				
			</li>
			<?php /*--li data-theme="c">
				
           			
				<div data-role="fieldcontain">
				
					<label for="select-choice-13" class="select"></label>
					<select name="participants[]" id="participants[]" data-native-menu="false" 
					data-theme="c"  multiple="multiple" data-native-menu="false">
					<?php 
					
						//multiple participants already set?
						if (!isset($participants)){
						   //if not is an initial participant set by referring from contact
						   if(isset($par)){
							 $participants[]=$par;
							} else {
							    $participants=array();
							}
							 
						}
						
		           
					?>
					
					
						<option>Choose participants</option>
						<?php 
						
						$ci =& get_instance();
						 $users = $ci->db->query(  'SELECT u.first_name, u.last_name
						                              FROM users u ');
                         $users = $users->result_array();
							
					
						foreach ($users as $user) { ?>
						
						
						<option value=" <?php 
						
						$name =$user['first_name'].' '.$user['last_name'];
						
						echo $name;  ?>"
						
						
						<?php 
							
							foreach($participants as $part){
							
							    if($name==trim($part)){
							        echo 'selected="selected"';
							    }
							}

						?>
						
						>
						
						<?php echo $name; ?>
						
						</option>
						
						<?php } ?>
					</select>
				
				</div>						
			
				
			</li--*/?>
				
		</ul><br />
		
<script type="text/javascript">
		
	function formvalidation(form) {
     
       
        var x=document.forms["app"]["title"].value;
        if (x==null || x.trim()=="") {
           $( "#formValidation" ).popup( "open" );
            return false;
        }
        var x=document.forms["app"]["description"].value;
        if (x==null || x.trim()=="") {
        $( "#formValidation" ).popup( "open" );
            return false;
        }
        var x=document.forms["app"]["participants[]"];
        if (!x) {
           $( "#formValidation" ).popup( "open" );
            return false;
        }
        var x=document.forms["app"]["duration"].value;
        if (x==null || x.trim()=="") {
           $( "#formValidation" ).popup( "open" );
            return false;
        }
       
        form.submit();
        
    }
</script>
		<?php //<input type="submit" value="Save" onclick="formvalidation('app');return false;" />
		?>
		 <a data-role="button" data-transition="fade" href="<?=base_url()?>app/summary"  data-ajax="false" >
			Save</a> 
			<a data-role="button" data-transition="fade" href="<?=base_url()?>app/summary"  data-ajax="false" >
			Discard</a> 
		</form>	
		
	</div>

<!-- Pop-up Begin -->
		<div data-role="popup" id="popupBasic" 
			data-dismissable="false" class="appointee_popup"
			data-overlay-theme="a">
			<div data-theme="e" data-role="header" class="dialog_header">
				Discard Appointment
			</div>
			<p>
				<b>Do you really want to discard the new appointment?</b>
			</p>
			<p>
				<a href="<?=base_url().'home'?>" data-role="button">Yes</a>
				<a href="#" data-role="button" data-rel="back">No</a>
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
				<b>Please fill out Title, Description, Participants and Duration</b>
			</p>
			<p>
				<a href="#" data-role="button" data-rel="back">OK</a>
			</p>
		</div>
		<!-- Pop-up End -->
</div>


 
</body>
</html>
