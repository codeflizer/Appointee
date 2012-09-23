<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Appoint.ee</title>
<link rel="stylesheet"
	href="http://jquerymobile.com/demos/1.1.1/css/themes/default/jquery.mobile-1.1.1.css" />
<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script
	src="http://jquerymobile.com/demos/1.1.1/js/jquery.mobile-1.1.1.js"></script>
<style>
h5 {
	margin-top: 0px ! important;
}

a p {
	margin-bottom: 0px ! important;
}

.ui-li-thumb, .ui-li-icon {
    left: 1px;
    max-height: 50px; 
    max-width: 50px;
    position: absolute;
    top: 0;
}

.ui-li-has-thumb .ui-btn-inner a.ui-link-inherit, .ui-li-static.ui-li-has-thumb {
min-height: 27px;
padding-left: 70px;
}
</style>
</head>
<body>
	<!-- Home -->
	<div data-role="page" id="home">
		<div data-theme="a" data-role="header">
			<a data-role="button" data-transition="fade" href="Settings.html"
				data-icon="gear" data-iconpos="notext" class="ui-btn-right"
				data-theme="c"> </a>
			<div style="text-align: center; margin-top: 5px;">
				<img src="images/Logo_small.png">
			</div>
		</div>
		<div data-role="content" style="padding: 15px">
			<a data-role="button" data-transition="fade" href="New_App.html">
				New Appointment </a><br />
			<ul data-role="listview" data-divider-theme="d" data-inset="false">
				<li data-role="list-divider" role="heading">Appointment
					Requests</li>
				<li data-theme="c"><a href="App_Detail.html" data-transition="slide">
						<h5>Tennis Match</h5>
						<p>
							Lorem ipsum Lorem ipsum lorem ipsum ipsum lorem ipsum ipsum lorem
							ipsum <br />
							<i>with Lorenz Toermer</i>
						</p>
				</a></li>
				<li data-role="list-divider" role="heading">Upcoming
					Appointments</li>
				<li data-theme="c"><a href="App_Detail.html" data-transition="slide">
						<h5>Tennis Match</h5>
						<p>
							<b>Monday, September 17, 2012 at 5pm</b><br />
							<i>with Lorenz Toermer</i>
						</p>
				</a></li>
				<li data-theme="c"><a href="App_Detail.html" data-transition="slide">
						<h5>Tennis Match</h5>
						<p>
							<b>Monday, September 17, 2012 at 5pm</b><br />
							<i>with Lorenz Toermer</i>
						</p>
				</a></li>
				<li data-role="list-divider" role="heading">Open Requests</li>
				<li data-theme="c"><a href="App_Detail.html" data-transition="slide">
						<h5>Tennis Match</h5>
						<p>
							Lorem ipsum Lorem ipsum lorem ipsum ipsum lorem ipsum ipsum lorem
							ipsum <br />
							<i>with Lorenz Toermer</i>
						</p>
				</a></li>
			</ul>
		</div>
		<div data-role="footer" data-position="fixed">
			<div data-role="navbar" data-iconpos="top" data-theme="c">
				<ul>
					<li><a href="#home" data-theme="" data-icon="home"
						class="ui-btn-active ui-state-persist"> Home </a></li>
					<li><a href="#history" data-theme="" data-icon="info">
							History </a></li>
					<li><a href="#contacts" data-theme="" data-icon="grid">
							Contacts </a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- History -->
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
					<li><a href="#home" data-theme="" data-icon="home"> Home </a>
					</li>
					<li><a href="#history" data-theme="" data-icon="info"
						class="ui-btn-active ui-state-persist"> History </a></li>
					<li><a href="#contacts" data-theme="" data-icon="grid">
							Contacts </a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- Contacts -->
	<div data-role="page" id="contacts">
		<div data-theme="a" data-role="header">
			<a data-role="button" data-transition="fade" href="#page8"
				data-icon="plus" data-iconpos="left" class="ui-btn-right"> Add </a>
			<h3>Contacts</h3>
		</div>
		<div data-role="content" style="padding: 15px">
			<ul data-role="listview" data-divider-theme="c" data-inset="false"
				data-filter="true" data-autodividers="true">
				<li><a href="#" data-transition="slide" name="A User"> <img
						src="http://your.asda.com/assets/athletes/avatar-blank-695c8f738ed7f135c0a9f4f825da458f.jpg"
						class="ui-li-thumb"> A User
				</a></li>
				<li><a href="#" data-transition="slide" name="A User"> <img
						src="http://your.asda.com/assets/athletes/avatar-blank-695c8f738ed7f135c0a9f4f825da458f.jpg"
						class="ui-li-thumb"> A User
				</a></li>
				<li><a href="#" data-transition="slide" name="A User"> <img
						src="http://your.asda.com/assets/athletes/avatar-blank-695c8f738ed7f135c0a9f4f825da458f.jpg"
						class="ui-li-thumb"> B Bser
				</a></li>
				<li><a href="#" data-transition="slide" name="A User"> <img
						src="http://your.asda.com/assets/athletes/avatar-blank-695c8f738ed7f135c0a9f4f825da458f.jpg"
						class="ui-li-thumb"> C User
				</a></li>
				<li><a href="#" data-transition="slide" name="A User"> <img
						src="http://your.asda.com/assets/athletes/avatar-blank-695c8f738ed7f135c0a9f4f825da458f.jpg"
						class="ui-li-thumb"> A User
				</a></li>
				<li><a href="#" data-transition="slide" name="A User"> <img
						src="http://your.asda.com/assets/athletes/avatar-blank-695c8f738ed7f135c0a9f4f825da458f.jpg"
						class="ui-li-thumb"> A User
				</a></li>
			</ul>
		</div>
		<div data-role="footer" data-position="fixed">
			<div data-role="navbar" data-iconpos="top" data-theme="c">
				<ul>
					<li><a href="#home" data-theme="" data-icon="home"> Home </a>
					</li>
					<li><a href="#history" data-theme="" data-icon="info">
							History </a></li>
					<li><a href="#contacts" data-theme="" data-icon="grid"
						class="ui-btn-active ui-state-persist"> Contacts </a></li>
				</ul>
			</div>
		</div>
	</div>

</body>
</html>