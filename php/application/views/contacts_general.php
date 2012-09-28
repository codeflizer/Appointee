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

<div data-role="page" id="contacts">
	<div data-theme="a" data-role="header">
		<a data-role="button" data-transition="fade" href="#page8"
			data-icon="plus" data-iconpos="left" class="ui-btn-right"> Add </a>
		<h3>Contacts</h3>
	</div>
	<div data-role="content" style="padding: 15px">
		<ul data-role="listview" data-divider-theme="c" data-inset="false"
			data-filter="true" data-autodividers="true">
	
	<?php foreach ($users as $user) {?>
			<li><a href="../contact_detail/" data-transition="slide" name="<?php echo $user['first_name'].' '.$user['last_name'] ?>"> <img
					src="http://your.asda.com/assets/athletes/avatar-blank-695c8f738ed7f135c0a9f4f825da458f.jpg"
					class="ui-li-thumb"> <?php echo $user['first_name'].' '.$user['last_name'] ?>
			</a></li>
	<?php } ?>
	
	
		</ul>
	</div>
	<div data-role="footer" data-position="fixed">
		<div data-role="navbar" data-iconpos="top" data-theme="c">
			<ul>
				<li><a href="../main_tab/" data-theme="" data-icon="home"
					data-ajax="false">Home</a></li>
				<li><a href="../history_tab/" data-theme="" data-icon="info" 
					data-ajax="false">History</a></li>
				<li><a href="../contacts_tab/" data-theme="" data-icon="grid" 
					data-ajax="false" class="ui-btn-active ui-state-persist">Contacts</a></li>
			</ul>
		</div>
	</div>
</div>

</body>
</html>