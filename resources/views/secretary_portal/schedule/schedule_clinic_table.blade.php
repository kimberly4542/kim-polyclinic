@extends('secretary_portal.layouts.master')
	@section('style')
	<style>
		textarea {
		width: 100%;
		height: 150px;
		padding: 12px 20px;
		box-sizing: border-box;
		border: 2px solid #ccc;
		border-radius: 4px;
		background-color: #f8f8f8;
		font-size: 16px;
		resize: none;
	}	

</style>
@endsection

@section('body')

	<section class="content">
		<div class="container-fluid">
			@if(session('success'))
				<div class="alert alert-success">
					{{ session('success') }}
				</div>
			@endif
			<!-- Body Copy -->
			<div class="row clearfix">
				<!-- Basic Examples -->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="card">
						<div class="header">
							<h2 style="padding: 20px;">
								<b>Clinic Information</b>
							</h2>
						</div>
						<div class="body">
							<div class="row clearfix">
								@if(Auth::guard('sec_schedule_clinic')->check())
									@if(Auth::guard('sec_schedule_clinic_basicTable')->check())
										<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 ">
											<div class="table-responsive">
												<table class="table table-hover">
													<thead>
														<tr>
															<th class="text-center" colspan="2" style="background-color: #9E9E9E; color: #fff">CLINIC SCHEDULES</th>
														</tr>
														<tr>
															<th>Clinic Name</th>
															<th>Clinic Schedule</th>
														</tr>
													</thead>
													<tbody>
														@foreach($clinicQuery as $data)
														<tr>
															<td>{{ $data->clinic_name }}</td>
															<td>{{ $data->day }} {{ $data->time_in }} - {{ $data->time_out }}</td>
														</tr>
														@endforeach
													</tbody>
												</table>
											</div>
										</div>
									@endif
								@endif
								@if(Auth::guard('sec_schedule_patient')->check())
									@if(Auth::guard('sec_schedule_patient_basicTable')->check())
										<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 ">
											<div class="table-responsive">
												<table class="table table-hover">
													<thead>
														<tr>
															<th class="text-center" colspan="3" style="background-color: #9E9E9E; color: #fff">PATIENT SCHEDULES</th>
														</tr>
														<tr>
															<th>Patient Name</th>
															<th>Clinic Name</th>
															<th>Date</th>
														</tr>
													</thead>
													<tbody>
														@foreach($patient_sched as $data)
														<tr>
															<td>{{ $data->fname }} {{ $data->lname }}</td>
															<td>{{ $data->clinic_name }}</td>
															<td>{{ $data->sched_date }}</td>
														</tr>
														@endforeach
													</tbody>
												</table>
											</div>
										</div>
									@endif
								@endif
								@if(Auth::guard('sec_schedule_clinic')->check())
									@if(Auth::guard('sec_schedule_clinic_hoverTable')->check())
										<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 ">
											<div class="table-responsive">
												<table class="table table-hover js-basic-example dataTable">
													<thead>
														<tr>
															<th class="text-center" colspan="2" style="background-color: #9E9E9E; color: #fff">CLINIC SCHEDULES</th>
														</tr>
														<tr>
															<th>Clinic Name</th>
															<th>Clinic Schedule</th>
														</tr>
													</thead>
													<tbody>
														@foreach($clinicQuery as $data)
														<tr>
															<td>{{ $data->clinic_name }}</td>
															<td>{{ $data->day }} {{ $data->time_in }} - {{ $data->time_out }}</td>
														</tr>
														@endforeach
													</tbody>
												</table>
											</div>
										</div>
									@endif
								@endif
								@if(Auth::guard('sec_schedule_patient')->check())
									@if(Auth::guard('sec_schedule_patient_hoverTable')->check())
										<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 ">
											<div class="table-responsive">
												<table class="table table-hover js-basic-example dataTable">
													<thead>
														<tr>
															<th class="text-center" colspan="3" style="background-color: #9E9E9E; color: #fff">PATIENT SCHEDULES</th>
														</tr>
														<tr>
															<th>Patient Name</th>
															<th>Clinic Name</th>
															<th>Date</th>
														</tr>
													</thead>
													<tbody>
														@foreach($patient_sched as $data)
														<tr>
															<td>{{ $data->fname }} {{ $data->lname }}</td>
															<td>{{ $data->clinic_name }}</td>
															<td>{{ $data->sched_date }}</td>
														</tr>
														@endforeach
													</tbody>
												</table>
											</div>
										</div>
									@endif
								@endif
							</div>

									{{-- <div class="panel-group" id="accordion_1" role="tablist" aria-multiselectable="true">
										@if(count($clinicQuery) > 0)
											@foreach($clinicQuery as $data)
												<div class="panel panel-primary">
													<div class="panel-heading" role="tab" id="headingOne_{{ $data->clinic_id}}">
														<h4 class="panel-title">
															<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseOne_{{ $data->clinic_id }}" aria-expanded="true" aria-controls="collapseOne_{{ $data->clinic_id }}">
																{{ $data->clinic_name }} {{ $data->day }} {{ $data->time_in }} - {{ $data->time_out }}
															</a>
														</h4>
													</div>
													<div id="collapseOne_{{ $data->clinic_id }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne_{{ $data->clinic_id}}">
														<div class="panel-body">
															<div class="table-responsive">
																<table class="table dataTable js-basic-example">
																	<thead>
																		<tr>
																			<th>Patient Name</th>
																			<th>Date</th>
																		</tr>
																	</thead>
																	<tbody>
																		<tr>
																			<td>{{ $patient_info->fname }} {{ $patient_info->lname }}</td>
																			<td>{{ $patient_info->sched_date }}</td>

																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
													</div>
												</div>
											@endforeach
										@endif

									</div> --}}
							
							{{-- <div style="text-align: right;">
								<div>
									<button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#clinic-add">
									<i class="material-icons">local_hospital</i>
									<span>ADD CLINIC</span>
									</button>
								</div>
							</div> --}}

						</div>
					</div>
				</div>

				 <!-- Clinic ADD modal END -->
			</div>
		</div>
		@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
	</section>

	@section('javascript')
		{{-- <script src="{{ URL::asset('AdminSB/plugins/jquery/jquery.min.js')}}"></script> --}}
		<script src="{{ URL::asset('AdminSB/plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
		<script src="{{ URL::asset('AdminSB/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
		<script src="{{ URL::asset('AdminSB/js/pages/tables/jquery-datatable.js')}}"></script> 
{{-- 		<script src="{{ URL::asset('AdminSB/js/pages/forms/editors.js')}}"></script>
		<script src="{{ URL::asset('AdminSB/plugins/ckeditor/ckeditor.js')}}"></script>

		<!-- Dropzone Plugin Js -->
		<script src="{{ URL::asset('AdminSB/plugins/dropzone/dropzone.js')}}"></script>

		<script src="{{ URL::asset('AdminSB/js/pages/ui/modals.js')}}"></script>
		<script src="{{ URL::asset('AdminSB/plugins/jquery/jquery.min.js')}}"></script>
		<script src="{{ URL::asset('AdminSB/plugins/bootstrap/js/bootstrap.js')}}"></script>
		<script src="{{ URL::asset('AdminSB/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>
		<script src="{{ URL::asset('AdminSB/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
		<script src="{{ URL::asset('AdminSB/plugins/node-waves/waves.js')}}"></script>

		<script src="{{ URL::asset('AdminSB/js/demo.js')}}"></script>
		<script src="{{ URL::asset('AdminSB/js/admin.js')}}"></script> --}}

		{{-- <script>
			$('#clinicEdit').on("show.bs.modal", function (e) {
				
				var clinic_id = $(e.relatedTarget).data('clinic_id');
				var clinic_name = $(e.relatedTarget).data('clinic_name');
				var address = $(e.relatedTarget).data('address');
				var email_add = $(e.relatedTarget).data('email_add');
				var cell_no = $(e.relatedTarget).data('cell_no');
				var tel_no = $(e.relatedTarget).data('tel_no');
				var license_no = $(e.relatedTarget).data('license_no');
				
				$(e.currentTarget).find('input[name="clinic_id"]').val(clinic_id);
				$(e.currentTarget).find('input[name="clinic_name"]').val(clinic_name);
				$(e.currentTarget).find('input[name="address"]').val(address);
				$(e.currentTarget).find('input[name="email_add"]').val(email_add);
				$(e.currentTarget).find('input[name="cell_no"]').val(cell_no);
				$(e.currentTarget).find('input[name="tel_no"]').val(tel_no);
				$(e.currentTarget).find('input[name="license_no"]').val(license_no);

			});

			$('#cl').on("show.bs.modal", function (e) {
				
				var clinic_id = $(e.relatedTarget).data('clinic_id');
				var clinic_name = $(e.relatedTarget).data('clinic_name');
				var address = $(e.relatedTarget).data('address');
				var email_add = $(e.relatedTarget).data('email_add');
				var cell_no = $(e.relatedTarget).data('cell_no');
				var tel_no = $(e.relatedTarget).data('tel_no');
				var license_no = $(e.relatedTarget).data('license_no');
				
				$(e.currentTarget).find('input[name="clinic_id"]').val(clinic_id);
				$(e.currentTarget).find('input[name="clinic_name"]').val(clinic_name);
				$(e.currentTarget).find('input[name="address"]').val(address);
				$(e.currentTarget).find('input[name="email_add"]').val(email_add);
				$(e.currentTarget).find('input[name="cell_no"]').val(cell_no);
				$(e.currentTarget).find('input[name="tel_no"]').val(tel_no);
				$(e.currentTarget).find('input[name="license_no"]').val(license_no);

			});
		</script> --}}

	@endsection
@endsection
