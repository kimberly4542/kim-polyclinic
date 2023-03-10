<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Polyclinic | Doctor's Portal</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{ URL::asset('AdminSB/plugins/bootstrap/css/bootstrap.css')}} rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{ URL::asset('plugins/node-waves/waves.css')}} rel="stylesheet">


    <!-- Animation Css -->
    <link href="{{ URL::asset('plugins/animate-css/animate.css')}} rel="stylesheet">

    <!-- Morris Chart Css-->
    <link href="{{ URL::asset('plugins/morrisjs/morris.css')}} rel="stylesheet">

    <!-- Custom Css -->
    <link href="{{ URL::asset('css/style.css')}} rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ URL::asset('css/themes/all-themes.css')}} rel="stylesheet">
    
</head>

<body class="theme-light-blue">
@yield('content')
    <!-- Jquery Core Js -->
    <script src="{{ URL::asset('plugins/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{ URL::asset('plugins/bootstrap/js/bootstrap.js')}}"></script>

    <!-- Select Plugin Js -->
    <script src="{{ URL::asset('plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{ URL::asset('plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{ URL::asset('plugins/node-waves/waves.js')}}"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="{{ URL::asset('plugins/jquery-countto/jquery.countTo.js')}}"></script>

    <!-- Morris Plugin Js -->
    <script src="{{ URL::asset('plugins/raphael/raphael.min.js')}}"></script>
    <script src="{{ URL::asset('plugins/morrisjs/morris.js')}}"></script>

    <!-- ChartJs -->
    <script src="{{ URL::asset('plugins/chartjs/Chart.bundle.js')}}"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="{{ URL::asset('plugins/flot-charts/jquery.flot.js')}}"></script>
    <script src="{{ URL::asset('plugins/flot-charts/jquery.flot.resize.js')}}"></script>
    <script src="{{ URL::asset('plugins/flot-charts/jquery.flot.pie.js')}}"></script>
    <script src="{{ URL::asset('plugins/flot-charts/jquery.flot.categories.js')}}"></script>
    <script src="{{ URL::asset('plugins/flot-charts/jquery.flot.time.js')}}"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="{{ URL::asset('plugins/jquery-sparkline/jquery.sparkline.js')}}"></script>

    <!-- Ckeditor -->
    <script src="{{ URL::asset('plugins/ckeditor/ckeditor.js')}}"></script>

    <!-- TinyMCE -->
    <script src="{{ URL::asset('plugins/tinymce/tinymce.js')}}"></script>

    <!-- Custom Js -->
    <script src="{{ URL::asset('js/admin.js')}}"></script>
    <script src="{{ URL::asset('js/pages/forms/editors.js')}}"></script>

    <!-- Demo Js -->
    <script src="{{ URL::asset('js/demo.js')}}"></script>
</body>

</html>
