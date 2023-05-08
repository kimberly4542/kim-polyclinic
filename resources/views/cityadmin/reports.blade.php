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
            <a class="nav-link" href="dashboard">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="patient">Patient</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="analytics">Analytics</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="reports" id="reports">Reports</a>
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

    <br><br>
    <div class="card2 col-lg-11">

      
      <div class="row">
          <div class="col-md-2">
            <select name="cases" id="cases" class="form-control">
              <option value selected="selected">Cases</option>
              <option value="Diagnosis">Dengue</option>
              <option value="Diagnosis">Diabetes</option>
              <option value="Diagnosis">Malaria</option>
            </select>
          </div>
          <div class="col-xs-2">
            <input type="text" placeholder="Age" class="form-control">
          </div>
          <div class="col-md-2">
            <select name="region" id="region" class="form-control">
              <option value selected="selected">Location</option>
              <option value="Region 1">Region 1</option>
              <option value="Region 2">Region 2</option>
              <option value="Region 3">Region 3</option>
              <option value="Region 4">Region 4</option>
              <option value="Region 5">Region 5</option>
              <option value="Region 6">Region 6</option>
            </select>
          </div>
          <div class="col-md-2">
            <select name="gender" id="gender" class="form-control">
              <option value selected="selected">Gender</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
          </div>
          <div class="col-sm-3">
            <input type="search" placeholder="Search" class="form-control">
          </div>
          <div class="col-xs-7">
            <button class="btn btn-warning form-control" style="">Print</button>
          </div>

      </div>


    <br><br>
    <div class="card col-lg-12">
          
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
                                                            <th>Cases</th>
                                                            <th>Age</th>
                                                            <th>Location</th>
                                                            <th>Gender</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Dengue</td>
                                                            <td>15</td>
                                                            <td>Region 1</td>
                                                            <td>Female</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>Dengue</td>
                                                            <td>15</td>
                                                            <td>Region 2</td>
                                                            <td>Female</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">3</th>
                                                            <td>Dengue </td>
                                                            <td>15</td>
                                                            <td>Region 3</td>
                                                            <td>Female</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">4</th>
                                                            <td>Dengue</td>
                                                            <td>15</td>
                                                            <td>Region 4</td>
                                                            <td>Female</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">5</th>
                                                            <td>Dengue </td>
                                                            <td>15</td>
                                                            <td>Region 5</td>
                                                            <td>Female</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">6</th>
                                                            <td>Dengue</td>
                                                            <td>15</td>
                                                            <td>Region 6</td>
                                                            <td>Female</td>
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