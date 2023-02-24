@extends('secretary_portal.layouts.master')

@section('style')

<!-- Calendar -->
{{-- <link href="{{ URL::asset('AdminSB/css/fullcalendar.min.css')}}" rel="stylesheet"> --}}
{{-- <link href="{{ URL::asset('AdminSB/css/calendar.css')}}" rel="stylesheet"> --}}
<script src="{{ URL::asset('AdminSB/plugins/jquery/jquery.min.js')}}"></script>
{{-- <script src="{{ URL::asset('AdminSB/plugins/jquery-datatable/jquery.dataTables.js')}}"></script> --}}
{{-- <script src="{{ URL::asset('AdminSB/js/pages/tables/jquery-datatable.js')}}"></script> --}}

<!-- CANVAS -->
<link href="{{ URL::asset('AdminSB/canvas/master.css')}}" rel="stylesheet">
	<style> 
		  canvas {
		  cursor: url({{ URL::asset('AdminSB/images/cur3.cur') }}), default;
		  /* Change the hotspot - cursor: url(crosshair.cur) 0 0, default; */
		  background:#F4F4F4;
		  border: solid 1px blue;
		  display: inline-block;

		}

		.modal {
				overflow-y: scroll;
			}
			.modal-header-button {
				min-height: 50px;
				max-height: 50px;
				min-width: 100px;
				max-width: 120px; 
				position: relative;
			}

			.modal-size {
				width: 95%;
				max-width: 1350px;
			}
			/*textarea {
			width: 100%;
			height: 150px;
			padding: 12px 20px;
			box-sizing: border-box;
			border: 2px solid #ccc;
			border-radius: 4px;
			background-color: #f8f8f8;
			font-size: 16px;
			resize: none;
			}*/
	</style>
@endsection

