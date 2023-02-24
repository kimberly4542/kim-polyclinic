@extends('doctor_portal.layouts.master')

@section('body')
	<section class="content">
		<div class="container-fluid">
			<div class="card">
				<div class="header" style="padding: 25px;">
					<h2> Secretary Information</h2>
				</div>

				<div class="row">
					<div class="body">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

							<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
								<div class="card">
									<div class="header">
										 <input type="text" class="form-control date" placeholder="Search Secretary">
									</div>
									<div class="body">
										<div class="list-group" id="redemption">
											@if(count($secondaryUserModel) > 0)
												@foreach($secondaryUserModel as $data)
													<button class="list-group-item"
														data-fname="{{ $data->fname }}"
														data-mname=" {{ $data->mname }}"
														data-lname="{{ $data->lname }}"
														data-contact_num="{{ $data->contact_num }}"
														data-username="{{ $data->username }}"
														data-email="{{ $data->email }}"
														data-birthdate="{{ $data->birthdate }}"
														data-address="{{ $data->address }}"
														data-description="{{ $data->description }}"
														>
														{{ $data->fname }} {{ $data->mname }} {{ $data->lname }}
													</button>
												@endforeach
											@endif
										</div>
									</div>
								</div> {{--  card--}}
							</div> {{--  col-lg-3 --}}

							<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
								<div class="card">
									<div class="row">
										<div class="body">

											<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
												<img src="{{ URL::asset('AdminSB/images/secretary.jpg') }}" class="img-responsive">
											</div>
											<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
												{{-- <div>
													<h5 style="color: #00ace6">Secretary, Dr. April Adrian here QWERTY, ASDFG</h5>
												</div> --}}
												<div> 

													<h3 style="color: #00ace6">Name:
													<span id="fname"></span><span id="mname"></span><span id="lname"></span>
													</h3>

												</div>
												<div> 
													<h5 style="color: #ff751a; font-size: 20px; font-style: bold;">Contact#&nbsp;&nbsp;:
														<span id="contact_num" ></span> 
													</h5> 
												</div>
												<div>
													<h5 style="color: #ff751a;">
														Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 
														<span id="email"></span>
													</h5>
												</div>

												<div>
													<h5 style="color: #ff751a;">Birth date&nbsp;:
														<span id="birthdate"></span>
													</h5>
												</div>

												<div>
													<h5 style="color: #ff751a;">Address&nbsp;&nbsp;&nbsp;&nbsp;: 
														<span id="address"></span>
													</h5>
													
												</div>
											</div>
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="row clearfix">
													<h5>Description: 
														<span id="description"></span>
													</h5>
													
												</div>
											</div>


										</div> {{-- body --}}
									</div> {{-- row --}}
								</div> {{--  card--}}
							</div> {{--  col-lg-3 --}}

						{{-- 	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="row">
									<div class="body" style="padding: 0px;">
										
											<div style="text-align: right;">
												<button type="button" class="btn btn-success waves-effect">
													<i class="material-icons">check_circle</i><span>Activated</span>
												</button>
												<button type="button" class="btn btn-primary waves-effect" 
												 
												data-toggle="modal"
												data-target="#editModal">
													<i class="material-icons">edit</i><span>EDIT PROFILE</span>
												</button>
											</div>
									</div> 
								</div> 
							</div> --}}

						</div> <!-- col-lg-12 --> 
					</div> <!-- body -->
				</div> {{-- row --}}

			</div> <!-- card -->
		</div> <!-- container-fluid -->


		{{-- <div class="modal fade" id="editModal" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4>Doctor Information</h4>
						<hr style="margin: 0px;">
					</div>

					<div class="modal-body" >
						<form action="{{ url('profile/secretary_profile/update') }}" method="POST">
							@csrf
							{{ method_field('put') }}
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 10px; margin-bottom: 10px;">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
									<img src="{{ URL::asset('AdminSB/images/doctor.jpg') }}" class="img-responsive">
									<p>
										<input type="hidden" name="sec_id" value="{{ $data->sec_id }}">
										<b>Contact #:</b> 
										<input type="text" 
											class="form-control" 
											 value="{{ $data->contact_num }} " 
											name="contact_num">
									</p>

									<p>
										<b>Email:</b> 
										<input type="text" 
											class="form-control" 
											value="{{ $data->email }}" 
											name="email">
									</p>
								</div>

								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
									<p>
										<b style="color: #00ace6">First Name:</b>
										<input type="text" 
											class="form-control" 
											value="{{ $data->fname }}" 
											name="fname">
									</p>
									<p>
										<b style="color: #00ace6">Middle Name:</b>
										<input type="text" 
											class="form-control" 
											value="{{ $data->mname }}" 
											name="mname">
									</p>
									<p>
										<b style="color: #00ace6">Last Name:</b>
										<input type="text" 
											class="form-control" 
											value="{{ $data->lname }}" 
											name="lname">
									</p>

									<h5 style="color: #00ace6; margin-top: 13px; margin-bottom: 13px;">
										Clinic Name: Doctors Hospital
									</h5>

									<p>
										<b>Birth date:</b> 
										<input type="text" class="form-control" 
											name="birthdate" 
											value="{{ $data->birthdate }}">
									</p>

									<p>
										<b>Address:</b> 
										<input type="text" class="form-control" 
											value="{{ $data->address }}" 
											name="address">
									</p>

								</div>
							</div>
							<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" style="margin-top: 10px; margin-bottom: 10px;">
								<b>Description:</b> 
								<textarea id="ckeditor" name="description">
									{!! $data->description !!}. 
								</textarea>
							</div>
							<div class="modal-footer" style="padding: 19px;">
								<button type="submit" class="btn btn-primary waves-effect">SAVE CHANGES</button>
								<button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
							</div>
						</form>	
					</div>
					
				</div>
			</div>
		</div>
 --}}

	</section>

	@section('javascript')
		<script src="{{ URL::asset('AdminSB/js/pages/forms/editors.js')}}"></script>
		<script src="{{ URL::asset('AdminSB/plugins/ckeditor/ckeditor.js')}}"></script>
		<script src="{{ URL::asset('AdminSB/plugins/jquery/jquery.min.js')}}"></script>
		<script src="{{ URL::asset('AdminSB/plugins/bootstrap/js/bootstrap.js')}}"></script>
		<script src="{{ URL::asset('AdminSB/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>
		<script src="{{ URL::asset('AdminSB/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
		<script src="{{ URL::asset('AdminSB/plugins/node-waves/waves.js')}}"></script>
		<script src="{{ URL::asset('AdminSB/js/demo.js')}}"></script>
		<script src="{{ URL::asset('AdminSB/js/admin.js')}}"></script>
		.
		<script type="text/javascript">
			$(document).ready(function() {
				$("#redemption button").on("click", function (e) {
					var fname = $(this).attr("data-fname");
					var mname = $(this).attr("data-mname");
					var lname = $(this).attr("data-lname");
					var username = $(this).attr("data-username");
					var contact_num = $(this).attr("data-contact_num");
					var email = $(this).attr("data-email");
					var birthdate = $(this).attr("data-birthdate");
					var address = $(this).attr("data-address");
					var description = $(this).attr("data-description");

					$('#fname').html(fname);
					$('#mname').html(mname);
					$('#lname').html(lname);
					$('#username').html(username);
					$('#contact_num').html(contact_num);
					$('#email').html(email);
					$('#birthdate').html(birthdate);
					$('#address').html(address);
					$('#description').html(description);
					
				});
				// $('#editModal').on("show.bs.modal", function (e) {
				// 	var sec_id = $(e.relatedTarget).data('sec_id');
				// 	var fname = $(e.relatedTarget).data('fname');
				// 	var mname = $(e.relatedTarget).data('mname');
				// 	var lname = $(e.relatedTarget).data('lname');
				// // 	// var username = $(e.relatedTarget).data('username');


				// 	$(e.currentTarget).find('input[name="sec_id"]').val(sec_id);
				// 	$(e.currentTarget).find('input[name="fname"]').val(fname);
				// 	$(e.currentTarget).find('input[name="mname"]').val(mname);
				// 	$(e.currentTarget).find('input[name="lname"]').val(lname);
				// 	// $(e.currentTarget).find('input[name="username"]').val(username);
				// });
			});
		</script>
	@endsection
@endsection