@extends('doctor_portal.layouts.master')


@section('style')

	<!-- Sweetalert Css -->
	<link href="{{ URL::asset('AdminSB/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet" />

@endsection
@section('body')
	<section class="content">
		<div class="container-fluid">
			<div class="row clearfix">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="card">
						<div class="header">
							<h2 style="padding: 20px;">
								Patient List
							</h2>
						</div>
						<div class="body">
							<div class="table-responsive">
								<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
									<thead>
										<tr>
											<th>First Name</th>
											<th>Middle Name</th>
											<th>Last Name</th>
											<th>Clinic</th>
											<th>Gender</th>
										</tr>
									</thead>
									<tbody>
										@if(count($listOfPatients) > 0)
											@foreach($listOfPatients as $data)
												<tr>
													<td> {{ $data->fname }} </td>
													<td> {{ $data->mname }} </td>
													<td> {{ $data->lname }} </td>
													<td> {{ $patientModel->getClinicName($data->clinic_id) }} </td>
													<td> {{ $data->gender }} </td>
												</tr>
										   @endforeach
										@else
											<td> No Data Found</td>
										@endif
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="block-header">
				<h2>
					Graphical Representation
				</h2>
				<div class="row clearfix">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="card">
							<div class="body">
								<canvas id="PatientChart"></canvas>
								<input type="hidden" id="patientCount" value="{{ $patientCount }}">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{ URL::asset('AdminSB/chartsJs/chart.min.js')}}"></script>
	<script>
		let myChart = document.getElementById('PatientChart').getContext('2d');
		var patientCount = document.getElementById("patientCount").value;
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
						0,0,0,0,0,0,0,0,0,0,0,patientCount
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
					text: 'Monthly Patient Count'
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
	@endsection
@endsection