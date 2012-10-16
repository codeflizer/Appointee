<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Appoint.ee</title>
	
	<?php includeCss() ?>
	<link rel="stylesheet" type="text/css" href="/appoint/asset/datebox/jqm-datebox.min.css" /> 
	<script type="text/javascript" src="/appoint/asset/datebox/jqm-datebox.core.min.js"></script>
	<script type="text/javascript" src="/appoint/asset/datebox/jqm-datebox.mode.calbox.min.js"></script>
	<script type="text/javascript" src="/appoint/asset/datebox/jqm-datebox.mode.datebox.min.js"></script>
	<script type="text/javascript" src="/appoint/asset/datebox/jquery.mobile.datebox.i18n.en_US.utf8.js"></script>
	<script type="text/javascript" src="/appoint/asset/datebox/jqm-datebox-1.1.0.mode.durationbox.js"></script>

</head>
<body>

<div data-role="page" id="new_app_2">
    <div data-theme="a" data-role="header">
        <a data-role="button" data-transition="fade" href="<?=base_url().'home'?>" class="ui-btn-right"
			data-ajax="false">
            Discard
        </a>
		<h3>
            New Appointment
        </h3>
    </div>
   
	<div data-role="content" style="padding: 15px">
    <?php echo form_open('app/save_edit') ?>
		<ul data-role="listview" data-divider-theme="d" data-inset="false">
			<li data-role="list-divider" role="heading">
				1. Timeslot
			</li>
			
			<li data-theme="c">
				<h3>Start</h3>
				<label for="startdate"></label>
				<input name="startdate" id="startdate" type="text" data-role="datebox" 
				data-options='{"mode":"datebox", "useNewStyle":true}' placeholder="Start Date" value="<?php if(isset($startdate))echo $startdate; ?>"/>
				   
				<label for="starttime"></label>
				<input name="starttime" id="starttime" type="text" data-role="datebox" 
				data-options='{"mode": "timebox", "overrideTimeFormat": 24}' placeholder="Start Time"value="<?php if(isset($starttime))echo $starttime; ?>"/>
			</li>
			<li data-theme="c">
				<h3>End</h3>
				<label for="enddate"></label>
				<input name="enddate" id="enddate" type="text" data-role="datebox" 
				data-options='{"mode":"datebox", "useNewStyle":true}' placeholder="End Date"value="<?php if(isset($enddate))echo $enddate; ?>"/>
				   
				<label for="endtime"></label>
				<input name="endtime" id="endtime" type="text" data-role="datebox" 
				data-options='{"mode": "timebox", "overrideTimeFormat": 24}' placeholder="End Time"value="<?php if(isset($endtime))echo $endtime; ?>"/>
			</li>
			
			<li data-theme="c">
				<fieldset data-role="controlgroup">
				<label for="location">
				</label>
				
				<?php 
					$data = array(
                          'name'        => 'location',
                          'id'          => 'location',
                          'placeholder' => 'Location',
                           'maxlength'   => '30',
                    );
					
					echo form_input($data);
				?>
			
				</fieldset>
			</li>
				
		</ul><br />
        <?php echo form_submit('save','Save'); ?>
         
    
          <a data-role="button" data-transition="fade" href="<?=base_url()?>app/summary"  data-ajax="false" >
			Discard</a> 
	
    </form>         
	</div>
	
</div>
</body>
</html>
