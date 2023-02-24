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
	<link href="{{ URL::asset('AdminSB/fonts/roboto.css')}}" rel="stylesheet" type="text/css">
	<link href="{{ URL::asset('AdminSB/fonts/material-icon.css')}}" rel="stylesheet" type="text/css">
	<link href="{{ URL::asset('AdminSB/fonts/raleway.css')}}" rel="stylesheet" type="text/css">

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
	@section('page-loader')
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
	@show
	<!-- #END# Page Loader -->
	<!-- Overlay For Sidebars -->
	@section('overlay')
	<div class="overlay"></div>
	@show
	<!-- #END# Overlay For Sidebars -->
	<!-- Search Bar -->
	@section('search-bar')
	<div class="search-bar">
		<div class="search-icon">
			<i class="material-icons">search</i>
		</div>
		<input type="text" placeholder="START TYPING...">
		<div class="close-search">
			<i class="material-icons">close</i>
		</div>
	</div>
	@show
	<!-- #END# Search Bar -->
	<!-- Top Bar -->
	@section('nav-bar')
	<nav class="navbar">
		<div class="container-fluid" style="background-color: teal; ">
			<div class="navbar-header">
				<a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
				<a href="javascript:void(0);" class="bars"></a>
				<a class="navbar-brand" href="index.html">PolyClinic Management System</a>
			</div>
			<div class="collapse navbar-collapse" id="navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<!-- Call Search -->
					<li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
					<!-- #END# Call Search -->
					<!-- Notifications -->`
					<li class="dropdown">
						<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
							<i class="material-icons">notifications</i>
							<span class="label-count">3</span>
						</a>
						<ul class="dropdown-menu">
							<li class="header">NOTIFICATIONS</li>
							<li class="body">
								<ul class="menu">
									<li>
										<a href="/[14]admin_portal_test/public/subscription_table">
											<div class="icon-circle bg-cyan">
												<i class="material-icons">person_add</i>
											</div>
											<div class="menu-info">
												<h4>Subscription payment to verify</h4>
												<p>
													<i class="material-icons">access_time</i> 14 mins ago
												</p>
											</div>
										</a>
									</li>
									<li>
										<a href="/[14]admin_portal_test/public/renewal_table">
											<div class="icon-circle bg-orange">
												<i class="material-icons">autorenew</i>
											</div>
											<div class="menu-info">
												<h4>Renew subscription</h4>
												<p>
													<i class="material-icons">access_time</i> 22 mins ago
												</p>
											</div>
										</a>
									</li>
									<li>
										<a href="/[14]admin_portal_test/public/request_addon_table">
											<div class="icon-circle bg-light-green">
												<i class="material-icons">library_add</i>
											</div>
											<div class="menu-info">
												<h4>Request add-on</h4>
												<p>
													<i class="material-icons">access_time</i> 22 mins ago
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
	@show
	<!-- #Top Bar -->
	<section>
		<!-- Left Sidebar -->
		@section('left-sidebar')
		<aside id="leftsidebar" class="sidebar">
			<!-- User Info -->
			<div class="user-info">
				<div class="image">
					<img src="{{ URL::asset('AdminSB/images/user.png') }}" width="48" height="48" alt="User" />
				</div>
				<div class="info-container">
					<div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin</div>
					{{-- <div class="email">john.doe@example.com</div> --}}
					<div class="btn-group user-helper-dropdown">
						<i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
						<ul class="dropdown-menu pull-right">
							<li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
							<li role="separator" class="divider"></li>
							{{-- <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
							<li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
							<li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li> --}}
							{{-- <li role="separator" class="divider"></li> --}}
							<li><a href="/[14]admin_portal_test/public/login"><i class="material-icons">input</i>Sign Out</a></li>
						</ul>
					</div>
				</div>
			</div>

			<!-- #User Info -->
			<!-- Menu -->
			<div class="menu">
				<ul class="list">
					<li class="header">MAIN NAVIGATION</li>
					<li class="{{ Request::is('parent') ? 'active' : null }}">
						<a href="{{ url('parent') }}">
							<i class="material-icons">home</i>
							<span>Parent</span>
						</a>
					</li>
					
					<li class="{{ Request::is('menu/*') ? 'active' : null }}">
						<a href="javascript:void(0);" class="menu-toggle">
							<i class="material-icons">description</i>
							<span>Test Active Url</span>
						</a>
						<ul class="ml-menu">
							<li class="{{ Request::is('menu/menu1') ? 'active' : null }}">
								<a href="{{ url('menu/menu1') }}">menu 1</a>
							</li>
							<li>
								<a href="#">menu 2</a>
							</li>
							<li>
						</ul>
					</li>

					<!-- #Menu -->
					<!-- Footer -->
					{{-- <div class="legal">
						<div class="copyright">
							&copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
						</div>
						<div class="version">
							<b>Version: </b> 1.0.5
						</div> --}}
					<!-- #Footer -->
				</div>


		</aside>
		@show
		<!-- #END# Left Sidebar -->
		<!-- Right Sidebar -->
		@section('right-sidebar')
		<aside id="rightsidebar" class="right-sidebar">
			<ul class="nav nav-tabs tab-nav-right" role="tablist">
				<li role="presentation" class="active"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
				{{-- <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li> --}}
			</ul>
			<div class="tab-content">
				{{-- <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
					<ul class="demo-choose-skin">
						<li data-theme="red" class="active">
							<div class="red"></div>
							<span>Red</span>
						</li>
						<li data-theme="pink">
							<div class="pink"></div>
							<span>Pink</span>
						</li>
						<li data-theme="purple">
							<div class="purple"></div>
							<span>Purple</span>
						</li>
						<li data-theme="deep-purple">
							<div class="deep-purple"></div>
							<span>Deep Purple</span>
						</li>
					</ul>
				</div> --}}
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
		@show
		<!-- #END# Right Sidebar -->
	</section>
	
	@section('body')
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
				<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
					<div class="card">
						<div class="header">
							<h2>TASK INFOS</h2>
							<ul class="header-dropdown m-r--5">
								<li class="dropdown">
									<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
										<i class="material-icons">more_vert</i>
									</a>
									<ul class="dropdown-menu pull-right">
										<li><a href="javascript:void(0);">Action</a></li>
										<li><a href="javascript:void(0);">Another action</a></li>
										<li><a href="javascript:void(0);">Something else here</a></li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="body">
							<div class="table-responsive">
								<table class="table table-hover dashboard-task-infos">
									<thead>
										<tr>
											<th>#</th>
											<th>Task</th>
											<th>Status</th>
											<th>Manager</th>
											<th>Progress</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Task A</td>
											<td><span class="label bg-green">Doing</span></td>
											<td>John Doe</td>
											<td>
												<div class="progress">
													<div class="progress-bar bg-green" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%"></div>
												</div>
											</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Task B</td>
											<td><span class="label bg-blue">To Do</span></td>
											<td>John Doe</td>
											<td>
												<div class="progress">
													<div class="progress-bar bg-blue" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
												</div>
											</td>
										</tr>
										<tr>
											<td>3</td>
											<td>Task C</td>
											<td><span class="label bg-light-blue">On Hold</span></td>
											<td>John Doe</td>
											<td>
												<div class="progress">
													<div class="progress-bar bg-light-blue" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%"></div>
												</div>
											</td>
										</tr>
										<tr>
											<td>4</td>
											<td>Task D</td>
											<td><span class="label bg-orange">Wait Approvel</span></td>
											<td>John Doe</td>
											<td>
												<div class="progress">
													<div class="progress-bar bg-orange" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%"></div>
												</div>
											</td>
										</tr>
										<tr>
											<td>5</td>
											<td>Task E</td>
											<td>
												<span class="label bg-red">Suspended</span>
											</td>
											<td>John Doe</td>
											<td>
												<div class="progress">
													<div class="progress-bar bg-red" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 87%"></div>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!-- #END# Task Info -->
				<!-- Browser Usage -->
				<!-- #END# Browser Usage -->
			</div>
		</div>
	</section>
	@show

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
	<script src="{{ URL::asset('AdminSB/js/pages/ui/notifications.js') }}"></script>
	<script src="{{ URL::asset('AdminSB/js/pages/cards/colored.js')}}"></script>
	<script src="{{ URL::asset('AdminSB/js/pages/forms/basic-form-elements.js')}}"></script>

	<!-- Demo Js -->
	<script src="{{ URL::asset('AdminSB/js/demo.js') }}"></script>

	<!-- Bootstrap Notify Plugin Js -->
	<script src="{{ URL::asset('AdminSB/plugins/bootstrap-notify/bootstrap-notify.js') }}"></script>

	<!-- Wait Me Plugin Js -->
	<script src="{{ URL::asset('AdminSB/plugins/waitme/waitMe.js') }}"></script>

	<!-- Autosize Plugin Js -->
	<script src="{{ URL::asset('AdminSB/plugins/autosize/autosize.js')}}"></script>
	
</body>

</html>
