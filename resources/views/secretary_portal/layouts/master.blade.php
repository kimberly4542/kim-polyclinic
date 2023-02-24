<!DOCTYPE html>
<html>
<head>
	<title></title>
	@include('secretary_portal.layouts.css')
	@yield('style')
</head>
<body class="orange theme-red">
	@include('secretary_portal.layouts.loader')
	@include('secretary_portal.layouts.navbar')
	@include('secretary_portal.layouts.sidebar')
	@yield('body')
	{{-- @section('body')
	@show --}}
	@include('secretary_portal.layouts.js')
	@section('javascript')

	@show

	{{-- @yield('javascript') --}}
</body>
</html>