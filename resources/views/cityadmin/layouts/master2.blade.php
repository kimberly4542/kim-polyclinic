<!DOCTYPE html>
<html>
<head>
	<title></title>
	@yield('style')
</head>
<body class="orange theme-red">
	@yield('body')
	{{-- @section('body')
	@show --}}
	@include('secretary_portal.layouts.js')
	@section('javascript')

	@show

	{{-- @yield('javascript') --}}
	@stack('js')
</body>
</html>