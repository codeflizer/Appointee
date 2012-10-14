<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Appoint.ee</title>
	
	<?php includeCss() ?>
	
	<!--script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/i18n/jquery.mobile.datebox.i18n.en_US.utf8.js"></script>
	<script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/1.1.0/jqm-datebox-1.1.0.mode.durationbox.js"></script>
    <script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/latest/jqm-datebox.core.min.js"></script>
	<script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/latest/jqm-datebox.mode.calbox.min.js"></script-->
	

</head>
<body>
 
<div data-role="page" id="new_app_1">
<?php echo form_open('app/slot') ?>
    <div data-theme="a" data-role="header">
        <a data-role="button" data-transition="fade" href="<?=base_url().'home'?>" class="ui-btn-right"
			data-ajax="false">
            Discard
        </a>
		<h3>
            New Appointment
        </h3>
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
					<label for="title"> <?php echo form_error('title'); ?>
					</label>
					
				<?php 
					$data = array(
                          'name'        => 'title',
                          'id'          => 'title',
                          'maxlength'   => '30',
                          'placeholder' => 'Title',
                          'value'       => set_value('title')
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
				<fieldset data-role="controlgroup">
				<label for="duration"><?php echo form_error('duration'); ?></label>
				
				<?php 
				if (!isset($duration)){
				    $duration='';
				} ?>

				<input name="duration" id="duration" type="date" data-role="datebox"
					data-options='{"mode": "durationbox"}' placeholder="Duration" value="><?=$duration;?>" >
				</fieldset>
			</li>
			<li data-theme="c">
				<fieldset data-role="controlgroup">
				<label for="participants"> <?php echo form_error('participants'); ?>
				</label>
				
				<?php 
				if (!isset($participants)){
				    $participants='';
				}
				
					$data = array(
                          'name'        => 'participants',
                          'id'          => 'participants',
                          'placeholder' => 'Participants',
                           'value'       => $participants
                    );
					
					echo form_textarea($data);
				?>
			
				</fieldset>
			</li>
				
		</ul><br />
		<?php echo form_submit('slot','Next'); ?>
		
	</div>
</form>	
</div>

</body>
</html>
