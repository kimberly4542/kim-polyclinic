@extends('admin_portal.home')

@section('body')
<section class="content">
	<div class="container-fluid">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0px;">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding-left: 0px;">
				<ol class="breadcrumb breadcrumb-col-deep-orange bg-white">
					<li>
						<a href="{{ url('subscription/request_addon_table') }}">
							<i class="material-icons">description</i>
							<span>Subscription</span>
						</a>
					</li>
					<li>
						<a href="{{ url('subscription/request_addon_table') }}">
							<span>Request Add-ons</span>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="material-icons">touch_app</i>
							<span>Module Controller</span>
						</a>
					</li>
				</ol>
				
			</div>
		</div>
		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						<h2>
							<b>Module Controller</b>
						</h2>
					</div>

					<div class="row">
						<div class="body">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >{{-- 
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
									<card>
										<div class="body bg-grey" style="height: 50px; box-shadow: 2px 2px 5px grey;">
											<p>Account:</p>
										</div>									
									</card>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="visibility: hidden;"></div>
								<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
									<img class="img-responsive thumbnail" src="{{ URL::asset('images/user.png')}}">
								</div>

								<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
									<P><b>Firstname:</b> Mark</P> 
									<P><b>Lastname:</b> Otto</P>
									<P><b>Age:</b> 53</P>
									<P><b>Sex:</b> Male</P>
									<P><b>Specialization:</b> Orthopaedics</P>
								</div>
							 --}}

							 	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:5px;">
							 		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;">
							 			<card>
											<div class="body" style="height: 50px; background-color: #c4c4c4; border-radius: 10px;">
												<p style="color:black;"> <b>Current Modules:</b> </p>
											</div>									
										</card>
							 		</div>
							 		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;">
							 			<card>
											<div class="body" style="height: 50px; background-color: #f5f5f5; height:300px; overflow-y: scroll;">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;">
													<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="padding:0px; height: 160px;">
														<p style="color: #4c4cff;"> <b>Profile</b></p>
														<p style="padding-left: 10px;"> <b>Clinic</b></p>
														<p style="padding-left: 20px;"> <b>Information</b></p>
														<ul>
															<li> Basic</li>
														</ul>
													</div>
													<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="padding:0px; height: 160px;">
														<p style="color: #4c4cff;"> <b>Profile</b></p>
														<p style="padding-left: 10px;"> <b>Clinic</b></p>
														<p style="padding-left: 20px;"> <b>Images</b></p>
														<ul>
															<li> Single Image Upload</li>
														</ul>
													</div>
													<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="padding:0px; height: 160px;">
														<p style="color: #4c4cff;"> <b>Profile</b></p>
														<p style="padding-left: 10px;"> <b>Doctors</b></p>
														<p style="padding-left: 20px;"> <b>Information</b></p>
														<ul>
															<li> Basic Table w/ Text Box</li>
															<li> Single Image Upload</li>
														</ul>
													</div>
													<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="padding:0px; height: 160px;">
														<p style="color: #4c4cff;"> <b>Profile</b></p>
														<p style="padding-left: 10px;"> <b>Medicine</b></p>
														<p style="padding-left: 20px;"> <b>Information</b></p>
														<ul>
															<li> Basic Table w/ Text Box</li>
														</ul>
													</div>
													<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="padding:0px; height: 160px;">
														<p style="color: #4c4cff;"> <b>Schedule</b></p>
														<p style="padding-left: 10px;"> <b>Mode</b></p>
														<p style="padding-left: 20px;"> <b>Patient</b></p>
														<ul>
															<li> Basic</li>
														</ul>
													</div>
													<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="padding:0px; height: 160px;">
														<p style="color: #4c4cff;"> <b>Schedule</b></p>
														<p style="padding-left: 10px;"> <b>Mode</b></p>
														<p style="padding-left: 20px;"> <b>Clinic</b></p>
														<ul>
															<li> Calendar</li>
														</ul>
													</div>
													<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="padding:0px; height: 160px;">
														<p style="color: #4c4cff;"> <b>Booking</b></p>
														<p style="padding-left: 10px;"> <b>Booking</b></p>
														<p style="padding-left: 20px;"> <b></b></p>
														<ul>
															<li> Advance</li>
															<li> Hover Rows</li>
														</ul>
													</div>
													<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="padding:0px; height: 160px;">
														<p style="color: #4c4cff;"> <b>Inventory</b></p>
														<p style="padding-left: 10px;"> <b>Stock-in</b></p>
														<p style="padding-left: 20px;"> <b></b></p>
														<ul>
															<li> Basic Input</li>
															<li> Hover Rows</li>
														</ul>
													</div>
													<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="padding:0px; height: 160px;">
														<p style="color: #4c4cff;"> <b>Inventory</b></p>
														<p style="padding-left: 10px;"> <b>Stock-out</b></p>
														<p style="padding-left: 20px;"> <b></b></p>
														<ul>
															<li> Basic Input</li>
															<li> Hover Rows</li>
														</ul>
													</div>
													<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="padding:0px; height: 160px;">
														<p style="color: #4c4cff;"> <b>Inventory</b></p>
														<p style="padding-left: 10px;"> <b>Sold-items</b></p>
														<p style="padding-left: 20px;"> <b></b></p>
														<ul>
															<li> Basic Input</li>
															<li> Hover Rows</li>
														</ul>
													</div>
													<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="padding:0px; height: 160px;">
														<p style="color: #4c4cff;"> <b>Inventory</b></p>
														<p style="padding-left: 10px;"> <b>Return Items</b></p>
														<p style="padding-left: 20px;"> <b></b></p>
														<ul>
															<li> Basic Input</li>
															<li> Hover Rows</li>
														</ul>
													</div>
													<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="padding:0px; height: 160px;">
														<p style="color: #4c4cff;"> <b>Inventory</b></p>
														<p style="padding-left: 10px;"> <b>Return Items</b></p>
														<p style="padding-left: 20px;"> <b></b></p>
														<ul>
															<li> Basic Input</li>
															<li> Hover Rows</li>
														</ul>
													</div>
												</div>
											</div>									
										</card>
							 		</div>
							 	</div>
								
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:5px;">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px; background-color: #f5f5f5; border-radius: 10px;">
										<p style="margin: 15px; margin-bottom: 5px;"><b>Operations:</b></p>
										<button class="btn btn-primary waves-effect" style="margin:15px;">Automatically Add Requested Module</button>
										<button class="btn bg-light-blue waves-effect" style="margin:15px;">Manually Select Module</button>
										<button class="btn bg-indigo waves-effect" style="margin:15px;">Confirm Selected Modules</button>
									</div>
								</div>

							 	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:5px;">

							 		<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="padding:0px; padding-right: 5px;">
								 		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;">
								 			<card>
												<div class="body" style="height: 50px; background-color: #c4c4c4; border-radius: 10px;">
													<p style="color:black;"> <b>Requested Features:</b> </p>
												</div>									
											</card>
								 		</div>

								 		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;">
								 			<card>
												<div class="body" style="height: 50px; background-color: #f5f5f5; height:600px; overflow-y: scroll;">
													<div class="col-lg-12 col-md-12 col-sm-6 col-xs-12" style="padding:0px;">
														<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding:0px; height: 160px;  ">
															<p style="color: orangered;"> <b>Profile</b></p>
															<p style="padding-left: 10px;"> <b>Patients</b></p>
															<p style="padding-left: 20px;"> <b>Personal Profile</b></p>
															<ul>
																<li> Basic Input</li>
																<li> Patient Image</li>
																<li> Hover Rows</li>
															</ul>
														</div>
														<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding:0px; height: 160px;">
															<p style="color: orangered;"> <b>Profile</b></p>
															<p style="padding-left: 10px;"> <b>Patients</b></p>
															<p style="padding-left: 20px;"> <b>Patient List</b></p>
															<ul>
																<li> Basic Input</li>
															</ul>
														</div>
														<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding:0px; height: 160px;">
															<p style="color: orangered;"> <b>Profile</b></p>
															<p style="padding-left: 10px;"> <b>Clinic</b></p>
															<p style="padding-left: 20px;"> <b>Information</b></p>
															<ul>
																<li> Basic</li>
															</ul>
														</div>
														<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding:0px; height: 160px;">
															<p style="color: orangered;"> <b>Queue</b></p>
															<p style="padding-left: 10px;"> <b>Mode</b></p>
															<p style="padding-left: 20px;"> <b>1st Priority</b></p>
															<ul>
																<li> Basic</li>
															</ul>
														</div>
														<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding:0px; height: 160px;">
															<p style="color: orangered;"> <b>Billing</b></p>
															<p style="padding-left: 10px;"> <b>Billing</b></p>
															<p style="padding-left: 20px;"> <b></b></p>
															<ul>
																<li> Hover Rows</li>
															</ul>
														</div>
													</div>
												</div>									
											</card>
								 		</div>
							 		</div>

							 		<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" style="padding:0px;">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;">
								 			<card>
												<div class="body" style="height: 50px; background-color: #c4c4c4; border-radius: 5px;">
													<p style="color:black;"> <b>Available Modules:</b> </p>
												</div>									
											</card>
								 		</div>

							 			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;">
							 				<card>
												<div class="body" style="background-color: #f5f5f5; height:600px; overflow-y: scroll;">
													<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;">
														<div class="col-lg-2 col-md-2 col-sm-3 col-xs-6" style="padding:0px; margin-bottom: 0px;">
															<p style="color: orange;"> <b>Profile</b></p>
															<p style="padding-left: 10px; color: #8BC34A"> <b>Patients</b></p>
															<p style="padding-left: 20px;"> <b>Personal Profile</b></p>
															<div class="demo-checkbox" style="padding-left: 30px;">
																<input type="checkbox" id="profile_patient_personal_basic" class="filled-in chk-col-orange profile_patient_personal_1">
																	<label for="profile_patient_personal_basic">Basic Input</label>

																<input type="checkbox" id="profile_patient_personal_advance" class="filled-in chk-col-orange profile_patient_personal_1">
																	<label for="profile_patient_personal_advance">Advance</label>

																<input type="checkbox" id="profile_patient_personal_PatientImage" class="filled-in chk-col-orange profile_patient_personal_1">
																	<label for="profile_patient_personal_PatientImage">Patient Image</label>

																<input style="visibility: hidden;">

																<input type="checkbox" id="profile_patient_personal_hoverTable" class="filled-in chk-col-orange profile_patient_personal_2">
																	<label for="profile_patient_personal_hoverTable">Hover Rows</label>

																<input type="checkbox" id="profile_patient_personal_exportedTable" class="filled-in chk-col-orange profile_patient_personal_2">
																	<label for="profile_patient_personal_exportedTable">Exported</label>

																<input type="checkbox" id="profile_patient_personal_basicTable" class="filled-in chk-col-orange profile_patient_personal_2">
																	<label for="profile_patient_personal_basicTable">Basic</label>
															</div>
														</div>
														<div class="col-lg-2 col-md-2 col-sm-3 col-xs-6" style="padding:0px; margin-bottom: 0px;">
															<p style="color: orange; visibility: hidden;"> <b>Profile</b></p>
															<p style="padding-left: 10px; visibility: hidden;"> <b>Patients</b></p>
															<p style="padding-left: 20px;"> <b>Patient List</b></p>
															<div class="demo-checkbox" style="padding-left: 30px;">
																<input type="checkbox" id="profile_patient_patientList_basic" class="filled-in chk-col-orange profile_patient_patientList_1">
																	<label for="profile_patient_patientList_basic">Basic</label>

																<input type="checkbox" id="profile_patient_patientList_Stripped" class="filled-in chk-col-orange profile_patient_patientList_1">
																	<label for="profile_patient_patientList_Stripped">Stripped Rows</label>
															</div>
														</div>
														<div class="col-lg-2 col-md-2 col-sm-3 col-xs-6" style="padding:0px; margin-bottom: 0px;">
															<p style="color: orange; visibility: hidden;"> <b>Profile</b></p>
															<p style="padding-left: 10px; visibility: hidden;"> <b>Patients</b></p>
															<p style="padding-left: 20px;"> <b>Medical History</b></p>
															<div class="demo-checkbox" style="padding-left: 30px;">
																<input type="checkbox" id="profile_patient_medicalHistory_basic" class="filled-in chk-col-orange profile_patient_medicalHistory_1">
																	<label for="profile_patient_medicalHistory_basic">Basic</label>

																<input type="checkbox" id="profile_patient_medicalHistory_exported" class="filled-in chk-col-orange profile_patient_medicalHistory_1">
																	<label for="profile_patient_medicalHistory_exported">Exported</label>

																<input style="visibility: hidden;">

																<input type="checkbox" id="profile_patient_medicalHistory_images" class="filled-in chk-col-orange profile_patient_medicalHistory_2">
																	<label for="profile_patient_medicalHistory_images">Images</label>

																<input type="checkbox" id="profile_patient_medicalHistory_imageCollage" class="filled-in chk-col-orange profile_patient_medicalHistory_2">
																	<label for="profile_patient_medicalHistory_imageCollage">Image Collage</label>

																<input type="checkbox" id="profile_patient_medicalHistory_customizeImage" class="filled-in chk-col-orange profile_patient_medicalHistory_2">
																	<label for="profile_patient_medicalHistory_customizeImage">Customize Image</label>
															</div>
														</div>
														<div class="col-lg-2 col-md-2 col-sm-3 col-xs-6" style="padding:0px; margin-bottom: 0px;">
															<p style="color: orange; visibility: hidden;"> <b>Profile</b></p>
															<p style="padding-left: 10px; visibility: hidden;"> <b>Patients</b></p>
															<p style="padding-left: 20px;"> <b>Schedules</b></p>
															<div class="demo-checkbox" style="padding-left: 30px;">
																<input type="checkbox" id="profile_patient_schedules_basic" class="filled-in chk-col-orange profile_patient_schedules_1">
																	<label for="profile_patient_schedules_basic">Basic</label>

																<input type="checkbox" id="profile_patient_schedules_calendar" class="filled-in chk-col-orange profile_patient_schedules_1">
																	<label for="profile_patient_schedules_calendar">Calendar</label>
															</div>
														</div>
														<div class="col-lg-2 col-md-2 col-sm-3 col-xs-6" style="padding:0px; margin-bottom: 0px;">
															<p style="color: orange; visibility: hidden;"> <b>Profile</b></p>
															<p style="padding-left: 10px; visibility: hidden;"> <b>Patients</b></p>
															<p style="padding-left: 20px;"> <b>Bills</b></p>
															<div class="demo-checkbox" style="padding-left: 30px;">
																<input type="checkbox" id="profile_patient_bills_basic" class="filled-in chk-col-orange profile_patient_bills_1">
																	<label for="profile_patient_bills_basic">Basic</label>

																<input type="checkbox" id="profile_patient_bills_basicTextBox" class="filled-in chk-col-orange profile_patient_bills_1">
																	<label for="profile_patient_bills_basicTextBox">Basic Table w/ Text Box</label>

																<input type="checkbox" id="profile_patient_bills_basicModalTextBox" class="filled-in chk-col-orange profile_patient_bills_1">
																	<label for="profile_patient_bills_basicModalTextBox">Basic Table w/ Modal Text Box</label>
															</div>
														</div>
													</div>

													<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;">
														<div class="col-lg-2 col-md-2 col-sm-3 col-xs-6" style="padding:0px; margin-bottom: 0px;">
															<p style="padding-left: 10px; color: #8BC34A;"> <b>Clinic</b></p>
															<p style="padding-left: 20px;"> <b>Information</b></p>
															<div class="demo-checkbox" style="padding-left: 30px;">
																<input type="checkbox" id="profile_clinic_information_basic" class="filled-in chk-col-orange profile_clinic_information_1">
																	<label for="profile_clinic_information_basic">Basic</label>

																<input type="checkbox" id="profile_clinic_information_basicTextBox" class="filled-in chk-col-orange profile_clinic_information_1">
																	<label for="profile_clinic_information_basicTextBox">Basic Table w/ Text Box</label>

																<input type="checkbox" id="profile_clinic_information_basicModalTextBox" class="filled-in chk-col-orange profile_clinic_information_1">
																	<label for="profile_clinic_information_basicModalTextBox">Basic Table w/ Modal Text Box</label>
															</div>
														</div>
														<div class="col-lg-2 col-md-2 col-sm-3  col-xs-6" style="padding:0px; margin-bottom: 0px;">
															<p style="padding-left: 10px; visibility: hidden;"> <b>Clinic</b></p>
															<p style="padding-left: 20px;"> <b>Images</b></p>
															<div class="demo-checkbox" style="padding-left: 30px;">
																<input type="checkbox" id="profile_clinic_images_single" class="filled-in chk-col-orange profile_clinic_images_1">
																	<label for="profile_clinic_images_single">Single Image Upload</label>

																<input type="checkbox" id="profile_clinic_images_multiple" class="filled-in chk-col-orange profile_clinic_images_1">
																	<label for="profile_clinic_images_multiple">Multiple Image Upload</label>

															</div>
														</div>
														<div class="col-lg-2 col-md-2 col-sm-3  col-xs-6" style="padding:0px; margin-bottom: 0px;">
															<p style="padding-left: 10px; visibility: hidden;"> <b>Clinic</b></p>
															<p style="padding-left: 20px;"> <b>Schedules</b></p>
															<div class="demo-checkbox" style="padding-left: 30px;">
																<input type="checkbox" id="profile_clinic_schedules_basic" class="filled-in chk-col-orange profile_clinic_schedules_1">
																	<label for="profile_clinic_schedules_basic">Basic</label>

																<input type="checkbox" id="profile_clinic_schedules_calendar" class="filled-in chk-col-orange profile_clinic_schedules_1">
																	<label for="profile_clinic_schedules_calendar">Calendar</label>

															</div>
														</div>
														<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" style="padding:0px; margin-bottom: 0px;">
															<p style="padding-left: 10px; color: #8BC34A;"> <b>Doctors</b></p>
															<p style="padding-left: 20px;"> <b>Information</b></p>
															<div class="demo-checkbox" style="padding-left: 30px;">
																<input type="checkbox" id="profile_doctors_information_basicTextBox" class="filled-in chk-col-orange profile_doctors_information_1">
																	<label for="profile_doctors_information_basicTextBox">Basic Table w/ Text Box</label>

																<input type="checkbox" id="profile_doctors_information_basicModalTextBox" class="filled-in chk-col-orange profile_doctors_information_1">
																	<label for="profile_doctors_information_basicModalTextBox">Basic Table w/ Modal Text Box</label>

																<input type="checkbox" id="profile_doctors_information_singleImage" class="filled-in chk-col-orange profile_doctors_information_1">
																	<label for="profile_doctors_information_singleImage">Single Image Upload</label>
															</div>
														</div>
														<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" style="padding:0px; margin-bottom: 0px;">
															<p style="padding-left: 10px; color: #8BC34A;"> <b>Medicine</b></p>
															<p style="padding-left: 20px;"> <b>Information</b></p>
															<div class="demo-checkbox" style="padding-left: 30px;">
																<input type="checkbox" id="profile_medicine_information_basicTextBox" class="filled-in chk-col-orange profile_medicine_information_1">
																	<label for="profile_medicine_information_basicTextBox">Basic Table w/ Text Box</label>

																<input type="checkbox" id="profile_medicine_information_basicModalTextBox" class="filled-in chk-col-orange profile_medicine_information_1">
																	<label for="profile_medicine_information_basicModalTextBox">Basic Table w/ Modal Text Box</label>

																<input type="checkbox" id="profile_medicine_information_singleImage" class="filled-in chk-col-orange profile_medicine_information_1">
																	<label for="profile_medicine_information_singleImage">Single Image Upload</label>
															</div>
														</div>
													</div>

													<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;">
														<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" style="padding:0px; margin-bottom: 0px; margin-top: 50px;">
															<p style="color: orange;"> <b>Queue</b></p>
															<p style="padding-left: 10px; color: #8BC34A"> <b>Mode</b></p>
															<p style="padding-left: 20px;"> <b>1st Priority</b></p>
															<div class="demo-checkbox" style="padding-left: 30px;">
																<input type="checkbox" id="queue_mode_1st_basic" class="filled-in chk-col-orange queue_mode_1st_1">
																	<label for="queue_mode_1st_basic">Basic</label>

																<input type="checkbox" id="queue_mode_1st_dragDrop" class="filled-in chk-col-orange queue_mode_1st_1">
																	<label for="queue_mode_1st_dragDrop">Drag Drop</label>

																<input style="visibility: hidden;">

																<input type="checkbox" id="queue_mode_1st_basicInput" class="filled-in chk-col-orange queue_mode_1st_2">
																	<label for="queue_mode_1st_basicInput">Basic Input</label>

																<input type="checkbox" id="queue_mode_1st_advance" class="filled-in chk-col-orange queue_mode_1st_2">
																	<label for="queue_mode_1st_advance">Advance</label>

																<input type="checkbox" id="queue_mode_1st_patientImage" class="filled-in chk-col-orange queue_mode_1st_2">
																	<label for="queue_mode_1st_patientImage">Patient Image</label>

																<input style="visibility: hidden;">

																<input type="checkbox" id="queue_mode_1st_hoverRows" class="filled-in chk-col-orange queue_mode_1st_3">
																	<label for="queue_mode_1st_hoverRows">Hover Rows</label>

																<input type="checkbox" id="queue_mode_1st_exportedTable" class="filled-in chk-col-orange queue_mode_1st_3">
																	<label for="queue_mode_1st_exportedTable">Exported Table</label>

																<input type="checkbox" id="queue_mode_1st_basicTable" class="filled-in chk-col-orange queue_mode_1st_3">
																	<label for="queue_mode_1st_basicTable">Basic</label>
															</div>
														</div>
														<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" style="padding:0px; margin-bottom: 0px; margin-top: 50px;">
															<p style="color: orange; visibility: hidden;"> <b>Queue</b></p>
															<p style="padding-left: 10px; color: #8BC34A; visibility: hidden;"> <b>Mode</b></p>
															<p style="padding-left: 20px;"> <b>2nd Priority</b></p>
															<div class="demo-checkbox" style="padding-left: 30px;">
																<input type="checkbox" id="queue_mode_2nd_basic" class="filled-in chk-col-orange queue_mode_2nd_1">
																	<label for="queue_mode_2nd_basic">Basic</label>

																<input type="checkbox" id="queue_mode_2nd_dragDrop" class="filled-in chk-col-orange queue_mode_2nd_1">
																	<label for="queue_mode_2nd_dragDrop">Drag Drop</label>

																<input style="visibility: hidden;">

																<input type="checkbox" id="queue_mode_2nd_basicInput" class="filled-in chk-col-orange queue_mode_2nd_2">
																	<label for="queue_mode_2nd_basicInput">Basic Input</label>

																<input type="checkbox" id="queue_mode_2nd_advance" class="filled-in chk-col-orange queue_mode_2nd_2">
																	<label for="queue_mode_2nd_advance">Advance</label>

																<input type="checkbox" id="queue_mode_2nd_patientImage" class="filled-in chk-col-orange queue_mode_2nd_2">
																	<label for="queue_mode_2nd_patientImage">Patient Image</label>

																<input style="visibility: hidden;">

																<input type="checkbox" id="queue_mode_2nd_hoverRows" class="filled-in chk-col-orange queue_mode_2nd_3">
																	<label for="queue_mode_2nd_hoverRows">Hover Rows</label>

																<input type="checkbox" id="queue_mode_2nd_exportedTable" class="filled-in chk-col-orange queue_mode_2nd_3">
																	<label for="queue_mode_2nd_exportedTable">Exported Table</label>

																<input type="checkbox" id="queue_mode_2nd_basicTable" class="filled-in chk-col-orange queue_mode_2nd_3">
																	<label for="queue_mode_2nd_basicTable">Basic</label>
															</div>
														</div>
														<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" style="padding:0px; margin-bottom: 0px; margin-top: 50px;">
															<p style="color: orange;"> <b>Schedule</b></p>
															<p style="padding-left: 10px; color: #8BC34A;"> <b>Mode</b></p>
															<p style="padding-left: 20px;"> <b>Patient</b></p>
															<div class="demo-checkbox" style="padding-left: 30px;">
																<input type="checkbox" id="schedule_mode_patient_basic" class="filled-in chk-col-orange schedule_mode_patient_1">
																	<label for="schedule_mode_patient_basic">Basic</label>

																<input type="checkbox" id="schedule_mode_patient_calendar" class="filled-in chk-col-orange schedule_mode_patient_1">
																	<label for="schedule_mode_patient_calendar">Calendar</label>

															</div>
														</div>
															<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" style="padding:0px; margin-bottom: 0px; margin-top: 50px;">
															<p style="color: orange;"> <b>Booking</b></p>
															<p style="padding-left: 10px; color: #8BC34A;"> <b>Booking</b></p>
															<div class="demo-checkbox" style="padding-left: 30px;">
																<input type="checkbox" id="booking_booking_basic" class="filled-in chk-col-orange booking_booking_1">
																	<label for="booking_booking_basic">Basic</label>

																<input type="checkbox" id="booking_booking_advance" class="filled-in chk-col-orange booking_booking_1">
																	<label for="booking_booking_advance">Advance</label>
		
																<input style="visibility: hidden;">

																<input type="checkbox" id="booking_booking_hoverRows" class="filled-in chk-col-orange booking_booking_2">
																	<label for="booking_booking_hoverRows">Hover Rows</label>

																<input type="checkbox" id="booking_booking_exportedTable" class="filled-in chk-col-orange booking_booking_2">
																	<label for="booking_booking_exportedTable">Exported Table</label>

																<input type="checkbox" id="booking_booking_basicTable" class="filled-in chk-col-orange booking_booking_2">
																	<label for="booking_booking_basicTable">Basic Table</label>

															</div>
														</div>
														<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" style="padding:0px; margin-bottom: 0px; margin-top: 50px;">
															<p style="color: orange;"> <b>Billing</b></p>
															<p style="padding-left: 10px; color: #8BC34A;"> <b>Billing</b></p>
															<div class="demo-checkbox" style="padding-left: 30px;">
																<input type="checkbox" id="billing_billing_hoverRows" class="filled-in chk-col-orange billing_billing_1">
																	<label for="billing_billing_hoverRows">Hover Rows</label>

																<input type="checkbox" id="billing_billing_exportedTable" class="filled-in chk-col-orange billing_billing_1">
																	<label for="billing_billing_exportedTable">Exported Table</label>

																<input type="checkbox" id="billing_billing_basicTable" class="filled-in chk-col-orange billing_billing_1">
																	<label for="billing_billing_basicTable">Basic Table</label>

															</div>
														</div>
														<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" style="padding:0px; margin-bottom: 0px; margin-top: 50px;">
															<p style="color: orange;"> <b>Messaging</b></p>
															<p style="padding-left: 10px; color: #8BC34A"> <b>Messaging</b></p>
															<div class="demo-checkbox" style="padding-left: 30px;">
																<input type="checkbox" id="messaging_messaging_attachFile" class="filled-in chk-col-orange messaging_messaging_1">
																	<label for="messaging_messaging_attachFile">Attach File</label>

																<input type="checkbox" id="messaging_messaging_attachImage" class="filled-in chk-col-orange messaging_messaging_1">
																	<label for="messaging_messaging_attachImage">Attach Image</label>

																<input type="checkbox" id="messaging_messaging_sendEmail" class="filled-in chk-col-orange messaging_messaging_1">
																	<label for="messaging_messaging_sendEmail">Send to Email</label>

																<input type="checkbox" id="messaging_messaging_sendSMS" class="filled-in chk-col-orange messaging_messaging_1">
																	<label for="messaging_messaging_sendSMS">Send to SMS</label>

															</div>
														</div>
													</div>

												{{-- 	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px; margin-top: 50px;">
														<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" style="padding:0px; margin-bottom: 0px;">
															<p style="color: orange;"> <b>Schedule</b></p>
															<p style="padding-left: 10px; color: #8BC34A;"> <b>Mode</b></p>
															<p style="padding-left: 20px;"> <b>Patient</b></p>
															<div class="demo-checkbox" style="padding-left: 30px;">
																<input type="checkbox" id="schedule_mode_patient_basic" class="filled-in chk-col-orange">
																	<label for="schedule_mode_patient_basic">Basic</label>

																<input type="checkbox" id="schedule_mode_patient_calendar" class="filled-in chk-col-orange">
																	<label for="schedule_mode_patient_calendar">Calendar</label>

															</div>
														</div>
															<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" style="padding:0px; margin-bottom: 0px;">
															<p style="color: orange;"> <b>Booking</b></p>
															<p style="padding-left: 10px; color: #8BC34A;"> <b>Booking</b></p>
															<div class="demo-checkbox" style="padding-left: 30px;">
																<input type="checkbox" id="booking_booking_basic" class="filled-in chk-col-orange">
																	<label for="booking_booking_basic">Basic</label>

																<input type="checkbox" id="booking_booking_advance" class="filled-in chk-col-orange">
																	<label for="booking_booking_advance">Advance</label>
		
																<input style="visibility: hidden;">

																<input type="checkbox" id="booking_booking_hoverRows" class="filled-in chk-col-orange">
																	<label for="booking_booking_hoverRows">Hover Rows</label>

																		<input type="checkbox" id="booking_booking_exportedTable" class="filled-in chk-col-orange">
																<label for="booking_booking_exportedTable">Exported Table</label>

																		<input type="checkbox" id="booking_booking_basicTable" class="filled-in chk-col-orange">
																<label for="booking_booking_basicTable">Basic Table</label>

															</div>
														</div>
														<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" style="padding:0px; margin-bottom: 0px;">
															<p style="color: orange;"> <b>Billing</b></p>
															<p style="padding-left: 10px; color: #8BC34A;"> <b>Billing</b></p>
															<div class="demo-checkbox" style="padding-left: 30px;">
																<input type="checkbox" id="billing_billing_hoverRows" class="filled-in chk-col-orange">
																	<label for="billing_billing_hoverRows">Hover Rows</label>

																<input type="checkbox" id="billing_billing_exportedTable" class="filled-in chk-col-orange">
																	<label for="billing_billing_exportedTable">Exported Table</label>

																<input type="checkbox" id="billing_billing_basicTable" class="filled-in chk-col-orange">
																	<label for="billing_billing_basicTable">Basic Table</label>

															</div>
														</div>
														<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6" style="padding:0px; margin-bottom: 0px;">
															<p style="color: orange;"> <b>Messaging</b></p>
															<p style="padding-left: 10px; color: #8BC34A"> <b>Messaging</b></p>
															<div class="demo-checkbox" style="padding-left: 30px;">
																<input type="checkbox" id="messaging_messaging_attachFile" class="filled-in chk-col-orange">
																	<label for="messaging_messaging_attachFile">Attach File</label>

																<input type="checkbox" id="messaging_messaging_attachImage" class="filled-in chk-col-orange">
																	<label for="messaging_messaging_attachImage">Attach Image</label>

																<input type="checkbox" id="messaging_messaging_sendEmail" class="filled-in chk-col-orange">
																	<label for="messaging_messaging_sendEmail">Send to Email</label>

																<input type="checkbox" id="messaging_messaging_sendSMS" class="filled-in chk-col-orange">
																	<label for="messaging_messaging_sendSMS">Send to SMS</label>

															</div>
														</div>
													</div> --}}

													<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px; margin-top: 50px;">
														<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" style="padding:0px; margin-bottom: 0px;">
															<p style="color: orange;"> <b>Inventory</b></p>
															<p style="padding-left: 10px; color: #8BC34A"> <b>Stock-in</b></p>
															{{-- <p style="padding-left: 20px;"> <b>1st Priority</b></p> --}}
															<div class="demo-checkbox" style="padding-left: 30px;">
																<input type="checkbox" id="inventory_stockIn_basic" class="filled-in chk-col-orange inventory_stockIn_1">
																	<label for="inventory_stockIn_basic">Basic Input</label>

																<input type="checkbox" id="inventory_stockIn_advance" class="filled-in chk-col-orange inventory_stockIn_1">
																	<label for="inventory_stockIn_advance">Advance</label>

																<input style="visibility: hidden;">

																<input type="checkbox" id="inventory_stockIn_hoverRows" class="filled-in chk-col-orange inventory_stockIn_2">
																	<label for="inventory_stockIn_hoverRows">Hover Rows</label>

																<input type="checkbox" id="inventory_stockIn_exportedTable" class="filled-in chk-col-orange inventory_stockIn_2">
																	<label for="inventory_stockIn_exportedTable">Exported Table</label>

																<input type="checkbox" id="inventory_stockIn_basicTable" class="filled-in chk-col-orange inventory_stockIn_2">
																	<label for="inventory_stockIn_basicTable">Basic Table</label>
															</div>
														</div>
														<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" style="padding:0px; margin-bottom: 0px;">
															<p style="color: orange; visibility: hidden;"> <b>Inventory</b></p>
															<p style="padding-left: 10px; color: #8BC34A"> <b>Stock-out</b></p>
															{{-- <p style="padding-left: 20px;"> <b>1st Priority</b></p> --}}
															<div class="demo-checkbox" style="padding-left: 30px;">
																<input type="checkbox" id="inventory_stockOut_basic" class="filled-in chk-col-orange inventory_stockOut_1">
																	<label for="inventory_stockOut_basic">Basic Input</label>

																<input type="checkbox" id="inventory_stockOut_advance" class="filled-in chk-col-orange inventory_stockOut_1">
																	<label for="inventory_stockOut_advance">Advance</label>

																<input style="visibility: hidden;">

																<input type="checkbox" id="inventory_stockOut_hoverRows" class="filled-in chk-col-orange inventory_stockOut_2">
																	<label for="inventory_stockOut_hoverRows">Hover Rows</label>

																<input type="checkbox" id="inventory_stockOut_exportedTable" class="filled-in chk-col-orange inventory_stockOut_2">
																	<label for="inventory_stockOut_exportedTable">Exported Table</label>

																<input type="checkbox" id="inventory_stockOut_basicTable" class="filled-in chk-col-orange inventory_stockOut_2">
																	<label for="inventory_stockOut_basicTable">Basic Table</label>
															</div>
														</div>
														<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" style="padding:0px; margin-bottom: 0px;">
															<p style="color: orange; visibility: hidden;"> <b>Inventory</b></p>
															<p style="padding-left: 10px; color: #8BC34A"> <b>Sold-items</b></p>
															{{-- <p style="padding-left: 20px;"> <b>1st Priority</b></p> --}}
															<div class="demo-checkbox" style="padding-left: 30px;">
																<input type="checkbox" id="inventory_soldItems_hoverRows" class="filled-in chk-col-orange inventory_soldItems_1">
																	<label for="inventory_soldItems_hoverRows">Hover Rows</label>

																<input type="checkbox" id="inventory_soldItems_exportedTable" class="filled-in chk-col-orange inventory_soldItems_1">
																	<label for="inventory_soldItems_exportedTable">Exported Table</label>

																<input type="checkbox" id="inventory_soldItems_basicTable" class="filled-in chk-col-orange inventory_soldItems_1">
																	<label for="inventory_soldItems_basicTable">Basic Table</label>
															</div>
														</div>
														<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" style="padding:0px; margin-bottom: 0px;">
															<p style="color: orange; visibility: hidden;"> <b>Inventory</b></p>
															<p style="padding-left: 10px; color: #8BC34A"> <b>Return Items</b></p>
															{{-- <p style="padding-left: 20px;"> <b>1st Priority</b></p> --}}
															<div class="demo-checkbox" style="padding-left: 30px;">
																<input type="checkbox" id="inventory_returnItems_basic" class="filled-in chk-col-orange inventory_returnItems_1">
																	<label for="inventory_returnItems_basic">Basic Input</label>

																<input type="checkbox" id="inventory_returnItems_advance" class="filled-in chk-col-orange inventory_returnItems_1">
																	<label for="inventory_returnItems_advance">Advance</label>

																<input style="visibility: hidden;">

																<input type="checkbox" id="inventory_returnItems_hoverRows" class="filled-in chk-col-orange inventory_returnItems_2">
																	<label for="inventory_returnItems_hoverRows">Hover Rows</label>

																<input type="checkbox" id="inventory_returnItems_exportedTable" class="filled-in chk-col-orange inventory_returnItems_2">
																	<label for="inventory_returnItems_exportedTable">Exported Table</label>

																<input type="checkbox" id="inventory_returnItems_basicTable" class="filled-in chk-col-orange inventory_returnItems_2">
																	<label for="inventory_returnItems_basicTable">Basic Table</label>
															</div>
														</div>
														{{-- <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6" style="padding:0px; margin-bottom: 0px;">
															<p style="color: orange;"> <b>Messaging</b></p>
															<p style="padding-left: 10px; color: #8BC34A"> <b>Messaging</b></p>
															<div class="demo-checkbox" style="padding-left: 30px;">
																<input type="checkbox" id="messaging_messaging_attachFile" class="filled-in chk-col-orange">
																	<label for="messaging_messaging_attachFile">Attach File</label>

																<input type="checkbox" id="messaging_messaging_attachImage" class="filled-in chk-col-orange">
																	<label for="messaging_messaging_attachImage">Attach Image</label>

																<input type="checkbox" id="messaging_messaging_sendEmail" class="filled-in chk-col-orange">
																	<label for="messaging_messaging_sendEmail">Send to Email</label>

																<input type="checkbox" id="messaging_messaging_sendSMS" class="filled-in chk-col-orange">
																	<label for="messaging_messaging_sendSMS">Send to SMS</label>

															</div>
														</div> --}}
													</div>

													<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px; margin-top: 50px;">
														<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" style="padding:0px; margin-bottom: 0px;">
															<p style="color: orange;"> <b>Manage Report</b></p>
															<p style="padding-left: 10px; color: #8BC34A"> <b>Financial</b></p>
															<p style="padding-left: 20px;"> <b>Patient Summary</b></p>
															<div class="demo-checkbox" style="padding-left: 30px;">
																<input type="checkbox" id="manageReport_financial_patientSummary_exportedTable" class="filled-in chk-col-orange">
																	<label for="manageReport_financial_patientSummary_exportedTable">Exported Table</label>
															</div>
														</div>
														<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" style="padding:0px; margin-bottom: 0px;">
															<p style="color: orange; visibility: hidden;"> <b>Manage Report</b></p>
															<p style="padding-left: 10px; color: #8BC34A; visibility: hidden;"> <b>Financial</b></p>
															<p style="padding-left: 20px;"> <b>Consultation Summary</b></p>
															<div class="demo-checkbox" style="padding-left: 30px;">
																<input type="checkbox" id="manageReport_financial_consultationSummary_exportedTable" class="filled-in chk-col-orange">
																	<label for="manageReport_financial_consultationSummary_exportedTable">Exported Table</label>
															</div>
														</div>
														<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" style="padding:0px; margin-bottom: 0px;">
															<p style="color: orange; visibility: hidden;"> <b>Manage Report</b></p>
															<p style="padding-left: 10px; color: #8BC34A; visibility: hidden;"> <b>Financial</b></p>
															<p style="padding-left: 20px;"> <b>Schedule Summary</b></p>
															<div class="demo-checkbox" style="padding-left: 30px;">
																<input type="checkbox" id="manageReport_financial_scheduleSummary_exportedTable" class="filled-in chk-col-orange">
																	<label for="manageReport_financial_scheduleSummary_exportedTable">Exported Table</label>
															</div>
														</div>
													</div>

													<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;">
														<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" style="padding:0px; margin-bottom: 0px;">
															<p style="color: orange; visibility: hidden;"> <b>Manage Report</b></p>
															<p style="padding-left: 10px; color: #8BC34A"> <b>Inventory</b></p>
															<p style="padding-left: 20px;"> <b>Stock-in</b></p>
															<div class="demo-checkbox" style="padding-left: 30px;">
																<input type="checkbox" id="manageReport_inventory_stockIn_exportedTable" class="filled-in chk-col-orange">
																	<label for="manageReport_inventory_stockIn_exportedTable">Exported Table</label>
															</div>
														</div>
														<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" style="padding:0px; margin-bottom: 0px;">
															<p style="color: orange; visibility: hidden;"> <b>Manage Report</b></p>
															<p style="padding-left: 10px; color: #8BC34A; visibility: hidden;"> <b>Inventory</b></p>
															<p style="padding-left: 20px;"> <b>Stock-out</b></p>
															<div class="demo-checkbox" style="padding-left: 30px;">
																<input type="checkbox" id="manageReport_inventory_stockOut_exportedTable" class="filled-in chk-col-orange">
																	<label for="manageReport_inventory_stockOut_exportedTable">Exported Table</label>
															</div>
														</div>
														<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" style="padding:0px; margin-bottom: 0px;">
															<p style="color: orange; visibility: hidden;"> <b>Manage Report</b></p>
															<p style="padding-left: 10px; color: #8BC34A; visibility: hidden;"> <b>Inventory</b></p>
															<p style="padding-left: 20px;"> <b>Sold-items</b></p>
															<div class="demo-checkbox" style="padding-left: 30px;">
																<input type="checkbox" id="manageReport_inventory_soldItems_exportedTable" class="filled-in chk-col-orange">
																	<label for="manageReport_inventory_soldItems_exportedTable">Exported Table</label>
															</div>
														</div>
														<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" style="padding:0px; margin-bottom: 0px;">
															<p style="color: orange; visibility: hidden;"> <b>Manage Report</b></p>
															<p style="padding-left: 10px; color: #8BC34A; visibility: hidden;"> <b>Inventory</b></p>
															<p style="padding-left: 20px;"> <b>Return-items</b></p>
															<div class="demo-checkbox" style="padding-left: 30px;">
																<input type="checkbox" id="manageReport_inventory_returnItems_exportedTable" class="filled-in chk-col-orange">
																	<label for="manageReport_inventory_returnItems_exportedTable">Exported Table</label>
															</div>
														</div>
														<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" style="padding:0px; margin-bottom: 0px;">
															<p style="color: orange; visibility: hidden;"> <b>Manage Report</b></p>
															<p style="padding-left: 10px; color: #8BC34A; visibility: hidden;"> <b>Inventory</b></p>
															<p style="padding-left: 20px;"> <b>Summary</b></p>
															<div class="demo-checkbox" style="padding-left: 30px;">
																<input type="checkbox" id="manageReport_inventory_summary_exportedTable" class="filled-in chk-col-orange">
																	<label for="manageReport_inventory_summary_exportedTable">Exported Table</label>
															</div>
														</div>
													</div>

													<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px; margin-top: 50px;">
														<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" style="padding:0px; margin-bottom: 0px;">
															<p style="color: orange;"> <b>Account Settings</b></p>
															<p style="padding-left: 10px; color: #8BC34A"> <b>My Account</b></p>
															{{-- <p style="padding-left: 20px; visibility: hidden;"> <b>Stock-in</b></p> --}}
															<div class="demo-checkbox" style="padding-left: 30px;">
																<input type="checkbox" id="accountSettings_myAccount_basic" class="filled-in chk-col-orange accountSettings_myAccount_1">
																	<label for="accountSettings_myAccount_basic">Basic</label>

																<input type="checkbox" id="accountSettings_myAccount_advance" class="filled-in chk-col-orange accountSettings_myAccount_1">
																	<label for="accountSettings_myAccount_advance">Advance</label>

																<input style="visibility: hidden;">

																<input type="checkbox" id="accountSettings_myAccount_hoverRows" class="filled-in chk-col-orange accountSettings_myAccount_2">
																	<label for="accountSettings_myAccount_hoverRows">Hover Rows</label>

																<input type="checkbox" id="accountSettings_myAccount_exportedTable" class="filled-in chk-col-orange accountSettings_myAccount_2">
																	<label for="accountSettings_myAccount_exportedTable">Exported Table</label>

																<input type="checkbox" id="accountSettings_myAccount_basicTable" class="filled-in chk-col-orange accountSettings_myAccount_2">
																	<label for="accountSettings_myAccount_basicTable">Basic table</label>


															</div>
														</div>
														<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" style="padding:0px; margin-bottom: 0px;">
															<p style="color: orange; visibility: hidden;"> <b>Account Settings</b></p>
															<p style="padding-left: 10px; color: #8BC34A"> <b>Sec. Account</b></p>
															{{-- <p style="padding-left: 20px; visibility: hidden;"> <b>Stock-in</b></p> --}}
															<div class="demo-checkbox" style="padding-left: 30px;">
																<input type="checkbox" id="accountSettings_secAccount_basic" class="filled-in chk-col-orange accountSettings_secAccount_1">
																	<label for="accountSettings_secAccount_basic">Basic</label>

																<input type="checkbox" id="accountSettings_secAccount_advance" class="filled-in chk-col-orange accountSettings_secAccount_1">
																	<label for="accountSettings_secAccount_advance">Advance</label>

																<input style="visibility: hidden;">

																<input type="checkbox" id="accountSettings_secAccount_hoverRows" class="filled-in chk-col-orange accountSettings_secAccount_2">
																	<label for="accountSettings_secAccount_hoverRows">Hover Rows</label>

																<input type="checkbox" id="accountSettings_secAccount_exportedTable" class="filled-in chk-col-orange accountSettings_secAccount_2">
																	<label for="accountSettings_secAccount_exportedTable">Exported Table</label>

																<input type="checkbox" id="accountSettings_secAccount_basicTable" class="filled-in chk-col-orange accountSettings_secAccount_2">
																	<label for="accountSettings_secAccount_basicTable">Basic table</label>

															</div>
														</div>
														<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" style="padding:0px; margin-bottom: 0px;">
															<p style="color: orange; visibility: hidden;"> <b>Account Settings</b></p>
															<p style="padding-left: 10px; color: #8BC34A"> <b>MH. Form</b></p>
															{{-- <p style="padding-left: 20px; visibility: hidden;"> <b>Stock-in</b></p> --}}
															<div class="demo-checkbox" style="padding-left: 30px;">
																<input type="checkbox" id="accountSettings_mhForm_basic" class="filled-in chk-col-orange accountSettings_mhForm_1">
																	<label for="accountSettings_mhForm_basic">Basic</label>

																<input type="checkbox" id="accountSettings_mhForm_advance" class="filled-in chk-col-orange accountSettings_mhForm_1">
																	<label for="accountSettings_mhForm_advance">Advance</label>

																<input style="visibility: hidden;">

																<input type="checkbox" id="accountSettings_mhForm_hoverRows" class="filled-in chk-col-orange accountSettings_mhForm_2">
																	<label for="accountSettings_mhForm_hoverRows">Hover Rows</label>

																<input type="checkbox" id="accountSettings_mhForm_exportedTable" class="filled-in chk-col-orange accountSettings_mhForm_2">
																	<label for="accountSettings_mhForm_exportedTable">Exported Table</label>

																<input type="checkbox" id="accountSettings_mhForm_basicTable" class="filled-in chk-col-orange accountSettings_mhForm_2">
																	<label for="accountSettings_mhForm_basicTable">Basic table</label>

															</div>
														</div>
													</div>

												</div>									
											</card>
							 			</div>
							 			
							 		</div>

							 	</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>

