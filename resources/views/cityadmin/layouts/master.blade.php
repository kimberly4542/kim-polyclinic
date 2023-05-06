<!DOCTYPE html>
<html>
<head>
	<title></title>
	@include('doctor_portal.layouts.css')
	@yield('style')
</head>
<body class="theme-light-blue">
	@include('doctor_portal.layouts.loader')
	@include('doctor_portal.layouts.navbar')
	@include('doctor_portal.layouts.sidebar')
	@yield('body')
	{{-- @section('body')
	@show --}}
	@include('doctor_portal.layouts.js')
	@section('javascript')

	@show

	{{-- @yield('javascript') --}}
</body>
</html>

