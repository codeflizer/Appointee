<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Appoint.ee</title>
	
	<?php includeCss() ?>
</head>
<body>

<div data-role="page" id="history">
	<div data-theme="a" data-role="header">
		<div class="header_text">
			<img src="<?=base_url() ?>asset/images/History.png">
		</div>
	</div>
	<div data-role="content" style="padding: 15px">
		<ul data-role="listview" data-divider-theme="d" data-inset="false"
			data-filter="true">

			<li data-role="list-divider" role="heading">September 2012</li>
			
			
			<?php foreach ($appointments as $appointment) {?>
	        <li data-theme="c"><a href="<?=base_url() ?>history/appointment/<?=$appointment['aid']?>" data-transition="slide">
	           

					<h5><?php echo $appointment['title']; ?></h5>
					<p>
						<?php echo $appointment['description']; ?> <br />
						<i>with <?php echo $appointment['author']; ?></i>
					</p>
			    </a>
			 </li>
	         <?php } ?>
			
			
			
			
			<li data-role="list-divider" role="heading">August 2012</li>
		
			<li data-role="list-divider" role="heading">July 2012</li>
			
		</ul>
	</div>
	<div data-role="footer" data-position="fixed">
		<div data-role="navbar" data-iconpos="top" data-theme="c">
			<ul>
				<li><a href="<?=base_url() ?>home" data-theme="" data-icon="appointee-home" data-ajax="false">Home</a></li>
				<li><a href="<?=base_url() ?>home/history" data-theme="" data-icon="appointee-history" class="ui-btn-active ui-state-persist" data-ajax="false">History</a></li>
				<li><a href="<?=base_url() ?>contacts" data-theme="" data-icon="appointee-contacts" data-ajax="false">Contacts</a></li>
			</ul>
		</div>
	</div>
</div>

</body>
</html>
