@extends('admin_portal.home')

<style type="text/css">
	#div-patient-list  {
		min-height: 380px;
		max-height: 380px; 
		overflow-y: hidden;
		position: relative;
	}
	#card-price {
		padding-top: 20px;
		padding-bottom: 21px;
		font-family: 'Raleway', sans-serif;
		font-weight: 100;
		color: orange;
		background-color: #f2f2f2;
	}
	#card-text {
		padding-top: 40px;
		padding-bottom: 21px;
		padding-left: 15px;
		padding-right: 15px;
	}
	#card-footer {
		position: absolute;
		bottom: 0px;
		left: 40%;
		padding-bottom: 20px;
	}

</style>

@section('body')
<section class="content">
	<div class="container-fluid">
		<div class="block-header">
			<h2>Profile</h2>
		</div>
		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
				{{-- 	<div class="header">
						<h2>
							Patients
						</h2>
					</div> --}}
					<div class="body">
						<div class="row clearfix">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="header">
									<h2>
										Patients
									</h2>
								</div>
								<div class="body">
									<div class="row">
										<div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
											<div class="panel-group" id="accordion_1" role="tablist" aria-multiselectable="true">

												<div class="panel panel-col-teal">
													<div class="panel-heading" role="tab" id="headingOne_1">
														<h4 class="panel-title">
															<a role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseOne_1" aria-expanded="true" aria-controls="collapseOne_1">
																Patients List
															</a>
														</h4>
													</div>
													<div id="collapseOne_1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_1">
														<div class="panel-body">
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card position-absolute" id="div-patient-list">
																	<div class="header bg-grey">
																		<center>
																			<h5>
																				<b>BASIC</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$50</h3>
																		</div>
																		<div id="card-footer">
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-brown">
																		<center>
																			<h5>
																				<b>STRIPPED ROWS</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$75</h3>
																		</div>
																		<div id="card-text">
																			<p>Add zebra-striping to any table row

																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
														</div>
													</div>
												</div>

												<div class="panel panel-col-teal">
													<div class="panel-heading" role="tab" id="headingTwo_1">
														<h4 class="panel-title">
															<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseTwo_1" aria-expanded="false"
															   aria-controls="collapseTwo_1">
																Personal Profile
															</a>
														</h4>
													</div>
													<div id="collapseTwo_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_1">
														<div class="panel-body">
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card position-absolute" id="div-patient-list">
																	<div class="header bg-grey">
																		<center>
																			<h5>
																				<b>BASIC INPUT</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$50</h3>
																		</div>
																		<div id="card-text">
																			<p>Basic without any addtional modification classes

																			</p>
																		</div>
																		<div id="card-footer">
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card position-absolute" id="div-patient-list">
																	<div class="header bg-brown">
																		<center>
																			<h5>
																				<b>ADVANCED</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$75</h3>
																		</div>
																		<div id="card-text">
																			<p>Applied simple animation during clicking the next fields with floating labels
																			</p>
																		</div>
																		<div id="card-footer">
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card position-absolute" id="div-patient-list">
																	<div class="header bg-blue-grey">
																		<center>
																			<h5>
																				<b>PATIENT IMAGE</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$90</h3>
																		</div>
																		<div id="card-text">
																			<p>This function can allow you to upload patients image
																			</p>
																		</div>
																		<div id="card-footer">
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card position-absolute" id="div-patient-list">
																	<div class="header bg-grey">
																		<center>
																			<h5>
																				<b>BASIC</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$50</h3>
																		</div>
																		<div id="card-text">
																			<p>Basic without any additional modification classes
																			</p>
																		</div>
																		<div id="card-footer">
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card position-absolute" id="div-patient-list">
																	<div class="header bg-brown">
																		<center>
																			<h5>
																				<b>HOVER ROWS</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$75</h3>
																		</div>
																		<div id="card-text">
																			<p>Basic without any additional modification classes
																			</p>
																		</div>
																		<div id="card-footer">
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card position-absolute" id="div-patient-list">
																	<div class="header bg-deep-purple">
																		<center>
																			<h5>
																				<b>Exported Table</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$99</h3>
																		</div>
																		<div id="card-text">
																			<p>Can Export to any File Type, Search, Previous/Next
																			</p>
																		</div>
																		<div id="card-footer">
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
														</div>
													</div>
												</div>

												<div class="panel panel-col-teal">
													<div class="panel-heading" role="tab" id="headingThree_1">
														<h4 class="panel-title">
															<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseThree_1" aria-expanded="false"
															   aria-controls="collapseThree_1">
																Medical History
															</a>
														</h4>
													</div>
													<div id="collapseThree_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree_1">
														<div class="panel-body">
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card position-absolute" id="div-patient-list">
																	<div class="header bg-grey">
																		<center>
																			<h5>
																				<b>BASIC</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$50</h3>
																		</div>
																		<div id="card-text">
																			<p>Basic without any additional modification classes
																			</p>
																		</div>
																		<div id="card-footer">
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card position-absolute" id="div-patient-list">
																	<div class="header bg-deep-purple">
																		<center>
																			<h5>
																				<b>EXPORTED TABLE</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$99</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Information will be displayed on table form and can export to any File Type, Search, Previous/Next
																			</p>
																		</div>
																		<div id="card-footer">
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="visibility: hidden;">
																<div class="card position-absolute" id="div-patient-list">
																	<div class="header bg-deep-purple">
																	</div>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card position-absolute" id="div-patient-list">
																	<div class="header bg-grey">
																		<center>
																			<h5>
																				<b>IMAGES</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$50</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				This function allows the user upload image or take pictures for a certain diagnosis
																			</p>
																		</div>
																		<div id="card-footer">
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card position-absolute" id="div-patient-list">
																	<div class="header bg-brown">
																		<center>
																			<h5>
																				<b>IMAGE COLLAGE</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$75</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				This function allows the user to create collage from an uploaded image or take pictures
																			</p>
																		</div>
																		<div id="card-footer">
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card position-absolute" id="div-patient-list">
																	<div class="header bg-deep-purple">
																		<center>
																			<h5>
																				<b>CUSTOMIZE IMAGE</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$99</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				This function allows the user to write or draw create collage from an uploaded image or take pictures
																			</p>
																		</div>
																		<div id="card-footer">
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
														</div>
													</div>
												</div>

												<div class="panel panel-col-teal">
													<div class="panel-heading" role="tab" id="headingFour_1">
														<h4 class="panel-title">
															<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseFour_1" aria-expanded="false"
															   aria-controls="collapseFour_1">
																Schedules
															</a>
														</h4>
													</div>
													<div id="collapseFour_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour_1">
														<div class="panel-body">
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card position-absolute" id="div-patient-list">
																	<div class="header bg-grey">
																		<center>
																			<h5>
																				<b>BASIC</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$50</h3>
																		</div>
																		<div id="card-text">
																			<p>Basic without any additional modification classes
																			</p>
																		</div>
																		<div id="card-footer">
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card position-absolute" id="div-patient-list">
																	<div class="header bg-deep-purple">
																		<center>
																			<h5>
																				<b>CALENDAR</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$99</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Information will be displayed on table form and can be export to any File Type, Search, Previous/Next
																			</p>
																		</div>
																		<div id="card-footer">
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
														</div>
													</div>
												</div>

												<div class="panel panel-col-teal">
													<div class="panel-heading" role="tab" id="headingFive_1">
														<h4 class="panel-title">
															<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseFive_1" aria-expanded="false"
															   aria-controls="collapseFive_1">
																Bills
															</a>
														</h4>
													</div>
													<div id="collapseFive_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour_1">
														<div class="panel-body">
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card position-absolute" id="div-patient-list">
																	<div class="header bg-grey">
																		<center>
																			<h5>
																				<b>BASIC</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$50</h3>
																		</div>
																		<div id="card-text">
																			<p>Basic without any additional modification classes
																			</p>
																		</div>
																		<div id="card-footer">
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card position-absolute" id="div-patient-list">
																	<div class="header bg-brown">
																		<center>
																			<h5>
																				<b>BASIC TABLE w/ TEXT BOX</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$75</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Basic table will be activated with textboxes for double clicking specific data
																			</p>
																		</div>
																		<div id="card-footer">
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card position-absolute" id="div-patient-list">
																	<div class="header bg-deep-purple">
																		<center>
																			<h5>
																				<b>BASIC TABLE w/ MODAL TEXT BOX</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$90</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Basic table will be activated with modal view for textboxes after double clicking a specific data
																			</p>
																		</div>
																		<div id="card-footer">
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
														</div>
													</div>
												</div>

											</div>
										</div>
									</div> {{-- row --}}
								</div>	{{-- body --}}	
							</div> <!-- col 12 -->
						</div> {{-- row --}}

						<div class="row clearfix">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="header">
									<h2>
										Clinic
									</h2>
								</div>
								<div class="body">
									<div class="row">
										<div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
											<div class="panel-group" id="accordion_1" role="tablist" aria-multiselectable="true">

												<div class="panel panel-col-teal">
													<div class="panel-heading" role="tab" id="headingSix_1">
														<h4 class="panel-title">
																<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseSix_1" aria-expanded="false"
															   aria-controls="collapseSix_1">
																Information
															</a>
														</h4>
													</div>
													<div id="collapseSix_1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingSix_1">
														<div class="panel-body">
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card position-absolute" id="div-patient-list">
																	<div class="header bg-grey">
																		<center>
																			<h5>
																				<b>BASIC</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$50</h3>
																		</div>
																		<div id="card-text">
																			<p>Basic without any addtional modification classes

																			</p>
																		</div>
																		<div id="card-footer">
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-brown">
																		<center>
																			<h5>
																				<b>BASIC TABLE w/ TEXT BOX</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$75</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Basic table will be activated with textboxes for double clicking specific data

																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-deep-purple">
																		<center>
																			<h5>
																				<b>BASIC TABLE w/ MODAL TEXT BOX</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$75</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Basic table will be activated with modal view for textboxes after double clicking specific data
																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
														</div>
													</div>
												</div>

												<div class="panel panel-col-teal">
													<div class="panel-heading" role="tab" id="headingSeven_1">
														<h4 class="panel-title">
															<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseSeven_1" aria-expanded="false"
															   aria-controls="collapseSeven_1">
																Images
															</a>
														</h4>
													</div>
													<div id="collapseSeven_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven_1">
														<div class="panel-body">
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card position-absolute" id="div-patient-list">
																	<div class="header bg-grey">
																		<center>
																			<h5>
																				<b>SINGLE IMAGE UPLOAD</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$50</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				This function allows the user to upload only one image for the clinic
																			</p>
																		</div>
																		<div id="card-footer">
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card position-absolute" id="div-patient-list">
																	<div class="header bg-brown">
																		<center>
																			<h5>
																				<b>MULTIPLE IMAGES UPLOAD</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$75</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				This function allows the user to upload multiple image or take pictures
																			</p>
																		</div>
																		<div id="card-footer">
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
														</div>
													</div>
												</div>

												<div class="panel panel-col-teal">
													<div class="panel-heading" role="tab" id="headingEight_1">
														<h4 class="panel-title">
															<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseEight_1" aria-expanded="false"
															   aria-controls="collapseEight_1">
																Schedule
															</a>
														</h4>
													</div>
													<div id="collapseEight_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight_1">
														<div class="panel-body">
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card position-absolute" id="div-patient-list">
																	<div class="header bg-grey">
																		<center>
																			<h5>
																				<b>BASIC</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$50</h3>
																		</div>
																		<div id="card-text">
																			<p>Basic without any additional modification classes
																			</p>
																		</div>
																		<div id="card-footer">
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card position-absolute" id="div-patient-list">
																	<div class="header bg-brown">
																		<center>
																			<h5>
																				<b>CALENDAR</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$99</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Information will be displayed on table form and can be export to any File Type, Search, Previous/Next
																			</p>
																		</div>
																		<div id="card-footer">
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
														</div>
													</div>
												</div>

											</div>
										</div>
									</div> {{-- row --}}

								</div>	{{-- body --}}	
							</div> <!-- col 12 -->
						</div> {{-- row --}}

						<div class="row clearfix">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="header">
									<h2>
										Doctor
									</h2>
								</div>
								<div class="body">
									<div class="row">
										<div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
											<div class="panel-group" id="accordion_1" role="tablist" aria-multiselectable="true">
												<div class="panel panel-col-teal">
													<div class="panel-heading" role="tab" id="headingNine_1">
														<h4 class="panel-title">
															<a role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseNine_1" aria-expanded="true" aria-controls="collapseNine_1">
																Information
															</a>
														</h4>
													</div>
													<div id="collapseNine_1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingNine_1">
														<div class="panel-body">
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card position-absolute" id="div-patient-list">
																	<div class="header bg-grey">
																		<center>
																			<h5>
																				<b>BASIC TABLE w/ TEXT BOX</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$50</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Basic table will be activated with textboxes for double clicking specific data

																			</p>
																		</div>
																		<div id="card-footer">
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-brown">
																		<center>
																			<h5>
																				<b>BASIC TABLE w/ MODAL TEXT BOX</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$75</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Basic table will be activated with modal view for textboxes after double clicking specific data
																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 " style="visibility: hidden;">
																<div class="card" id="div-patient-list">
																	<div class="header bg-deep-purple">
																	</div>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-deep-purple">
																		<center>
																			<h5>
																				<b>SINGLE IMAGE UPLOAD</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$99</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				This function allows the user to upload only one image for your clinic
																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div> {{-- row --}}

								</div>	{{-- body --}}	
							</div> <!-- col 12 -->
						</div> {{-- row --}}

						<div class="row clearfix">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="header">
									<h2>
										Medicine
									</h2>
								</div>
								<div class="body">
									<div class="row">
										<div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
											<div class="panel-group" id="accordion_1" role="tablist" aria-multiselectable="true">
												<div class="panel panel-col-teal">
													<div class="panel-heading" role="tab" id="headingTen_1">
														<h4 class="panel-title">
															<a role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseTen_1" aria-expanded="true" aria-controls="collapseTen_1">
																Information
															</a>
														</h4>
													</div>
													<div id="collapseTen_1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTen_1">
														<div class="panel-body">
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card position-absolute" id="div-patient-list">
																	<div class="header bg-grey">
																		<center>
																			<h5>
																				<b>BASIC TABLE w/ TEXT BOX</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$50</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Basic table will be activated with textboxes for double clicking specific data

																			</p>
																		</div>
																		<div id="card-footer">
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-brown">
																		<center>
																			<h5>
																				<b>BASIC TABLE w/ MODAL TEXT BOX</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$75</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Basic table will be activated with modal view for textboxes after double clicking specific data
																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 " style="visibility: hidden;">
																<div class="card" id="div-patient-list">
																	<div class="header bg-deep-purple">
																	</div>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-deep-purple">
																		<center>
																			<h5>
																				<b>SINGLE IMAGE UPLOAD</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$99</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				This function allows the user to upload only one image for your clinic
																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
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
						</div> {{-- row --}}

						<div class="modal fade" id="updateContent" tabindex="-1" role="dialog">
							<div class="modal-dialog modal-md" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title" id="largeModalLabel">Update Module Pricing and Information</h4>
									</div>
									
									<div class="modal-body">
										<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
											<img class="img-responsive thumbnail" src="{{ URL::asset('images/basic_table.png')}}">
										</div>
										<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
											{{-- <div class="form-group">
												<div class="form-line disabled">
													<input type="text" class="form-control" placeholder="BASIC" disabled>
												</div>
											</div><br> --}}
											<div class="form-group form-float">
												
												<div class="form-line">
													<input type="text" class="form-control" {{-- value="BASIC" --}}>
													<label class="form-label">Type:</label>
												</div><br>
												<div class="form-line">
													<input type="text" class="form-control" {{-- value="50" --}}>
													<label class="form-label">Price:</label>
												</div>
											</div>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<label>Description:</label>
											<div class="form-group">
												<div class="form-line">
													<textarea rows="4" class="form-control no-resize">{{-- Basic without any additional modification classes --}}</textarea>
												</div>
											</div>
										</div>
										<div class="clearfix"></div>
									<div>

									<div class="modal-footer">
										<button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button>
										<button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
									</div>
								</div>
							</div>
						</div> {{-- modal --}}

					</div> {{-- body --}}	
				</div>
			</div>
		</div>


		<div class="block-header">
			<h2>Queueing</h2>
		</div>
		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						<h2>
							First Priority
						</h2>
					</div>
					<div class="body">
						<div class="row clearfix">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="header">
								</div>
								<div class="body">
									<div class="row">
										<div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
											<div class="panel-group" id="accordion_1" role="tablist" aria-multiselectable="true">

												<div class="panel panel-col-teal">
													<div class="panel-heading" role="tab" id="headingEleven_1">
														<h4 class="panel-title">
															<a role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseTwelve_1" aria-expanded="true" aria-controls="collapseTwelve_1">
																First Priority
															</a>
														</h4>
													</div>
													<div id="collapseTwelve_1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingEleven_1">
														<div class="panel-body">
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card position-absolute" id="div-patient-list">
																	<div class="header bg-grey">
																		<center>
																			<h5>
																				<b>BASIC TABLE w/ TEXT BOX</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$50</h3>
																		</div>
																		<div id="card-text">
																			<p>Basic with clickable function for patient information viewing only

																			</p>
																		</div>
																		<div id="card-footer">
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-brown">
																		<center>
																			<h5>
																				<b>Drag & Drop</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$75</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Allows the user to view the patient queued list and Drag and Drop patient list to view patients information
																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="visibility: hidden;">
																<div class="card" id="div-patient-list">
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-grey">
																		<center>
																			<h5>
																				<b>BASIC INPUT BOX</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$50</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Basic inputs without any additional modification classes
																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-brown">
																		<center>
																			<h5>
																				<b>ADVANCE</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$50</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Applied simple animation during clicking the text fields with floating labels
																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-deep-purple">
																		<center>
																			<h5>
																				<b>Plain Form</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$50</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Plain input without any additional modification classes
																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
														</div>
													</div>
												</div>

												<div class="panel panel-col-teal">
													<div class="panel-heading" role="tab" id="headingThirteen_1">
														<h4 class="panel-title">
															<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseThirteen_1" aria-expanded="false"
															   aria-controls="collapseThirteen_1">
																2nd Priority
															</a>
														</h4>
													</div>
													<div id="collapseThirteen_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThirteen_1">
														<div class="panel-body">
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card position-absolute" id="div-patient-list">
																	<div class="header bg-grey">
																		<center>
																			<h5>
																				<b>BASIC TABLE w/ TEXT BOX</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$50</h3>
																		</div>
																		<div id="card-text">
																			<p>Basic with clickable function for patient information viewing only

																			</p>
																		</div>
																		<div id="card-footer">
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-brown">
																		<center>
																			<h5>
																				<b>Drag & Drop</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$75</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Allows the user to view the patient queued list and Drag and Drop patient list to view patients information
																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="visibility: hidden;">
																<div class="card" id="div-patient-list">
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-grey">
																		<center>
																			<h5>
																				<b>BASIC INPUT BOX</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$50</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Basic inputs without any additional modification classes
																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-brown">
																		<center>
																			<h5>
																				<b>ADVANCE</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$50</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Applied simple animation during clicking the text fields with floating labels
																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-deep-purple">
																		<center>
																			<h5>
																				<b>Plain Form</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$50</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Plain input without any additional modification classes
																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
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
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="block-header">
			<h2>Schedule</h2>
		</div>
		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						<h2>
							Scheduling
						</h2>
					</div>
					<div class="body">
						<div class="row clearfix">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="header">
								</div>
								<div class="body">
									<div class="row">
										<div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
											<div class="panel-group" id="accordion_1" role="tablist" aria-multiselectable="true">

												<div class="panel panel-col-teal">
													<div class="panel-heading" role="tab" id="heading_14_1">
														<h4 class="panel-title">
															<a role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapse_14_1" aria-expanded="true" aria-controls="collapse_14_1">
																Patient
															</a>
														</h4>
													</div>
													<div id="collapse_14_1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading_14_1">
														<div class="panel-body">
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card position-absolute" id="div-patient-list">
																	<div class="header bg-grey">
																		<center>
																			<h5>
																				<b>Basic</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$50</h3>
																		</div>
																		<div id="card-text">
																			<p>Basic without any additional modification classes

																			</p>
																		</div>
																		<div id="card-footer">
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-brown">
																		<center>
																			<h5>
																				<b>Calendar</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$75</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Information will be displayed on table form and can be export to any File Type, Search, Previous/Next
																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
														</div>
													</div>
												</div>

												<div class="panel panel-col-teal">
													<div class="panel-heading" role="tab" id="heading_15_1">
														<h4 class="panel-title">
															<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapse_15_1" aria-expanded="false"
															   aria-controls="collapse_15_1">
																Clinic
															</a>
														</h4>
													</div>
													<div id="collapse_15_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_15_1">
														<div class="panel-body">
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-grey">
																		<center>
																			<h5>
																				<b>Basic</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$50</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Basic without any additional modification classes
																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-brown">
																		<center>
																			<h5>
																				<b>Calendar</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$75</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Information will be displayed on table form and can be export to any File Type, Search, Previous/Next
																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
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
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="block-header">
			<h2>Booking</h2>
		</div>
		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						<h2>
							Booking
						</h2>
					</div>
					<div class="body">
						<div class="row clearfix">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="header">
								</div>
								<div class="body">
									<div class="row">
										<div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
											<div class="panel-group" id="accordion_1" role="tablist" aria-multiselectable="true">

												<div class="panel panel-col-teal">
													<div class="panel-heading" role="tab" id="heading_16_1">
														<h4 class="panel-title">
															<a role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapse_16_1" aria-expanded="true" aria-controls="collapse_16_1">
																Booking
															</a>
														</h4>
													</div>
													<div id="collapse_16_1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading_16_1">
														<div class="panel-body">
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card position-absolute" id="div-patient-list">
																	<div class="header bg-grey">
																		<center>
																			<h5>
																				<b>Basic</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$50</h3>
																		</div>
																		<div id="card-text">
																			<p>Basic without any additional modification classes

																			</p>
																		</div>
																		<div id="card-footer">
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-brown">
																		<center>
																			<h5>
																				<b>Advance</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$75</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Applied simple animation during clicking the text fields with floating labels
																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="visibility: hidden;">
																<div class="card" id="div-patient-list">
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-grey">
																		<center>
																			<h5>
																				<b>Basic</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$50</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Basic without any additional modification classes
																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-brown">
																		<center>
																			<h5>
																				<b>Hover Rows</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$75</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Basic without any additional modification classes
																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-deep-purple">
																		<center>
																			<h5>
																				<b>Exported Table</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$99</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Can Export to any File Type, Search, Previous/Next
																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
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
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="block-header">
			<h2>Billing</h2>
		</div>
		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						{{-- <h2>
							Billing
						</h2> --}}
					</div>
					<div class="body">
						<div class="row clearfix">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="header">
								</div>
								<div class="body">
									<div class="row">
										<div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
											<div class="panel-group" id="accordion_1" role="tablist" aria-multiselectable="true">

												<div class="panel panel-col-teal">
													<div class="panel-heading" role="tab" id="heading_17_1">
														<h4 class="panel-title">
															<a role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapse_17_1" aria-expanded="true" aria-controls="collapse_17_1">
																Billing
															</a>
														</h4>
													</div>
													<div id="collapse_17_1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading_17_1">
														<div class="panel-body">
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-grey">
																		<center>
																			<h5>
																				<b>Basic</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$50</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Basic without any additional modification classes
																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-brown">
																		<center>
																			<h5>
																				<b>Hover Rows</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$75</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Basic without any additional modification classes
																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-deep-purple">
																		<center>
																			<h5>
																				<b>Exported Table</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$99</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Can Export to any File Type, Search, Previous/Next
																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
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
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						<h2>
							Inventory
						</h2>
					</div>
					<div class="body">
						<div class="row clearfix">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="header">
									{{-- <h2>Stock-in</h2> --}}
								</div>
								<div class="body">
									<div class="row">
										<div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
											<div class="panel-group" id="accordion_1" role="tablist" aria-multiselectable="true">

												<div class="panel panel-col-teal">
													<div class="panel-heading" role="tab" id="heading_19_1">
														<h4 class="panel-title">
															<a role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapse_19_1" aria-expanded="true" aria-controls="collapse_19_1">
																Stock-in
															</a>
														</h4>
													</div>
													<div id="collapse_19_1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading_19_1">
														<div class="panel-body">
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card position-absolute" id="div-patient-list">
																	<div class="header bg-grey">
																		<center>
																			<h5>
																				<b>Basic Input</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$50</h3>
																		</div>
																		<div id="card-text">
																			<p>Basic without any additional modification classes

																			</p>
																		</div>
																		<div id="card-footer">
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-brown">
																		<center>
																			<h5>
																				<b>Advance</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$75</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Applied simple animation during clicking the text fields with floating labels
																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="visibility: hidden;">
																<div class="card" id="div-patient-list">
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-grey">
																		<center>
																			<h5>
																				<b>Basic</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$50</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Basic without any additional modification classes
																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-brown">
																		<center>
																			<h5>
																				<b>Hover Rows</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$75</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Basic without any additional modification classes
																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-deep-purple">
																		<center>
																			<h5>
																				<b>Exported Table</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$99</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Can Export to any File Type, Search, Previous/Next
																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
														</div>
													</div>
												</div>

												<div class="panel panel-col-teal">
													<div class="panel-heading" role="tab" id="heading_20_1">
														<h4 class="panel-title">
															<a role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapse_20_1" aria-expanded="true" aria-controls="collapse_20_1">
																Stock-out
															</a>
														</h4>
													</div>
													<div id="collapse_20_1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading_20_1">
														<div class="panel-body">
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card position-absolute" id="div-patient-list">
																	<div class="header bg-grey">
																		<center>
																			<h5>
																				<b>Basic Input</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$50</h3>
																		</div>
																		<div id="card-text">
																			<p>Basic without any additional modification classes

																			</p>
																		</div>
																		<div id="card-footer">
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-brown">
																		<center>
																			<h5>
																				<b>Advance</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$75</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Applied simple animation during clicking the text fields with floating labels
																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="visibility: hidden;">
																<div class="card" id="div-patient-list">
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-grey">
																		<center>
																			<h5>
																				<b>Basic</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$50</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Basic without any additional modification classes
																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-brown">
																		<center>
																			<h5>
																				<b>Hover Rows</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$75</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Basic without any additional modification classes
																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-deep-purple">
																		<center>
																			<h5>
																				<b>Exported Table</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$99</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Can Export to any File Type, Search, Previous/Next
																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
														</div>
													</div>
												</div>

												<div class="panel panel-col-teal">
													<div class="panel-heading" role="tab" id="heading_21_1">
														<h4 class="panel-title">
															<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapse_21_1" aria-expanded="false"
															   aria-controls="collapse_21_1">
																Sold Items
															</a>
														</h4>
													</div>
													<div id="collapse_21_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_21_1">
														<div class="panel-body">
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-grey">
																		<center>
																			<h5>
																				<b>Basic</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$50</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Basic without any additional modification classes
																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-brown">
																		<center>
																			<h5>
																				<b>Hover Rows</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$75</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Basic without any additional modification classes
																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-deep-purple">
																		<center>
																			<h5>
																				<b>Exported Table</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$99</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Can Export to any File Type, Search, Previous/Next
																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
														</div>
													</div>
												</div>

												<div class="panel panel-col-teal">
													<div class="panel-heading" role="tab" id="heading_22_1">
														<h4 class="panel-title">
															<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapse_22_1" aria-expanded="false"
															   aria-controls="collapse_22_1">
																Return Items
															</a>
														</h4>
													</div>
													<div id="collapse_22_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_22_1">
														<div class="panel-body">
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card position-absolute" id="div-patient-list">
																	<div class="header bg-grey">
																		<center>
																			<h5>
																				<b>Basic Input</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$50</h3>
																		</div>
																		<div id="card-text">
																			<p>Basic without any additional modification classes

																			</p>
																		</div>
																		<div id="card-footer">
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-brown">
																		<center>
																			<h5>
																				<b>Advance</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$75</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Applied simple animation during clicking the text fields with floating labels
																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="visibility: hidden;">
																<div class="card" id="div-patient-list">
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-grey">
																		<center>
																			<h5>
																				<b>Basic</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$50</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Basic without any additional modification classes
																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-brown">
																		<center>
																			<h5>
																				<b>Hover Rows</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$75</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Basic without any additional modification classes
																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-deep-purple">
																		<center>
																			<h5>
																				<b>Exported Table</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$99</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Can Export to any File Type, Search, Previous/Next
																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
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
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="block-header">
			<h2>Messaging</h2>
		</div>
		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						{{-- <h2>
							Billing
						</h2> --}}
					</div>
					<div class="body">
						<div class="row clearfix">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="header">
								</div>
								<div class="body">
									<div class="row">
										<div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
											<div class="panel-group" id="accordion_1" role="tablist" aria-multiselectable="true">
											
												<div class="panel panel-col-teal">
													<div class="panel-heading" role="tab" id="heading_23_1">
														<h4 class="panel-title">
															<a role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapse_23_1" aria-expanded="true" aria-controls="collapse_23_1">
																Messaging
															</a>
														</h4>
													</div>
													<div id="collapse_23_1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading_23_1">
														<div class="panel-body">
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card position-absolute" id="div-patient-list">
																	<div class="header bg-grey">
																		<center>
																			<h5>
																				<b>Attach File</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$50</h3>
																		</div>
																		<div id="card-text">
																			<p>You can activate for the attachedment to your messaging canvas

																			</p>
																		</div>
																		<div id="card-footer">
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-blue-grey">
																		<center>
																			<h5>
																				<b>Sent to E-Mail</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$75</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Basic inputs without any additional modification classes
																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-purple">
																		<center>
																			<h5>
																				<b>Attach Images</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$50</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				You can activate for image attachedment in your messaging canvas
																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-deep-purple">
																		<center>
																			<h5>
																				<b>Sent to SMS</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$75</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Basic inputs without any additional modification classes

																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
														</div>
													</div>
												</div>

												<div class="panel panel-col-teal">
													<div class="panel-heading" role="tab" id="heading_24_1">
														<h4 class="panel-title">
															<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapse_24_1" aria-expanded="false"
															   aria-controls="collapse_24_1">
																Email
															</a>
														</h4>
													</div>
													<div id="collapse_24_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_24_1">
														<div class="panel-body">
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card position-absolute" id="div-patient-list">
																	<div class="header bg-grey">
																		<center>
																			<h5>
																				<b>Attach File</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$50</h3>
																		</div>
																		<div id="card-text">
																			<p>You can activate for the attachedment to your messaging canvas

																			</p>
																		</div>
																		<div id="card-footer">
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-blue-grey">
																		<center>
																			<h5>
																				<b>Sent to E-Mail</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$75</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Basic inputs without any additional modification classes
																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-purple">
																		<center>
																			<h5>
																				<b>Attach Images</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$50</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				You can activate for image attachedment in your messaging canvas
																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-deep-purple">
																		<center>
																			<h5>
																				<b>Sent to SMS</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$75</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Basic inputs without any additional modification classes

																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
														</div>
													</div>
												</div>

												<div class="panel panel-col-teal">
													<div class="panel-heading" role="tab" id="heading_25_1">
														<h4 class="panel-title">
															<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapse_25_1" aria-expanded="false"
															   aria-controls="collapse_25_1">
																SMS
															</a>
														</h4>
													</div>
													<div id="collapse_25_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_25_1">
														<div class="panel-body">
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card position-absolute" id="div-patient-list">
																	<div class="header bg-grey">
																		<center>
																			<h5>
																				<b>Attach File</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$50</h3>
																		</div>
																		<div id="card-text">
																			<p>You can activate for the attachedment to your messaging canvas

																			</p>
																		</div>
																		<div id="card-footer">
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-blue-grey">
																		<center>
																			<h5>
																				<b>Sent to E-Mail</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$75</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Basic inputs without any additional modification classes
																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-purple">
																		<center>
																			<h5>
																				<b>Attach Images</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$50</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				You can activate for image attachedment in your messaging canvas
																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-deep-purple">
																		<center>
																			<h5>
																				<b>Sent to SMS</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$75</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Basic inputs without any additional modification classes

																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
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
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="block-header">
			<h2>Manage Report</h2>
		</div>
		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						{{-- <h2>
							Billing
						</h2> --}}
					</div>

					<div class="body">
						<div class="row clearfix">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="header">
									<h2>Financial</h2>
								</div>
								<div class="body">
									<div class="row">
										<div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
											<div class="panel-group" id="accordion_1" role="tablist" aria-multiselectable="true">
											
												<div class="panel panel-col-teal">
													<div class="panel-heading" role="tab" id="heading_26_1">
														<h4 class="panel-title">
															<a role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapse_26_1" aria-expanded="true" aria-controls="collapse_26_1">
																Financial Statement
															</a>
														</h4>
													</div>
													<div id="collapse_26_1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading_26_1">
														<div class="panel-body">
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-deep-purple">
																		<center>
																			<h5>
																				<b>Exported Table</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$99</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Can Export to any File Type, Search, Previous/Next
																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
														</div>
													</div>
												</div>

												<div class="panel panel-col-teal">
													<div class="panel-heading" role="tab" id="heading_27_1">
														<h4 class="panel-title">
															<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapse_27_1" aria-expanded="false"
															   aria-controls="collapse_27_1">
																Free of Charges
															</a>
														</h4>
													</div>
													<div id="collapse_27_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_27_1">
														<div class="panel-body">
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-deep-purple">
																		<center>
																			<h5>
																				<b>Exported Table</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$99</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Can Export to any File Type, Search, Previous/Next
																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
														</div>
													</div>
												</div>

												<div class="panel panel-col-teal">
													<div class="panel-heading" role="tab" id="heading_28_1">
														<h4 class="panel-title">
															<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapse_28_1" aria-expanded="false"
															   aria-controls="collapse_28_1">
																Comparison Report
															</a>
														</h4>
													</div>
													<div id="collapse_28_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_28_1">
														<div class="panel-body">
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-deep-purple">
																		<center>
																			<h5>
																				<b>Exported Table</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$99</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Can Export to any File Type, Search, Previous/Next
																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
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
						</div>

						<div class="row clearfix">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="header">
									<h2>Inventory</h2>
								</div>
								<div class="body">
									<div class="row">
										<div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
											<div class="panel-group" id="accordion_1" role="tablist" aria-multiselectable="true">
											
												<div class="panel panel-col-teal">
													<div class="panel-heading" role="tab" id="heading_29_1">
														<h4 class="panel-title">
															<a role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapse_29_1" aria-expanded="true" aria-controls="collapse_29_1">
																Stock in
															</a>
														</h4>
													</div>
													<div id="collapse_29_1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading_29_1">
														<div class="panel-body">
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-deep-purple">
																		<center>
																			<h5>
																				<b>Exported Table</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$99</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Can Export to any File Type, Search, Previous/Next
																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
														</div>
													</div>
												</div>

												<div class="panel panel-col-teal">
													<div class="panel-heading" role="tab" id="heading_30_1">
														<h4 class="panel-title">
															<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapse_30_1" aria-expanded="false"
															   aria-controls="collapse_30_1">
																Stock out
															</a>
														</h4>
													</div>
													<div id="collapse_30_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_30_1">
														<div class="panel-body">
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-deep-purple">
																		<center>
																			<h5>
																				<b>Exported Table</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$99</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Can Export to any File Type, Search, Previous/Next
																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
														</div>
													</div>
												</div>

												<div class="panel panel-col-teal">
													<div class="panel-heading" role="tab" id="heading_31_1">
														<h4 class="panel-title">
															<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapse_31_1" aria-expanded="false"
															   aria-controls="collapse_31_1">
																Sold Items
															</a>
														</h4>
													</div>
													<div id="collapse_31_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_31_1">
														<div class="panel-body">
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-deep-purple">
																		<center>
																			<h5>
																				<b>Exported Table</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$99</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Can Export to any File Type, Search, Previous/Next
																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
														</div>
													</div>
												</div>

												<div class="panel panel-col-teal">
													<div class="panel-heading" role="tab" id="heading_32_1">
														<h4 class="panel-title">
															<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapse_32_1" aria-expanded="false"
															   aria-controls="collapse_32_1">
																Return Items
															</a>
														</h4>
													</div>
													<div id="collapse_32_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_32_1">
														<div class="panel-body">
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-deep-purple">
																		<center>
																			<h5>
																				<b>Exported Table</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$99</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Can Export to any File Type, Search, Previous/Next
																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
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

						<div class="row clearfix">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="header">
									<h2>Patients</h2>
								</div>
								<div class="body">
									<div class="row">
										<div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
											<div class="panel-group" id="accordion_1" role="tablist" aria-multiselectable="true">
											
												<div class="panel panel-col-teal">
													<div class="panel-heading" role="tab" id="heading_33_1">
														<h4 class="panel-title">
															<a role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapse_33_1" aria-expanded="true" aria-controls="collapse_33_1">
																Patient Summary
															</a>
														</h4>
													</div>
													<div id="collapse_33_1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading_33_1">
														<div class="panel-body">
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-deep-purple">
																		<center>
																			<h5>
																				<b>Exported Table</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$99</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Can Export to any File Type, Search, Previous/Next
																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
														</div>
													</div>
												</div>

												<div class="panel panel-col-teal">
													<div class="panel-heading" role="tab" id="heading_34_1">
														<h4 class="panel-title">
															<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapse_34_1" aria-expanded="false"
															   aria-controls="collapse_34_1">
																Consultation Summary
															</a>
														</h4>
													</div>
													<div id="collapse_34_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_34_1">
														<div class="panel-body">
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-deep-purple">
																		<center>
																			<h5>
																				<b>Exported Table</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$99</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Can Export to any File Type, Search, Previous/Next
																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
																</div>
															</div>
														</div>
													</div>
												</div>

												<div class="panel panel-col-teal">
													<div class="panel-heading" role="tab" id="heading_35_1">
														<h4 class="panel-title">
															<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapse_35_1" aria-expanded="false"
															   aria-controls="collapse_35_1">
																Schedule Summary
															</a>
														</h4>
													</div>
													<div id="collapse_35_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_35_1">
														<div class="panel-body">
															<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
																<div class="card" id="div-patient-list">
																	<div class="header bg-deep-purple">
																		<center>
																			<h5>
																				<b>Exported Table</b>
																			</h5>
																		</center>
																	</div>
																	<center>
																		<div id="card-price">
																			<h3>$99</h3>
																		</div>
																		<div id="card-text">
																			<p>
																				Can Export to any File Type, Search, Previous/Next
																			</p>
																		</div>
																		<div id="card-footer"> 
																			<button class="btn btn-warning waves-effect btn-sm" data-toggle="modal" data-target="#updateContent">Change
																			</button>
																		</div>
																	</center>
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
						</div> 

					</div> {{-- body --}}

				</div>
			</div>
		</div>

	</div>

</section>



@endsection
