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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <link href="{{ URL::asset('AdminSB/css/style2.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/cityadmin.css') }}" rel="stylesheet">
</head>

<body class="container-fluid login-page">
    @yield('content')
</body>

<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('AdminSB/plugins/jquery/jquery.min.js') }}"></script>
@stack('scripts')

</html>
