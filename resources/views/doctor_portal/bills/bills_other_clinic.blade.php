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
						{{-- <div class="header" style="padding: 25px;">
							<h2>
								<b>
									Patient List
								</b> 
							</h2>
						</div> --}}
						<div class="modal-header">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12" style="padding-left: 0px; margin-top: 10px;">
									<h4 class="modal-title" id="largeModalLabel">Patient Bills</h4>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="padding: 0px;">
									<div class="demo-button-nesting">
										<div class="btn-group pull-right" role="group">
											{{-- <a href="{{ url('bills/bills_other_clinic') }}" type="button" class="btn bg-grey waves-effect">All</a> --}}
											<div class="btn-group" role="group">
												@if(count($clinicQuery) > 0)
													<button type="button" class="btn btn-default waves-effect dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														Choose Clinic
														<span class="caret"></span>
													</button>
														<ul class="dropdown-menu">
															@foreach($clinicQuery as $data)
																<li><a 
																	href=" {{ url('bills/select_clinic') }}/{{ $data->clinic_id }}">
																	{{ $data->clinic_name }}
																	</a>
																</li>
															@endforeach
														</ul>
												@else
													<button type="button" class="btn btn-default waves-effect dropdown-toggle">
														<p> No Clinic</p>
														<span class="caret"></span>
													</button>
												@endif
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
						<div class="body">
						
							<div class="table-responsive">
								<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
									<thead>
										<tr>
											<th>First Name</th>
											<th>Middle Name</th>
											<th>Last Name</th>
											<th>Gender</th>
											<th>Clinic</th>
											<th>ACTION</th>
										</tr>
									</thead>
									<tbody>
										@if(count($clinicDataQuery) > 0 )
											@foreach($clinicDataQuery as $data)
												 <tr>
													<td> {{ $data->fname }} </td>
													<td> {{ $data->mname }} </td>
													<td> {{ $data->lname }} </td>
													<td> {{ $data->gender }} </td>
													@if($clinicName > 0)
														<td> {{ $clinicName }}</td>
													@else
														<td> {{ $patientModel->getClinicName($data->clinic_id) }} </td>
													@endif
													<td> <a href="{{ url('bills/specific_patient_bill') }}/{{ $data->patient_id }}" 
															class="btn btn-primary"> View Bills 
														</a> 
													</td>
												</tr>
											@endforeach
										@else
											<tr>
												<td> Please select clinic first to load the data </td>
											</tr>
										@endif
									</tbody>
								</table>
							</div>
								
						</div>
					</div>
				</div>
			</div>  <!-- Current Item List and Status End -->
						
		</div>
	</section>
</section>
	@section('javascript')
	<!-- ChartJs -->
	<script src="{{ URL::asset('AdminSB/plugins/chartjs/Chart.bundle.js') }}"></script>
	<!-- Sparkline Chart Plugin Js -->
	<script src="{{ URL::asset('AdminSB/plugins/jquery-sparkline/jquery.sparkline.js') }}"></script>

	<!-- Bootstrap Notify Plugin Js -->
	<!-- Wait Me Plugin Js -->
	<script src="{{ URL::asset('AdminSB/plugins/waitme/waitMe.js') }}"></script>
	
	<!-- SweetAlert Plugin Js -->
	<script src="{{ URL::asset('AdminSB/plugins/sweetalert/sweetalert.min.js')}}"></script>
	
	
	<!-- Custom Js -->
	{{-- <script src="{{ URL::asset('AdminSB/js/pages/forms/basic-form-elements.js')}}"></script> --}}
	<script src="{{ URL::asset('AdminSB/js/helpers.js')}}"></script>
	<script src="{{ URL::asset('AdminSB/js/pages/widgets/infobox/infobox-3.js')}}"></script>

	<!-- Jquery DataTable Plugin Js -->
	<script src="{{ URL::asset('AdminSB/plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
	<script src="{{ URL::asset('AdminSB/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
	<script src="{{ URL::asset('AdminSB/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}"></script>
	<script src="{{ URL::asset('AdminSB/js/pages/tables/jquery-datatable.js')}}"></script> 
	<!-- chart Js data -->
		<script src="{{ URL::asset('/js/chartJS_data.js')}}"></script>
	@endsection
@endsection