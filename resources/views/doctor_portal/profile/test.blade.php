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
														data-fullname="{{ $data->fname }} {{ $data->mname }} {{ $data->lname }}"
														data-contact_num="{{ $data->contact_num }}"
														data-username="{{ $data->username }}"
														data-email="{{ $data->email }}"
														data-birthdate="{{ $data->birthdate }}"
														data-address="{{ $data->address }}"
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
													<h4 style="color: #00ace6">Name:
													<span id="fullname"></span>
													</h4>
												</div>

												<div> 
													<h5 style="color: #ff751a;">Contact#&nbsp;&nbsp;: 
														<span id="contact_num"></span> 
													</h5> 
												</div>

												<div>
													<h5 style="color: #ff751a;">Username&nbsp;&nbsp;: 
														<span id="username"></span>
													</h5>
												</div>

												<div>
													<h5 style="color: #ff751a;">
														Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 
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

										</div> {{-- body --}}
									</div> {{-- row --}}
								</div> {{--  card--}}
							</div> {{--  col-lg-3 --}}

							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="row">
									<div class="body" style="padding: 0px;">

										<div style="text-align: right;">
											<button type="button" class="btn btn-success waves-effect">
												<i class="material-icons">check_circle</i><span>Activated</span>
											</button>
											<button type="button" class="btn btn-primary waves-effect" data-toggle="modal"
											data-target="#editModal">
												<i class="material-icons">edit</i><span>EDIT PROFILE</span>
											</button>

										</div>
									</div> {{-- body --}}
								</div> {{-- row --}}
							</div> {{--  col-lg-3 --}}

						</div> <!-- col-lg-12 --> 
					</div> <!-- body -->
				</div> {{-- row --}}

			</div> <!-- card -->
		</div> <!-- container-fluid -->


		<div class="modal fade" id="editModal" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-body" >
						<div class="col-sm-3 col-md-3 col-lg-3 col-xs-3">
							<img src="{{ URL::asset('AdminSB/images/secretary.jpg') }}" class="img-responsive">
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
									<p>
										<input type="hidden" name="subscriber_id" value="{{ $data->subscriber_id }}">
										<b>Contact #:</b>
										<input type="text" 
											class="form-control" 
											value="{{ $data->contact_num }} " 
											name="contact">
									</p>

									<p>
										<b>Email:</b> 
										<input type="text" 
											class="form-control" 
											value="{{ $data->email }}" 
											name="email">
									</p>
								</div>
						<div class="col-sm-9 col-md-9 col-lg-9 col-xs-9">
							
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


							<h4 style="color: #00ace6">Secretary, Dr. Adrian 123 here QWERTY, ASDFG</h4>
							<p>
								<input type="hidden" name="subscriber_id" value="{{ $data->subscriber_id }}">
								<b>Contact #:</b> 
								<input type="text" 
									class="form-control" 
									value="{{ $data->contact_num }} " 
									name="contact">
							</p>
							<p>
								<b>Email:</b> 
								<input type="text" 
									class="form-control" 
									value="{{ $data->email }}" 
									name="email">
							</p>
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
						<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
							<textarea id="ckeditor">
								
							</textarea>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button>
						<button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
					</div>
				</div>
			</div>
		</div>
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
					var fullname = $(this).attr("data-fullname");
					var username = $(this).attr("data-username");
					var contact_num = $(this).attr("data-contact_num");
					var email = $(this).attr("data-email");
					var birthdate = $(this).attr("data-birthdate");
					var address = $(this).attr("data-address");

					$('#fullname').html(fullname);
					$('#username').html(username);
					$('#contact_num').html(contact_num);
					$('#email').html(email);
					$('#birthdate').html(birthdate);
					$('#address').html(address);
				});

			});
		</script>
	@endsection
@endsection