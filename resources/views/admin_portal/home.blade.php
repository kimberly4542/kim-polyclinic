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
	<!-- Sweetalert Css -->
	<link href="{{ URL::asset('AdminSB/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet" />
	<!-- Vue Js -->
	<script type="text/javascript" src="{{ URL::asset('js/vue.js') }}"></script>

	<style type="text/css">
		#account_setting_button a {
			text-align: center;
		}
		#account_setting_button button {
			text-align: center;
		}
		.sidebar .user-info {
			padding: 13px 15px 12px 15px;
			white-space: nowrap;
			position: relative;    border-bottom: 1px solid #e9e9e9;
			background-color: #191919;
			height: 135px; 
		}
		.sidebar .menu .list {
			list-style: none;
			padding-left: 0;
		}
	</style>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#addUserAccountButton').click(function(){
				$('#addUserAccount').modal();
			});
		});
	</script>

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
		<div class="container-fluid" style="background-color: #323232; ">
			<div class="navbar-header">
				<a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
				<a href="javascript:void(0);" class="bars"></a>
				<a class="navbar-brand" href="index.html">PolyClinic Management System</a>
			</div>
			<div class="collapse navbar-collapse" id="navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
							<i class="material-icons">notifications</i>
							@if(!$allNotification)
								<span class="label-count">0</span>
							@else
								<span class="label-count">{{ count($allNotification) }}</span>
							@endif
						</a>
						<ul class="dropdown-menu">
							<li class="header">NOTIFICATIONS</li>
							<li class="body">
								<ul class="menu">
									@if(count($allNotification) > 0)
										@foreach($allNotification as $data)
											@if($data->subscriber_status == 'UnderVerification')
												<li>
													<a href="{{ url('notification/read_notification') }}/{{ $data->id }}">
														<div class="icon-circle bg-light-green">
															<i class="material-icons">person_add</i>
														</div>
														<div class="menu-info">
															<h4>New subscriber newly subscribed</h4>
															<p>
																<i class="material-icons">access_time</i> {{ $data->created_at->diffForHumans() }}
															</p>
														</div>
													</a>												
												</li>
											@else
											@endif
										@endforeach
									@else
										<li>
											<a href="#">
												<div class="icon-circle bg-yellow">
													<i class="material-icons">cancel</i>
												</div>
												<div class="menu-info">
													<h4>No New Notification</h4>
													<p>
														<i class="material-icons">access_time</i>
													</p>
												</div>
											</a>		
										</li>
									@endif
								</ul>
							</li>
						</ul>
					</li>
					<li class="pull-right">
						<a href="javascript:void(0);" class="js-right-sidebar" data-close="true">
							<i class="material-icons">more_vert</i>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	@show

	<!-- Left Sidebar -->
	<section>
		@section('left-sidebar')
		<aside id="leftsidebar" class="sidebar">
			<!-- User Info -->
			<div class="user-info">
				<div class="image">
					<img src="{{ URL::asset('AdminSB/images/user.png') }}" width="48" height="48" alt="User" />
				</div>
				@if (Auth::check())
					<div class="info-container">
						<div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->username }}</div>
						<div class="email">{{ Auth::user()->fname }} {{  Auth::user()->lname }}</div>
						<div class="btn-group user-helper-dropdown">
							<i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
							<ul class="dropdown-menu pull-right">
								<li><a href="{{ url('settings/update_account') }}"><i class="material-icons">person</i>Profile</a></li>
								<li role="separator" class="divider"></li>
								{{-- <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
								<li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
								<li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li> --}}
								{{-- <li role="separator" class="divider"></li> --}}
								
								<li><a href="{{ url('admin_session/logout') }}"><i class="material-icons">input</i>Sign Out</a></li>
							</ul>
						</div>
					</div>
				@endif
			</div>

			<!-- #User Info -->
			<!-- Menu -->
			<div class="menu">
				<ul class="list">
					<!-- <li class="header">MAIN NAVIGATION</li> -->
					<li class = "{{ Request::is('home') ? 'active' : null }}">
						<a href="{{ url('/adminHome')}}">
							<i class="material-icons">home</i>
							<span>Home</span>
						</a>
					</li>
					
					<li class="{{ Request::is('subscription/*') ? 'active' : null || Request::is('module_controller/*') ? 'active' : null}}">
						<a href="javascript:void(0);" class="menu-toggle">
							<i class="material-icons">description</i>
							<span>Subscription</span>
						</a>
						<ul class="ml-menu">
							<li class="{{ Request::is('subscription/under_verification') ? 'active' : null }}">
								<a href="{{ url('subscription/under_verification') }}">Under Verification</a>
							</li>
							<li class="{{ Request::is('subscription/renewal_table') ? 'active' : null }}">
								<a href="{{ url('subscription/renewal_table') }}">Request for Renew</a>
							</li>
							{{-- <li class="{{ Request::is('subscription/request_addon_table') ? 'active' : null || Request::is('module_controller/request_feature') ? 'active' : null}}">
								<a href="{{ url('subscription/request_addon_table') }}">Request Add-ons</a>
							</li> --}}
							<li class="{{ Request::is('subscription/declined_subscriber') ? 'active' : null}}">
								<a href="{{ url('subscription/declined_subscriber') }}">Declined Subscriber</a>
							</li>
						</ul>
					</li>

					<li class="{{ Request::is('account_management/*') ? 'active' : null}}">
						<a href="javascript:void(0);" class="menu-toggle">
							<i class="material-icons">account_circle</i>
							<span>Account Management</span>
						</a>
						<ul class="ml-menu">
							<li class="{{ Request::is('account_management/active_subscriber_table') ? 'active' : null}}">
								<a href="{{ url('account_management/active_subscriber_table') }}">Active Subscribers</a>
							</li>
							<li class="{{ Request::is('account_management/expired_subscription_table') ? 'active' : null }}">
								<a href="{{ url('account_management/expired_subscription_table') }}">Expired Subscriptions</a>
							</li>
							<li class="{{ Request::is('account_management/deactivated_subscriber') ? 'active' : null }}">
								<a href="{{ url('account_management/deactivated_subscriber') }}">Deactivated subscribers</a>
							</li>
							{{-- <li class="{{ Request::is('account_management/statistics_subscriber') ? 'active' : null }}">
								<a href="{{ url('account_management/subscriber_statistics') }}">Statistics of subscribers</a>
								<a href="{{ url('account_management/statistics_subscriber') }}">Statistics of subscribers</a>
							</li> --}}
						</ul>
					</li>

