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

<div data-role="page" id="detail">
    <div data-theme="a" data-role="header">
        <h3>
            Details
        </h3>
        <a data-role="button" data-transition="fade" href="../main_tab/" data-icon="arrow-l"
        data-iconpos="left" class="ui-btn-left">
            Back
        </a>
    </div>
	<div data-role="content" style="padding: 15px">
		<ul data-role="listview" data-divider-theme="d" data-inset="false">
			<li data-role="list-divider" role="heading">
				Summary
			</li>
			<li data-theme="c" data-icon="gear">
				<h3>Tennis Match</h3>
				<p>Lorem Ipsum lorem ipsum<br /> with <i>Bla bla</i></p>
			</li>
			<li data-role="list-divider" role="heading">
				Timeslots
			</li>
			<li data-theme="c" data-icon="gear">
				Monday, September 9, 2012, <br />5pm-6pm
			</li>
			<li data-theme="c" data-icon="gear">
				Monday, September 9, 2012, <br />5pm-6pm
			</li>
			<li data-theme="c" data-icon="gear">
				Monday, September 9, 2012, <br />5pm-6pm
			</li>
				
		</ul><br />
        <a data-role="button" data-transition="fade" href="Menu.html" data-icon="delete"
        data-iconpos="left">
            Cancel Request
        </a>
	</div>
</div>

</body>
</html>