<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>Home - City Admin Portal</title>
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
			background-color: #323232;
			padding-left: 0;
			max-width: 360px;
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

            .navbar {
    background-color: #333;
}

.navbar-brand {
    font-size: 2rem;
    padding: 0.5rem 1rem;
}

.navbar-nav {
    font-size: 1.5rem;
}

.nav-link {
    color: #fff !important;
    margin: 0 1rem;
}

.nav-link:hover {
    color: #f5f5f5 !important;
}

.content {
    padding: 150px;
    color:black;
}
#polyy {
	height: 30%;
	padding-right: 50px;
}

#beplop1 {
	
}


#clinic {
	up: 50%;
	text-align: center;
}

#beplop2 {

	margin: 52.2rem;
}

#manage {
	bottom: 100%;
	text-align: right;
}

#man {
	margin:100rem;
}

</style>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">Polyclinic Management System</a> 
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-center" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/about">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/contact">Contact</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/services">Services</a>
				</li>
			</ul>
		</div>
	</nav>
</head>

<body class="container">

    <br>
	<br>
	<br>
	<br>
	<br>
	<br>
<input type="text" class="form-control" id="form" aria-label="Text input with dropdown button">

<div class="input-group mb-3">
  <div class="input-group-prepend"id="polyy">
    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Poly</button>
	<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu"id="beplop1">
				<!-- Dropdown menu links -->
			<li><a href="#">Action</a></li>
			<li><a href="#">Another action</a></li>
			<li><a href="#">Something else here</a></li>
			<li class="divider"></li>
			<li><a href="#">Separated link</a></li>
			</ul>
</div>


<div class="btn-group dropdown">
	<br>
	<br>
</div>
		</div>

		<body class="container">
	
<div class="input-group mb-3">
  <div class="input-group-prepend"id="clinic">
    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">clinic</button>
	<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu"id="beplop2">
				<!-- Dropdown menu links -->
			<li><a href="#">Action</a></li>
			<li><a href="#">Another action</a></li>
			<li><a href="#">Something else here</a></li>
			<li class="divider"></li>
			<li><a href="#">Separated link</a></li>
			</ul>
	
</div>

<div class="btn-group dropdown">
	<br>
	<br>
</div>
		</div>
<div class="input-group mb-3">
  <div class="input-group-prepend" id="manage">
    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Management</button>
	<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu" id="man">
				<!-- Dropdown menu links -->
			<li><a href="#">Action</a></li>
			<li><a href="#">Another action</a></li>
			<li><a href="#">Something else here</a></li>
			<li class="divider"></li>
			<li><a href="#">Separated link</a></li>
			</ul>
</div>
	

<div class="btn-group dropdown">
	<br>
	<br>
</div>
		</div>
		

   <div class="container">
        <br>
        <br>

    </div>

	
	<!-- #END# Right Sidebar -->
 </section>
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