@extends('secretary_portal.layouts.master')


@section('style')

	<!-- Sweetalert Css -->
	<link href="{{ URL::asset('AdminSB/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet" />

@endsection
@section('body')
	<section class="content">
				<div class="container-fluid">
					<!-- Current Item List And Status -->
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
								 <!-- Current Item List and Status End -->
					<div class="block-header">
						<h2>
							PATIENT REPORT
						</h2>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="row clearfix">
							<div class="card">
								<div class="body">
									<canvas id="myChart"></canvas>
									
									<input type="hidden" id="urologyCount" value="{{ $urology }}">
									<input type="hidden" id="orthopedicsCount" value="{{ $orthopedics }}">
									<input type="hidden" id="opthalmologyCount" value="{{ $opthalmology }}">
									<input type="hidden" id="dentistryCount" value="{{ $dentistry }}">
									<input type="hidden" id="ob_gynCount" value="{{ $ob_gyn }}">
								</div>
							</div>
						</div>
					</div>
				</div>

<script src="{{ URL::asset('AdminSB/chartsJs/chart.min.js')}}"></script>
<script>
		let myChart = document.getElementById('myChart').getContext('2d');
		
		var opthalmologyCount = document.getElementById("opthalmologyCount").value;
		var orthopedicsCount = document.getElementById("orthopedicsCount").value;
		var ob_gynCount = document.getElementById("ob_gynCount").value;
		var dentistryCount = document.getElementById("dentistryCount").value;
		var urologyCount = document.getElementById("urologyCount").value;

		//Global Options
		Chart.defaults.global.defaultFontFamily = 'Lato';
		Chart.defaults.global.defaultFontSize = 18;
		Chart.defaults.global.defaultFontColor = '#777';
		var value = 500;

		let massPopChart = new Chart(myChart, {
			type:'bar', //bar, horzontalBar, pie, line, doughnut, radar, polarArea
			data:{
				labels:['Opthalmology','Orthopedics','Ob/Gyne','Dentistry','Urology'],
				datasets:[{
					label:'Patients', 
					data:[
						opthalmologyCount,
						orthopedicsCount,
						ob_gynCount,
						dentistryCount,
						urologyCount
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
					text: 'Number of Patients per Discipline'
				}
			} 
		}); 
	</script>
	</section>
</section>
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