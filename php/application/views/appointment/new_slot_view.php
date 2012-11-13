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
	
	<style>
	   
	    .ui-icon-datebox { 
	        background-image: none ! important;
	        
        }
       
        .ui-input-datebox  a{
        display: none ! important; 
            width: 0 ! important;
             height: 0 ! important; 
        }
 </style>
	
	
	<script type="text/javascript">
		
	function formvalidation(form) {
       
        var x=document.forms["app"]["startdate"].value;
        if (x==null || x.trim()=="") {
           $( "#formValidation" ).popup( "open" );
            return false;
        }
        var x=document.forms["app"]["starttime"].value;
        if (x==null || x.trim()=="") {
        $( "#formValidation" ).popup( "open" );
            return false;
        }
       
        form.submit();
        
    }
</script>

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
	<form action="<?=base_url()?>app/new_slot" name="app" method="post" accept-charset="utf-8" data-ajax="false">	
		<ul data-role="listview" data-divider-theme="d" data-inset="false">
			<li data-role="list-divider" role="heading">
				New Timeslot
			</li>
			<li data-theme="c">
				<h3>Start</h3>
				<label for="startdate"></label>
				<input name="startdate" id="startdate" type="text"  placeholder="Start Date" data-role="datebox" 
				data-options='{"mode":"datebox", "useNewStyle":true, "useFocus": true}'/>
				   
				<label for="starttime"></label>
				<input name="starttime" id="starttime" type="text" data-role="datebox" 
				data-options='{"mode": "timebox", "overrideTimeFormat": 24, "useFocus": true}' placeholder="Start Time"/>
			</li>
			</ul>
			<div class="appointee-collapse" style="margin:15px 0;" data-theme="d" data-role="collapsible" data-inset="false">
            <h4 ><small>End (optional)</small></h4>
            <ul data-role="listview">
			<li data-theme="c">
				
				<label for="enddate"></label>
				<input name="enddate" id="enddate" type="text" data-role="datebox" 
				data-options='{"mode":"datebox", "useNewStyle":true, "useFocus": true}' placeholder="End Date"/>
				   
				<label for="endtime"></label>
				<input name="endtime" id="endtime" type="text" data-role="datebox" 
				data-options='{"mode": "timebox", "overrideTimeFormat": 24, "useFocus": true}' placeholder="End Time"/>
			</li>
			</ul>
			</div>
			
			<ul data-role="listview" data-divider-theme="d" data-inset="false">
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
                           'autocomplete' => 'off'
                    );
					
					echo form_input($data);
				?>
				
				<!-- autocomplete begin -->
				<ul id="suggestions" data-role="listview" data-inset="true"></ul>
				<script type="text/javascript">
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
		
		
		
		
		
		<input type="submit" name="next" value="Add & Next Slot" onclick="formvalidation('app');return false;" data-ajax="false"/>
		<input type="submit" name="finish" value ="Add & Finish" onclick="formvalidation('app');return false;" data-ajax="false"/>
         
        <?php
          $ci =& get_instance();
          
          $slots_available = $ci->session->userdata('slots');
        
          if($slots_available)  { ?> 
          
          
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
		<!-- Pop-up End -->	<!-- Pop-up Begin -->
		<div data-role="popup" id="formValidation" 
			data-dismissable="false" class="appointee_popup"
			data-overlay-theme="a">
			<div data-theme="e" data-role="header" class="dialog_header">
				Form Validation
			</div>
			<p align="center">
				<b>Please fill in at least Start Date and Time. </b> <br/> 
				If you do not fill in the End Date and Time, <br/> they will be calculated based on the previously provided duration.
			</p>
			<p>
				<a href="#" data-role="button" data-rel="back">OK</a>
			</p>
		</div>
		<!-- Pop-up End -->
		
		
	
</div>
</body>
</html>
