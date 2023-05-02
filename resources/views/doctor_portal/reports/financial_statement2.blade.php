@extends('doctor_portal.layouts.master')


	@section('style')
	

	<!-- Bootstrap Material Datetime Picker Css -->
	<link href="{{ URL::asset('AdminSB/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet" />
	<!-- Sweetalert Css -->
	<link href="{{ URL::asset('AdminSB/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet" />

	@endsection
@section('body')
	<section class="content">
				<div class="container-fluid">
					 
					<div class="block-header">
						<h2>
							CONSULTATION
						</h2>
					</div>
					<div class="card"> 
					<div class="row clearfix">
					</div>
					<div class="body table-responsive">
						<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
							<thead>
								<tr>
									<th><center> Particulars </center></th>
	                                <th><center> Qnty/Time </center></th>
									<th><center> Unit </center></th>
									<th><center> TotalAmount / Rate </center></th>
									<th><center> Date </center></th>
								</tr>
							</thead>
							<tbody>
								@if(count($query) > 0 )
									@foreach ($query as $subscriber) 
										@foreach ($subscriber->getCLinic as $clinic) 
											@foreach ($clinic->getPatient as $patient) 
												@foreach ($patient->getConsultation as $consultation) 
													@foreach ($consultation->getBilling as $billing)    
														@if(!$billing->particulars || !$billing->total_amount)
														@else
															<tr>
																<th>{{ $billing->particulars }}</th>
																<th>{{ $billing->quantity }}</th>
																<th>{{ $billing->unit }}</th>
																<th>{{ $billing->total_amount }}</th>
																<th>{{ $billing->created_at->diffForHumans() }}</th>
															</tr>
														@endif
															
													@endforeach
												@endforeach
											@endforeach
										@endforeach
									@endforeach
								@else
									<tr>No Data Found</tr>
								@endif
							</tbody>
						</table>
						<div class="row clearfix">
							<div class="col-sm-8">
								
							</div>
							<div class="col-sm-4" style="display: none;">
								<h6>TOTAL</h6>
								<div class="col-sm-10" style="padding: 0px;">
									<input type="text"class="form-control">
								</div>
							</div>
						</div>
					</div>
				</div>
			
				<div class="row clearfix">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="card">
							<div class="body">
								<canvas id="ConsultChart"></canvas>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="visibility: hidden;">
						<div class="card">
							<div class="body">
								<canvas id=""></canvas>
								<input type="hidden" id="consultationAmount" value="{{ $addedAmount }}">
							</div>
						</div>
					</div>
				</div>
		</div>	
	</section>
</section>
<script src="{{ URL::asset('AdminSB/chartsJs/chart.min.js')}}"></script>
 <script>
		let myChart = document.getElementById('ConsultChart').getContext('2d');
		// let medChart = document.getElementById('medChart').getContext('2d');
		
		var consultationAmount = document.getElementById("consultationAmount").value;

		//Global Options
		Chart.defaults.global.defaultFontFamily = 'Lato';
		Chart.defaults.global.defaultFontSize = 18;
		Chart.defaults.global.defaultFontColor = '#777';
		var value = 500;

		let massPopChart = new Chart(myChart, {
			type:'bar', //bar, horzontalBar, pie, line, doughnut, radar, polarArea
			data:{
				labels:['January','Febuary','March','April','May','June', 'July', 'August', 'September', 'October', 'November', 'December'],
				datasets:[{
					label:'Income', 
					data:[
						0,0,0,0,0,0,0,0,0,0,0,consultationAmount
					],
					backgroundColor:[
					'rgba(25, 99, 132, 0.6)',
					'rgba(153, 102, 255, 0.6)',
					'rgba(255, 206, 86, 0.6)',
					'rgba(75, 192, 192, 0.6)',
					'rgba(255, 99, 132, 0.6)'
					],
					borderWidth:1,
					borderColor:'#777',
					hoverBorderWidth:'1.5',
					hoverBorderColor:'#000'
				}]
			},
			options:{
				title:{
					display: true,
					text: 'Consultation Income'
				}
			} 
		}); 
</script>
	@section('javascript')

		<script src="{{ URL::asset('AdminSB/plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
		<script src="{{ URL::asset('AdminSB/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
		<script src="{{ URL::asset('AdminSB/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}"></script>
		<script src="{{ URL::asset('AdminSB/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')}}"></script>
		<script src="{{ URL::asset('AdminSB/plugins/jquery-datatable/extensions/export/jszip.min.js')}}"></script>
		<script src="{{ URL::asset('AdminSB/plugins/jquery-datatable/extensions/export/pdfmake.min.js')}}"></script>
		<script src="{{ URL::asset('AdminSB/plugins/jquery-datatable/extensions/export/vfs_fonts.js')}}"></script>
		<script src="{{ URL::asset('AdminSB/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')}}"></script>
		<script src="{{ URL::asset('AdminSB/plugins/jquery-datatable/extensions/export/buttons.print.min.js')}}"></script>
		{{-- CUSTOM JS --}}
		<script src="{{ URL::asset('AdminSB/js/pages/tables/jquery-datatable.js')}}"></script> 
		<!-- Slimscroll Plugin Js -->
		<script src="{{ URL::asset('AdminSB/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>1
		<!-- Sparkline Chart Plugin Js -->
		<script src="{{ URL::asset('AdminSB/plugins/jquery-sparkline/jquery.sparkline.js') }}"></script>1
		<!-- Moment Plugin Js -->
		<script src="{{ URL::asset('AdminSB/plugins/momentjs/moment.js')}}"></script>1
		<!-- Bootstrap Material Datetime Picker Plugin Js -->
		<script src="{{ URL::asset('AdminSB/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>1
		<!-- Custom Js -->
		<script src="{{ URL::asset('AdminSB/js/pages/forms/basic-form-elements.js')}}"></script>1
		{{-- <script src="{{ URL::asset('AdminSB/js/admin.js')}}"></script> --}}
		<!-- Custom Js -->
		<script src="{{ URL::asset('AdminSB/js/pages/forms/basic-form-elements.js')}}"></script>1
	@endsection
@endsection
