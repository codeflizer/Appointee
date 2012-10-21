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

<div data-role="page" id="new_app_2">
    <div data-theme="a" data-role="header">
         <a data-role="button" data-transition="fade" href="#popupBasic" class="ui-btn-right"
			 data-position-to="window" data-rel="popup">
            Discard
        </a>
		<div class="header_text">
			<img src="<?=base_url() ?>asset/images/Appointment.png">
		</div>
 <a data-role="button" data-transition="fade" href="<?=base_url().'app'?>" data-icon="arrow-l"
        data-iconpos="left" class="ui-btn-left" data-ajax="false">
            Back
        </a>
    </div>
   
	<div data-role="content" style="padding: 15px">
    <?php echo form_open('app/new_slot') ?>
		<ul data-role="listview" data-divider-theme="d" data-inset="false">
			<li data-role="list-divider" role="heading">
				1. Timeslot
			</li>
			<li data-theme="c">
				<h3>Start</h3>
				<label for="startdate"></label>
				<input name="startdate" id="startdate" type="text"  placeholder="Start Date" data-role="datebox" 
				data-options='{"mode":"datebox", "useNewStyle":true}'/>
				   
				<label for="starttime"></label>
				<input name="starttime" id="starttime" type="text" data-role="datebox" 
				data-options='{"mode": "timebox", "overrideTimeFormat": 24}' placeholder="Start Time"/>
			</li>
			<li data-theme="c">
				<h3>End</h3>
				<label for="enddate"></label>
				<input name="enddate" id="enddate" type="text" data-role="datebox" 
				data-options='{"mode":"datebox", "useNewStyle":true}' placeholder="End Date"/>
				   
				<label for="endtime"></label>
				<input name="endtime" id="endtime" type="text" data-role="datebox" 
				data-options='{"mode": "timebox", "overrideTimeFormat": 24}' placeholder="End Time"/>
			</li>
			
			<li data-theme="c">
				<fieldset data-role="controlgroup">
				<label for="participants">
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
        <?php echo form_submit('next','Add & Next Slot'); ?>
        <?php echo form_submit('finish','Add & Finish'); ?>
         
        <?php
          $ci =& get_instance();
          $slots_available = $ci->session->userdata('slots');
          if($slots_available)  {?> 
          
          
          <a data-role="button" data-transition="fade" href="<?=base_url()?>app/summary"  data-ajax="false" >
			Discard Slot & Finish</a> 
			
		<?php }?>
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
	
</div>
</body>
</html>
