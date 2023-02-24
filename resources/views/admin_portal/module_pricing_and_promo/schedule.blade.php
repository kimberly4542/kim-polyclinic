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
								<i class="material-icons">schedule</i>
								<span>Scheduling</span>
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
						<h2>
							Schedule
						</h2>
					</div>
					{{-- Collapse Start --}}
					<div class="body">
						<div class="row clearfix">
							<div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
								<div class="panel-group" id="accordion_1" role="tablist" aria-multiselectable="true">

									<div class="panel panel-col-teal">
										<div class="panel-heading" role="tab" id="headingOne_1">
											<h4 class="panel-title">
												<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseOne_1" aria-expanded="true" aria-controls="collapseOne_1">
													Patient
												</a>
											</h4>
										</div>
										<div id="collapseOne_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne_1">
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
										<div class="panel-heading" role="tab" id="headingTwo_1">
											<h4 class="panel-title">
												<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseTwo_1" aria-expanded="false"
												   aria-controls="collapseTwo_1">
													Clinic
												</a>
											</h4>
										</div>
										<div id="collapseTwo_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_1">
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
						</div> {{-- row clearfix --}}

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
