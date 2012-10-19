<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Appoint.ee</title>
	
	<?php includeCss() ?>
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>asset/datebox/jqm-datebox.min.css" /> 
	<script type="text/javascript" src="<?=base_url()?>asset/datebox/jqm-datebox.core.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>asset/datebox/jqm-datebox.mode.calbox.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>asset/datebox/jqm-datebox.mode.datebox.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>asset/datebox/jquery.mobile.datebox.i18n.en_US.utf8.js"></script>
	<script type="text/javascript" src="<?=base_url()?>asset/datebox/jqm-datebox-1.1.0.mode.durationbox.js"></script>



</head>
<body>

<div data-role="page" id="new_app_1">
 <?php echo form_open('app/save') ?>
    <div data-theme="a" data-role="header">
        <a data-role="button" data-transition="fade" href="<?=base_url().'home'?>" class="ui-btn-right"
			data-ajax="false">
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
		<ul data-role="listview" data-divider-theme="d" data-inset="false">
			<li data-role="list-divider" role="heading">
				General Information
			</li>
			
			<li data-theme="c">
				<fieldset data-role="controlgroup">
					<label for="title"><?php echo form_error('title'); ?>
					</label>
					
				<?php 
					$data = array(
                          'name'        => 'title',
                          'id'          => 'title',
                          'maxlength'   => '30',
                          'value' => $title,
                    );
					
					echo form_input($data); 
				?>
				
				</fieldset>
			</li>
			<li data-theme="c">
				<label for="description"><?php echo form_error('description'); ?>
				</label>
				
				<?php 
					$data = array(
                          'name'        => 'description',
                          'id'          => 'description',
                          'value' => $description,
                    );
					
					echo form_textarea($data);
				?>
				
			</li>
			<li data-theme="c">
				
				<label for="duration"></label>

				 <input name="duration" id="duration" type="text" data-role="datebox" data-options='{"mode":"durationbox", "useNewStyle":true}' />
			
			</li>
			<li data-theme="c">
				
           			
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
			
				
			</li>
				
		</ul><br />
		<?php echo form_submit('save','save'); ?>
		


		
	</div>
	</form>

</div>

</body>
</html>
