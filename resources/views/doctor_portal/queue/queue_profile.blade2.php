@extends('doctor_portal.layouts.master')

@section('style')

<!-- Calendar -->
{{-- <link href="{{ URL::asset('AdminSB/css/fullcalendar.min.css')}}" rel="stylesheet"> --}}
{{-- <link href="{{ URL::asset('AdminSB/css/calendar.css')}}" rel="stylesheet"> --}}
<script src="{{ URL::asset('AdminSB/plugins/jquery/jquery.min.js')}}"></script>

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
					<h2>Queueing</h2>
					<div style="text-align: right;">
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
							<div class="card">
								<div class="header">
									 <h5>1st Priority</h5>
								</div>
								<div class="body">
									<table id="table" class="table table-hover table-bordered first">
										<tbody class="first" id="t_sortable">
											<tr></tr>
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
													data-bloodtype="{{ $data->bloodtype }}">
													<td>{{ ucfirst(trans($data->fname)) }} {{ ucfirst(trans($data->lname)) }}</td>
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
											});

											//$('table.first tbody.first').sortable({

											//	items: "tr",
											//	cursor: 'move',
											//	opacity: 0.6,
											//	update: function() {
											//		sendOrderToServer();

											//	}
											//});
											function sendOrderToServer() {
												
												var order = [];
												$('tr.row1').each(function(index,element) {
													order.push({id: $(this).attr('data-id'), position: index+1});
												});
												
												$.ajax({
													type: "POST",
													dataType: "json",
													url: "{{ url('queue/queue_profile') }}",
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
									{{-- <div class="list-group">
										<a href="patient-profile.html" class="list-group-item active">Cody Paloma Javier
										</a>
										<a href="patient-profile1.html" class="list-group-item">Kurt Kevin Nebril</a>
										<a href="javascript:void(0);" class="list-group-item">Loren Mae Gumban</a>
										<a href="javascript:void(0);" class="list-group-item">Apple Caponan</a>
										<a href="javascript:void(0);" class="list-group-item">Richmon Monteadora</a>
									</div> --}}
								</div>
							</div>	
							<div class="card">
								<div class="header">
									 <h5>2nd Priority</h5>
								</div>
								<div class="body">
									<div class="list-group">
										<table id="table2" class="table table-hover table-bordered first">
											<tbody class="first" id="t_sortable">
												<tr></tr>
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
																data-bloodtype="{{ $data->bloodtype }}">
														<td>{{ ucfirst(trans($data->fname)) }} {{ ucfirst(trans($data->lname)) }}</td>
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
											<div class="image">
												<img src="{{ URL::asset('AdminSB/images/patient1.jpg') }}" class="img-responsive">
											</div>
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
												
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="margin-bottom: 0px">
												<p id="gender"></p>
												<p id="civil_status"></p>
												<p id="email"></p>
												<p id="citizenship">citi</p>
												<p id="contact_no">contact</p>
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
										<button type="button" data-toggle="modal" data-target="#a-link-consultation" class="btn btn-info waves-effect">
								<a href="#link-consultation"><label style="color: white;">ADD PATIENT RECORD</label></a>
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
	<form action="/queue/addQueue" method="POST">
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
											<a href="#home_with_icon_title" data-toggle="tab">
												<i class="material-icons">face</i> New Patient
											</a>
										</li>
										{{-- <li role="presentation">
											<a href="#profile_with_icon_title" data-toggle="tab">
												<i class="material-icons">folder_shared</i> From Record
											</a>
										</li> --}}
									</ul>

									<!-- Tab panes -->
									<div class="tab-content">
										<div role="tabpanel" class="tab-pane fade in active" id="home_with_icon_title">
											<div class="body">
												<div class="row">
													<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
														<div class="image">
															<img src="{{ URL::asset('AdminSB/images/patient2.jpg') }}" class="img-responsive">
														</div>
													</div>
													<div class="col-lg-3">
														<select name="queue">
															<option value="1">First Priority</option>
															<option value="0">Second Priority</option>
																>
														</select>
													</div>
													<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding-top: 20px">
														<input type="text" name="clinic_id">
														<p><b>Firstname:</b> <input type="text"class="form-control" name="fname" placeholder="Your name.."></p>
														<p><b>Lastname:</b><input type="text" class="form-control" name="lname" placeholder="Lastname"></p>
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
												<d{{-- iv class="form-line">
													<input type="date" class="datepicker form-control" name="birth_date" placeholder="Please choose a date..."> --}}
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
									</div>
							</div>
						</div>
					</div><!-- #END# Tabs With Icon Title -->
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button>
					<button type="button" class="btn btn-link waves-effect close" data-dismiss="modal">CLOSE</button>
				</div>
			</div>
		</div>
	</div>
	</form>
	<!-- END ADD TO QUEUE MODAL -->	
	<!-- Consultation MODAL -->
	<div class="modal fade" id="a-link-consultation" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg modal-size" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding-left: 0px; margin-top: 10px;">
					 <h4 class="modal-title" id="largeModalLabel">Add Patient Record</h4>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
						<a id="a-link-schedule" data-toggle="modal" data-dismiss="modal" data-target="#link-schedule" class="btn bg-teal waves-effect pull-right modal-header-button" style="margin-right: 10px; width: 100px;" ><p style="margin-top:10px;">SCHEDULES</p></a>
						<a id="a-link-bill" data-toggle="modal" data-dismiss="modal" data-target="#link-bill" class="btn bg-teal waves-effect pull-right modal-header-button" style="margin-right: 10px; width: 100px;"><p style="margin-top:10px;">BILL</p></a> <!-- href="#link-bill" -->
						<a id="a-link-consultation" data-toggle="modal" data-dismiss="modal" data-target="#link-consultation" class="btn bg-cyan waves-effect pull-right modal-header-button" style="margin-right: 10px;" ><p style="margin-top:10px;">CONSULTATION</p></a>
					</div>
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
										<div class="col-lg-12 cfol-md-12 col-sm-12 col-xs-12" style="padding: 0px;">
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

									<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9" style="padding: 0px; ">
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
									</div>

									<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9" style="padding: 0px;  margin: 0px;">
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
									</div>
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
										
										
										<button type="button" id="clearCanvas" class="btn bg-orange waves-effect"><!-- <i class="material-icons">brush</i> -->CLEAR</button>
									{{-- 	<button type="button" class="btn btn-primary waves-effect" id="saveCanvas"><!-- <i class="material-icons">title</i> -->SAVE</button> --}}
									</div>
									</div>
								</div>

								<div class="clearfix"></div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="exams_with_icon_title">
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
							</div>
							<div role="tabpanel" class="tab-pane fade" id="diagnosis_with_icon_title">
									<textarea id="ckeditor">
										
									</textarea>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="medications_with_icon_title">
								<div class="row clearfix">
									<b class="col-sm-6" style="margin-bottom: 0px;">Medicine:</b>
									<b class="col-sm-2" style="margin-bottom: 0px;">Dose:</b>
									<b class="col-sm-2" style="margin-bottom: 0px;">Frequency:</b>
								</div>
								<div class="row clearfix">
									<div class="col-sm-6">
										<div class="form-group">
										  <select class="form-control show-tick">
											<option value="">-- Please select --</option>
											<option value="10">Amoxicillin</option>
											<option value="20">Neozep</option>
											<option value="30">Alaxan</option>
											<option value="40">Trimoxazol</option>
											<option value="50">Revicon</option>
										</select>  
										</div>
										
									</div>
									<div class="col-sm-2">
										<input type="text" class="form-control col-md-4" name=""> 
									</div>
									<div class="col-sm-2">
										<input type="text" class="form-control col-md-4" name=""> 
									</div>
									<div class="col-sm-2">
										<input type="button" class="btn btn-info waves-effect" value="ADD" name="">
									</div>
								</div>
								<b style="color: teal; margin-bottom: 0px;">Prescription</b>
								<hr id="hr" style="margin-bottom: 0px; margin-top: 0px;">
								<div class="row">
									<div class="body table-responsive">
										<table class="table table-bordered">
											<thead>
												<tr>
													<th style="width: 40%;"><center> Medicine </center></th>
													<th><center>Dose </center></th>
													<th><center>Frequency</center></th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>ACRIVASTINE AND PSEUDOOPHERDINE</td>
													<th><center>25mg</center></th>
													<td>3x a Day</td>
												</tr>
												<tr>
													<td>MEDICOL</td>
													<th><center>25mg</center></th>
													<td>3x a Day</td>
												</tr>
												<tr>
													<td>NEOZEP</td>
													<th><center>25mg</center></th>
													<td>3x a Day </td>
												</tr>
											</tbody>
										</table>
									</div>

									<b style="color: teal; margin-bottom: 0px;">Remarks</b>
										<hr id="hr" style="margin-top: 3px;">
									
									<div class="form-group">
							<div class="form-line">
								<textarea rows="1" class="form-control no-resize auto-growth" placeholder="Please type what you want.."></textarea>
							</div>
						</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					{{-- <button type="button" class="btn btn-primary waves-effect"><!-- <i class="material-icons">title</i> -->SAVE</button> --}}
					<button type="button" class="btn btn-priamry waves-effect" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="link-bill" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg modal-size" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding-left: 0px; margin-top: 10px;">
					 <h4 class="modal-title" id="largeModalLabel">Add Patient Record</h4>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
						<a id="a-link-schedule" data-toggle="modal" data-dismiss="modal" data-target="#link-schedule" class="btn bg-teal waves-effect pull-right modal-header-button" style="margin-right: 10px; width: 100px;" ><p style="margin-top:10px;">SCHEDULES</p></a>
						<a id="a-link-bill" data-toggle="modal" data-dismiss="modal" data-target="#link-bill" class="btn bg-cyan waves-effect pull-right modal-header-button" style="margin-right: 10px;"><p style="margin-top:10px; ">BILL</p></a>
						<a id="a-link-consultation" data-toggle="modal" data-dismiss="modal" data-target="#a-link-consultation" class="btn bg-teal waves-effect pull-right modal-header-button" style="margin-right: 10px;" ><p style="margin-top:10px;">CONSULTATION</p></a><!-- href="#link-consultation" -->
					
					</div>
				</div><hr>
				<div class="modal-body">
					<div class="body">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<p><b>Billing Code :</b>BC54213132</p>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<span><b>Mode of Payment :</b></span>
								<div class="btn-group">
									<button type="button" style="width: 100%;" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Cash <span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<li><a href="javascript:void(0);">Cash</a></li>
										<li><a href="javascript:void(0);">Credit Card</a></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<p><b>Billed Amount :</b><input type="text" name=""></p>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<p><b>Practitioner :</b>Dr. Juan Chuchu Smith, MD.</p>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<span><b>Frequency:</b></span>
								<input type="texbox" name="" style="width: 35px;">
								<div class="btn-group">
									<button type="button" style="width: 100%;" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Monthly <span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<li><a href="javascript:void(0);">Daily</a></li>
										<li><a href="javascript:void(0);">Monthly</a></li>
										<li><a href="javascript:void(0);">Yearly</a></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<p><b>Insurance Discount :</b><input type="text" class="form" style="width: 130px;" name=""></p>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<p><b>Insurance/s :</b><input type="textarea" class="form-line" name="" style="height: 40px; width: 150px;"></p>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<span><b>Frequency Payment:</b></span>
								<input type="texbox" name="" style="width: 65px;">
								
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<p><b>Total Payable :</b><input type="text" class="form" style="width: 130px; margin-left: 36px;" name=""></p>
							</div>
						</div>
						<div class="row">
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
						</div>
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
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row">Consultation</th>
											<td>3</td>
											<td>hrs</td>
											<td>P 600.00</td>
											<td>P 1,600.00</td>
										</tr>
										<tr>
											<th scope="row">Laboratory Test</th>
											<td>3</td>
											<td>capsule</td>
											<td>P 600.00</td>
											<td>P 1,600.00</td>
										</tr>
										<tr>
											<th scope="row">Agrivastine ASDfg</th>
											<td>3</td>
											<td>capsule</td>
											<td>P 600.00</td>
											<td>P 1,600.00</td>
										</tr>
										<tr>
											<th scope="row">AMOXICILLIN</th>
											<td>3</td>
											<td>hrs</td>
											<td>P 600.00</td>
											<td>P 1,600.00</td>
										</tr>
										<tr>
											<th scope="row">NEOZEP</th>
											<td>3</td>
											<td>hrs</td>
											<td>P 600.00</td>
											<td>P 1,600.00</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						
					</div> <!-- end body -->
				</div> <!-- end modal-body -->
				<div class="modal-footer">
						<div class="input-group input-group-lg">
									<span class="input-group-addon">
										<i class="material-icons">attach_money</i>
									</span>
									<div class="form">
										<input type="text" class="form-control" placeholder="Down Payment">
									</div>
								</div>
					<button type="button" class="btn btn-primary waves-effect"><!-- <i class="material-icons">title</i> -->SAVE</button>
					<button type="button" class="btn btn-link waves-effect" data-dismiss="modal" id="bill-modal-close">CLOSE</button><!-- data-dismiss="modal" -->
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="link-schedule" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg modal-size" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding-left: 0px; margin-top: 10px;">
					 <h4 class="modal-title" id="largeModalLabel">Add Patient Record</h4>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
						<a id="a-link-schedule" data-toggle="modal" data-dismiss="modal" data-target="#link-schedule" class="btn bg-cyan waves-effect pull-right modal-header-button" style="margin-right: 10px; width: 100px;" ><p style="margin-top:10px;">SCHEDULES</p></a>
						<a id="a-link-bill" data-toggle="modal" data-dismiss="modal" data-target="#link-bill" class="btn bg-teal waves-effect pull-right modal-header-button" style="margin-right: 10px;"><p style="margin-top:10px; ">BILL</p></a>
						<a id="a-link-consultation" data-toggle="modal" data-dismiss="modal" data-target="#a-link-consultation" class="btn bg-teal waves-effect pull-right modal-header-button" style="margin-right: 10px;" ><p style="margin-top:10px;">CONSULTATION</p></a><!-- href="#link-consultation" -->
					
					</div>
				</div><hr>
				<div class="modal-body">
					<div class="body">
							<div class="row clearfix">
								<!-- Basic Examples -->
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								   <div class="body">
									   <div class="row">
											<div class="header">
												
												<span>View type: </span>
												<div class="btn-group">
													<button type="button" style="width: 100%;" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														Calendar Form <span class="caret"></span>
													</button>
													<ul class="dropdown-menu">
														<li><a href="javascript:void(0);">Wako kabalo</a></li>
														<li><a href="javascript:void(0);">Ambot</a></li>
														<li><a href="javascript:void(0);">123</a></li>
														<li><a href="javascript:void(0);">Char123</a></li>
													</ul>
												</div>
											</div>
										</div>
											<!-- CALENDAR -->
										<div class="col-lg-12">
											<div class="card-body b-l calender-sidebar">
												<div id="calendar" style="height: 100%"></div>
											</div>
										</div>
										<!-- END CALENDAR -->
								   </div> 
								</div>
								<!-- #END# Basic Examples -->
							</div>
					</div> <!-- end body -->
				</div> <!-- end modal-body -->
				<div class="modal-footer">
					<button type="button" class="btn btn-primary waves-effect"><!-- <i class="material-icons">title</i> -->SAVE</button>
					<button type="button" class="btn btn-link waves-effect" data-dismiss="modal" id="bill-modal-close">CLOSE</button><!-- data-dismiss="modal" -->
				</div>
			</div>
		</div>
	</div>

	@section('javascript')
		<!-- Ckeditor -->
		<script src="{{ URL::asset('AdminSB/plugins/ckeditor/ckeditor.js')}}"></script>
		{{-- <script src="{{ URL::asset('AdminSB/js/pages/forms/editors.js')}}"></script> --}}
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
		</script>
		<script type="text/javascript">
			$(document).ready(function() {
				  var $tabs = $('#table2');

				  $("tbody#t_sortable").sortable({
				    connectWith: "#t_sortable",
				    items: "> tr:not(:first)",
				    appendTo: $tabs,
				    helper:"clone",
				    zIndex: 999990
				  });
				  
				  var $tab_items = $(".nav-tabs > li", $tabs).droppable({
				    accept: "#first tr",
				    hoverClass: "ui-state-hover",
				    drop: function( event, ui ) {


				    	console.log('hello');
				     return false; }
				  });
				});
		</script>
		<script type="text/javascript">
			$(document).ready(function() {
				  var $tab2 = $('#table');
				  
				  $("tbody#t_sortable").sortable({
				    connectWith: "#t_sortable",
				    items: "> tr:not(:first)",
				    appendTo: $tab2,
				    helper:"clone",
				    zIndex: 999990
				  });
				  
				  var $tab_items = $(".nav-tabs > li", $tab2).droppable({
				    accept: "#first tr",
				    hoverClass: "ui-state-hover",
				    drop: function( event, ui ) {


				    	console.log('hello');
				     return false; }
				  });
				});
		</script>
	 @endsection
@endsection
