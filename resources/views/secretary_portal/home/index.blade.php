@extends('secretary_portal.layouts.master')


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
			<!-- Counter Examples -->
			{{-- <div class="block-header">
				<h2>
					SPECIALTIES
				</h2>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="info-box-3 bg-red">
						<div class="icon">
							<i class="material-icons">face</i>
						</div>
						<div class="content">
							<div class="text">ORTHOPEDICS</div>
							<div class="number count-to" data-from="0" data-to="125" data-speed="1000" data-fresh-interval="20">25</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="info-box-3 bg-indigo">
						<div class="icon">
							<i class="material-icons">face</i>
						</div>
						<div class="content">
							<div class="text">OBSTETRICS GYNECOLOGY</div>
							<div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20">7</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="info-box-3 bg-purple">
						<div class="icon">
							<i class="material-icons">face</i>
						</div>
						<div class="content">
							<div class="text">DENTISTRY</div>
							<div class="number count-to" data-from="0" data-to="117" data-speed="1000" data-fresh-interval="20">10</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="info-box-3 bg-deep-purple">
						<div class="icon">
							<i class="material-icons">face</i>
						</div>
						<div class="content">
							<div class="text">UROLOGY</div>
							<div class="number count-to" data-from="0" data-to="1432" data-speed="1500" data-fresh-interval="20">9</div>
						</div>
					</div>
				</div>
			</div> --}}
			<!-- #END# Counter Examples -->
			<!-- Hover Zoom Effect -->
			<div class="block-header">
				<h2>QUEUE</h2>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="info-box-3 bg-pink hover-zoom-effect">
						<div class="icon">
							<i class="material-icons">gps_fixed</i>
						</div>
						<div class="content">
							<div class="text">1st PRIORITY</div>
							<div class="number">10</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="info-box-3 bg-blue hover-zoom-effect">
						<div class="icon">
							<i class="material-icons">gps_fixed</i>
						</div>
						<div class="content">
							<div class="text">2nd PRIORITY</div>
							<div class="number">5</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="info-box-3 bg-light-blue hover-zoom-effect">
						<div class="icon">
							<i class="material-icons">gps_fixed</i>
						</div>
						<div class="content">
							<div class="text">UNFINISHED CONSULTATION</div>
							 <div class="number">27</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="info-box-3 bg-cyan hover-zoom-effect">
						<div class="icon">
							<i class="material-icons">gps_fixed</i>
						</div>
						<div class="content">
							<div class="text">FINISHED CONSULTATION</div>
							 <div class="number">38</div>
						</div>
					</div>
				</div>
			</div>
			<!-- #END# Hover Zoom Effect -->
			<!-- Hover Expand Effect -->
			{{-- <div class="block-header">
				<h2>INVENTORY</h2>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="info-box-3 bg-teal hover-expand-effect">
						<div class="icon">
							<i class="material-icons">equalizer</i>
						</div>
						<div class="content">
							<div class="text">MEDICINE</div>
							<div class="number">1245</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="info-box-3 bg-green hover-expand-effect">
						<div class="icon">
							<i class="material-icons">equalizer</i>
						</div>
						<div class="content">
							<div class="text">STOCK IN</div>
							<div class="number">4126</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="info-box-3 bg-light-green hover-expand-effect">
						<div class="icon">
							<i class="material-icons">equalizer</i>
						</div>
						<div class="content">
							<div class="text">STOCK OUT</div>
							<div class="number">565</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="info-box-3 bg-lime hover-expand-effect">
						<div class="icon">
							<i class="material-icons">equalizer</i>
						</div>
						<div class="content">
							<div class="text">RETURNED ITEMS</div>
							<div class="number">740</div>
						</div>
					</div>
				</div>
			</div> --}}
			<!-- #END# Hover Expand Effect -->


			{{-- <div class="block-header">
				<h2>SALES</h2>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="info-box-3 bg-teal hover-expand-effect">
						<div class="icon">
							<i class="material-icons">equalizer</i>
						</div>
						<div class="content">
							<div class="text">MEDICINE</div>
							<div class="number">P10,000</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="info-box-3 bg-green hover-expand-effect">
						<div class="icon">
							<i class="material-icons">equalizer</i>
						</div>
						<div class="content">
							<div class="text">CONSULTATION</div>
							<div class="number">P41,126</div>
						</div>
					</div>
				</div> --}}
				{{-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="info-box-3 bg-light-green hover-expand-effect">
						<div class="icon">
							<i class="material-icons">equalizer</i>
						</div>
						<div class="content">
							<div class="text">STOCK OUT</div>
							<div class="number">565</div>
						</div>
					</div>
				</div> --}}
			{{-- 	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="info-box-3 bg-lime hover-expand-effect">
						<div class="icon">
							<i class="material-icons">equalizer</i>
						</div>
						<div class="content">
							<div class="text">TOTAL INCOME</div>
							<div class="number">P107,000</div>
						</div>
					</div>
				</div>
			</div> --}}

			{{-- <div class="row clearfix">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="card">
						<div class="body">
							<canvas id="chart_Discipline"></canvas>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="card">
						<div class="body">
							<canvas id="chart_Medicine"></canvas>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="card">
						<div class="body">
							<canvas id="chart_monthly_client" ></canvas>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="card">
						<div class="body">
							<canvas id="chart_monthly_client_forecast" ></canvas>
						</div>
					</div>
				</div>
			</div> --}}

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