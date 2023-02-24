<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>PolyClinic Management System</title>
	<!-- Favicon-->
	<link rel="icon" href="{{ URL::asset('AdminSB/favicon.ico') }}" type="image/x-icon">

	<!-- Google Fonts -->
	<link href="{{ URL::asset('AdminSB/css/fonts.css') }}" rel="stylesheet">
	<link href="{{ URL::asset('AdminSB/css/fonts2.css') }}" rel="stylesheet">

	<!-- Bootstrap Core Css -->
	<link href="{{ URL::asset('AdminSB/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

	<!-- Waves Effect Css -->
	<link href="{{ URL::asset('AdminSB/plugins/node-waves/waves.css') }}" rel="stylesheet">

	<!-- Animation Css -->
	<link href="{{ URL::asset('AdminSB/plugins/animate-css/animate.css') }}" rel="stylesheet">

	<!-- Morris Chart Css-->
	<link href="{{ URL::asset('AdminSB/plugins/morrisjs/morris.css') }}" rel="stylesheet">

	<!-- Custom Css -->
	<link href="{{ URL::asset('AdminSB/css/style.css') }}" rel="stylesheet">

	<!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
	<link href="{{ URL::asset('AdminSB/css/themes/all-themes.css') }}" rel="stylesheet">
</head>
<body class="theme-red">
	<!-- Page Loader -->
	<div class="page-loader-wrapper">
		<div class="loader">
			<div class="preloader">
				<div class="spinner-layer pl-red">
					<div class="circle-clipper left">
						<div class="circle"></div>
					</div>
					<div class="circle-clipper right">
						<div class="circle"></div>
					</div>
				</div>
			</div>
			<p>Please wait...</p>
		</div>
	</div>
	<!-- #END# Page Loader -->
	<!-- Overlay For Sidebars -->
	<div class="overlay"></div>
	<!-- #END# Overlay For Sidebars -->
	<!-- Search Bar -->
	<div class="search-bar">
		<div class="search-icon">
			<i class="material-icons">search</i>
		</div>
		<input type="text" placeholder="START TYPING...">
		<div class="close-search">
			<i class="material-icons">close</i>
		</div>
	</div>
	<!-- #END# Search Bar -->
	<!-- Top Bar -->
	<nav class="navbar">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
				<a href="javascript:void(0);" class="bars"></a>
				<a class="navbar-brand" href="index.html">ADMINBSB - MATERIAL DESIGN</a>
			</div>
			<div class="collapse navbar-collapse" id="navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<!-- Call Search -->
					<li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
					<!-- #END# Call Search -->
					<!-- Notifications -->
					<li class="dropdown">
						<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
							<i class="material-icons">notifications</i>
							<span class="label-count">7</span>
						</a>
						<ul class="dropdown-menu">
							<li class="header">NOTIFICATIONS</li>
							<li class="body">
								<ul class="menu">
									<li>
										<a href="javascript:void(0);">
											<div class="icon-circle bg-light-green">
												<i class="material-icons">person_add</i>
											</div>
											<div class="menu-info">
												<h4>12 new members joined</h4>
												<p>
													<i class="material-icons">access_time</i> 14 mins ago
												</p>
											</div>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">
											<div class="icon-circle bg-cyan">
												<i class="material-icons">add_shopping_cart</i>
											</div>
											<div class="menu-info">
												<h4>4 sales made</h4>
												<p>
													<i class="material-icons">access_time</i> 22 mins ago
												</p>
											</div>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">
											<div class="icon-circle bg-red">
												<i class="material-icons">delete_forever</i>
											</div>
											<div class="menu-info">
												<h4><b>Nancy Doe</b> deleted account</h4>
												<p>
													<i class="material-icons">access_time</i> 3 hours ago
												</p>
											</div>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">
											<div class="icon-circle bg-orange">
												<i class="material-icons">mode_edit</i>
											</div>
											<div class="menu-info">
												<h4><b>Nancy</b> changed name</h4>
												<p>
													<i class="material-icons">access_time</i> 2 hours ago
												</p>
											</div>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">
											<div class="icon-circle bg-blue-grey">
												<i class="material-icons">comment</i>
											</div>
											<div class="menu-info">
												<h4><b>John</b> commented your post</h4>
												<p>
													<i class="material-icons">access_time</i> 4 hours ago
												</p>
											</div>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">
											<div class="icon-circle bg-light-green">
												<i class="material-icons">cached</i>
											</div>
											<div class="menu-info">
												<h4><b>John</b> updated status</h4>
												<p>
													<i class="material-icons">access_time</i> 3 hours ago
												</p>
											</div>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">
											<div class="icon-circle bg-purple">
												<i class="material-icons">settings</i>
											</div>
											<div class="menu-info">
												<h4>Settings updated</h4>
												<p>
													<i class="material-icons">access_time</i> Yesterday
												</p>
											</div>
										</a>
									</li>
								</ul>
							</li>
							<li class="footer">
								<a href="javascript:void(0);">View All Notifications</a>
							</li>
						</ul>
					</li>
					<!-- #END# Notifications -->
					<!-- Tasks -->
					<!-- #END# Tasks -->
					<li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- #Top Bar -->
	<section>
		<!-- Left Sidebar -->
		<aside id="leftsidebar" class="sidebar">
			<!-- User Info -->
			<div class="user-info">
				<div class="image">
					<img src="images/user.png" width="48" height="48" alt="User" />
				</div>
				<div class="info-container">
					<div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
					<div class="email">john.doe@example.com</div>
					<div class="btn-group user-helper-dropdown">
						<i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
						<ul class="dropdown-menu pull-right">
							<li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
							<li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
							<li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- #User Info -->
			<!-- Menu -->
			<div class="menu">
				<ul class="list">
					<li class="header">MAIN NAVIGATION</li>
					<li class="active">
						<a href="index.html">
							<i class="material-icons">home</i>
							<span>Home</span>
						</a>
					</li>
				  
					<li>
						<a href="javascript:void(0);" class="menu-toggle">
							<i class="material-icons">view_list</i>
							<span>Tables</span>
						</a>
						<ul class="ml-menu">
							<li>
								<a href="pages/tables/normal-tables.html">Normal Tables</a>
							</li>
							<li>
								<a href="pages/tables/jquery-datatable.html">Jquery Datatables</a>
							</li>
							<li>
								<a href="pages/tables/editable-table.html">Editable Tables</a>
							</li>
						</ul>
					</li>
				 
			<!-- #Menu -->
			<!-- Footer -->
			<!-- #Footer -->
		</aside>
		<!-- #END# Left Sidebar -->
		<!-- Right Sidebar -->
		<aside id="rightsidebar" class="right-sidebar">
			<ul class="nav nav-tabs tab-nav-right" role="tablist">
				{{-- <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li> --}}
				<li role="presentation" class="active"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
			</ul>
				<div role="tabpanel" class="tab-pane fade in active in active" id="settings">
					<div class="demo-settings">
						<p>GENERAL SETTINGS</p>
						<ul class="setting-list">
							<li>
								<span>Report Panel Usage</span>
								<div class="switch">
									<label><input type="checkbox" checked><span class="lever"></span></label>
								</div>
							</li>
							<li>
								<span>Email Redirect</span>
								<div class="switch">
									<label><input type="checkbox"><span class="lever"></span></label>
								</div>
							</li>
						</ul>
						<p>SYSTEM SETTINGS</p>
						<ul class="setting-list">
							<li>
								<span>Notifications</span>
								<div class="switch">
									<label><input type="checkbox" checked><span class="lever"></span></label>
								</div>
							</li>
							<li>
								<span>Auto Updates</span>
								<div class="switch">
									<label><input type="checkbox" checked><span class="lever"></span></label>
								</div>
							</li>
						</ul>
						<p>ACCOUNT SETTINGS</p>
						<ul class="setting-list">
							<li>
								<span>Offline</span>
								<div class="switch">
									<label><input type="checkbox"><span class="lever"></span></label>
								</div>
							</li>
							<li>
								<span>Location Permission</span>
								<div class="switch">
									<label><input type="checkbox" checked><span class="lever"></span></label>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</aside>
		<!-- #END# Right Sidebar -->
	</section>

	<section class="content">
		<div class="container-fluid">
			<div class="block-header">
				<h2>DASHBOARD</h2>
			</div>

			<!-- Widgets -->
			<div class="row clearfix">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="info-box bg-pink hover-expand-effect">
						<div class="icon">
							<i class="material-icons">playlist_add_check</i>
						</div>
						<div class="content">
							<div class="text">NEW TASKS</div>
							<div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="info-box bg-cyan hover-expand-effect">
						<div class="icon">
							<i class="material-icons">help</i>
						</div>
						<div class="content">
							<div class="text">NEW TICKETS</div>
							<div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"></div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="info-box bg-light-green hover-expand-effect">
						<div class="icon">
							<i class="material-icons">forum</i>
						</div>
						<div class="content">
							<div class="text">NEW COMMENTS</div>
							<div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="info-box bg-orange hover-expand-effect">
						<div class="icon">
							<i class="material-icons">person_add</i>
						</div>
						<div class="content">
							<div class="text">NEW VISITORS</div>
							<div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"></div>
						</div>
					</div>
				</div>
			</div>
			<!-- #END# Widgets -->
			<!-- CPU Usage -->
			<!-- #END# CPU Usage -->
			<div class="row clearfix">
				<!-- Visitors -->
				<!-- #END# Visitors -->
				<!-- Latest Social Trends -->
				<!-- #END# Latest Social Trends -->
				<!-- Answered Tickets -->
				<!-- #END# Answered Tickets -->
			</div>

			<div class="row clearfix">
				<!-- Task Info -->
				
				<!-- #END# Task Info -->
				<!-- Browser Usage -->
				<!-- #END# Browser Usage -->
			</div>
		</div>
	</section>

	<!-- Jquery Core Js -->
	<script src="{{ URL::asset('AdminSB/plugins/jquery/jquery.min.js') }}"></script>

	<!-- Bootstrap Core Js -->
	<script src="{{ URL::asset('AdminSB/plugins/bootstrap/js/bootstrap.js') }}"></script>

	<!-- Select Plugin Js -->
	<script src="{{ URL::asset('AdminSB/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>

	<!-- Slimscroll Plugin Js -->
	<script src="{{ URL::asset('AdminSB/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

	<!-- Waves Effect Plugin Js -->
	<script src="{{ URL::asset('AdminSB/plugins/node-waves/waves.js') }}"></script>

	<!-- Jquery CountTo Plugin Js -->
	<script src="{{ URL::asset('AdminSB/plugins/jquery-countto/jquery.countTo.js') }}"></script>

	<!-- Morris Plugin Js -->
	<script src="{{ URL::asset('AdminSB/plugins/raphael/raphael.min.js') }}"></script>
	<script src="{{ URL::asset('AdminSB/plugins/morrisjs/morris.js') }}"></script>

	<!-- ChartJs -->
	<script src="{{ URL::asset('AdminSB/plugins/chartjs/Chart.bundle.js') }}"></script>

	<!-- Flot Charts Plugin Js -->
	<script src="{{ URL::asset('AdminSB/plugins/flot-charts/jquery.flot.js') }}"></script>
	<script src="{{ URL::asset('AdminSB/plugins/flot-charts/jquery.flot.resize.js') }}"></script>
	<script src="{{ URL::asset('AdminSB/plugins/flot-charts/jquery.flot.pie.js') }}"></script>
	<script src="{{ URL::asset('AdminSB/plugins/flot-charts/jquery.flot.categories.js') }}"></script>
	<script src="{{ URL::asset('AdminSB/plugins/flot-charts/jquery.flot.time.js') }}"></script>

	<!-- Sparkline Chart Plugin Js -->
	<script src="{{ URL::asset('AdminSB/plugins/jquery-sparkline/jquery.sparkline.js') }}"></script>

	<!-- Custom Js -->
	<script src="{{ URL::asset('AdminSB/js/admin.js') }}"></script>

	<!-- Demo Js -->
	<script src="{{ URL::asset('AdminSB/js/demo.js') }}"></script>

</body>

</html>
