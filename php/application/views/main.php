<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Appoint.ee</title>
	
	<link rel="stylesheet" href="http://jquerymobile.com/demos/1.1.1/css/themes/default/jquery.mobile-1.1.1.css" />
  <?php $this->load->helper('url') ?>
	<link rel="stylesheet" href="<?=base_url() ?>asset/style.css" />
	
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="http://jquerymobile.com/demos/1.1.1/js/jquery.mobile-1.1.1.js"></script>
</head>
<body>

<div data-role="page" id="home">
	<div data-theme="a" data-role="header">
		<a data-role="button" data-transition="fade" href="<?=base_url() ?>settings/"
			data-icon="gear" data-iconpos="notext" class="ui-btn-right"
			data-theme="c" data-ajax="false"> </a>
		<div style="text-align: center; margin-top: 5px;">
    <?php $this->load->helper('url') ?>
			<img src="<?=base_url() ?>asset/images/Logo_small.png">
		</div>
	</div>
	<div data-role="content" style="padding: 15px">
		<a data-role="button" data-transition="fade" href="../../new_appointment/"  data-ajax="false" data-icon="appintee-plus">
			New Appointment </a><br />
		<ul data-role="listview" data-divider-theme="d" data-inset="false">
			<li data-role="list-divider" role="heading">Appointment
				Requests</li>


	  <?php foreach ($appointmentRequests as $request) {?>
	  <li data-theme="c"><a href="../../main/appointment_details/" data-transition="slide"  data-ajax="false">
					<h5><?php echo $request['title']; ?></h5>
					<p>
						<?php echo $request['description']; ?> <br />
						<i>with <?php echo $request['author']; ?></i>
					</p>
			</a></li>
	  <?php } ?>

			<li data-role="list-divider" role="heading">Upcoming
				Appointments</li>   
	  
	  

	  <?php foreach ($upcomingAppointments as $request) {?>
	  <li data-theme="c"><a href="../../main/appointment_details/" data-transition="slide"  data-ajax="false">
					<h5><?php echo $request['title']; ?> </h5>
					<p>
						<?php echo $request['description']; ?> <br />
						<i>with <?php echo $request['author']; ?></i>
					</p>
			</a></li>
	  <?php } ?>
	  
	  
	  
	  
			<li data-role="list-divider" role="heading">Open Requests</li>


	  <?php foreach ($openRequests as $request) {?>
	  <li data-theme="c"><a href="../../main/appointment_details/" data-transition="slide"  data-ajax="false">
					<h5><?php echo $request['title']; ?> </h5>
					<p>
						<?php echo $request['description']; ?> <br />
						<i>with <?php echo $request['author']; ?></i>
					</p>
			</a></li>
	  <?php } ?>
	
	
		</ul>
	</div>
	<div data-role="footer" data-position="fixed">
		<div data-role="navbar" data-iconpos="top" data-theme="c">
			<ul>
				<li><a href="../../main/main_tab/" data-theme="" data-icon="appointee-home" data-ajax="false"
					class="ui-btn-active ui-state-persist">Home</a></li>
				<li><a href="../../main/history_tab/" data-theme="" data-icon="appointee-history" data-ajax="false"
					>History</a></li>
				<li><a href="../../main/contacts_tab/" data-theme="" data-icon="appointee-contacts" data-ajax="false"
					>Contacts</a></li>
			</ul>
		</div>
	</div>
</div>

</body>
</html>