{{-- 					<li class="{{ Request::is('module_pricing_and_promo/*') ? 'active' : null}}">
						<a href="javascript:void(0);" class="menu-toggle">
							<i class="material-icons">loyalty</i>
							<span>Module Pricing & Promo Set-up</span>
						</a>
						<ul class="ml-menu">
							<li class="{{ Request::is('module_pricing_and_promo/module_pricing') ? 'active' : null}}">
								<a href="{{ url('module_pricing_and_promo/module_pricing') }}">
									<span>Module Pricing</span>
								</a>
							</li>
						</ul>
					</li> --}}

					<li class = "{{ Request::is('module_pricing_and_promo/module_pricing') ? 'active' : null }}">
						<a href="{{ url('module_pricing_and_promo/module_pricing')}}">
							<i class="material-icons">loyalty</i>
							<span>Module Pricing & Promo Set-up</span>
						</a>
					</li>
				</div>


		</aside>
		@show
		<!-- #END# Left Sidebar -->
		<!-- Right Sidebar -->
		@section('right-sidebar')
		<aside id="rightsidebar" class="right-sidebar">
			<ul class="nav nav-tabs tab-nav-right" role="tablist">
				{{-- <li role="presentation" class="active"><a href="#settings" data-toggle="tab">SETTINGS</a></li> --}}
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
						{{-- <p>SYSTEM SETTINGS</p> --}}
						<ul class="setting-list">
							{{-- li>
								<span>notification</span>
								<div class="switch">
									<label><input type="checkbox" checked><span class="lever"></span></label>
								</div>
							</li>
							<li>
								<span>Auto Updates</span>
								<div class="switch">
									<label><input type="checkbox" checked><span class="lever"></span></label>
								</div>
							</li> --}}
						</ul>
						<p>ACCOUNT SETTINGS</p>
						<div class="body">
							<div class="list-group-item" id="account_setting_button">
								<a href="{{ url('settings/admin_account') }}" type="button" class="list-group-item list-group-item-warning">Admin Accounts	</a>
								<a href="{{ url('settings/add_account') }}" type="button" class="list-group-item list-group-item-success">Add Account	</a>
							</div>
						</div>
					{{-- 	<p>EMAIL</p>
						<div class="body">
							<div class="list-group" id="account_setting_button">
								<a href="{{ url('email/settings_send_email') }}" type="button" class="list-group-item list-group-bg-lime">SEND EMAIL</a>
								<a href="{{ url('email/settings_inbox') }}" type="button" class="list-group-item list-group-bg-light-green">INBOX</a>
								<a href="{{ url('email/settings_sentItems') }}" type="button" class="list-group-item list-group-bg-green">SENT ITEMS</a>
							</div>
						</div> --}}
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
			<!-- Counter Examples -->
			@if(session('message'))
				<div class="alert bg-green">
					<p>{{ session('message') }}</p>	
				</div>
			@endif

			<div class="block-header">
				<h2>
					SUBSCRIBERS
				</h2>
			</div>
{{-- 			<div class="row"></div>
			<!-- #END# Counter Examples -->
			<!-- Hover Zoom Effect -->
			<div class="block-header">
				<h2>SPECIALTIES</h2>
			</div>
			<div class="row"></div>
			#END# Hover Zoom Effect
			<!-- Hover Expand Effect -->
			<div class="block-header">
				<h2>SALES</h2>
			</div>
			<div class="row"></div>
			<!-- #END# Hover Expand Effect --> --}}


			<div class="row clearfix">{{-- 
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="card">
						<div class="body">
							<canvas id="chart_Discipline"></canvas>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="card">
						<div class="body">
							<canvas id="chart_Medicine"></canvas>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="card">
						<div class="body">
							<canvas id="chart_monthly_client" ></canvas>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="card">
						<div class="body">
							<canvas id="chart_monthly_client_forecast" ></canvas>
						</div>
					</div>
				</div>
			 --}}</div>

		</div>

		<div class="modal fade" id="addUserAccount" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-md" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="largeModalLabel">Add New User Account</h4>
					</div>
					
					<div class="modal-body">
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<img class="img-responsive thumbnail" src="{{ URL::asset('images/user.png')}}">
						</div>
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
							<div class="form-group form-float">
								<br>
								<div class="form-line">
									<input type="text" class="form-control" value="Mark">
									<label class="form-label">First Name:</label>
								</div><br>
								<div class="form-line">
									<input type="text" class="form-control" value="Otto">
									<label class="form-label">Last Name:</label>
								</div> <br>
								<div class="btn-group" role="group">
									<button type="button" class="btn btn-default waves-effect dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Select Role
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<li><a href="javascript:void(0);">Admin</a></li>
										<li><a href="javascript:void(0);">Others</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
					<div>

					<div class="modal-footer">
						<button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button>
						<button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
					</div>
				</div>
			</div>
		</div> {{-- modal --}}
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
	<!-- ChartJs -->
	<script src="{{ URL::asset('AdminSB/plugins/chartjs/Chart.bundle.js') }}"></script>
	<!-- Sparkline Chart Plugin Js -->
	<script src="{{ URL::asset('AdminSB/plugins/jquery-sparkline/jquery.sparkline.js') }}"></script>
	<!-- Demo Js -->
	<script src="{{ URL::asset('AdminSB/js/demo.js') }}"></script>

	<!-- Bootstrap Notify Plugin Js -->
	<script src="{{ URL::asset('AdminSB/plugins/bootstrap-notify/bootstrap-notify.js') }}"></script>
	<!-- Wait Me Plugin Js -->
	<script src="{{ URL::asset('AdminSB/plugins/waitme/waitMe.js') }}"></script>
	<!-- Autosize Plugin Js -->
	<script src="{{ URL::asset('AdminSB/plugins/autosize/autosize.js')}}"></script>
	<!-- SweetAlert Plugin Js -->
	<script src="{{ URL::asset('AdminSB/plugins/sweetalert/sweetalert.min.js')}}"></script>
	<!-- Jquery CountTo Plugin Js -->
	<script src="{{ URL::asset('AdminSB/plugins/jquery-countto/jquery.countTo.js')}}"></script>
	<!-- Sparkline Chart Plugin Js -->
	<script src="{{ URL::asset('AdminSB/plugins/jquery-sparkline/jquery.sparkline.js')}}"></script>
	<!-- Ckeditor -->
	<script src="{{ URL::asset('AdminSB/plugins/ckeditor/ckeditor.js')}}"></script>
	<!-- TinyMCE -->
	<script src="{{ URL::asset('AdminSB/plugins/tinymce/tinymce.js')}}"></script>
	<!-- chartjs -->
	<script src="{{ URL::asset('AdminSB/plugins/chartjs/Chart.bundle.js')}}"></script>
	<!-- Custom Js -->
	<script src="{{ URL::asset('AdminSB/js/admin.js') }}"></script>
	<script src="{{ URL::asset('AdminSB/js/pages/ui/notifications.js') }}"></script>
	<script src="{{ URL::asset('AdminSB/js/pages/cards/colored.js')}}"></script>
	{{-- <script src="{{ URL::asset('AdminSB/js/pages/forms/basic-form-elements.js')}}"></script> --}}
	<script src="{{ URL::asset('AdminSB/js/pages/ui/dialogs.js')}}"></script>
	<script src="{{ URL::asset('AdminSB/js/demo.js')}}"></script>
	<script src="{{ URL::asset('AdminSB/js/pages/forms/editors.js')}}"></script>
	<script src="{{ URL::asset('AdminSB/js/helpers.js')}}"></script>
	<script src="{{ URL::asset('AdminSB/js/pages/widgets/infobox/infobox-3.js')}}"></script>

	<!-- chart Js data -->
	<script src="{{ URL::asset('js/chartJS_data.js')}}"></script>

</body>

</html>