@endsection
<script src="{{ URL::asset('AdminSB/plugins/jquery/jquery.min.js') }}"></script>
<script>
	$( document ).ready(function() {
    	$('input.profile_patient_personal_1').on('change', function() {
			$('input.profile_patient_personal_1').not(this).prop('checked', false);
		});

		$('input.profile_patient_personal_2').on('change', function() {
			$('input.profile_patient_personal_2').not(this).prop('checked', false);
		});

		$('input.profile_patient_patientList_1').on('change', function() {
			$('input.profile_patient_patientList_1').not(this).prop('checked', false);
		});

		$('input.profile_patient_medicalHistory_1').on('change', function() {
			$('input.profile_patient_medicalHistory_1').not(this).prop('checked', false);
		});

		$('input.profile_patient_medicalHistory_2').on('change', function() {
			$('input.profile_patient_medicalHistory_2').not(this).prop('checked', false);
		});

		$('input.profile_patient_schedules_1').on('change', function() {
			$('input.profile_patient_schedules_1').not(this).prop('checked', false);
		});

		$('input.profile_patient_bills_1').on('change', function() {
			$('input.profile_patient_bills_1').not(this).prop('checked', false);
		});

		$('input.profile_clinic_information_1').on('change', function() {
			$('input.profile_clinic_information_1').not(this).prop('checked', false);
		});

		$('input.profile_clinic_information_1').on('change', function() {
			$('input.profile_clinic_information_1').not(this).prop('checked', false);
		});

		$('input.profile_clinic_images_1').on('change', function() {
			$('input.profile_clinic_images_1').not(this).prop('checked', false);
		});

		$('input.profile_clinic_schedules_1').on('change', function() {
			$('input.profile_clinic_schedules_1').not(this).prop('checked', false);
		});
		
		$('input.profile_doctors_information_1').on('change', function() {
			$('input.profile_doctors_information_1').not(this).prop('checked', false);
		});

		$('input.profile_medicine_information_1').on('change', function() {
			$('input.profile_medicine_information_1').not(this).prop('checked', false);
		});

		$('input.queue_mode_1st_1').on('change', function() {
			$('input.queue_mode_1st_1').not(this).prop('checked', false);
		});

		$('input.queue_mode_1st_2').on('change', function() {
			$('input.queue_mode_1st_2').not(this).prop('checked', false);
		});

		$('input.queue_mode_1st_3').on('change', function() {
			$('input.queue_mode_1st_3').not(this).prop('checked', false);
		});

		$('input.queue_mode_2nd_1').on('change', function() {
			$('input.queue_mode_2nd_1').not(this).prop('checked', false);
		});

		$('input.queue_mode_2nd_2').on('change', function() {
			$('input.queue_mode_2nd_2').not(this).prop('checked', false);
		});

		$('input.queue_mode_2nd_3').on('change', function() {
			$('input.queue_mode_2nd_3').not(this).prop('checked', false);
		});

		$('input.schedule_mode_patient_1').on('change', function() {
			$('input.schedule_mode_patient_1').not(this).prop('checked', false);
		});

		$('input.booking_booking_1').on('change', function() {
			$('input.booking_booking_1').not(this).prop('checked', false);
		});

		$('input.booking_booking_2').on('change', function() {
			$('input.booking_booking_2').not(this).prop('checked', false);
		});

		$('input.billing_billing_1').on('change', function() {
			$('input.billing_billing_1').not(this).prop('checked', false);
		});

		$('input.messaging_messaging_1').on('change', function() {
			$('input.messaging_messaging_1').not(this).prop('checked', false);
		});

		$('input.inventory_stockIn_1').on('change', function() {
			$('input.inventory_stockIn_1').not(this).prop('checked', false);
		});

		$('input.inventory_stockIn_2').on('change', function() {
			$('input.inventory_stockIn_2').not(this).prop('checked', false);
		});

		$('input.inventory_stockOut_1').on('change', function() {
			$('input.inventory_stockOut_1').not(this).prop('checked', false);
		});

		$('input.inventory_stockOut_2').on('change', function() {
			$('input.inventory_stockOut_2').not(this).prop('checked', false);
		});

		$('input.inventory_soldItems_1').on('change', function() {
			$('input.inventory_soldItems_1').not(this).prop('checked', false);
		});

		$('input.inventory_returnItems_1').on('change', function() {
			$('input.inventory_returnItems_1').not(this).prop('checked', false);
		});

		$('input.inventory_returnItems_2').on('change', function() {
			$('input.inventory_returnItems_2').not(this).prop('checked', false);
		});

		$('input.accountSettings_myAccount_1').on('change', function() {
			$('input.accountSettings_myAccount_1').not(this).prop('checked', false);
		});

		$('input.accountSettings_myAccount_2').on('change', function() {
			$('input.accountSettings_myAccount_2').not(this).prop('checked', false);
		});

		$('input.accountSettings_secAccount_1').on('change', function() {
			$('input.accountSettings_secAccount_1').not(this).prop('checked', false);
		});

		$('input.accountSettings_secAccount_2').on('change', function() {
			$('input.accountSettings_secAccount_2').not(this).prop('checked', false);
		});

		$('input.accountSettings_mhForm_1').on('change', function() {
			$('input.accountSettings_mhForm_1').not(this).prop('checked', false);
		});

		$('input.accountSettings_mhForm_2').on('change', function() {
			$('input.accountSettings_mhForm_2').not(this).prop('checked', false);
		});

	});
</script>