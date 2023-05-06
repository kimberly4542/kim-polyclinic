<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>Reports - City Admin Portal</title>
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
            <a class="nav-link" href="dash">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="reports" id="reports">Reports</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="patient">Patient</a>
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
  <br><br><br>

<div class="card2 col-lg-11">


 <br><br><br><br><br>   
<div class="card col-lg-11">
      <div class="col" style="margin-top: -8px">
                                <div class="form-outline">
                                  <label class="form-label" for="form3Example1">Gender</label> 
                                  <select class="form-control show-tick" name="gender" tabindex="-98">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                  </select>
    </div>
  <div class="container-fluid">

  




    <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">Disease Record</h5>
                            <p class="mb-40"><small>Apply filters to generate report. </small></p>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="table-wrap">
                                        <div class="table-responsive">
                                            <table class="table table-striped mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Location</th>
                                                        <th>Gender</th>
                                                        <th>Age</th>
                                                        <th>Cases</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Region 1</td>
                                                        <td>Female</td>
                                                        <td>15</td>
                                                        <td>Dengue</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>Region 2</td>
                                                        <td>Female</td>
                                                        <td>15</td>
                                                        <td>Dengue</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>Region 3</td>
                                                        <td>Female</td>
                                                        <td>15</td>
                                                        <td>Dengue </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>Region 4</td>
                                                        <td>Female</td>
                                                        <td>15</td>
                                                        <td>Dengue </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">5</th>
                                                        <td>Region 5</td>
                                                        <td>Female</td>
                                                        <td>15</td>
                                                        <td>Dengue </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">6</th>
                                                        <td>Region 6</td>
                                                        <td>Female</td>
                                                        <td>15</td>
                                                        <td>Dengue</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>


  </div>
</div>
</div>


  

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