<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
	<title>Appoint.ee</title>
	
	<?php includeCss() ?>
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>asset/datebox/jqm-datebox.min.css" /> 
	<script type="text/javascript" src="<?=base_url()?>asset/datebox/jqm-datebox.core.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>asset/datebox/jqm-datebox.mode.calbox.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>asset/datebox/jqm-datebox.mode.datebox.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>asset/datebox/jquery.mobile.datebox.i18n.en_US.utf8.js"></script>
	<script type="text/javascript" src="<?=base_url()?>asset/datebox/jqm-datebox-1.1.0.mode.durationbox.js"></script>
	<script src="<?=base_url()?>asset/autocomplete/jqm.autoComplete-1.4.3-min.js"></script>
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
    </div>
   
	<div data-role="content" style="padding: 15px">
    <?php echo form_open('app/save_edit') ?>
		<ul data-role="listview" data-divider-theme="d" data-inset="false">
			<li data-role="list-divider" role="heading">
				New Timeslot
			</li>
			
			<li data-theme="c">
				<h3>Start</h3>
				<input name="id" id="id" value="<?=$id?>" type="hidden"/>
				<label for="startdate"></label>
				<input name="startdate" id="startdate" type="text" data-role="datebox" 
				data-options='{"mode":"datebox", "useNewStyle":true, "useFocus": true}' placeholder="Start Date" value="<?php if(isset($startdate))echo $startdate; ?>"/>
				   
				<label for="starttime"></label>
				<input name="starttime" id="starttime" type="text" data-role="datebox" 
				data-options='{"mode": "timebox", "overrideTimeFormat": 24, "useFocus": true}' placeholder="Start Time"value="<?php if(isset($starttime))echo $starttime; ?>"/>
			</li>
			<li data-theme="c">
				<h3>End</h3>
				<label for="enddate"></label>
				<input name="enddate" id="enddate" type="text" data-role="datebox" 
				data-options='{"mode":"datebox", "useNewStyle":true, "useFocus": true}' placeholder="End Date"value="<?php if(isset($enddate))echo $enddate; ?>"/>
				   
				<label for="endtime"></label>
				<input name="endtime" id="endtime" type="text" data-role="datebox" 
				data-options='{"mode": "timebox", "overrideTimeFormat": 24, "useFocus": true}' placeholder="End Time"value="<?php if(isset($endtime))echo $endtime; ?>"/>
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
				
				<!-- autocomplete begin -->
				<ul id="suggestions" data-role="listview" data-inset="true"></ul>
				<script>
					$("#new_app_2").bind("pageshow", function(e) {

						var availableTags = ['SMU', 'Sportscomplex Redhill', 'Ristorante Olio', 'Starbucks Venice Hall', 'SMU Library', 'Raffles Place', 'The Lighthouse'];

						$("#location").autocomplete({
							target: $('#suggestions'),
							source: availableTags,
							callback: function(e) {
								var $a = $(e.currentTarget);
								$('#location').val($a.text());
								$("#location").autocomplete('clear');
							},
							link: 'target.html?term=',
							minLength: 1
						});
					});
				</script>
				<!-- autocomplete end -->
				</fieldset>
			</li>
				
		</ul><br />
        <?php echo form_submit('save','Save'); ?>
        <?php 
        //last slot cannot be deleted
        $ci =& get_instance();
       $size= $ci->session->userdata('slots');
        if(sizeof($size)>1){
        
        echo form_submit('delete','Delete Slot'); 
        }
        ?>
         
    
          <a data-role="button" data-transition="fade" href="<?=base_url()?>app/summary"  data-ajax="false" >
			Discard Changes</a> 
	
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
