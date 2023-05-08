<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>Patient - City Admin Portal</title>
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
   
<!-- Navbar -->
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
            <a class="nav-link" href="patient" id="patient">Patient</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="analytics">Analytics</a>
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
        <!-- Notifications -->
        {{-- <div class="dropdown">
          <a
            class="text-reset me-3 dropdown-toggle hidden-arrow"
            href="#"
            id="navbarDropdownMenuLink"
            role="button"
            data-mdb-toggle="dropdown"
            aria-expanded="false"
          >
            <i class="fas fa-bell"></i>
            <span class="badge rounded-pill badge-notification bg-danger">1</span>
          </a>
          <ul
            class="dropdown-menu dropdown-menu-end"
            aria-labelledby="navbarDropdownMenuLink"
          >
            <li>
              <a class="dropdown-item" href="#">Some news</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Another news</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Something else here</a>
            </li>
          </ul>
        </div> --}}
        <!-- Avatar -->
        {{-- <div class="dropdown"> --}}
          {{-- <a
            class="dropdown-toggle d-flex align-items-center hidden-arrow"
            href="#"
            id="navbarDropdownMenuAvatar"
            role="button"
            data-mdb-toggle="dropdown"
            aria-expanded="false"
          > --}}
            {{-- <img
              src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
              class="rounded-circle"
              height="25"
              alt="Black and White Portrait of a Man"
              loading="lazy"
            /> --}}
            {{-- <small>City Admin</small>
          </a>
          <ul
            class="dropdown-menu dropdown-menu-end"
            aria-labelledby="navbarDropdownMenuAvatar"
          >
            <li>
              <a class="dropdown-item" href="#">My profile</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Settings</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Logout</a>
            </li>
          </ul>
        </div> --}}
      </div>
      <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->

  <section class="content">
        <div class="container-fluid"> 
            <div class="panel1">
                <div class="card col-lg-10">
                    <form>
                          <!-- 2 column grid layout with text inputs for the first and last names -->
                        
                    <div class="row mb-4">
                        <div class="col">
                        <div class="form-outline">
                          <label class="form-label" for="form3Example1">First name</label>
                            <input type="text" id="form3Example1" class="form-control" />
                            
                        </div>
                        </div>
                        <div class="col">
                        <div class="form-outline">
                          <label class="form-label" for="form3Example2">Middle name</label>  
                          <input type="text" id="form3Example2" class="form-control" />
                            
                        </div>
                        </div>
                        <div class="col">
                        <div class="form-outline">
                          <label class="form-label" for="form3Example1">Last name</label>
                            <input type="text" id="form3Example1" class="form-control" />
                            
                        </div>
                        </div>
                        <div class="col">
                        <div class="form-outline">
                          <label class="form-label" for="form3Example1">Suffix</label>  
                          <input type="text" id="form3Example1" class="form-control" />
                            
                        </div>
                        </div>
                    </div>

                    <strong>Basic Information</strong> 
                    <br>
                    {{-- col-lg-6 col-md-6 col-sm-6 col-xs-6 --}}
                    <div class="row">
                        <div class="col-md-6" style="margin-left:-10px; margin-top:15px">
                            <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="">Birthdate</label>
                                <input type="date" class="date-picker form-control">
                                {{-- <label class="form-label" for="">Birthdate</label> --}}
                            </div>
                            </div>
                            <br>
                            <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="form3Example1">Height</label>
                                <input type="text" id="form3Example1" class="form-control" /> 
                            </div>  
                            </div>
                            <br>
                            <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="form3Example1">Weight</label>
                                <input type="text" id="form3Example1" class="form-control" /> 
                            </div>  
                            </div>
                            <br>
                            <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="form3Example1">Bloodtype</label>
                                <input type="text" id="form3Example1" class="form-control" />
                            </div>  
                            </div>     
                        </div>


                        <div class="col-md-6" style="margin-bottom: 0px">
                          <br>
                              <div class="col" style="margin-top: -8px">
                                <div class="form-outline">
                                  <label class="form-label" for="form3Example1">Gender</label> 
                                  <select class="form-control show-tick" name="gender" tabindex="-98">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                  </select>
                                </div>

                                <div class="form-outline" style="margin-top: 25px">
                                  <label class="form-label" for="form3Example1">Civil Status</label> 
                                  <select class="form-control show-tick" name="gender" tabindex="-98">
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Divorced">Divorced</option>
                                    <option value="Separated">Separated</option>
                                    <option value="Widowed">Widowed</option>
                                  </select>
                                </div>

                                <div class="form-outline" style="margin-top: 25px; margin-left: -15px">
                                  <div class="col">
                                    <div class="form-outline">
                                    <label class="form-label" for="form3Example1">Contact Number</label>
                                    <input type="text" id="form3Example1" class="form-control" />
                                    </div>  
                                  </div> 
                                </div>

                                <div class="form-outline" style="margin-top: 25px; margin-left: -15px">
                                  <div class="col">
                                    <div class="form-outline">
                                    <label class="form-label" for="form3Example1">Citizenship</label>
                                    <input type="text" id="form3Example1" class="form-control" />
                                    </div>  
                                  </div> 
                                </div>            
                              </div>
                         </div>
                       
                      <div class="col col-lg-12">
                        <br>
                        <div class="form-outline">
                          <label class="form-label" for="form3Example1">Address</label>  
                          <input type="text" id="form3Example1" class="form-control" />
                        </div>
                        <br>
                        <div class="form-outline">
                          <label class="form-label" for="form3Example1">Diagnosis</label>  
                          <input type="text" id="form3Example1" class="form-control" />
                        </div>
                      </div>

                      
                    </div>
                    <br>
                    <button type="submit" class="btn btn-dark btn-block mb-4" id="btn-submit">Add Patient</button>
                  </form>
                </div>
            </div>
        </div>
  </section>
                      <!-- Dropdown -->
                        {{-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="margin-bottom: 0px">
                              <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5" style="margin-bottom: 0px">
                                <div class="btn-group bootstrap-select form-control show-trick">
                                    <div class="dropdown-menu open" style="max-height: 289.994px; overflow: hidden; min-height: 0px;">
                                        <ul class="dropdown-menu inner" role="menu" style="max-height: 279.994px; overflow-y: auto; min-height: 0px;">
                                            <li data-original-index="0" class="selected">
                                                <a tabindex="0" class style data-tokens="null">
                                                    <span class="text">Male</span>
                                                    <span class="glyphicon glyphicon-ok check-mark"></span>
                                                </a>
                                            </li>
                                            <li data-original-index="1">
                                                <a tabindex="0" class style data-tokens="null">
                                                    <span class="text">Female</span>
                                                    <span class="glyphicon glyphicon-ok check-mark"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <select class="form-control show-tick" name="gender" tabindex="-98">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
									                  </select>
                                </div>
                              </div>
                            </div> --}}

                  {{-- <!-- Email input -->
                    <div class="form-outline mb-2">
                        <input type="email" id="form3Example3" class="form-control" />
                        <label class="form-label" for="form3Example3">Email address</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" id="form3Example4" class="form-control" />
                        <label class="form-label" for="form3Example4">Password</label>
                    </div>

                    <!-- Checkbox -->
                    <div class="form-check d-flex justify-content-center mb-4">
                        <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                        <label class="form-check-label" for="form2Example33">
                        Subscribe to our newsletter
                        </label>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4">Sign up</button>


                     

                    <!-- Register buttons -->
                    <div class="text-center">
                        <p>or sign up with:</p>
                        <button type="button" class="btn btn-secondary btn-floating mx-1">
                        <i class="fab fa-facebook-f"></i>
                        </button>

                        <button type="button" class="btn btn-secondary btn-floating mx-1">
                        <i class="fab fa-google"></i>
                        </button>

                        <button type="button" class="btn btn-secondary btn-floating mx-1">
                        <i class="fab fa-twitter"></i>
                        </button>

                        <button type="button" class="btn btn-secondary btn-floating mx-1">
                        <i class="fab fa-github"></i>
                        </button>
                    </div>

                    <div class="row mb-4">                            
                            <div class="col">
                            <div class="form-outline">
                                <input type="date" class="date-picker form-control">
                                <label class="form-label" for="">Birthdate</label>
                            </div>
                            </div>
                            <div class="col">
                            <div class="form-outline">
                                <input type="text" id="form3Example1" class="form-control" />
                                <label class="form-label" for="form3Example1">Height</label>
                            </div>  
                            </div>
                            <div class="col">
                            <div class="form-outline">
                                <input type="text" id="form3Example1" class="form-control" />
                                <label class="form-label" for="form3Example1">Weight</label>
                            </div>  
                            </div>
                            <div class="col">
                            <div class="form-outline">
                                <input type="text" id="form3Example1" class="form-control" />
                                <label class="form-label" for="form3Example1">Bloodtype</label>
                            </div>  
                            </div>     
                        </div>  --}}


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