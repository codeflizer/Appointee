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

<div data-role="page" id="history">
	<div data-theme="a" data-role="header">
		<h3>History</h3>
	</div>
	<div data-role="content" style="padding: 15px">
		<ul data-role="listview" data-divider-theme="d" data-inset="false"
			data-filter="true">

			<li data-role="list-divider" role="heading">September 2012</li>
			<li data-theme="c"><a href="#" data-transition="slide">
					<h5>Tennis Match</h5>
					<p>
						<b>Monday, September 17, 2012 at 5pm</b><br />
						<i>with Lorenz Toermer</i>
					</p>
			</a></li>
			<li data-theme="c"><a href="#" data-transition="slide">
					<h5>Tennis Match</h5>
					<p>
						<b>Monday, September 17, 2012 at 5pm</b><br />
						<i>with Lorenz Toermer</i>
					</p>
			</a></li>
			<li data-role="list-divider" role="heading">August 2012</li>
			<li data-theme="c"><a href="#" data-transition="slide">
					<h5>Tennis Match</h5>
					<p>
						<b>Monday, September 17, 2012 at 5pm</b><br />
						<i>with Lorenz Toermer</i>
					</p>
			</a></li>
			<li data-theme="c"><a href="#" data-transition="slide">
					<h5>Tennis Match</h5>
					<p>
						<b>Monday, September 17, 2012 at 5pm</b><br />
						<i>with Lorenz Toermer</i>
					</p>
			</a></li>
			<li data-role="list-divider" role="heading">July 2012</li>
			<li data-theme="c"><a href="#" data-transition="slide">
					<h5>Tennis Match</h5>
					<p>
						<b>Monday, September 17, 2012 at 5pm</b><br />
						<i>with Lorenz Toermer</i>
					</p>
			</a></li>
			<li data-theme="c"><a href="#" data-transition="slide">
					<h5>Tennis Ball</h5>
					<p>
						<b>Monday, September 17, 2012 at 5pm</b><br />
						<i>with Lorenz Toermer</i>
					</p>
			</a></li>
		</ul>
	</div>
	<div data-role="footer" data-position="fixed">
		<div data-role="navbar" data-iconpos="top" data-theme="c">
			<ul>
				<li><a href="../main_tab/" data-theme="" data-icon="home"
					data-ajax="false">Home</a></li>
				<li><a href="../history_tab/" data-theme="" data-icon="info" 
					class="ui-btn-active ui-state-persist" data-ajax="false">History</a></li>
				<li><a href="../contacts_tab/" data-theme="" data-icon="grid" 
					data-ajax="false">Contacts</a></li>
			</ul>
		</div>
	</div>
</div>

</body>
</html>