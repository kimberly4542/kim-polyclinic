<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>Login - city Portal</title>

		<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

	<!-- Favicon-->
	<link rel="stylesheet" href="{{ URL::asset('AdminSB/favicon.ico') }}">

	<!-- Bootstrap Core Css -->
	<link href="{{ URL::asset('AdminSB/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

	<!-- Waves Effect Css -->
	<link href="{{ URL::asset('AdminSB/plugins/node-waves/waves.css') }}" rel="stylesheet">

	<!-- Animation Css -->
	 <link href="{{ URL::asset('AdminSB/plugins/animate-css/animate.css') }}" rel="stylesheet">

	<!-- Custom Css -->
	<link href="{{ URL::asset('AdminSB/css/style.css') }}" rel="stylesheet">
	<style type="text/css">
		#btn-log-in {
			margin-left: 150%;
    		margin-right: auto;
		}
		.login-page {
			background: linear-gradient(to bottom, #0099ff 0%, #66ffff 54%);
			padding-left: 0;
			max-width: 360px;
			max-height: 1080px;
			width: 100%;
			height: 100%;
			margin: 5% auto;
			overflow-x: hidden; }
		.login-page .login-box .msg {
			color: #555;
			margin-bottom: 30px;
			text-align: center; }
		.login-page .login-box a {
			font-size: 14px;
			text-decoration: none;
			color: #00BCD4; }
		.login-page .login-box .logo {
			margin-bottom: 20px; }
		.login-page .login-box .logo a {
			font-size: 25px;
			display: block;
			width: 100%;
			text-align: center;
			color: #fff; }
		.login-page .login-box .logo small {
			display: block;
			width: 100%;
			text-align: center;
			color: #fff;
			margin-top: -5px; }
		
	</style>
</head>

<body class="login-page" style="height: 700px;">
	<div class="login-box">
		<div class="logo">
			<a href="/"><b>Polyclinic Management System</b></a>
			<small>Doctor's Portal</small>
		</div>
		<div class="card">
			<div class="body">
				<form id="sign_in" method="POST" action="{{ url('session/login/store') }}">
					@csrf
					<div class="msg">Log in to start the session</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="material-icons">person</i>
						</span>
						<div class="form-line">
							<input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="material-icons">lock</i>
						</span>
						<div class="form-line">
							<input type="password" class="form-control" name="password" placeholder="Password" required>
						</div>
					</div>
					<div class="row">
					{{-- 	<div class="col-xs-8 p-t-5">
							<input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
							<label for="rememberme">Remember Me</label>
						</div> --}}
						<div class="col-xs-12">
							@if(session('message'))
								<div class="alert alert-danger">
									<p>{{ session('message') }}</p>
								</div>
							@endif
						</div>
						<div class="col-xs-12">
							@if(session('logoutMessage'))
								<div class="alert alert-success">
									<p>{{ session('logoutMessage') }}</p>
								</div>
							@endif
						</div>
						<div class="col-xs-4">
							<center>
								<button  id="btn-log-in" class="btn bg-deep-orange waves-effect" type="submit">Login</button>
							</center>
						</div>
					</div>
					<div class="row m-t-15 m-b--20">
						<div class="col-xs-6">
							<a href="#register now"></a>
						</div>
						<div class="col-xs-6 align-right">
							<a href="#forgot password">Forgot Password?</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Jquery Core Js -->
	<script src="{{ URL::asset('AdminSB/plugins/jquery/jquery.min.js') }}"></script>

	<!-- Bootstrap Core Js -->
	<script src="{{ URL::asset('AdminSB/plugins/bootstrap/js/bootstrap.js') }}"></script>

	<!-- Waves Effect Plugin Js -->
	<script src="{{ URL::asset('AdminSB/plugins/node-waves/waves.js') }}"></script>

	<!-- Validation Plugin Js -->
	<script src="{{ URL::asset('AdminSB/plugins/jquery-validation/jquery.validate.js') }}"></script>

	<!-- Custom Js -->
	<script src="{{ URL::asset('AdminSB/js/admin.js') }}"></script>
	<script src="{{ URL::asset('AdminSB/js/pages/examples/sign-in.js') }}"></script>
</body>

</html>