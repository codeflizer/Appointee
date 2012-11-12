<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
	<title>Appoint.ee</title>
	
<?php includeCss() ?>
</head>
<body>

<div data-role="page" id="contacts">
	<div data-theme="a" data-role="header">
		<a data-role="button" data-transition="fade" href="<?=base_url()?>contacts/contact_add"
			data-icon="plus" data-iconpos="left" class="ui-btn-right"> Add </a>
		<div class="header_text_2">
			<img src="<?=base_url() ?>asset/images/Contacts.png">
		</div>
		<a data-role="button" data-transition="fade" href="<?=base_url()?>app"  data-ajax="false" data-icon="appintee-plus" data-icon="arrow-l"
        data-iconpos="left" class="ui-btn-left">
            New
        </a>
	</div>
	<div data-role="content" style="padding: 15px">
		<ul data-role="listview" data-divider-theme="c" data-inset="false"
			data-filter="true" data-autodividers="true">
	
	<?php foreach ($users as $user) {?>
			<li><a href="<?=base_url()?>contacts/contact_detail/<?=$user['uid']?>" data-transition="slide" name="<?php echo $user['first_name'].' '.$user['last_name'] ?>"> <img
					src="http://your.asda.com/assets/athletes/avatar-blank-695c8f738ed7f135c0a9f4f825da458f.jpg"
					class="ui-li-thumb"> <?php echo $user['first_name'].' '.$user['last_name'] ?>
			</a></li>
	<?php } ?>
	
	
		</ul>
	</div>
	<div data-role="footer" data-position="fixed">
		<div data-role="navbar" data-iconpos="top" data-theme="c">
			<ul>
				<li><a href="<?=base_url() ?>home" data-theme="" data-icon="appointee-home" data-ajax="false">Home</a></li>
				<li><a href="<?=base_url() ?>home/history" data-theme="" data-icon="appointee-history" 	data-ajax="false">History</a></li>
				<li><a href="<?=base_url() ?>contacts" data-theme="" data-icon="appointee-contacts" data-ajax="false" class="ui-btn-active ui-state-persist">Contacts</a></li>
			</ul>
		</div>
	</div>
</div>

</body>
</html>
