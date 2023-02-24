@extends('doctor_portal.layouts.master')


@section('style')

	<!-- Sweetalert Css -->
	<link href="{{ URL::asset('AdminSB/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet" />

@endsection

@section('body')
	<section class="content">
		@if(session('message'))
			<div class="alert alert-success">
				<p>{{ session('message') }}</p>
			</div>
		@endif

		<div class="container-fluid">
			
		</div>
	</section>
	@section('javascript')
	<!-- ChartJs -->
	<script src="{{ URL::asset('AdminSB/plugins/chartjs/Chart.bundle.js') }}"></script>
	<!-- Sparkline Chart Plugin Js -->
	<script src="{{ URL::asset('AdminSB/plugins/jquery-sparkline/jquery.sparkline.js') }}"></script>

	<!-- Bootstrap Notify Plugin Js -->
	<script src="{{ URL::asset('AdminSB/plugins/bootstrap-notify/bootstrap-notify.js') }}"></script>
	<!-- Wait Me Plugin Js -->
	<script src="{{ URL::asset('AdminSB/plugins/waitme/waitMe.js') }}"></script>
	
	<!-- SweetAlert Plugin Js -->
	<script src="{{ URL::asset('AdminSB/plugins/sweetalert/sweetalert.min.js')}}"></script>
	
	
	<!-- Custom Js -->
	<script src="{{ URL::asset('AdminSB/js/pages/ui/notifications.js') }}"></script>
	<script src="{{ URL::asset('AdminSB/js/pages/cards/colored.js')}}"></script>
	{{-- <script src="{{ URL::asset('AdminSB/js/pages/forms/basic-form-elements.js')}}"></script> --}}
	<script src="{{ URL::asset('AdminSB/js/helpers.js')}}"></script>
	<script src="{{ URL::asset('AdminSB/js/pages/widgets/infobox/infobox-3.js')}}"></script>

	<!-- chart Js data -->
	<script src="{{ URL::asset('/js/chartJS_data.js')}}"></script>
	@endsection

@endsection