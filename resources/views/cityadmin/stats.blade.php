<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>Analytics - City Admin Portal</title>
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
	<!-- Favicon-->
	<link rel="stylesheet" href="{{ URL::asset('AdminSB/favicon.ico') }}">
	<!-- Bootstrap Core Css -->
	{{-- <link href="{{ URL::asset('AdminSB/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet"> --}}
	
    <!-- NEW ADDED -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- Waves Effect Css -->
	<link href="{{ URL::asset('AdminSB/plugins/node-waves/waves.css') }}" rel="stylesheet">
	<!-- Animation Css -->
	 <link href="{{ URL::asset('AdminSB/plugins/animate-css/animate.css') }}" rel="stylesheet">
	<!-- Custom Css -->
	<link href="{{ URL::asset('AdminSB/css/style2.css') }}" rel="stylesheet">

<body class="container-fluid">

    <nav class="navbar navbar-expand-xl navbar-light fixed-top bg-light">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Toggle button -->
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>

      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Navbar brand -->
        <a class="navbar-brand mt-2 mt-lg-0" href="#">
          {{-- <img
            src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp"
            height="15"
            alt="MDB Logo"
            loading="lazy"
          /> --}}
          <small><strong>Polyclinic Management System</strong></small>
        </a>
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="dashboard">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="patient">Patient</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="analytics" id="stat">Analytics</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="reports">Reports</a>
          </li>
          
        </ul>
        <!-- Left links -->
      </div>
      <!-- Collapsible wrapper -->

      <!-- Right elements -->
      <div class="d-flex align-items-center">
        <!-- Icon -->
        <ul class="navbar-nav ">
          <li class="nav-item"">
              <a class="nav-link" href="">City Admin</a>
          </li>
        </ul>
      </div>
      <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
  </nav>



    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <script src="{{ URL::asset('AdminSB/plugins/jquery/jquery.min.js') }}"></script>
	<!-- Bootstrap Core Js -->
	{{-- <script src="{{ URL::asset('AdminSB/plugins/bootstrap/js/bootstrap.js') }}"></script> --}}
	<!-- Waves Effect Plugin Js -->
	<script src="{{ URL::asset('AdminSB/plugins/node-waves/waves.js') }}"></script>
	<!-- Validation Plugin Js -->
	<script src="{{ URL::asset('AdminSB/plugins/jquery-validation/jquery.validate.js') }}"></script>
	<!-- Custom Js -->
	<script src="{{ URL::asset('AdminSB/js/admin.js') }}"></script>
	<script src="{{ URL::asset('AdminSB/js/pages/examples/sign-in.js') }}"></script>

</body>

</html>    