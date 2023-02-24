@extends('secretary_portal.layouts.master')

@section('style')
	<style>
		.card .header {
			color: #555;
			padding: 5px;
			position: relative;
			border-bottom: 1px solid rgba(204, 204, 204, 0.35); 
		}
		#hr {
			margin-top: 0px;
			margin-bottom: 10px;
		}
	</style>
@endsection

@section('body')
	<section class="content" id="app">
		<div class="container-fluid">
			@if(session('successMessage'))
				<div class="alert alert-success">
					<p>{{ session('successMessage') }}</p>
				</div>
			@endif

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						<h2 style="padding: 20px;"><b>Patient Information</b></h2>
					</div>
					<div class="body">
						<div class="row clearfix">
							<!-- LIST Medicine Profile -->
							<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
								@if(Auth::guard('sec_profile_patient_patientList_basicTable')->check())
									<div class="card">
										<div class="body">
											<div class="list-group" id="redemption">
												@if(count($query) > 0)
													@foreach($query as $data)
														<button class="list-group-item"
														data-patient_id="{{ $data->patient_id }}"
														data-fname="{{ $data->fname }}"
														data-mname="{{ $data->mname }}"
														data-lname="{{ $data->lname }}"
														data-gender="{{ $data->gender }}"
														data-suffix="{{ $data->suffix }}"
														data-age="{{ $data->age }}"
														data-height="{{ $data->height }}"
														data-weight="{{ $data->weight }}"
														data-bloodtype="{{ $data->bloodtype }}"
														data-birth_date="{{ $data->birth_date }}"
														data-contact_no="{{ $data->contact_no }}"
														data-address1="{{ $data->address1 }}"
														data-address2="{{ $data->address2 }}"
														data-citizenship="{{ $data->citizenship }}"
														data-email="{{ $data->email }}"
														data-civil_status="{{ $data->civil_status }}"
														data-image="{{ $data->image }}"

														data-guardian_no="{{ $guardianQuery->getGuardianNo($data->patient_id) }}"
														data-g_fname="{{ $guardianQuery->getFname($data->patient_id) }}"
														data-g_mname="{{ $guardianQuery->getMname($data->patient_id) }}"
														data-g_lname="{{ $guardianQuery->getLname($data->patient_id) }}"
														data-g_suffix="{{ $guardianQuery->getSuffix($data->patient_id) }}"
														data-g_birthDate="{{ $guardianQuery->getBirthDate($data->patient_id) }}"
														data-g_gender="{{ $guardianQuery->getGender($data->patient_id) }}"
														data-g_occupation="{{ $guardianQuery->getOccupation($data->patient_id) }}"
														data-g_employer="{{ $guardianQuery->getEmployer($data->patient_id) }}"
														data-g_email="{{ $guardianQuery->getEmail($data->patient_id) }}"
														data-g_contact="{{ $guardianQuery->getContact($data->patient_id) }}"
														data-g_address="{{ $guardianQuery->getAddress($data->patient_id) }}"

														data-clinic_id="{{ $clinic_id }}"
														@click="showDiv"
														>
														{{ $data->fname }} {{ $data->mname }} {{ $data->lname }}
														</button>
													@endforeach
												@else
													<ul>
														<li>No Data Found</li>
													</ul>
												@endif
											</div>
										</div>
									</div>
								@endif
								
								@if(Auth::guard('sec_profile_patient_patientList_contextual')->check())
									<div class="card">
										<div class="body">
											<div class="list-group" id="redemption">
												<a href="javascript:void(0);" class="list-group-item active">
													<h4 class="list-group-item-heading">Patient List</h4>
												</a>
												@if(count($query) > 0)
													@foreach($query as $data)
														<button class="list-group-item"
														data-patient_id="{{ $data->patient_id }}"
														data-fname="{{ $data->fname }}"
														data-mname="{{ $data->mname }}"
														data-lname="{{ $data->lname }}"
														data-gender="{{ $data->gender }}"
														data-suffix="{{ $data->suffix }}"
														data-age="{{ $data->age }}"
														data-height="{{ $data->height }}"
														data-weight="{{ $data->weight }}"
														data-bloodtype="{{ $data->bloodtype }}"
														data-birth_date="{{ $data->birth_date }}"
														data-contact_no="{{ $data->contact_no }}"
														data-address1="{{ $data->address1 }}"
														data-address2="{{ $data->address2 }}"
														data-citizenship="{{ $data->citizenship }}"
														data-email="{{ $data->email }}"
														data-civil_status="{{ $data->civil_status }}"
														data-image="{{ $data->image }}"

														data-guardian_no="{{ $guardianQuery->getGuardianNo($data->patient_id) }}"
														data-g_fname="{{ $guardianQuery->getFname($data->patient_id) }}"
														data-g_mname="{{ $guardianQuery->getMname($data->patient_id) }}"
														data-g_lname="{{ $guardianQuery->getLname($data->patient_id) }}"
														data-g_suffix="{{ $guardianQuery->getSuffix($data->patient_id) }}"
														data-g_birthDate="{{ $guardianQuery->getBirthDate($data->patient_id) }}"
														data-g_gender="{{ $guardianQuery->getGender($data->patient_id) }}"
														data-g_occupation="{{ $guardianQuery->getOccupation($data->patient_id) }}"
														data-g_employer="{{ $guardianQuery->getEmployer($data->patient_id) }}"
														data-g_email="{{ $guardianQuery->getEmail($data->patient_id) }}"
														data-g_contact="{{ $guardianQuery->getContact($data->patient_id) }}"
														data-g_address="{{ $guardianQuery->getAddress($data->patient_id) }}"

														data-clinic_id="{{ $clinic_id }}"
														@click="showDiv"
														>

														{{ $data->fname }} {{ $data->mname }} {{ $data->lname }}
														<p class="list-group-item-text">{{ $data->gender }} </p>
														</button>
													@endforeach
												@else
													<ul>
														<li>No Data Found</li>
													</ul>
												@endif
											</div>
										</div>
									</div>
								@endif
							</div>

							<template v-if="divIsActive">
								<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
									<div class="card">
										<div class="header bg-grey">
											<h2>
												<center><h5>BASIC INFORMATION</h5></center>
											</h2>
										</div>
										<div class="body">
											<div class="row">
												<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
													<div id="imageDiv">
														  
													</div>
												</div>
												<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
													{{-- <p class="font-bold col-teal">
														<b style="color: #545454">Patient Number: </b> 
														653216841
													</p> --}}
													<p><b>First Name:</b> 
														<span id="fname"></span>
													</p>
													<p><b>Middle Name:</b> 
														<span id="mname"></span>
													</p>
													<p><b>Last Name:</b> 
														<span id="lname"></span>
													</p>
													<p><b>Suffix:</b> 
														<span id="suffix"></span>
													</p>
												</div>
											</div>

											<div class="row">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 0px">
													<p><b style="color: teal;">Basic Information</b></p>
													<hr id="hr">
												</div>
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="margin-bottom: 0px">
														<div class="col-lg-5 col-md-3 col-sm-3 col-xs-3">
															<p><b>Birth Date: </b></p>
															{{-- <p><b>Age: </b></p> --}}
															<p><b>Height: </b></p>
															<p><b>Weight: </b></p>
															<p><b>Bloodtype: </b></p>
														</div>
														<div class="col-lg-7 col-md-3 col-sm-3 col-xs-3">
															<p><span id="birth_date"></span></p>
															{{-- <p><span id="age"></span></p> --}}
															<p><span id="height"></span></p>
															<p><span id="weight"></span></p>
															<p><span id="bloodtype"></span></p>
														</div>
													</div>
													<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="margin-bottom: 0px">
														<div class="col-lg-5 col-md-3 col-sm-3 col-xs-3">
															<p><b>Gender : </b></p>
															<p><b>Civil :</b></p>
															<p><b>Email : </b></p>
															<p><b>Citizenship : </b></p>
															<p><b>Contact# :</b></p>
														</div>
														<div class="col-lg-7 col-md-3 col-sm-3 col-xs-3">
															<p>
																<span id="gender"></span> 
															</p>
															<p>
																<span id="civil_status"></span>  
															</p>
															<p>
																<span id="email"></span>
															</p>
															<p>
																<span id="citizenship"></span>
															</p>
															<p>
																<span id="contact_no"></span>
															</p>
														</div>
													</div>
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 0px;">
													<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
														<hr id="hr">
														<p><b>Address 1 :</b></p>
														{{-- <p><b>Address 2 :</b></p> --}}
														<hr id="hr"> 
													</div>
													<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
														<hr id="hr">
														<p>
															<span id="address1"></span>
														</p>
														<p>
															<span id="address2"></span>
														</p>
													</div>
												</div>
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<button class="btn btn-primary waves-effect" 
														data-toggle="modal" 
														data-target="#addBasicInformationModal"
														id="BasicInformationButtonReceiver"
														data-patient_id=""
														data-fname=""
														data-mname=""
														data-lname=""
														data-gender=""
														data-suffix=""
														data-age=""
														data-height=""
														data-weight=""
														data-bloodtype=""
														data-birth_date=""
														data-contact_no=""
														data-address1=""
														data-address2=""
														data-citizenship=""
														data-email=""
														data-civil_status=""
														data-image=""
														>Edit Basic Information
													</button>
												</div>
											</div>

											<div class="row">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 0px">
													<p><b style="color: teal;">Guradian Information</b></p>
													<hr id="hr">
												</div>
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="margin-bottom: 0px">
														<div class="col-lg-5 col-md-3 col-sm-3 col-xs-3">
															<p><b>Last Name :</b></p>
															<p><b>First Name :</b></p>
															<p><b>Middle Name :</b></p>
															<p><b>Suffix :</b></p>
															<p><b>Birth Date :</b></p>
															{{-- <p><b>Age : </b></p> --}}
														</div>
														<div class="col-lg-7 col-md-3 col-sm-3 col-xs-3">
															<p><span id="g_lname"></span></p>
															<p><span id="g_fname"></span></p>
															<p><span id="g_mname"></span></p>
															<p><span id="g_suffix"></span></p>
															<p><span id="g_birthDate"></span></p>
															<p></p>
														</div>
													</div>
													<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="margin-bottom: 0px">
														<div class="col-lg-5 col-md-3 col-sm-3 col-xs-3">
															<p><b>Gender : </b></p>
															<p><b>Occupation :</b></p>
															<p><b>Employer : </b></p>
															<p><b>Email : </b></p>
															<p><b>Contact# :</b></p>
														</div>
														<div class="col-lg-7 col-md-3 col-sm-3 col-xs-3">
															<p><span id="g_gender"></span></p>
															<p><span id="g_occupation"></span></p>
															<p><span id="g_employer"></span></p>
															<p><span id="g_email"></span></p>
															<p><span id="g_contact"></span></p>
														</div>
													</div>
													<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
														<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
															<hr id="hr">
															<p><b>Address:</b></p>
															<hr id="hr"> 
														</div>
														<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
															<hr id="hr">
															<p><span id="g_address"></span></p>
															<hr id="hr">
														</div>
													</div>
													<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
														<button class="btn btn-primary waves-effect" 
															data-toggle="modal" 
															data-target="#editGuardianInfo"
															id="GuardianInformationButtonReceiver"
															data-guardian_no="">
															Edit Guardian Information
														</button>
													</div>
												</div>
											</div>

											{{-- <div class="row">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 0px">
													<p>In <b style="color: teal;">case of emergency</b>, please provide information on the nearest relative not at the patients address.</p>
													<hr id="hr">
												</div>
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="margin-bottom: 0px">
														<div class="col-lg-5 col-md-3 col-sm-3 col-xs-3">
															<p><b>Last Name :</b></p>
															<p><b>First Name :</b></p>
															<p><b>Middle Name :</b></p>
															<p><b>Suffix :</b></p>
															<p><b>Birth Date :</b></p>
															<p><b>Age : </b></p>
														</div>
														<div class="col-lg-7 col-md-3 col-sm-3 col-xs-3">
															<p>Javier  </p>
															<p>Cody  </p>
															<p>Paloma  </p>
															<p>Sr.  </p>
															<p>12-12-98  </p>
															<p>28 </p>
														</div>
													</div>
													<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="margin-bottom: 0px">
														<div class="col-lg-5 col-md-3 col-sm-3 col-xs-3">
															<p><b>Gender : </b></p>
															<p><b>Occupation :</b></p>
															<p><b>Employer : </b></p>
															<p><b>Email : </b></p>
															<p><b>Contact# :</b></p>
														</div>
														<div class="col-lg-7 col-md-3 col-sm-3 col-xs-3">
															<p>Male </p>
															<p>Single  </p>
															<p>cjpaloma@gmail.com </p>
															<p>Filipino </p>
															<p>09456876544</p>
														</div>
													</div>
													<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
														<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
															<hr id="hr">
															<p><b>Address:</b></p>
															<hr id="hr"> 
														</div>
														<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
															<hr id="hr">
															<p>P-9, Poblacion, Prosperidad, Agusan Del Sur</p>
															<hr id="hr">
														</div>
													</div>
													<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
														<button class="btn btn-primary waves-effect">Edit Emergency Contact Information</button>
													</div>
												</div>
											</div> --}}

											{{-- <div class="row">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 0px">
													<p><b style="color: teal;">Employment information</b></p>
													<hr id="hr">
												</div>
											</div>

											<div class="row">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
														<p><b>Employer:</b></p>
														<p><b>Occupation:</b></p>
														
													</div>
													<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
														<p>Software Technology Incorporated</p>
														<p>Software Engineer / Application Architect</p>
													</div>
													<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
														<button class="btn btn-primary waves-effect">Edit Employment Information</button>
													</div>
												</div>
											</div> --}}

										{{-- 	<div class="row">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 0px">
													<p><b style="color: teal;">Insurance Information</b></p>
													<hr id="hr">
												</div>
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<div class="row clearfix">
														<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
															<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="margin-bottom: 0px">
															<p><b>Insurance Name :</b> Blue Cross </p>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="margin-bottom: 0px">
																<p><b>Insurance #: </b> 123456879 </p>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="margin-bottom: 0px">
																<p><b>Group #: </b> BCP1500001 </p>
															</div>
															<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
																<p><b>Address: </b>P-9, Poblacion, Prosperidad, Agusan Del Sur</p>
															</div>
														</div>	
													</div>
													<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
														<button class="btn btn-primary waves-effect">Edit Insurance Information</button>
													</div>
												</div>
											</div> --}}

										</div>
									</div>
								</div>

							
								{{-- @include('doctor_portal.profile.layouts.buttons') --}}
								<div style="text-align: right;">
									<button type="button"  class="btn btn-info waves-effect" id="buttonPatientMedicalHistory">
									{{-- 	<a href="{{ url('profile/patient_profile_history') }}"><label style="color: white;">PATIENT HISTORY</label></a> --}}
									</button>
									<button type="button"  class="btn btn-info waves-effect" id="buttonPatientBillingHistory">
									</button>
								{{-- 	<button type="button" class="btn btn-info waves-effect">
										<a href="{{ url('profile/patient_profile_schedule') }}"><label style="color: white;">SCHEDULES</label></a>
									</button> --}}
									<button type="button" class="btn btn-info waves-effect" id="buttonPatientCertificate">
									</button>
								</div>
							</template>

						</div>
					</div>
				</div>

			<form action="{{ url('sec_profile/update_guardian_info') }}" method="POST">
				@csrf
				<div class="modal fade" id="editGuardianInfo" tabindex="-1" role="dialog">
					<div class="modal-dialog modal-md" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title" id="largeModalLabel">Edit Guardian Information</h4>
							</div>
							<div class="modal-body">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="row">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 10px;">
											<input type="text" name="guardian_no" readonly>
											<input type="text" name="clinic_id" value="{{ $clinic_id }}" readonly>
											<p><b>Firstname:</b> <input type="text"class="form-control" name="fname" placeholder="Name.."></p>
											<p><b>Lastname:</b><input type="text" class="form-control" name="lname" placeholder="Lastname"></p>
											<p><b>Middlename:</b> <input type="text" class="form-control" name="mname" placeholder="Middlename"></p>
											<p><b>Suffix:</b> <input type="text" class="form-control" name="suffix" placeholder="Suffix"></p>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 0px">
											<b style="color: teal;">Basic Information</b>
											<hr id="hr">
										</div>
									</div>
									<div class="row">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 0px">
											<div class="c"></div>
											<b>Birth Date :</b>
											<div class="form-group">
												<div class="form-line">
													<input type="date" class="datepicker form-control" name="birth_date" placeholder="Please choose a date...">
												</div>
											</div>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 0px">
											<select class="form-control show-tick" name="gender">
												<option value="Male">Male</option>
												<option value="Female">Female</option>
											</select>
											<p><b>Occupation:</b> <input type="text"class="form-control" name="occupation" placeholder="Occupation.."></p>
											<p><b>Employer:</b><input type="text" class="form-control" name="employer" placeholder="Employer"></p>
											<p><b>Email:</b> <input type="text" class="form-control" name="email" placeholder="Email"></p>
											<p><b>Contact No.:</b> <input type="text" class="form-control" name="contact" placeholder="Contact No"></p>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-top: 20px">
											<p><b>Address:</b> <input type="text" class="form-control" name="address" placeholder="Address"></p>
										</div>
									</div>
								</div><!-- #END# Tabs With Icon Title -->
							</div>
							<div class="row clearfix"></div>
							<div class="modal-footer">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-top: 20px">
									<button type="submit" class="btn btn-primary waves-effect">SAVE CHANGES</button>
									<button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>

			<form action="{{ url('sec_profile/update_patient_basic_info') }}" method="POST" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="modal fade" id="addBasicInformationModal" tabindex="-1" role="dialog">
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title" id="largeModalLabel">Edit Basic Information</h4>
							</div>
							<div class="modal-body">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="row">
										<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="padding: 10px;">
											{{-- <img src="{{ URL::asset('upload/public/noimage.png') }}" class="img-responsive thumbnail"> --}}
											<div id="imageDivModal"></div>
											<input type="file" name="file">
										</div>
										<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
											<input type="hidden" name="clinic_id" value="{{ $clinic_id }}" readonly>
											<input type="hidden" name="patient_id" readonly>
											<p><b>Firstname:</b> <input type="text"class="form-control" name="fname" placeholder="Your name.."></p>
											<p><b>Lastname:</b><input type="text" class="form-control" name="lname" placeholder="Lastname"></p>
											<p><b>Middlename:</b> <input type="text" class="form-control" name="mname" placeholder="Middlename"></p>
											<p><b>Suffix:</b> <input type="text" class="form-control" name="suffix" placeholder="Suffix"></p>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 0px">
											<b style="color: teal;">Basic Information</b>
											<hr id="hr">
										</div>
									</div>
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="margin-bottom: 0px">
											<div class="c"></div>
											<b>Birth Date :</b>
											<div class="form-group">
												<div class="form-line">
													<input type="date" class="datepicker form-control" name="birth_date" placeholder="Please choose a date...">
												</div>
											</div>
											<b>Height :</b><input type="text" class="form-control" name="height" placeholder="height">
											<b>Weight :</b><input type="text" class="form-control" name="weight" placeholder=" weight">
											<b>Bloodtype :</b><input type="text" class="form-control" name="bloodtype" placeholder="bloodtype">
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
								</div><!-- #END# Tabs With Icon Title -->
							</div>
							<div class="row clearfix"></div>
							<div class="modal-footer">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-top: 20px">
									<button type="submit" class="btn btn-primary waves-effect">SAVE CHANGES</button>
									<button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>

		</div>

		@section('javascript')
			<script>
				$(document).ready(function() {
					$("#redemption button").on("click", function (e) {
						var patient_id = $(this).attr("data-patient_id");
						var clinic_id = $(this).attr("data-clinic_id");
						var fname = $(this).attr("data-fname");
						var mname = $(this).attr("data-mname");
						var lname = $(this).attr("data-lname");
						var suffix = $(this).attr("data-suffix");
						var age = $(this).attr("data-age");
						var height = $(this).attr("data-height");
						var weight = $(this).attr("data-weight");
						var bloodtype = $(this).attr("data-bloodtype");
						var birth_date = $(this).attr("data-birth_date");
						var contact_no = $(this).attr("data-contact_no");
						var address1 = $(this).attr("data-address1");
						var address2 = $(this).attr("data-address2");
						var citizenship = $(this).attr("data-citizenship");
						var email = $(this).attr("data-email");
						var civil_status = $(this).attr("data-civil_status");
						var gender = $(this).attr("data-gender");
						var gender = $(this).attr("data-gender");
						var image = $(this).attr("data-image");
						console.log(patient_id);

						var guardian_no = $(this).attr("data-guardian_no");
						var g_fname = $(this).attr("data-g_fname");
						var g_mname = $(this).attr("data-g_mname");
						var g_lname = $(this).attr("data-g_lname");
						var g_suffix = $(this).attr("data-g_suffix");
						var g_birthDate = $(this).attr("data-g_birthDate");
						var g_gender = $(this).attr("data-g_gender");
						var g_employer = $(this).attr("data-g_employer");
						var g_occupation = $(this).attr("data-g_occupation");
						var g_email = $(this).attr("data-g_email");
						var g_contact = $(this).attr("data-g_contact");
						var g_address = $(this).attr("data-g_address");
						
						$('#BasicInformationButtonReceiver').data('patient_id', patient_id);
						$('#BasicInformationButtonReceiver').data('fname', fname);
						$('#BasicInformationButtonReceiver').data('mname', mname);
						$('#BasicInformationButtonReceiver').data('lname', lname);
						$('#BasicInformationButtonReceiver').data('age', age);
						$('#BasicInformationButtonReceiver').data('height', height);
						$('#BasicInformationButtonReceiver').data('weight', weight);
						$('#BasicInformationButtonReceiver').data('bloodtype', bloodtype);
						$('#BasicInformationButtonReceiver').data('birth_date', birth_date);
						$('#BasicInformationButtonReceiver').data('contact_no', contact_no);
						$('#BasicInformationButtonReceiver').data('address1', address1);
						$('#BasicInformationButtonReceiver').data('address2', address2);
						$('#BasicInformationButtonReceiver').data('citizenship', citizenship);
						$('#BasicInformationButtonReceiver').data('email', email);
						$('#BasicInformationButtonReceiver').data('civil_status', civil_status);
						$('#BasicInformationButtonReceiver').data('gender', gender);

						$('#GuardianInformationButtonReceiver').data('guardian_no', guardian_no);
						$('#GuardianInformationButtonReceiver').data('g_fname', g_fname);
						$('#GuardianInformationButtonReceiver').data('g_mname', g_mname);
						$('#GuardianInformationButtonReceiver').data('g_lname', g_lname);
						$('#GuardianInformationButtonReceiver').data('g_suffix', g_suffix);
						$('#GuardianInformationButtonReceiver').data('g_birthDate', g_birthDate);
						$('#GuardianInformationButtonReceiver').data('g_gender', g_gender);
						$('#GuardianInformationButtonReceiver').data('g_employer', g_employer);
						$('#GuardianInformationButtonReceiver').data('g_occupation', g_occupation);
						$('#GuardianInformationButtonReceiver').data('g_email', g_email);
						$('#GuardianInformationButtonReceiver').data('g_contact', g_contact);
						$('#GuardianInformationButtonReceiver').data('g_address', g_address);

						$('#patient_id').html(patient_id);
						$('#fname').html(fname);
						$('#mname').html(mname);
						$('#lname').html(lname);
						$('#suffix').html(suffix);
						$('#age').html(age);
						$('#height').html(height);
						$('#weight').html(weight);
						$('#bloodtype').html(bloodtype);
						$('#birth_date').html(birth_date);
						$('#contact_no').html(contact_no);
						$('#address1').html(address1);
						$('#address2').html(address2);
						$('#citizenship').html(citizenship);
						$('#email').html(email);
						$('#civil_status').html(civil_status);
						$('#gender').html(gender);

						$('#g_fname').html(g_fname);
						$('#g_mname').html(g_mname);
						$('#g_lname').html(g_lname);
						$('#g_suffix').html(g_suffix);
						$('#g_birthDate').html(g_birthDate);
						$('#g_gender').html(g_gender);
						$('#g_occupation').html(g_occupation);
						$('#g_employer').html(g_employer);
						$('#g_email').html(g_email);
						$('#g_contact').html(g_contact);
						$('#g_address').html(g_address);

						if(image == "") {
							var wrapper = document.getElementById('imageDiv');
							var tag = '';
							tag += '<img class="img-responsive thumbnail" src=';
							tag += '"{{asset('upload/public/noimage.png')}}';
							tag += '"/>';
							wrapper.innerHTML = tag;
							$('#BasicInformationButtonReceiver').data('image', tag);
						}
						else {
							var wrapper = document.getElementById('imageDiv');
							var tag = '';
							tag += '<img class="img-responsive thumbnail" src=';
							tag += '"{{asset('upload')}}/';
							tag += image;
							tag += '"/>';
							wrapper.innerHTML = tag;
							$('#BasicInformationButtonReceiver').data('image', tag);
						}

						var buttonPatientMedicalHistory_wrapper = document.getElementById('buttonPatientMedicalHistory');
						var buttonPatientMedicalHistory_tag = '';
						buttonPatientMedicalHistory_tag += '<a href="{{ url('sec_profile/patient_profile_history') }}/';
						buttonPatientMedicalHistory_tag += patient_id;
						buttonPatientMedicalHistory_tag += '"><label style="color: white;">PATIENT HISTORY</label></a>';
						buttonPatientMedicalHistory_wrapper.innerHTML = buttonPatientMedicalHistory_tag;

						var buttonPatientBillingHistory_wrapper = document.getElementById('buttonPatientBillingHistory');
						var buttonPatientBillingHistory_tag = '';
						buttonPatientBillingHistory_tag += '<a href="{{ url('sec_profile/patient_profile_billing_history') }}/';
						buttonPatientBillingHistory_tag += patient_id;
						buttonPatientBillingHistory_tag += '"><label style="color: white;">BILLING HISTORY</label></a>';
						buttonPatientBillingHistory_wrapper.innerHTML = buttonPatientBillingHistory_tag;

						var buttonPatientCertificate_wrapper = document.getElementById('buttonPatientCertificate');
						var buttonPatientCertificate_tag = '';
						buttonPatientCertificate_tag += '<a href="{{ url('sec_profile/patient_profile_certificate') }}/';
						buttonPatientCertificate_tag += patient_id;
						buttonPatientCertificate_tag += '/';
						buttonPatientCertificate_tag += clinic_id;
						buttonPatientCertificate_tag += '"><label style="color: white;">CERTIFICATE</label></a>';
						buttonPatientCertificate_wrapper.innerHTML = buttonPatientCertificate_tag;
					});

					$('#addBasicInformationModal').on("show.bs.modal", function (e) {
						var patient_id = $(e.relatedTarget).data('patient_id');
						var fname = $(e.relatedTarget).data('fname');
						var mname = $(e.relatedTarget).data('mname');
						var lname = $(e.relatedTarget).data('lname');
						var suffix = $(e.relatedTarget).data('suffix');
						var age = $(e.relatedTarget).data('age');
						var height = $(e.relatedTarget).data('height');
						var weight = $(e.relatedTarget).data('weight');
						var bloodtype = $(e.relatedTarget).data('bloodtype');
						var birth_date = $(e.relatedTarget).data('birth_date');
						var contact_no = $(e.relatedTarget).data('contact_no');
						var address1 = $(e.relatedTarget).data('address1');
						var address2 = $(e.relatedTarget).data('address2');
						var citizenship = $(e.relatedTarget).data('citizenship');
						var email = $(e.relatedTarget).data('email');
						var civil_status = $(e.relatedTarget).data('civil_status');
						var gender = $(e.relatedTarget).data('gender');
						var image = $(e.relatedTarget).data('image');

						$(e.currentTarget).find('input[name="patient_id"]').val(patient_id);
						$(e.currentTarget).find('input[name="fname"]').val(fname);
						$(e.currentTarget).find('input[name="mname"]').val(mname);
						$(e.currentTarget).find('input[name="lname"]').val(lname);
						$(e.currentTarget).find('input[name="suffix"]').val(suffix);
						$(e.currentTarget).find('input[name="age"]').val(age);
						$(e.currentTarget).find('input[name="height"]').val(height);
						$(e.currentTarget).find('input[name="weight"]').val(weight);
						$(e.currentTarget).find('input[name="bloodtype"]').val(bloodtype);
						$(e.currentTarget).find('input[name="birth_date"]').val(birth_date);
						$(e.currentTarget).find('input[name="contact_no"]').val(contact_no);
						$(e.currentTarget).find('input[name="address1"]').val(address1);
						$(e.currentTarget).find('input[name="address2"]').val(address2);
						$(e.currentTarget).find('input[name="citizenship"]').val(citizenship);
						$(e.currentTarget).find('input[name="email"]').val(email);
						$(e.currentTarget).find('input[name="civil_status"]').val(civil_status);
						$(e.currentTarget).find('input[name="gender"]').val(gender);
						
						var wrapper = document.getElementById('imageDivModal');
						wrapper.innerHTML = image;
					});		

					$('#editGuardianInfo').on("show.bs.modal", function (e) {
						var guardian_no = $(e.relatedTarget).data('guardian_no');
						var g_fname = $(e.relatedTarget).data('g_fname');
						var g_mname = $(e.relatedTarget).data('g_mname');
						var g_lname = $(e.relatedTarget).data('g_lname');
						var g_suffix = $(e.relatedTarget).data('g_suffix');
						var g_birthDate = $(e.relatedTarget).data('g_birthDate');
						var g_gender = $(e.relatedTarget).data('g_gender');
						var g_occupation = $(e.relatedTarget).data('g_occupation');
						var g_employer = $(e.relatedTarget).data('g_employer');
						var g_email = $(e.relatedTarget).data('g_email');
						var g_contact = $(e.relatedTarget).data('g_contact');
						var g_address = $(e.relatedTarget).data('g_address');

						$(e.currentTarget).find('input[name="guardian_no"]').val(guardian_no);
						$(e.currentTarget).find('input[name="fname"]').val(g_fname);
						$(e.currentTarget).find('input[name="mname"]').val(g_mname);
						$(e.currentTarget).find('input[name="lname"]').val(g_lname);
						$(e.currentTarget).find('input[name="suffix"]').val(g_suffix);
						$(e.currentTarget).find('input[name="birth_date"]').val(g_birthDate);
						$(e.currentTarget).find('input[name="gender"]').val(g_gender);
						$(e.currentTarget).find('input[name="occupation"]').val(g_occupation);
						$(e.currentTarget).find('input[name="employer"]').val(g_employer);
						$(e.currentTarget).find('input[name="email"]').val(g_email);
						$(e.currentTarget).find('input[name="contact"]').val(g_contact);
						$(e.currentTarget).find('input[name="address"]').val(g_address);
					});		
				});


			</script>
			<script type="text/javascript">
				var vm = new Vue ({
				el: '#app',
				data: {
					divIsActive: false,
				},
				methods: {
					showDiv: function () {
						this.divIsActive = true
					},
					buttonState: function () {
						return (this.divIsActive == true) ? '':'hidden'
					}
				}
			})
			</script>
		@endsection
	</section>
@endsection