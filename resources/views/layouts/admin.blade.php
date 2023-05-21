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

    <!---Fontawesome----->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- NEW ADDED -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!--- jquer ui css --->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

    <!--- dropzone drag n drop --->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.css">

    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">

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
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <a class="navbar-brand" href="#">Polyclinic Management System</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
                <ul class="navbar-nav ml-auto">
                    <!-- Other menu items -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @if (Auth::guard('cityadmin')->check())
                                @php
                                    // Capitalize username first letter
                                    $username = ucfirst(Auth::guard('cityadmin')->user()->username);
                                @endphp
                                Hello {{ $username }}
                            @endif
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>


    @show

    <div class="container-fluid admin">

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @yield('content')
    </div>

    <script src="{{ URL::asset('AdminSB/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('AdminSB/plugins/node-waves/waves.js') }}"></script>
    <!-- Validation Plugin Js -->
    <script src="{{ URL::asset('AdminSB/plugins/jquery-validation/jquery.validate.js') }}"></script>
    <!-- Custom Js -->
    <script src="{{ URL::asset('AdminSB/js/admin.js') }}"></script>
    <script src="{{ URL::asset('AdminSB/js/pages/examples/sign-in.js') }}"></script>


    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-JX9ChB0qlx1k2+pZndWW5ZrsFjzMNnAbD2QPHSWj+MH8a9kzrLrGrOrvMzW32+8h" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
    <script>
        $('.toast').toast('show')
    </script>
    @stack('scripts')
</body>

</html>
