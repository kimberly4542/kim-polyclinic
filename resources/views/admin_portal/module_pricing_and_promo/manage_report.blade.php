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
		{{-- <div class="col-lg-1 col-md-2 col-sm-4 col-xs-4" style="padding-left: 0px; margin-bottom: 20px;">
			<a type="button" href="javascript:history.back()" class="btn bg-orange btn-block btn-lg waves-effect"> 
				<i class="material-icons" >assignment_return</i>
				<span>Back</span> 
			</a>
		</div>
		<div class="col-lg-11 col-md-10 col-sm-8 col-xs-8" style="padding-left: 0px; margin-bottom: 20px; visibility: hidden;">
			<button class="btn btn-warning btn-block btn-lg waves-effect">BACK</button>
		</div> --}}
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0px;">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding-left: 0px;">
				<div class="body">
					<ol class="breadcrumb breadcrumb-col-deep-orange bg-white">
						<li>
							<a href="{{ url('module_pricing_and_promo/module_pricing') }}">
								<i class="material-icons">loyalty</i>
								<span>Module Pricing</span>
							</a>
						</li>
						<li ">
							<a href="#">
								<i class="material-icons">poll</i>
								<span>Manage Report</span>
							</a>
						</li>
					</ol>
				</div>
				
			</div>
		</div>

		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						<h2>Financial</h2>
					</div>
					<div class="body">
						<div class="row clearfix">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

								<div class="row">
									<div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
										<div class="panel-group" id="accordion_1" role="tablist" aria-multiselectable="true">
										
											<div class="panel panel-col-teal">
												<div class="panel-heading" role="tab" id="heading_26_1">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapse_26_1" aria-expanded="true" aria-controls="collapse_26_1">
															Financial Statement
														</a>
													</h4>
												</div>
												<div id="collapse_26_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_26_1">
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

						<div class="row clearfix">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="header">
									<h2>Inventory</h2>
								</div>
								<div class="row">
									<div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
										<div class="panel-group" id="accordion_1" role="tablist" aria-multiselectable="true">
										
											<div class="panel panel-col-teal">
												<div class="panel-heading" role="tab" id="heading_29_1">
													<h4 class="panel-title">
														<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapse_29_1" aria-expanded="true" aria-controls="collapse_29_1">
															Stock in
														</a>
													</h4>
												</div>
												<div id="collapse_29_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_29_1">
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
															<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapse_33_1" aria-expanded="true" aria-controls="collapse_33_1">
																Patient Summary
															</a>
														</h4>
													</div>
													<div id="collapse_33_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_33_1">
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

						<div class="modal fade" id="updateContent" tabindex="-1" role="dialog">
							<div class="modal-dialog modal-md" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title" id="largeModalLabel">Update Module Pricing and Information</h4>
									</div>
									
									<div class="modal-body">
										<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
											<img class="img-responsive thumbnail" src="{{ URL::asset('images/user.png')}}">
										</div>
										<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
											<div class="form-group">
												<div class="form-line disabled">
													<input type="text" class="form-control" placeholder="BASIC" disabled>
												</div>
											</div><br>
											<div class="form-group form-float">
												
												<div class="form-line">
													<input type="text" class="form-control" value="BASIC">
													<label class="form-label">Type:</label>
												</div><br>
												<div class="form-line">
													<input type="text" class="form-control" value="50">
													<label class="form-label">Price:</label>
												</div>
											</div>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<label>Description:</label>
											<div class="form-group">
												<div class="form-line">
													<textarea rows="4" class="form-control no-resize">Basic without any additional modification classes</textarea>
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

					</div>	{{-- body --}}	
				</div>
			</div>
		</div>
	</div>

</section>



@endsection