@section('body')

	<!-- section content -->
	<section class="content">
		<div class="container-fluid">
			<div class="card">
				<div class="header">
					<h2 style="padding: 20px;">Queueing</h2>
					<div style="text-align: right; padding-right: 20px;">
						<button type="button" 
							class="btn btn-info waves-effect"
							data-toggle="modal" 
							data-target="#add_patient_queue"
							data-clinic_id="{{ $clinic_id }}">
							Add patient to queue
						</button>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-lg-12 col-md-12 col-sm-12 col-sx-12">
						 <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						 	@if(Auth::guard('sec_queue_1st_priority')->check())
						 		@if(Auth::guard('sec_queue_1st_priority_dragDrop')->check())
									<div class="card">
										<div class="header">
											 <h5>1st Priority</h5>
										</div>
										<div class="body">
											<table id="table" class="table table-hover table-bordered first">
												<tbody class="first">
													@if(count($get) > 0)
														@foreach($get as $data)
														<tr class="row1" 
															data-fname="{{ $data->fname }}" 
															data-lname="{{ $data->lname }}" 
															data-mname="{{ $data->mname }}" 
															data-bday="{{ $data->birth_date }}" 
															data-address1="{{ $data->address1 }}" 
															data-id="{{ $data->patient_id }}" 
															data-position="{{ $data->order }}"
															data-gender="{{ $data->gender }}"
															data-email="{{ $data->email }}"
															data-civil_status="{{ $data->civil_status }}"
															data-contact_no="{{ $data->contact_no }}"
															data-citizenship="{{ $data->citizenship }}"
															data-height="{{ $data->height }}"
															data-weight="{{ $data->weight }}"
															data-bloodtype="{{ $data->bloodtype }}"
															data-image="{{ $data->image }}">
															<td>{{ $data->fname }} {{ $data->lname }}</td>
														</tr>
														@endforeach
													@else
														<td> No Patient Found </td>
													@endif
												</tbody>
											</table>

											<script>
												$(function() {
													$('tr.row1').click(function() {
														$('#buttonReciever').removeClass('hidden');	
														var fname = $(this).attr("data-fname");
														var lname = $(this).attr("data-lname");
														var mname = $(this).attr("data-mname");
														var bday = $(this).attr("data-bday");
														var address1 = $(this).attr("data-address1");
														var address2 = $(this).attr("data-address2");
														var id = $(this).attr("data-id");
														var gender = $(this).attr("data-gender");
														var email = $(this).attr("data-email");
														var civil_status = $(this).attr("data-civil_status");
														var contact_no = $(this).attr("data-contact_no");
														var citizenship = $(this).attr("data-citizenship");
														var height = $(this).attr("data-height");
														var weight = $(this).attr("data-weight");
														var bloodtype = $(this).attr("data-bloodtype");
														var sched = $(this).attr('data-sched');
														var image = $(this).attr("data-image");

														$('#buttonReciever').data('id', id);

														$('#a-link-consultation').on("show.bs.modal", function(e) {
															var id = $(e.relatedTarget).data('id');
															$(e.currentTarget).find('input[name="patient_id"]').val(id);
														});

														$('#fname').html(fname);
														$('#lname').html(lname);
														$('#mname').html(mname);
														$('#bday').html(bday);
														$('#address1').html(address1);
														$('#address2').html(address2);
														$('#id').html(id);
														$('#gender').html(gender);
														$('#email').html(email);
														$('#civil_status').html(civil_status);
														$('#contact_no').html(contact_no);
														$('#citizenship').html(citizenship);
														$('#height').html(height);
														$('#weight').html(weight);
														$('#bloodtype').html(citizenship);
														$('#sched').html(sched);

														if(image == "") {
															var wrapper = document.getElementById('imageDiv');
															var tag = '';
															tag += '<img class="img-responsive thumbnail" src=';
															tag += '"{{asset('upload/public/noimage.png')}}';
															tag += '"/>';
															wrapper.innerHTML = tag;
														}
														else {
															var wrapper = document.getElementById('imageDiv');
															var tag = '';
															tag += '<img class="img-responsive thumbnail" src=';
															tag += '"{{asset('upload')}}/';
															tag += image;
															tag += '"/>';
															wrapper.innerHTML = tag;
														}
													});




													$('table.first tbody.first').sortable({
														items: "tr",
														cursor: 'move',
														opacity: 0.6,
														update: function() {
															sendOrderToServer();
														}
													});
													function sendOrderToServer() {
														var order = [];
														$('tr.row1').each(function(index,element) {
															order.push({id: $(this).attr('data-id'), position: index+1});
														});
														$.ajax({
															type: "POST",
															dataType: "json",
															url: "{{ url('sec_queue/queue_profile') }}",
															data: {
																order:order,
																_token: '{{ csrf_token() }}'
															}, success: function(response) {
																if (response == "success") {
																	console.log(response);
																} else {
																	console.log(response);
																}
															}
														});
													}
												});
											</script>
										</div>
									</div>	
								@endif
							@endif

							@if(Auth::guard('sec_queue_2nd_priority')->check())
						 		@if(Auth::guard('sec_queue_2nd_priority_dragDrop')->check())
									<div class="card">
										<div class="header">
											 <h5>2nd Priority</h5>
										</div>
										<div class="body">
											<div class="list-group">
												<table id="table" class="table table-hover table-bordered first">
													<tbody class="first">
														@if(count($get1) > 0)
															@foreach($get1 as $data)
															<tr class="row1" data-fname="{{ $data->fname }}" 
																	data-lname="{{ $data->lname }}" 
																	data-mname="{{ $data->mname }}" 
																	data-bday="{{ $data->birth_date }}" 
																	data-address1="{{ $data->address1 }}" 
																	data-id="{{ $data->patient_id }}" 
																	data-position="{{ $data->order }}"
																	data-gender="{{ $data->gender }}"
																	data-email="{{ $data->email }}"
																	data-civil_status="{{ $data->civil_status }}"
																	data-contact_no="{{ $data->contact_no }}"
																	data-citizenship="{{ $data->citizenship }}"
																	data-height="{{ $data->height }}"
																	data-weight="{{ $data->weight }}"
																	data-bloodtype="{{ $data->bloodtype }}"
																	data-sched="{{ $data->sched_date }}"
																	data-image="{{ $data->image }}">
																<td>{{ $data->fname }} {{ $data->lname }}</td>
															</tr>
															@endforeach
														@else
															<td> No Patient Found </td>
														@endif
													</tbody>
												</table>
											</div>
										</div>
									</div>
								@endif
							@endif

							@if(Auth::guard('sec_queue_1st_priority')->check())
						 		@if(Auth::guard('sec_queue_1st_priority_basicTable')->check())
									<div class="card">
										<div class="header">
											 <h5>1st Priority</h5>
										</div>
										<div class="body">
											<table id="table" class="table table-hover table-bordered first_basic">
												<tbody class="first_basic">
													@if(count($get) > 0)
														@foreach($get as $data)
														<tr class="row2" 
															data-fname="{{ $data->fname }}" 
															data-lname="{{ $data->lname }}" 
															data-mname="{{ $data->mname }}" 
															data-bday="{{ $data->birth_date }}" 
															data-address1="{{ $data->address1 }}" 
															data-id="{{ $data->patient_id }}" 
															data-position="{{ $data->order }}"
															data-gender="{{ $data->gender }}"
															data-email="{{ $data->email }}"
															data-civil_status="{{ $data->civil_status }}"
															data-contact_no="{{ $data->contact_no }}"
															data-citizenship="{{ $data->citizenship }}"
															data-height="{{ $data->height }}"
															data-weight="{{ $data->weight }}"
															data-bloodtype="{{ $data->bloodtype }}"
															data-image="{{ $data->image }}">
															<td>
																{{ $data->fname }} {{ $data->lname }}
																<a href="../cons_finish/ref={{ $clinic_id }}/patient_id={{ $data->patient_id }}">
																	<button type="button" 
																			class="btn btn-xs btn-danger waves-effect pull-right">
																			<small>remove</small>
																	</button>
																</a>
															</td>
														</tr>
														@endforeach
													@else
														<td> No Patient Found </td>
													@endif
												</tbody>
											</table>

											<script>
												$(function() {
													$('tr.row2').click(function() {
														$('#buttonReciever').removeClass('hidden');	
														var fname = $(this).attr("data-fname");
														var lname = $(this).attr("data-lname");
														var mname = $(this).attr("data-mname");
														var bday = $(this).attr("data-bday");
														var address1 = $(this).attr("data-address1");
														var address2 = $(this).attr("data-address2");
														var id = $(this).attr("data-id");
														var gender = $(this).attr("data-gender");
														var email = $(this).attr("data-email");
														var civil_status = $(this).attr("data-civil_status");
														var contact_no = $(this).attr("data-contact_no");
														var citizenship = $(this).attr("data-citizenship");
														var height = $(this).attr("data-height");
														var weight = $(this).attr("data-weight");
														var bloodtype = $(this).attr("data-bloodtype");
														var sched = $(this).attr('data-sched');
														var image = $(this).attr('data-image');

														$('#buttonReciever').data('id', id);

														$('#a-link-consultation').on("show.bs.modal", function(e) {
															var id = $(e.relatedTarget).data('id');
															$(e.currentTarget).find('input[name="patient_id"]').val(id);
														});

														$('#fname').html(fname);
														$('#lname').html(lname);
														$('#mname').html(mname);
														$('#bday').html(bday);
														$('#address1').html(address1);
														$('#address2').html(address2);
														$('#id').html(id);
														$('#gender').html(gender);
														$('#email').html(email);
														$('#civil_status').html(civil_status);
														$('#contact_no').html(contact_no);
														$('#citizenship').html(citizenship);
														$('#height').html(height);
														$('#weight').html(weight);
														$('#bloodtype').html(citizenship);
														$('#sched').html(sched);

														if(image == "") {
															var wrapper = document.getElementById('imageDiv');
															var tag = '';
															tag += '<img class="img-responsive thumbnail" src=';
															tag += '"{{asset('upload/public/noimage.png')}}';
															tag += '"/>';
															wrapper.innerHTML = tag;
														}
														else {
															var wrapper = document.getElementById('imageDiv');
															var tag = '';
															tag += '<img class="img-responsive thumbnail" src=';
															tag += '"{{asset('upload')}}/';
															tag += image;
															tag += '"/>';
															wrapper.innerHTML = tag;
														}
													});
												});
											</script>
										</div>
									</div>	
								@endif
							@endif

							@if(Auth::guard('sec_queue_2nd_priority')->check())
						 		@if(Auth::guard('sec_queue_2nd_priority_basicTable')->check())
									<div class="card">
										<div class="header">
											 <h5>2nd Priority</h5>
										</div>
										<div class="body">
											<div class="list-group">
												<table id="table" class="table table-hover table-bordered first_basic">
													<tbody class="first_basic">
														@if(count($get1) > 0)
															@foreach($get1 as $data)
															<tr class="row2" data-fname="{{ $data->fname }}" 
																		data-lname="{{ $data->lname }}" 
																		data-mname="{{ $data->mname }}" 
																		data-bday="{{ $data->birth_date }}" 
																		data-address1="{{ $data->address1 }}" 
																		data-id="{{ $data->patient_id }}" 
																		data-position="{{ $data->order }}"
																		data-gender="{{ $data->gender }}"
																		data-email="{{ $data->email }}"
																		data-civil_status="{{ $data->civil_status }}"
																		data-contact_no="{{ $data->contact_no }}"
																		data-citizenship="{{ $data->citizenship }}"
																		data-height="{{ $data->height }}"
																		data-weight="{{ $data->weight }}"
																		data-bloodtype="{{ $data->bloodtype }}"
																		data-sched="{{ $data->sched_date }}"
																		data-image="{{ $data->image }}">
																<td>
																	{{ $data->fname }} {{ $data->lname }}
																	<a href="../cons_finish/ref={{ $clinic_id }}/patient_id={{ $data->patient_id }}">
																		<button type="button" 
																				class="btn btn-xs btn-danger waves-effect pull-right">
																				<small>remove</small>
																		</button>
																	</a>
																</td>
															</tr>
															@endforeach
														@else
															<td> No Patient Found </td>
														@endif
													</tbody>
												</table>
											</div>
										</div>
									</div>		
								@endif
							@endif
						</div>

						 <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
							<div class="card">
								<div class="header bg-grey">
									<h2>
										<center><h5>BASIC INFORMATION</h5></center>
									</h2>
								</div>
								<div class="body">
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
											{{-- <div class="image">
												<img src="{{ URL::asset('AdminSB/images/patient1.jpg') }}" class="img-responsive">
											</div> --}}
											<div id="imageDiv"></div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<p class="font-bold col-teal">
												<b style="color: #545454">Patient Number: <small id="id" style="font-size: 15px; "></small></b>
											</p>
											<p ><b>Firstname: <small id="fname" style="font-size: 15px"></small></b> </p>
											<p ><b>Lastname: <small id="lname" style="font-size: 15px"></small></b> </p>
											<p><b>Middlename: <small id="mname" style="font-size: 15px"></small></b></p>
										</div>
									</div>
									<!-- BASIC INFOMATION -->
									<div class="row">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 0px">
											<b style="color: teal;">Basic Information</b>
											<hr id="hr">
										</div>
									</div>
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-bottom: 0px">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="margin-bottom: 0px">
												<p><b>Birth Date : <small id="bday" style="font-size: 15px"></small></b></p>
												<p><b>Height : <small id="height" style="font-size: 15px"></small></b></p>
												<p><b>Weight : <small id="weight" style="font-size: 15px"></small></b></p>
												<p><b>Bloodtype : <small id="bloodtype" style="font-size: 15px"></small></b></p>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="margin-bottom: 0px">
												<p></p>
												<p></p>
												<p></p>
												<p></p>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-bottom: 0px">
											<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5" style="margin-bottom: 0px">
												<p><b>Gender : </b></p>
												<p><b>Civil Status : </b></p>
												<p><b>Email : </b></p>
												<p><b>Citizenship : </b></p>
												<p><b>Contact# : </b></p>
												<h5>Schedule</h5>
												
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="margin-bottom: 0px">
												<p id="gender"></p>
												<p id="civil_status"></p>
												<p id="email"></p>
												<p id="citizenship">citi</p>
												<p id="contact_no">contact</p>
												<p id="sched">contact</p>
											</div>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
												<p><b>Address1: </b></p>
											</div>
											<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
												<p id="address1"></p>
											</div>
										</div>
									</div>
									
									<div class="footer">
										<button type="button"
												id="buttonReciever" 
												data-toggle="modal" 
												data-target="#a-link-consultation" 
												class="btn btn-info waves-effect hidden">ADD PATIENT RECORD
										</button>
						{{-- 	<button type="button" class="btn btn-success waves-effect pull-right">Move to Second Priority</button>
							<button type="button" class="btn btn-success waves-effect pull-right" style="margin-right: 5px">Move to First Priority</button> --}}
									</div>
								
								</div>
							</div>
						</div>
					</div>

				</div> <!-- row -->
			</div> <!-- card -->
		</div> <!-- container-fluid -->
	</section>

	<!-- ADD TO QUEUE MODAL-->
	<form action="/sec_queue/addQueue" method="POST">
		{{ csrf_field() }}
		<div class="modal fade" id="add_patient_queue" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="largeModalLabel">Add patient to queue</h4>
				</div>
				<div class="modal-body">
				   <!-- Tabs With Icon Title -->

					<div class="row clearfix">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="card">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs" role="tablist">
									<li role="presentation" class="active">
										<a href="#home_with_icon_title" data-toggle="tab" id="new_patient">
											<i class="material-icons">face</i> New Patient
										</a>
									</li>
									<li role="presentation">
										<a href="#profile_with_icon_title" data-toggle="tab" id="from_ol_booking">
											<i class="material-icons">folder_shared</i> From Online Booking
										</a>
									</li>
									<li role="presentation">
										<a href="#profile_with_icon_title" data-toggle="tab" id="from_record">
											<i class="material-icons">folder_shared</i> From Records
										</a>
									</li>
								</ul>
								<script>
									$(document).ready(function() {
										$('#new_patient').click(function() {
											$('#home_with_icon_title').removeClass('hidden');
											$('#profile_with_icon_title').addClass('hidden');
											$('#profile_with_icon_title_from_record').addClass('hidden');
										});

										$('#from_ol_booking').click(function() {
											$('#home_with_icon_title').addClass('hidden');
											$('#profile_with_icon_title_from_record').addClass('hidden');
											$('#profile_with_icon_title').removeClass('hidden');
										});
										$('#from_record').click(function() {
											$('#profile_with_icon_title_from_record').removeClass('hidden');
											$('#home_with_icon_title').addClass('hidden');
											$('#profile_with_icon_title').addClass('hidden');
										});
									});
								</script>

								<!-- Tab panes -->
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane fade in active" id="home_with_icon_title">
										<div class="body">
											<div class="row">
											{{-- 	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
													<div class="image">
														<img src="{{ URL::asset('AdminSB/images/patient2.jpg') }}" class="img-responsive">
													</div>
												</div> --}}
												<div class="col-lg-12">
													<select name="queue">
														<option value="1">First Priority</option>
														<option value="0">Second Priority</option>
															>
													</select>
												</div>
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-top: 20px">
													<input type="hidden" name="clinic_id" value="{{ $clinic_id }}">
													<p><b>Firstname:</b> <input type="text"class="form-control" name="fname" placeholder="Your name.."></p>
													<p><b>Lastname:</b><input type="text" class="form-control" name="lname" placeholder="Lastname" required></p>
													<p><b>Middlename:</b> <input type="text" class="form-control" name="mname" placeholder="Middlename"></p>
													<p><b>Suffix:</b> <input type="text" class="form-control" name="suffix" placeholder="Suffix"></p>
												</div>
											</div>
											<!-- BASIC INFOMATION -->
											<div class="row">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 0px">
													<b style="color: teal;">Basic Information</b>
													<hr id="hr">
												</div>
											</div>
											<div class="row">
												<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="margin-bottom: 0px">
														<div class="c">
															
														</div>
														<b>Birth Date :</b>
														<div class="form-group">
														<div class="form-line">
															<input type="date" class="datepicker form-control" name="birth_date" placeholder="Please choose a date...">
														</div>
													</div>
														<b>Height :</b><input type="text" class="form-control" name="height" placeholder=" 5'5">
														<b>Weight :</b><input type="text" class="form-control" name="weight" placeholder=" 56kg">
														<b>Bloodtype :</b><input type="text" class="form-control" name="bloodtype" placeholder="A+">
													
												</div>
												<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="margin-bottom: 0px">
													<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5" style="margin-bottom: 0px">
														<p><b>Gender : </b></p>
														<p><b>Civil Status : </b></p>
														<p style="padding-top: 20px"><b>Email : </b></p>
														<p><b>Citizenship : </b></p>
														<p style="padding-top: 10px"><b>Contact# : </b></p>
														
													</div>
													<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="margin-bottom: 0px" >
														<select class="form-control show-tick" name="gender">
															<option value="Male">Male</option>
															<option value="Female">Female</option>
														</select>
														<select class="form-control show-tick" name="civil_status">
															<option value="Single">Single</option>
															<option value="Married">Married</option>
															<option value="Widow">Widow</option>
															<option value="In a relationship">In a relationship</option>
														</select>
														<input type="text" class="form-control" name="email" placeholder="Email">
														<input type="text" class="form-control" name="citizenship" placeholder="Citizenship">
														<input type="text" class="form-control" name="contact_no" placeholder="Contact No.">
													</div>
												</div>
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-top: 20px">
													<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
														<p><b>Address 1:</b></p>
													</div>
													<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
														<input type="text" class="form-control" name="address1" placeholder="First Address">
													</div>
												</div>
											</div>
												<button type="submit" class="btn btn-success">Save</button>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane fade in active hidden" id="profile_with_icon_title">
										<div class="body">

											<div class="table-responsive">
												<table class="table dataTable js-basic-example">
													<thead>
														<tr>
															<th>Patient Name</th>
															<th>Email</th>
															<th>Add patient</th>
														</tr>
													</thead>
													<tbody>
														@foreach($get2 as $data)
														<input type="hidden" name="patient_id" value="{{$data->book_online_id}}">
														<tr>
															<td><input type="text" name="new_fname" value="{{ $data->book_fname }}" style="border:none"><input type="text" name="new_lname" value="{{ $data->book_lname }}" style="border:none"></td>
															<td>{{ $data->book_email }}</td>
															<td>
																<a href="/sec_queue/add_new_queue_olbook/{{$clinic_id}}/{{$data->book_online_id}}/{{ $data->book_fname }}/{{ $data->book_lname }}">
																	<button type="button" 
																			class="btn btn-info btn-xs waves-effect">1ST
																		</button>
																</a>|<a href="/sec_queue/add_new_queue_2nd_olbook/{{$clinic_id}}/{{$data->book_online_id}}/{{ $data->book_fname }}/{{ $data->book_lname }}">
																	<button type="button" class="btn btn-danger btn-xs waves-effect">2ND
																	</button>
																</a>
															</td>
														</tr>
														@endforeach
													</tbody>
												</table>
											</div>
											<button type="submit" class="btn btn-success">Save</button>
										</div>
									</div>
								</div>
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane fade in active hidden" id="profile_with_icon_title_from_record">
										<div class="body">

											<div class="table-responsive">
												<table class="table dataTable js-basic-example">
													<thead>
														<tr>
															<th>Patient Name</th>
															<th>Add patient</th>
														</tr>
													</thead>
													<tbody>
														@foreach($get3 as $data)
														<input type="hidden" name="patient_id" value="{{$data->patient_id}}">
														<tr>
															<td><input type="text" name="new_fname" value="{{ $data->fname }}" style="border:none"><input type="text" name="new_lname" value="{{ $data->lname }}" style="border:none"></td>
															<td>
																<a href="/sec_queue/add_new_queue/{{$clinic_id}}/{{$data->patient_id}}/{{ $data->fname }}/{{ $data->lname }}">
																	<button type="button"
																			class="btn btn-info btn-xs waves-effect">1ST
																	</button>
																</a>|
																<a href="/sec_queue/add_new_queue_2nd/{{$clinic_id}}/{{$data->patient_id}}/{{ $data->fname }}/{{ $data->lname }}">
																	<button type="button" class="btn btn-danger btn-xs waves-effect">2ND
																	</button>
																</a>
															</td>
														</tr>
														@endforeach
													</tbody>
												</table>
											</div>
											<button type="submit" class="btn btn-success">Save</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div><!-- #END# Tabs With Icon Title -->
					
				</div>
			{{-- 	<div class="modal-footer">
					<button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button>
					<button type="button" class="btn btn-link waves-effect close" data-dismiss="modal">CLOSE</button>
				</div> --}}
			</div>
		</div>
	</div>
	</form>
	<!-- END ADD TO QUEUE MODAL -->	
	<!-- Consultation MODAL -->
	<form action="/sec_queue/addConsultation" method="POST">
	{{ csrf_field() }}
		<div class="modal fade" id="a-link-consultation" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-lg modal-size" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding-left: 0px; margin-top: 10px;">
						 <h4 class="modal-title" id="largeModalLabel">Add Patient Record</h4>
						</div>{{-- 

						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
							<a id="a-link-schedule" data-toggle="modal" data-dismiss="modal" data-target="#link-schedule" class="btn bg-teal waves-effect pull-right modal-header-button" style="margin-right: 10px; width: 100px;" ><p style="margin-top:10px;">SCHEDULES</p></a>
							<a id="a-link-bill" data-toggle="modal" data-dismiss="modal" data-target="#link-bill" class="btn bg-teal waves-effect pull-right modal-header-button" style="margin-right: 10px; width: 100px;"><p style="margin-top:10px;">BILL</p></a> <!-- href="#link-bill" -->
							<a id="a-link-consultation" data-toggle="modal" data-dismiss="modal" data-target="#link-consultation" class="btn bg-cyan waves-effect pull-right modal-header-button" style="margin-right: 10px;" ><p style="margin-top:10px;">CONSULTATION</p></a>
						</div> --}}
					</div>
					<hr>
					<div class="modal-body">
						<div class="body">
								

								<!-- Nav tabs -->
								<div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 10px; padding: 0px;">
									<div class=" col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-bottom: 10px; padding-left: 0px;">
										<ul class="nav nav-tabs tab-nav-right" role="tablist">
											<li role="presentation" class="active"><a href="#symptoms_with_icon_title" data-toggle="tab">Symptoms</a></li>
											{{-- <li role="presentation"><a href="#exams_with_icon_title" data-toggle="tab">Exams</a></li> --}}
											<li role="presentation"><a href="#diagnosis_with_icon_title" data-toggle="tab">Diagnosis</a></li>
											<li role="presentation"><a href="#medications_with_icon_title" data-toggle="tab">Medications</a></li>
											<li role="presentation"><a href="#bill_with_icon_title" data-toggle="tab">Bill</a></li>
											<li role="presentation"><a href="#schedule_with_icon_title" data-toggle="tab">Schedule</a></li>
										</ul>
									</div>
									<div class=" col-lg-6 col-md-6 col-sm-12 col-xs-12 pull-right" style="margin-bottom: 10px; padding: 0px;">
										
										<div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 10px; margin-right: 0px; padding-left: 0px;">
											<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="padding: 0px; margin-top: 10px; visibility: hidden;">
												<p class="pull-right" style="color: teal;"><b>Consultation Code:</b></p>
											</div>
											<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="padding: 0px; margin-top: 10px;">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0px;">
													<p class="pull-right" style="color: teal; margin:0px;"><b>Consultation Code:</b></p>
												</div>
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0px;">
													<p class="pull-right"><b>CC6546512</b></p>
												</div>
											</div>
											<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="padding: 0px; margin-top: 10px;">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0px;">
													<p class="pull-right" style="color: teal; margin:0px;"><b>Date:</b></p>
												</div>
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0px;">
													<p class="pull-right" ><b>12-32-13</b></p>
												</div>
											</div>
											<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="padding: 0px; margin-top: 10px;">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0px;">
													<p class="pull-right" style="color: teal; margin:0px;"><b>Time:</b></p>
												</div>
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0px;">
													<p class="pull-right"><b>23:00</b></p>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- Tab panes -->
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane fade in active" id="symptoms_with_icon_title">
										<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5" style="padding: 0px;">
											<b style="color: teal;">Symptoms List</b>
											<p>Inputs</p>
											<div class="row clearfix">
												<div class="col-lg-6">
											<button type="button" class="btn btn-primary waves-effect add"><i class="material-icons ">add</i>Add New Symptoms</button>
												</div>
											</div>
														

											<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9" style="padding: 10px 0 0 0px; ">
												<div class="body">
													<div class="symptoms">
														<input type="text" name="symptoms[]" placeholder="Symptoms" style="width: 303px; height: 36px">
													</div>
												</div>
											</div>
											{{-- <div class="col-lg-1 col-md-1 col-sm-1 col-xs-6" style="padding: 0px;">
												<button type="button" id="add" class="btn btn-primary waves-effect" style="margin-left: 5px;"><i class="material-icons add">add</i></button>
											</div> --}}
											{{-- <div class="col-lg-1 col-md-1 col-sm-1 col-xs-6" style="padding-right: 0px;">
												<button type="button" class="btn btn-primary waves-effect" style="margin-left: 5px;"><i class="material-icons">close</i></button>
											</div> --}}

											{{-- <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9" style="padding: 0px;  margin: 0px;">
												<div class="body" style="margin: 0">
													<div class="list-group">
														<li class="list-group-item">Foot pain or Ankle pain</li>
													</div>
												</div>
											</div>
											<div class="col-lg-1 col-md-1 col-sm-1 col-xs-6" style="padding: 0px;">
												<button type="button" class="btn btn-primary waves-effect" style="margin-left: 5px;"><i class="material-icons">add</i></button>
											</div>
											<div class="col-lg-1 col-md-1 col-sm-1 col-xs-6" style="padding: 0px;">
												<button type="button" class="btn btn-primary waves-effect" style="margin-left: 5px;"><i class="material-icons">close</i></button>
											</div>

											<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9" style="padding: 0px;  margin: 0px;">
												<div class="body">
													<div class="list-group">
														<li class="list-group-item">Foot pain or Ankle pain</li>
													</div>
												</div>
											</div>
											<div class="col-lg-1 col-md-1 col-sm-1 col-xs-6" style="padding: 0px;">
												<button type="button" class="btn btn-primary waves-effect" style="margin-left: 5px;"><i class="material-icons">add</i></button>
											</div>
											<div class="col-lg-1 col-md-1 col-sm-1 col-xs-6" style="padding: 0px;">
												<button type="button" class="btn btn-primary waves-effect" style="margin-left: 5px;"><i class="material-icons">close</i></button>
											</div> --}}
										</div>

										<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12" style="margin-bottom: 10px; padding-bottom: 20px;">
											<div class="row clearfix">
											<p style="color: teal;"><b>Graphic</b></p>
											<input type="file" id="imageLoader" name="imageLoader"/>

											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0px; margin-bottom: 10px;">
												<div id="colors"></div>
												<canvas id="canvass" class="disabled"></canvas>
											</div>
											<div class="pull-right">
												
												
												<button type="submit" id="clearCanvas" class="btn bg-orange waves-effect"><!-- <i class="material-icons">brush</i> -->CLEAR</button>
											{{-- 	<button type="button" class="btn btn-primary waves-effect" id="saveCanvas"><!-- <i class="material-icons">title</i> -->SAVE</button> --}}
											</div>
											</div>
										</div>

										<div class="clearfix"></div>
									</div>
									{{-- <div role="tabpanel" class="tab-pane fade" id="exams_with_icon_title">
										<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" style="padding: 0px;">
											<b style="color: teal;">Attached Document</b>
											<p></p>

											
											<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="padding: 0px; padding-left: 10px;">
												<input type="file" id="imageLoader" name="imageLoader"/>
											</div>

											<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" style="padding: 0px;">
												<div class="body">
													<div class="list-group">
														<a href="#" class="list-group-item">
															<i class="material-icons pull-right">insert_drive_file</i>
															<h4 class="list-group-item-heading">
																Lung Laboratory Exam Result Latest
															</h4>
															<p class="list-group-item-text">doc.type.Microsoft Office</p>
														</a>
													</div>
												</div>
											</div>
											<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" style="padding: 0px;">
												<button type="button" class="btn btn-danger waves-effect" style="margin-left: 5px;"><i class="material-icons">close</i></button>
											</div>

											<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" style="padding: 0px;">
												<div class="body">
													<div class="list-group">
														<a href="#" class="list-group-item">
															<i class="material-icons pull-right">insert_drive_file</i>
															<h4 class="list-group-item-heading">
																Lung Laboratory Exam Result Old
															</h4>
															<p class="list-group-item-text">doc.type.Microsoft Office</p>
														</a>
													</div>
												</div>
											</div>
											<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" style="padding: 0px;">
												<button type="button" class="btn btn-danger waves-effect" style="margin-left: 5px;"><i class="material-icons">close</i></button>
											</div>

											<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" style="padding: 0px;">
												<div class="body">
													<div class="list-group">
														<a href="#" class="list-group-item">
															<i class="material-icons pull-right">insert_drive_file</i>
															<h4 class="list-group-item-heading">
																Lung Laboratory Exam Result Older
															</h4>
															<p class="list-group-item-text">doc.type.Microsoft Office</p>
														</a>
													</div>
												</div>
											</div>
											<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" style="padding: 0px;">
												<button type="button" class="btn btn-danger waves-effect" style="margin-left: 5px;"><i class="material-icons">close</i></button>
											</div>

											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0px;">
												<b style="color: teal;">Attached Document</b>
												<p></p>
												<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="padding: 0px; padding-left: 10px;">
													<input type="file" id="imageLoader" name="imageLoader"/>
												</div>
											</div>

											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0px;">
												<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
													<div class="thumbnail">
														<img src="{{ URL::asset('AdminSB/images/xray.jpg') }}">
														<div class="caption">
															<p>X-Ray Image 1</p>
															<button class="btn btn-danger waves-effect" style="margin-left: 20%;">Remove</button>
														</div>
													</div>
												</div>
												<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
													<div class="thumbnail">
														<img src="{{ URL::asset('AdminSB/images/xray.jpg') }}">
														<div class="caption">
															<p>X-Ray Image 1</p>
															<button class="btn btn-danger waves-effect" style="margin-left: 20%;">Remove</button>
														</div>
													</div>
												</div>
												<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
													<div class="thumbnail">
														<img src="{{ URL::asset('AdminSB/images/xray.jpg') }}">
														<div class="caption">
															<p>X-Ray Image 1</p>
															<button class="btn btn-danger waves-effect" style="margin-left: 20%;">Remove</button>
														</div>
													</div>
												</div>
											</div>


										</div>

										<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
											<p style="color: teal;"><b>Preview</b></p>
											<input type="file" id="imageLoader" name="imageLoader"/>
											<div id="colors">
											</div>
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<canvas id="canvass">asd</canvas>
											</div>
										</div>
										
										<div class="clearfix">
											<div class="pull-right">
											<button type="button" class="btn bg-green waves-effect"><!-- <i class="material-icons">brush</i> -->DRAW</button>
												<button type="button" id="clearCanvas" class="btn bg-orange waves-effect"><!-- <i class="material-icons">brush</i> -->CLEAR</button>
												<button type="button" class="btn btn-primary waves-effect"><!-- <i class="material-icons">title</i> -->ADD TEXT</button>
											</div>

										</div>
									</div> --}}
									<div role="tabpanel" class="tab-pane fade" id="diagnosis_with_icon_title">
											<textarea id="ckeditor" name="diagnosis"></textarea>
									</div>
									<div role="tabpanel" class="tab-pane fade" id="medications_with_icon_title">
										{{-- <div class="row clearfix">
											<b class="col-sm-4" style="margin-bottom: 0px;">Medicine:</b>
											<b class="col-sm-2" style="margin-bottom: 0px;">Quantity:</b>
											<b class="col-sm-2" style="margin-bottom: 0px;">Dose:</b>
											<b class="col-sm-2" style="margin-bottom: 0px;">Frequency:</b>
										</div> --}}
										<div class="row clearfix">
											{{-- <div class="col-sm-4">
												<div class="form-group">
												  <select class="form-control show-tick" name="consultationMed[]" id="consultationMed">
													<option value="">-- Please select --</option>
													@foreach($get_med as $data)
													<option>{{ ucfirst(trans($data->generic_name)) }}</option>
													@endforeach
												</select>  
												</div>
											</div> --}}
											<div class="col-sm-12">
												<b style="color: teal; margin-bottom: 0px;">Prescription</b>
												<div class="table-responsive" style="height: 250px">
												    <table class="table table-bordered" id="crud_table">
													     <thead>
													     	<tr>
														      	<th width="45%"><center>Medicine</center></th>
														      	<th width="15%"><center>Quantity</center></th>
														      	<th width="15%"><center>Dose</center></th>
														      	<th width="20%"><center>Frequency</center></th>
														      	<th width="5%"></th>
														     </tr>
													     </thead>
													     <tbody class="addMedicine">
													     	<tr>
													      		<td class="medicine">
													      			<select class="form-control show-tick" name="consultationMed[]" id="consultationMed">
																		<option value="">-- Select Medicine --</option>
																		@foreach($get_med as $data)
																		<option value="{{ $data->med_id }}">{{ ucfirst(trans($data->generic_name)) }}</option>
																		@endforeach
																	</select>
																</td>
													      		<td class="quantity"><input type="text" name="quantity[]"  placeholder="Type Here..."  style="border:none; width: 100%"></td>
													      		<td class="dose"><input type="text" name="dose[]"  placeholder="Type Here..."  style="border:none; width: 100%"></td>
													      		<td class="frequency"><input type="text" name="frequency[]"  placeholder="Type Here..."  style="border:none; width: 100%"></td>
													      		<td><button type="button" name="add" id="add" class="btn btn-success btn-md addMed">+</button></td>
													     	</tr>
													     </tbody>
												    </table>
											   	</div>
											   	<b style="color: teal; margin-bottom: 0px;">Remarks</b>
												<div class="form-group">
													<div class="form-line">
														<textarea name="note" rows="1" class="form-control no-resize auto-growth" placeholder="Please type what you want.."></textarea>
													</div>
												</div>
											</div>
											{{-- <div class="col-sm-2">
												<input type="text" class="form-control col-md-4" name="consultationMed[]" id="quantityMed"> 
											</div>
											<div class="col-sm-2">
												<input type="text" class="form-control col-md-4" name="consultationMed[]" id="doseMed"> 
											</div>
											<div class="col-sm-2">
												<input type="text" class="form-control col-md-4" name="consultationMed[]" id="frequencyMed"> 
											</div>
											<div class="col-sm-2">
												<button type="button" id="addMed" class="btn btn-sm btn-primary waves-effect addMed" onclick="addRow()"><i class="material-icons ">add</i></button>
											</div> --}}
										</div>
										
										<hr id="hr" style="margin-bottom: 0px; margin-top: 0px;">
										<div class="row">
											{{-- <div class="body table-responsive">
												<table class="table table-bordered" id="tableMed">
													<thead>
														<tr>
															<th><center>Medicine</center></th>
															<th><center>Quantity</center></th>
															<th><center>Dose</center></th>
															<th><center>Frequency</center></th>
														</tr>
													</thead>
												</table>
											</div> --}}

											{{-- <b style="color: teal; margin-bottom: 0px;">Remarks</b>
											
											<div class="form-group">
												<div class="form-line">
													<textarea rows="1" class="form-control no-resize auto-growth" placeholder="Please type what you want.."></textarea>
												</div>
											</div> --}}
										</div>
									</div>
									<div role="tabpanel" class="tab-pane fade" id="bill_with_icon_title">
										<div class="body">
											<div class="row">
												<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
													<p><b>Billing Code :</b> BC54213132</p>
												</div>
												<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
													<label>Mode of Payment : 
														<select name="mode_payment">
															<option value="Cash">Cash</option>
															<option value="Credit Card">Credit Card</option>
														</select></label>
													<!-- <div class="">
														<button type="button" style="width: 100%;" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															Cash <span class="caret"></span>
														</button>
														<ul class="dropdown-menu">
															<li><a href="javascript:void(0);">Cash</a></li>
															<li><a href="javascript:void(0);">Credit Card</a></li>
														</ul>
													</div> -->
												</div>
												<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
													<p><b style="padding-right: 40px">Billed Amount : </b><input type="text" name="billAmount" style="border-radius: 2px; border:1px solid #ccc"></p>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
													@if(Auth::guard('subscriber')->check())
													<p><b>Practitioner :</b>Dr. {{ ucfirst(trans(Auth::user()->fname)) }} {{ ucfirst(trans(Auth::user()->lname)) }}, MD.</p>
														<input type="hidden" name="doc_id" value="{{Auth::user()->subscriber_id}}">
													@endif
														<input type="hidden" name="patient_id">
														<input type="hidden" name="clinic_id" value="{{ $clinic_id }}">
												</div>
												<div class="col-lg-4">
													<p>
														<b>Frequency : </b>
														<input type="text" name="billFrequency" style="width: 43px; border-radius: 2px; border:1px solid #ccc;">
														<select name="frequency_method">
															<option value="Daily">Daily</option>
															<option value="Monthly">Monthly</option>
															<option value="Yearly">Yearly</option>
														</select>
													</p>
												</div>
												<!-- <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
													<span><b>Frequency:</b></span>
													<input type="texbox" name="" style="width: 25px;">
													<div class="btn-group">
														<button type="button" style="width: 100%;" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															Monthly <span class="caret"></span>
														</button>
														<ul class="dropdown-menu">
															<li><a>Daily</a></li>
															<li><a>Monthly</a></li>
															<li><a>Yearly</a></li>
														</ul>
													</div>
												</div> -->
												<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
													<p><b style="padding-right: 5px">Insurance Discount : </b><input type="text" class=""  style="border-radius: 2px; border:1px solid #ccc" name="insurance_discount"></p>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
													<p><b style="padding-right: 15px">Insurance/s :</b><input type="text" style="border-radius: 2px; border:1px solid #ccc" name="insurance"/></p>
												</div>
												<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="padding-top: 10px">
													<span><b style="padding-right: 15px">Frequency Payment :</b></span>
													<input type="texbox" name="frequency_payment" style="border-radius: 2px; border:1px solid #ccc">
													
												</div>
												<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
													<p><b style="padding-right: 50px">Total Payable :</b><input type="text" style="border-radius: 2px; border:1px solid #ccc" name="total_payable"></p>
												</div>
											</div><br>
											<!-- <div class="row">
												<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
													<p>Particulars</p>
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
													<center><p>Qnty/Time</p></center>
												</div>
												<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
													<center><p>Unit</p></center>
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
													<center><p>Amount/Rate</p></center>
												</div>
												<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
													<p>TotalAmount/Rate</p>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
													<input type="textbox" style="width: 90%;" name=""> <input type="button" class="btn btn-success" style="font-size: 10px; width: 30px;" value="+" name="">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
													<input type="texbox" style="width: 100%" name=""> 
												</div>
												<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
													<input type="texbox" style="width: 100%" name=""> 
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
													<input type="texbox" style="width: 100%" name=""> 
												</div>
												<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
													<div>
													<input type="texbox" style=" width: 150px;" name=""> <button type="button" value="" class="btn btn-primary waves-effect" style="margin-left: 5px; width: 30px; height: 30px;">+</button> 
													</div>
												</div>
											</div> -->
											<div class="row">
												<div class="body table-responsive">
													<table class="table table-bordered">
														<thead>
															<tr>
																<th><center> Particulars </center></th>
																<th><center> Qnty/Time </center></th>
																<th><center> Unit </center></th>
																<th><center> Amount/Rate </center></th>
																<th><center> TotalAmount / Rate </center></th>
																<th></th>
															</tr>
														</thead>
														<tbody class="addBilling">
															<tr>
																<td class="billPaticulars"><input type="text" placeholder="Type Here..." name="billPaticulars[]" style="width: 100%; border: none"/></td>
																<td class="billQnty"><input type="text" placeholder="Type Here..." name="billQnty[]" style="width: 100%; border: none"/></td>
																<td class="billUnit"><input type="text" placeholder="Type Here..." name="billUnit[]" style="width: 100%; border: none"/></td>
																<td class="billAmountRate"><input type="text" placeholder="Type Here..." name="billAmountRate[]" style="width: 100%; border: none"/></td>
																<td class="billTotalAmount"><input type="text" placeholder="Type Here..." name="billTotalAmount[]" style="width: 100%; border: none"/></td>
																<td><center><button type="button" name="billAdd" id="addBill" class="btn btn-success btn-md addBill">+</button></center></td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
									{{-- <div role="tabpanel" class="tab-pane fade" id="schedule_with_icon_title">
											<textarea id="ckeditor">
												
											</textarea>
									</div> --}}
									<div role="tabpanel" class="tab-pane fade" id="schedule_with_icon_title">
										<div class="row clearfix">
											<div class="col-lg-4">
												{{-- <b style="color: teal; margin-bottom: 0px;">Prescription</b>
												<div class="table-responsive" style="height: 250px">
												    <table class="table table-bordered" id="crud_table">
													     <thead>
													     	<tr>
														      	<th width="45%"><center>Medicine</center></th>
														      	<th width="15%"><center>Quantity</center></th>
														      	<th width="15%"><center>Dose</center></th>
														      	<th width="20%"><center>Frequency</center></th>
														      	<th width="5%"></th>
														     </tr>
													     </thead>
													     <tbody class="addMedicine">
													     	<tr>
													      		<td class="medicine">
													      			<select class="form-control show-tick" name="consultationMed[]" id="consultationMed">
																		<option value="">-- Select Medicine --</option>
																		@foreach($get_med as $data)
																		<option value="{{ $data->med_id }}">{{ ucfirst(trans($data->generic_name)) }}</option>
																		@endforeach
																	</select>
																</td>
													      		<td class="quantity"><input type="text" name="quantity[]"  placeholder="Type Here..."  style="border:none; width: 100%"></td>
													      		<td class="dose"><input type="text" name="dose[]"  placeholder="Type Here..."  style="border:none; width: 100%"></td>
													      		<td class="frequency"><input type="text" name="frequency[]"  placeholder="Type Here..."  style="border:none; width: 100%"></td>
													      		<td><button type="button" name="add" id="add" class="btn btn-success btn-md addMed">+</button></td>
													     	</tr>
													     </tbody>
												    </table>
											   	</div>
											   	<b style="color: teal; margin-bottom: 0px;">Remarks</b>
												<div class="form-group">
													<div class="form-line">
														<textarea name="note" rows="1" class="form-control no-resize auto-growth" placeholder="Please type what you want.."></textarea>
													</div>
												</div> --}}
												<b style="color: teal; margin-bottom: 0px;">Next Schedule</b>
												{{-- <div class="form-group"> --}}
													<input type="date" name="cons_date" class="form-control">
													<br>
													<textarea name="cons_note" style="width: 100%; height: 200px" placeholder="Note..."></textarea>
												{{-- </div> --}}
											</div>
											<div class="col-lg-8">
												<div class="table-responsive">
													<table class="table table-striped js-basic-example dataTable">
														<thead>
															<tr>
																<th>Date</th>
																<th>Name</th>
																<th>Note</th>
															</tr>
														</thead>
														<tbody>
															@foreach($patient_new_sched as $data)
															<tr>
																<td>{{ $data->sched_date }}</td>
																<td>{{ ucfirst(trans($data->fname)) }} {{ ucfirst(trans($data->lname)) }}</td>
																<td>{{ $data->note }}</td>
															</tr>
															@endforeach
														</tbody>
													</table>
												</div>
											</div>
										</div>
										
										<hr id="hr" style="margin-bottom: 0px; margin-top: 0px;">
										<div class="row">
										</div>
									</div>
								</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary waves-effect">Save</button>
						<button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
	</form>
	

	@section('javascript')

		<script src="{{ URL::asset('AdminSB/plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
		<script src="{{ URL::asset('AdminSB/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
		<script src="{{ URL::asset('AdminSB/js/pages/tables/jquery-datatable.js')}}"></script> 

		<!-- Ckeditor -->
		<script src="{{ URL::asset('AdminSB/plugins/ckeditor/ckeditor.js')}}"></script>
		<script src="{{ URL::asset('AdminSB/js/pages/forms/editors.js')}}"></script>
		 <!-- Calendar Js -->
		{{-- <script src="{{ URL::asset('AdminSB/js/moment.min.js')}}"></script> --}}
		{{-- <script src="{{ URL::asset('AdminSB/js/fullcalendar.min.js')}}"></script> --}}
		{{-- <script src="{{ URL::asset('AdminSB/js/cal-init.js')}}"></script> --}}


		

		{{-- CANVAS --}}
		<script src="{{ URL::asset('AdminSB/canvas/main.js')}}"></script>
		<script src="{{ URL::asset('AdminSB/canvas/colors.js')}}"></script>
		<script src="{{ URL::asset('AdminSB/canvas/clearCanvas.js')}}"></script>
		<script src="{{ URL::asset('AdminSB/canvas/uploadImage.js')}}"></script>
		<script src="{{ URL::asset('AdminSB/canvas/save.js')}}"></script>
		
		<script src="{{ URL::asset('AdminSB/js/sort/jquery-ui.js')}}"></script>
		<script type="text/javascript">
			$('#add_patient_queue').on("show.bs.modal", function (e) {
				var clinic_id = $(e.relatedTarget).data('clinic_id');
				$(e.currentTarget).find('input[name="clinic_id"]').val(clinic_id);
			});

			var max_field = 10;
			var wrapper = $('.symptoms');
			var add_button = $('.add');

			var x = 1;

			$(add_button).click(function(e) {
				e.preventDefault();
				if(x < max_field){
					x++;
					$(wrapper).append('<div style="padding-top: 10px"><input type="text" name="symptoms[]" style="width: 303px; height: 36px" autofocus/><button type="button" class="btn btn-primary waves-effect delete" style="margin-left: 5px;"><i class="material-icons">close</i></button></div>')
				} else {
					alert('You Reached the limits');
				}
			});

			$(wrapper).on('click','.delete', function(e) {
				e.preventDefault();
				$(this).parent('div').remove();
				x--;
			});

			var max_field_med = 10;
			var medWrapper = $('.addMedicine');
			var add_button_med = $('.addMed');
			var m = 1;

			$(add_button_med).click(function(e) {
				e.preventDefault();
				if(m < max_field_med) {
					m++;
					$(medWrapper).append('<tr><td><select class="form-control show-tick" name="consultationMed[]"><option>-- Select Medicine --</option>@foreach($get_med as $data)<option value="{{ $data->med_id }}">{{ ucfirst(trans($data->generic_name)) }}</option>@endforeach</select></td><td><input type="text" name="quantity[]" placeholder="Type Here..." style="border:none"></td><td><input type="text" name="dose[]" placeholder="Type Here..." style="border:none"></td><td><input type="text" placeholder="Type Here..." name="frequency[]" style="border:none"></td><td><button type="button" class="btn btn-danger btn-xs waves-effect deleteMed" style="margin-left: 5px;" onclick="deleteRow(this)"><i class="material-icons">close</i></button></td></tr>');
				} else {
					alert('You Reached the limits');
				}
			});

			function deleteRow(btn) {
			  	var row = btn.parentNode.parentNode;
			  	row.parentNode.removeChild(row);
			  	m--;
			}

			var max_field_bill = 10;
			var billWrapper = $('.addBilling');
			var add_button_bill = $('.addBill');
			var b = 1;

			$(add_button_bill).click(function(e) {
				e.preventDefault(e);
				if(b < max_field_bill) {
					b++;
					$(billWrapper).append('<tr><td class="billPaticulars"><input type="text" placeholder="Type Here..." name="billPaticulars[]" style="width: 100%; border: none"/></td><td class="billQnty"><input type="text" placeholder="Type Here..." name="billQnty[]" style="width: 100%; border: none"/></td><td class="billUnit"><input type="text" placeholder="Type Here..." name="billUnit[]" style="width: 100%; border: none"/></td><td class="billAmountRate"><input type="text" placeholder="Type Here..." name="billAmountRate[]" style="width: 100%; border: none"/></td><td class="billTotalAmount"><input type="text" placeholder="Type Here..." name="billTotalAmount[]" style="width: 100%; border: none"/></td><td><button type="button" class="btn btn-danger btn-xs waves-effect deleteBill" style="margin-left: 5px;" onclick="deleteRowBill(this)"><i class="material-icons">close</i></button></td></tr>')
				} else {
					alert('You Reached the limits');
				}
			});

			function deleteRowBill(btn) {
			  	var row = btn.parentNode.parentNode;
			  	row.parentNode.removeChild(row);
			  	b--;
			}
			// $(medWrapper).on('click', '.deleteMed', function(e) {
			// 	e.preventDefault();
			// 	$(this).parent('tr').remove();
			// 	x--;
			// 	alert('hi');
			// });


      		
      		


			// function addRow() {
			// 	"use strict";
			// 	var table = document.getElementById("tableMed");
			// 	var row = document.createElement('tr');
			// 	var td1 = document.createElement("td");
			// 	var td2 = document.createElement("td");
			// 	var td3 = document.createElement("td");
			// 	var td4 = document.createElement("td"); 

			// 	td1.innerHTML = document.getElementById("consultationMed").value;
	  //   		td2.innerHTML  = document.getElementById("quantityMed").value;
	  //   		td3.innerHTML  = document.getElementById("doseMed").value;
	  //   		td4.innerHTML  = document.getElementById("frequencyMed").value;

	  //   		row.appendChild(td1);
			//     row.appendChild(td2);
			//     row.appendChild(td3);
			//     row.appendChild(td4);

			//     table.children[0].appendChild(row);
			// }
			// var count = 1;

		 // 	$('#add').click(function(){
		 //  		count = count + 1;
			//   	var html_code = "<tr id='row"+count+"'>";
			//    	html_code += "<td class='medicine'><select class='form-control show-tick'>@foreach($get_med as $data)<option>{{ $data->generic_name }}</option>@endforeach</select></td>";
			//    	html_code += "<td contenteditable='true' class='quantity'></td>";
			//    	html_code += "<td contenteditable='true' class='dose'></td>";
			//    	html_code += "<td contenteditable='true' class='frequency' ></td>";
			//    	html_code += "<td><button type='button' name='remove' data-row='row"+count+"' class='btn btn-danger btn-sm remove'>-</button></td>";   
			//    	html_code += "</tr>";  
			//    	$('#crud_table').append(html_code);
		 // 	});

		 // 	$(document).on('click', '.remove', function(){
			//   	var delete_row = $(this).data("row");
			//   	$('#' + delete_row).remove();
			//  });

		 // 	$('#save').click(function(){
			//   	var medicine = [];
			//   	var quantity = [];
			//   	var dose = [];
			//   	var frequency = [];
			//   	$('.medicine').each(function(){
			//    		medicine.push($(this).text());
			//   	});
			//   	$('.quantity').each(function(){
			//    		quantity.push($(this).text());
			//   	});
			//   	$('.dose').each(function(){
			//    		dose.push($(this).text());
			//   	});
			//   	$('.frequency').each(function(){
			//    		frequency.push($(this).text());
			//   	});

			//   	$.ajax({

			//    		url: "/addConsultation",
			//    		method: "POST",
			//    		data: {medicine:medicine, quantity:quantity, dose:dose, frequency:frequency},
			//    		success:function(data){
			//     		alert(data);
			// 	    	$("td[contentEditable='true']").text("");

			// 	    	for(var i=2; i<= count; i++) {
			// 	     		$('tr#'+i+'').remove();
			// 	    	}
			//      fetch_item_data();
			//    		}
			//   	});
			//  });
			$("#redemption button").on("click", function (e) {
				var image = $(e.relatedTarget).data('image');
				console.log(image);
			});
		</script>
	 @endsection
@endsection
