@extends('doctor_portal.layouts.master')
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
					@if(Auth::guard('profile_clinic_information_modalImageUpload')->check())
						<div class="card">
							<div class="modal-header">
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding-left: 0px; margin-top: 10px;">
								 <h4 class="modal-title" id="largeModalLabel">Add Patient Record</h4>
								</div>

								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
									<button data-toggle="modal" data-dismiss="modal" data-target="#clinic-addWithImage" class="btn btn-success waves-effect pull-right modal-header-button"><p style="margin-top:10px;">Add Clinic</p>
									</button>
								</div>
							</div>

							<!-- <div class="body">
								<div class="row clearfix">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="redemption">
										<div class="panel-group" id="accordion_1" role="tablist" aria-multiselectable="true">
											@if(count($clinicQuery) > 0)
												@foreach($clinicQuery as $data)
													<div class="panel panel-primary">
														<div class="panel-heading" role="tab" id="headingOne_{{ $data->clinic_id}}">
															<h4 class="panel-title" >
																<a class="collapsed" role="button" 
																 data-toggle="collapse" 
																 data-parent="#accordion_1"
																 href="#collapseOne_{{ $data->clinic_id }}"
																 aria-expanded="true" 
																 aria-controls="collapseOne_{{ $data->clinic_id }}"
																 data-image="{{ $data->image }}">
																	{{ $data->clinic_id }}
																	
																</a>
															</h4>
														</div>
														<div id="collapseOne_{{ $data->clinic_id }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne_{{ $data->clinic_id}}">
															<div class="panel-body">
																<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
																	<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
																		 <div style="margin-left: 15px;" id="jener" class="img-responsive">
																		 </div>
																		 {{-- <img src="{{asset('upload/public')}}/{{ $data->image }}"> --}}
																	</div>
																	<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="visibility: hidden;">		
																	</div>
																	<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
																		<p class="lead" style="font-style: bold;">
																			<b>{{ $data->clinic_name }}</b>
																		</p>
																		<h4>Address: <b style="color: green;">{{ $data->address }}</b> </h4>
																		<h4>Email: <b style="color: green;">{{ $data->email_add }}</b>  
																			
																		<h4> Phone Number: <b style="color: green;">{{ $data->cell_no }} </b></h4>
																		<h4> Telephone Number: <b style="color: green;">{{ $data->tel_no }} </b></h4></h4>
																		{{-- <h5>{{ $data->license_no }}</h5> --}}
																		<h4> Secretary:</h4>
																		<div style="padding-top: 20px;">
																			<input type="hidden" name="clinic_id" value="{{ $data->clinic_id }}">
																			<button type="button" class="btn btn-warning waves-effect" 
																				data-clinic_id="{{ $data->clinic_id }}"
																				data-clinic_name="{{ $data->clinic_name }}"
																				data-address="{{ $data->address }}"

																				data-license_no="{{ $data->license_no }}"
																				data-email_add="{{ $data->email_add }}"
																				data-cell_no="{{ $data->cell_no }}"
																				data-tel_no="{{ $data->tel_no }}"
																				data-toggle="modal" 
																				data-target="#clinicEditWithImage">
																				<i class="material-icons">edit</i>
																				<span>EDIT</span>
																			</button>
																			<button type="button" class="btn btn-danger waves-effect" 
																				data-clinic_id="{{ $data->clinic_id }}"
																				data-clinic_name="{{ $data->clinic_name }}"
																				data-toggle="modal" 
																				data-target="#clinicDelete">
																				<i class="material-icons">delete</i>
																				<span>DELETE</span>
																			</button>
																		</div>
																		
																	</div>
																</div>
																
															</div>
														</div>
													</div>
												@endforeach
											@endif

										</div>
									</div>

								</div>

								
								<div style="text-align: right;">
									<div>
										<button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#clinic-addWithImage">
										<i class="material-icons">local_hospital</i>
										<span>ADD CLINIC</span>
										</button>
									</div>
								</div>
							</div> -->

							<div class="body">
								<div class="row clearfix">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										{{-- <div class="card"> --}}
											<div class="body table-responsive">
												<table class="table table-striped">
													<thead>
														<tr>
															<th>CLINIC NAME</th>
															<th>ADDRESS</th>
															<th>EMAIL</th>
															<th>CELLPHONE #</th>
															<th>TEL #</th>
															<th>ACTION</th>
														</tr>
													</thead>
													<tbody>
														@if(count($clinicQuery) > 0 )
															@foreach($clinicQuery as $data)
																<tr>
																	<td> {{ $data->clinic_name }} </td>
																	<td> {{ $data->address }} </td>
																	<td> {{ $data->email_add }} </td>
																	<td> {{ $data->cell_no }} </td>
																	<td> {{ $data->tel_no }} </td>
																	<td><button type="button" class="btn btn-primary waves-effect"
																			data-clinic_id="{{ $data->clinic_id }}"
																			data-clinic_name="{{ $data->clinic_name }}"
																			data-address="{{ $data->address }}"
																			data-bir_tin_no="{{ $data->bir_tin_no }}"
																			data-license_no="{{ $data->license_no }}"
																			data-email_add="{{ $data->email_add }}"
																			data-cell_no="{{ $data->cell_no }}"
																			data-tel_no="{{ $data->tel_no }}"
																			data-image="{{ $data->image }}"
																			data-toggle="modal" 
																			data-target="#viewClinic"
																			>View
																		</button>
																		<button type="button" class="btn btn-warning waves-effect"
																			data-clinic_id="{{ $data->clinic_id }}"
																			data-clinic_name="{{ $data->clinic_name }}"
																			data-address="{{ $data->address }}"
																			data-license_no="{{ $data->license_no }}"
																			data-email_add="{{ $data->email_add }}"
																			data-cell_no="{{ $data->cell_no }}"
																			data-tel_no="{{ $data->tel_no }}"
																			data-image="{{ $data->image }}"
																			data-toggle="modal" 
																			data-target="#clinicEditWithImage"
																		>Edit
																		</button>
																		<button type="button" class="btn btn-danger waves-effect" 
																			data-clinic_id="{{ $data->clinic_id }}"
																			data-clinic_name="{{ $data->clinic_name }}"
																			data-toggle="modal" 
																			data-target="#clinicDelete">
																			<span>Delete</span>
																		</button>
																	</td>
																</tr>
															@endforeach
														@endif
													</tbody>
												</table>
											</div>
										{{-- </div> --}}
									</div>
								</div>
							</div>
						</div>
					@endif
					@if(Auth::guard('profile_clinic_information_basicTable')->check())
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
										<h4 class="modal-title" id="largeModalLabel">Clinic Information</h4>
									</div>
									<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="padding: 0px;">
										<div class="demo-button-nesting">
											<div class="btn-group pull-right" role="group">
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
												<th>Clinic Name</th>
												<th>Clinic Address</th>
												<th>Email Address</th>
												<th>Phone Number</th>
												<th>Telephone Number</th>
											</tr>
										</thead>
										<tbody>
											@if(count($clinicQuery) > 0 )
												@foreach($clinicQuery as $data)
													 <tr>
														<td> {{ $data->clinic_name }} </td>
														<td> {{ $data->address }} </td>
														<td> {{ $data->email_add }} </td>
														<td> {{ $data->cell_no }} </td>
														<td> {{ $data->tel_no }} </td>
													</tr>
												@endforeach
											@endif
										</tbody>
									</table>
								</div>
									
							</div>
						</div>
					@endif
				</div>
				
				<div class="modal fade" id="viewClinic" tabindex="-1" role="dialog">
					<div class="modal-dialog modal-md" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title" id="largeModalLabel">Clinic Information</h4>
							</div>
							
							<div class="modal-body">
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									{{-- <img class="img-responsive thumbnail" src="{{ URL::asset('images/user.png')}}"> --}}
									<div id="viewImageModal"></div>
								</div>

								<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
									<P><b>Clinic Name:</b> <span id="clinic_name"></span> </P> 
									<P><b>Address:</b> <span id="address"></span> </P> 
									<P><b>BIR Tin No.:</b> <span id="bir_tin_no"></span></P>
									<P><b>License No:</b> <span id="license_no"></span></P>
									<P><b>Email:</b> <span id="email_add"></span></P>
								</div>

								<div class="col-lg-12 col-md-12 col-sm-12  col-xs-12">
									<div class="col-lg-6 col-md-6 col-sm-6  col-xs-6">
										<P><b>Cell No: </b> <span id="cell_no"></span></P>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6  col-xs-6">
										<P><b>Tel No: </b> <span id="tel_no"></span></P>
									</div>
								</div>

								<div class="col-lg-12 col-md-12 col-sm-12  col-xs-12">
									<br>
								</div>

								<div class="clearfix"></div>

								<div class="modal-footer">
									<button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="modal fade" id="clinicDelete" tabindex="-1" role="dialog">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title" id="defaultModalLabel">Delete Account</h4>
							</div>
							<div class="modal-body">
								<form action="{{ url('profile/accounts/destroy') }}" method="POST">
									{{ method_field('delete') }}
									@csrf
									<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
										<p>Are you sure want to delete this Clinic? All credentials stored in this clinic will be deleted</p>
										<div class="form-group">
											<input type="hidden" class="form-control"  name="clinic_id" >
											{{-- <input type="text" class="form-control" placeholder="Firstname" name="admin_id"> --}}
										</div>
									</div>

									<div class="modal-footer">
										<button type="submit" class="btn btn-danger waves-effect">Delete</button>
										<button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>

				<div class="modal fade" id="clinicEditWithImage" tabindex="-1" role="dialog">
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h4>Edit Clinic Information</h4>
								<hr style="margin: 0px;">
							</div>
							<form action="{{ url('profile/clinic_info/update') }}" method="POST" enctype="multipart/form-data">
									{{ method_field('put') }}
									{{ csrf_field() }}
									
								<div class="modal-body">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0px;">
										<div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">
											{{-- <img src="{{ URL::asset('AdminSB/images/noimage.png') }}" class="img-responsive"> --}}
											<div id="editImageModal"></div>
											<input type="file" name="file" style="margin-top: 5px;">
										</div>
										<div class="col-sm-8 col-md-8 col-lg-8 col-xs-8">
											<div class="row">
												<div class="col-sm-8 col-md-8 col-lg-8 col-xs-8">
													<input type="hidden" name="clinic_id">
													<p>
														<b style="color: #00ace6">Clinic Name:</b>
														<input type="text" class="form-control" value="" name="clinic_name">
													</p>
												</div>
												<div class="col-sm-4 col-md-4 col-lg-4 col-xs-4">
													<p>
														<b style="color: #00ace6">License Number:</b>
														<input type="text" class="form-control"value="" name="license_no">
													</p>
												</div>
												<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
													<p>
														<b style="color: #00ace6">Email:</b>
														<input type="text" class="form-control" value="" name="email_add">
													</p>
												</div>
												<div class="col-sm-6 col-md-6 col-lg-6 col-xs-6">	
													<p> 
														<b style="color: #00ace6">Cell Number:</b>
														<input type="text" class="form-control" value="" name="cell_no">
													</p>
												</div>
												<div class="col-sm-6 col-md-6 col-lg-6 col-xs-6">
													<p>
														<b style="color: #00ace6">Telephone Number:</b>
														<input type="text" class="form-control" value="" name="tel_no">
													</p>
												</div>
												<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
													<p>
														<b style="color: #00ace6">Address:</b>
														<input type="text" class="form-control" value="" name="address">
													</p>
												</div>
											</div>
										</div>
									</div> {{-- col 12 --}}
								</div> {{-- modal-body --}}
									
								{{-- 	<div class="row "> 
										<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" style="margin-top: 10px;">
											
											<textarea id="ckeditor">

											</textarea>
										</div>
									</div> --}}

								<div class="row clearfix"></div>

								<div class="modal-footer" style="padding: 20px;">
									<button type="submit" class="btn btn-primary waves-effect">
										<i class="material-icons">check_circle</i>
										<span>SAVE CHANGES</span>
									</button>
									<button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CANCEL</button>
								</div>

							</form>
						</div>
					</div>
				</div>

				<!-- Clinic ADD modal END -->
				<div class="modal fade" id="clinic-addWithImage" tabindex="-1" role="dialog">
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h4>Add Clinic</h4>
								<hr style="margin: 0px;">
							</div>

							<form action="{{ url('profile/add_clinic/store') }}" method="POST" enctype="multipart/form-data">
								{{ csrf_field() }}
								<div class="modal-body">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0px;">
										<div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">
										   <img src="{{ URL::asset('upload/public/noimage.png') }}" class="img-responsive thumbnail">
										   <input type="file" name="file" style="margin-top: 5px;">
										 </div>
										<div class="col-sm-8 col-md-8 col-lg-8 col-xs-8">
											<div class="row">
												<div class="col-sm-8 col-md-8 col-lg-8 col-xs-8">
													<p>
														<b style="color: #00ace6">Clinic Name:</b>
														<input type="text" class="form-control" value="" name="clinic_name">
													</p>
												</div>
												<div class="col-sm-4 col-md-4 col-lg-4 col-xs-4">
													<p>
														<b style="color: #00ace6">License Number:</b>
														<input type="text" class="form-control" value="" name="license_no">
													</p>
												</div>
												<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
													<p>
														<b style="color: #00ace6">Email:</b>
														<input type="text" class="form-control" value="" name="email_add">
													</p>
												</div>
												<div class="col-sm-6 col-md-6 col-lg-6 col-xs-6">	
													<p>
														<b style="color: #00ace6">Cell Number:</b>
														<input type="text" class="form-control" value="" name="cell_no">
													</p>	
												</div>
												<div class="col-sm-6 col-md-6 col-lg-6 col-xs-6">
													<p>
														<b style="color: #00ace6">Telephone Number:</b>
														<input type="text" class="form-control" value="" name="tel_no">
													</p>
												</div>
												<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
													<p>
														<b style="color: #00ace6">Address:</b>
														<input type="text" class="form-control" value="" name="address">
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row clearfix"></div>
								<div class="modal-footer" style="padding: 20px;">
									<button type="submit" class="btn btn-success waves-effect">
										<i class="material-icons">check_circle</i>
										<span>ADD</span>
									</button>
									<button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CANCEL</button>
								</div>
							</form>
						</div>

					</div>
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
	{{-- 	<script src="{{ URL::asset('AdminSB/js/pages/forms/editors.js')}}"></script>
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

		<script>
			$(document).ready(function() {
				$("#redemption a").on("click", function (e) {
					var image = $(this).attr("data-image");
					console.log(image);
					if(image == "") {
						var wrapper = document.getElementById('jener');
						var tag = '';
						tag += '<img src=';
						tag += '"{{asset('upload/public/noimage.png')}}';
						tag += '"/>';
						wrapper.innerHTML = tag;
						$('#ButtonDataReciever').data('image', tag);
					}
					else {
						var wrapper = document.getElementById('jener');
						var tag = '';
						tag += '<img src=';
						tag += '"{{asset('upload')}}/';
						tag += image;
						tag += '"/>';

						wrapper.innerHTML = tag;
						$('#ButtonDataReciever').data('image', tag);
					}
				});

				$('#clinicEdit').on("show.bs.modal", function (e) {
					
					var clinic_id = $(e.relatedTarget).data('clinic_id');
					var clinic_name = $(e.relatedTarget).data('clinic_name');
					var address = $(e.relatedTarget).data('address');
					var email_add = $(e.relatedTarget).data('email_add');
					var cell_no = $(e.relatedTarget).data('cell_no');
					var tel_no = $(e.relatedTarget).data('tel_no');
					var license_no = $(e.relatedTarget).data('license_no');
					var image = $(this).attr("data-image");
					console.log(image);
					
					$(e.currentTarget).find('input[name="clinic_id"]').val(clinic_id);
					$(e.currentTarget).find('input[name="clinic_name"]').val(clinic_name);
					$(e.currentTarget).find('input[name="address"]').val(address);
					$(e.currentTarget).find('input[name="email_add"]').val(email_add);
					$(e.currentTarget).find('input[name="cell_no"]').val(cell_no);
					$(e.currentTarget).find('input[name="tel_no"]').val(tel_no);
					$(e.currentTarget).find('input[name="license_no"]').val(license_no);
					$(e.currentTarget).find('input[name="image"]').val(image);

					if(image == "") {
						var wrapper = document.getElementById('jener');
						var tag = '';
						tag += '<img src=';
						tag += '"{{asset('upload/public/noimage.png')}}';
						tag += '"/>';
						wrapper.innerHTML = tag;
						$('#ButtonDataReciever').data('image', tag);
					}
					else {
						var wrapper = document.getElementById('jener');
						var tag = '';
						tag += '<img src=';
						tag += '"{{asset('upload')}}/';
						tag += image;
						tag += '"/>';

						wrapper.innerHTML = tag;
						$('#ButtonDataReciever').data('image', tag);
					}
				});

				$('#clinicEditWithImage').on("show.bs.modal", function (e) {
					
					var clinic_id = $(e.relatedTarget).data('clinic_id');
					var clinic_name = $(e.relatedTarget).data('clinic_name');
					var address = $(e.relatedTarget).data('address');
					var email_add = $(e.relatedTarget).data('email_add');
					var cell_no = $(e.relatedTarget).data('cell_no');
					var tel_no = $(e.relatedTarget).data('tel_no');
					var license_no = $(e.relatedTarget).data('license_no');
					var image = $(e.relatedTarget).data('image');
					console.log(image);

					if(image == "") {
						var wrapper = document.getElementById('editImageModal');
						var tag = '';
						tag += '<img src=';
						tag += '"{{asset('upload/public/noimage.png')}}"';
						tag += 'class="img-responsive thumbnail"';
						tag += '/>';
						console.log(tag);
						wrapper.innerHTML = tag;
					}
					else {
						var wrapper = document.getElementById('editImageModal');
						var tag = '';
						tag += '<img src=';
						tag += '"{{asset('upload')}}/';
						tag += image;
						tag += '"';
						tag += 'class="img-responsive thumbnail"';
						tag += '/>';

						wrapper.innerHTML = tag;
					}
					
					$(e.currentTarget).find('input[name="clinic_id"]').val(clinic_id);
					$(e.currentTarget).find('input[name="clinic_name"]').val(clinic_name);
					$(e.currentTarget).find('input[name="address"]').val(address);
					$(e.currentTarget).find('input[name="email_add"]').val(email_add);
					$(e.currentTarget).find('input[name="cell_no"]').val(cell_no);
					$(e.currentTarget).find('input[name="tel_no"]').val(tel_no);
					$(e.currentTarget).find('input[name="license_no"]').val(license_no);

				});

				$('#viewClinic').on("show.bs.modal", function (e) {
					$("#clinic_id").html($(e.relatedTarget).data('clinic_id'));
					$("#clinic_name").html($(e.relatedTarget).data('clinic_name'));
					$("#address").html($(e.relatedTarget).data('address'));
					$("#bir_tin_no").html($(e.relatedTarget).data('bir_tin_no'));
					$("#license_no").html($(e.relatedTarget).data('license_no'));
					$("#email_add").html($(e.relatedTarget).data('contact'));
					$("#cell_no").html($(e.relatedTarget).data('cell_no'));
					$("#tel_no").html($(e.relatedTarget).data('tel_no'));
					var image = $(e.relatedTarget).data('image');

					if(image == "") {
						var wrapper = document.getElementById('viewImageModal');
						var tag = '';
						tag += '<img src=';
						tag += '"{{asset('upload/public/noimage.png')}}"';
						tag += 'class="img-responsive thumbnail"';
						tag += '/>';
						wrapper.innerHTML = tag;
					}
					else {
						var wrapper = document.getElementById('viewImageModal');
						var tag = '';
						tag += '<img src=';
						tag += '"{{asset('upload')}}/';
						tag += image;
						tag += '"';
						tag += 'class="img-responsive thumbnail"';
						tag += '/>';

						wrapper.innerHTML = tag;
					}
				});

				$('#clinicDelete').on("show.bs.modal", function (e) {
					var clinic_id = $(e.relatedTarget).data('clinic_id');
					$(e.currentTarget).find('input[name="clinic_id"]').val(clinic_id);
				});
			});
		</script>

	@endsection
@endsection
