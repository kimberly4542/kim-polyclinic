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
								@if(Auth::guard('sec_booking_basicTable')->check())
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
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
								@if(Auth::guard('sec_booking_hoverTable')->check())
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
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
							</div>
							<div style="text-align: right;">
								<div>
									<button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#patient_booked">
									<i class="material-icons">local_hospital</i>
									<span>ADD CLINIC</span>
									</button>
								</div>
							</div>

						</div>
					</div>
				</div>

				 <!-- Clinic ADD modal END -->
			</div>
		</div>

	<div class="modal fade" id="patient_booked" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-md" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4>Booked for Patient</h4>
					<hr style="margin: 0px;">
				</div>

				<form action="booking_patient" method="post">
					<div class="modal-body">
						{{ csrf_field() }}
						<div class="col-lg-12">
							<div class="col-lg-12">
								<div class="row clearfix">
									<div class="col-lg-8">
										<div class="">
											<select class="form-control" name="clinicSched">
												<option id="clinicSched">-- Select Clinic Schedule --</option>
												@foreach($clinicQuery2 as $data)
												<option  style="text-transform: uppercase;" value="{{ $data->clinic_id }}">{{ $data->clinic_name }} / {{ $data->day }} {{ $data->time_in }}-{{ $data->time_out }}</option>
												@endforeach
											</select>
										</div>
									</div>
									<div class="col-lg-4">
										<input type="date" name="date" class="form-control">
									</div>
								</div>
							</div>
						</div><br><br><br>
						<input type="text" name="doctors" value="{{ $data->subscriber_id }}">
						<div class="col-lg-12">
							<div class="col-lg-6">
								<div class="">
									<input type="text" name="name" class="form-control br-radius-zero" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
									<div class="validation"></div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="">
									<input type="text" name="lname" class="form-control br-radius-zero" id="lname" placeholder="Your Lastname" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
									<div class="validation"></div>
								</div>
							</div><br><br>
							<div class="col-lg-12">
								<div class="">
									<input type="email" class="form-control br-radius-zero" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
									<div class="validation"></div>
								</div><br>
								<div class="">
									<input type="text" class="form-control br-radius-zero" name="address" id="address" placeholder="Address" data-rule="minlen:4" data-msg="Please enter your address" />
									<div class="validation"></div>
								</div><br>
								<div class="">
									<textarea class="form-control br-radius-zero" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
									<div class="validation"></div>
								</div><br>
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-info waves-effect">Save</button>
						</div>
					</div>
				</form>
			</div>

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
		{{-- <script src="{{ asset('Main_portal/js/bootstrap.min.js') }}"></script> --}}
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
		<script>
			$(document).ready(function() {
				// $('#findDoctor').on('change', function() {
				// 	var e = document.getElementById("findDoctor");
				// 	var strUser = e.options[e.selectedIndex].getAttribute('data-name');
					

				// 	$('#doctor').html(strUser);
				// });
				$('select[name="specialization"]').on('change', function(){
					var spec_id = $(this).val();

					if(spec_id) {
						$.ajax({
			                url: '/get_specialization/'+spec_id,
			                type: "GET",
			                dataType: "json",
			                beforeSend: function(){
			                    $('#loader').css("visibility", "visible");
			                },

			                success:function(data) {

			                    $('select[name="doctors"]').empty();

			                    $.each(data, function(key, value){

			                        $('select[name="doctors"]').append('<option value="'+ value +'">' + value + '</option>');

			                    });
			                },
			                complete: function(){
			                    $('#loader').css("visibility", "hidden");
			                }
			            });
					} else {
			            $('select[name="doctors"]').empty();
			        }
				});

				$('select[name="doctors"]').on('change', function(){
					var doc_id = $(this).val();


					if(doc_id) {
						$.ajax({
			                url: '/get_sched/'+doc_id,
			                type: "GET",
			                dataType: "json",
			                beforeSend: function(){
			                    $('#loader').css("visibility", "visible");
			                },

			                success:function(data) {

			                    $('select[name="clinicSched"]').empty();

			                    $.each(data, function(key, value){

			                        $('select[name="clinicSched"]').append('<option value="'+ value.clinic_id +'">' + value.day + ' ' + value.time_in + '-' + value.time_out + '</option>');

			                    });
			                },
			                complete: function(){
			                    $('#loader').css("visibility", "hidden");
			                }
			            });
					} else {
			            $('select[name="clinicSched"]').empty();
			        }
				});
			});
		</script>

	@endsection
@endsection
