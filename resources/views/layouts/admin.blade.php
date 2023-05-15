<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - PMS</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet"
        type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <!-- Favicon-->
    <link rel="stylesheet" href="{{ URL::asset('AdminSB/favicon.ico') }}">
    <!-- Bootstrap Core Css -->
    {{-- <link href="{{ URL::asset('AdminSB/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet"> --}}

    <!---Fontawesome----->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- NEW ADDED -->
    {{-- <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- Waves Effect Css -->
    <link href="{{ URL::asset('AdminSB/plugins/node-waves/waves.css') }}" rel="stylesheet">
    <!-- Animation Css -->
    <link href="{{ URL::asset('AdminSB/plugins/animate-css/animate.css') }}" rel="stylesheet">
    <!-- Custom Css -->
    <link href="{{ URL::asset('AdminSB/css/style2.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/cityadmin.css') }}" rel="stylesheet">
</head>

<body class="container-fluid">
    @section('navbar')
        <nav class="navbar navbar-expand-xl navbar-light fixed-top bg-light">
            <!-- Container wrapper -->
            <div class="container-fluid">
                <!-- Toggle button -->
                {{-- <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                    data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button> --}}

                <!-- Collapsible wrapper -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Navbar brand -->
                    <a class="navbar-brand mt-2 mt-lg-0" href="#">
                        <small><strong>Polyclinic Management System</strong></small>
                    </a>
                    <!-- Left links -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}"
                                href="{{ url('admin/dashboard') }}">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('admin/patients') ? 'active' : '' }}"
                                href="{{ route('patient.index') }}">Patient</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('admin/analytics') ? 'active' : '' }}"
                                href="{{ url('admin/analytics') }}">Analytics</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('admin/reports') ? 'active' : '' }}"
                                href="{{ url('admin/reports') }}">Reports</a>
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

                   <div class="navbar-nav me-auto mb-2 mb-lg-0"> 
                    {{-- fa fa-chevron-down  --}}
                        <i class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                        {{-- <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Log out</a>
                        </div> --}}
                        <div class="dropdown-menu dropdown-menu-right">
                         <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                        </a>
                        </div>

                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                        </form>
                    </div>

            </div>
            <!-- Right elements -->
            </div>
            <!-- Container wrapper -->
        </nav>
    @show

    <div class="container-fluid admin">

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @yield('content')
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

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
            integrity="sha384-JX9ChB0qlx1k2+pZndWW5ZrsFjzMNnAbD2QPHSWj+MH8a9kzrLrGrOrvMzW32+8h"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    @stack('scripts')
</body>

</html>
