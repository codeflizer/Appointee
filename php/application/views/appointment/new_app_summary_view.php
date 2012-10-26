<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
	<title>Appoint.ee</title>
	
	<?php includeCss() ?>
	<!--link rel="stylesheet" type="text/css" href="http://dev.jtsage.com/cdn/datebox/latest/jqm-datebox.min.css" /> 
    <script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/latest/jqm-datebox.core.min.js"></script>
	<script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/latest/jqm-datebox.mode.calbox.min.js"></script>
	<script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/i18n/jquery.mobile.datebox.i18n.en_US.utf8.js"></script>
	<script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/1.1.0/jqm-datebox-1.1.0.mode.durationbox.js"></script-->


</head>
<body>

<div data-role="page" id="new_app_3">
    <div data-theme="a" data-role="header">
       <a data-role="button" data-transition="fade" href="#popupBasic" class="ui-btn-right"
			 data-position-to="window" data-rel="popup">
            Discard
        </a>
		<div class="header_text">
			<img src="<?=base_url() ?>asset/images/Appointment.png">
		</div>
         <a data-role="button" data-transition="fade" href="<?=base_url().'app/slot'?>" data-icon="arrow-l"
        data-iconpos="left" class="ui-btn-left" data-ajax="false">
            Back
        </a>
    </div>
	<div data-role="content" style="padding: 15px">
		<ul data-role="listview" data-divider-theme="d" data-inset="false">
			<li data-role="list-divider" role="heading">
				Summary
			</li>
			<li data-theme="c" data-icon="appointee-edit">
				<a href="<?=base_url('app/edit')?>">
				<?php 
				if(!isset($title)){
				    $title='';
				}
				if(!isset($description)){
				    $description='';
				}
				if(!isset($participants)){
				    $participants='';
				}
				
				?>
				
				
				<h3><?=$title?></h3>
				<p><?=$description?><br /> with <i>
				<?php foreach ($participants as $part){
				    echo $part.',';
				
				}?>
				</i></p>
				</a>
			</li>
			<li data-role="list-divider" role="heading">
				Timeslots
			</li>
			
			<?php
			 $counter =-1;
			
			 foreach ($slots as $slot) { $counter++; ?>
			<li data-theme="c" data-icon="appointee-edit">
			    <a href="<?=base_url().'app/editslot/'.$counter?>"> 
			        <?php echo $slot['startdate'].' '.$slot['starttime']?>
			     </a>
			</li>
	        <?php } ?>
			
				
		</ul><br />
        <a data-role="button" data-transition="fade" data-theme="c" href="<?=base_url()?>app/slot2" data-icon="plus"
        data-iconpos="left">
            Add new Timeslot
        </a>
        <a data-role="button" data-transition="fade" href="<?=base_url()?>app/submit" data-icon="check"
        data-iconpos="left" data-ajax="false">
            Send Request
        </a>
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
