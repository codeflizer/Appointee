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
 <?php echo form_open('app/save') ?>
<div data-role="page" id="new_app_1">
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
					<label for="title">
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
				<label for="description">
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
				<fieldset data-role="controlgroup">
				<label for="duration"></label>

				<input name="duration" id="duration" type="date" data-role="datebox"
					data-options='{"mode": "durationbox"}' placeholder="Duration">
				</fieldset>
			</li>
			<li data-theme="c">
				<fieldset data-role="controlgroup">
				<label for="participants">
				</label>
				
				<?php 
					$data = array(
                          'name'        => 'participants',
                          'id'          => 'participants',
                          'value' => $participants,
                    );
					
					echo form_textarea($data);
				?>
			
				</fieldset>
			</li>
				
		</ul><br />
		<?php echo form_submit('save','save'); ?>
		
	</div>
	
</div>
</form>
</body>
</html>
