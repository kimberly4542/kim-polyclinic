@extends('admin_portal.home')
	<style>
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
</head>
@section('body')
	<section class="content">
		<div class="container-fluid">
			<div class="block-header">
				<h2>DASHBOARD</h2>
			</div>

			<!-- Widgets -->
			<div class="row clearfix">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="card">
						<div class="header">
							<h2>
								MULTIPLE ITEMS TO BE OPEN
								<small>Don't use <code>data-parent</code> attributes</small>
							</h2>
							<ul class="header-dropdown m-r--5">
								<li class="dropdown">
									<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
										<i class="material-icons">more_vert</i>
									</a>
									<ul class="dropdown-menu pull-right">
										<li><a href="javascript:void(0);">Action</a></li>
										<li><a href="javascript:void(0);">Another action</a></li>
										<li><a href="javascript:void(0);">Something else here</a></li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="body">
							<div class="row clearfix">

								<div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
									<div class="panel-group full-body" id="accordion_19" role="tablist" aria-multiselectable="true">
										<div class="panel panel-col-pink">
											<div class="panel-heading" role="tab" id="headingOne_19">
												<h4 class="panel-title">
													<a role="button" data-toggle="collapse" href="#collapseOne_19" aria-expanded="true" aria-controls="collapseOne_19">
														<i class="material-icons">perm_contact_calendar</i> Collapsible Group
														Item #1
													</a>
												</h4>
											</div>
											<div id="collapseOne_19" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_19">
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
										<div class="panel panel-col-cyan">
											<div class="panel-heading" role="tab" id="headingTwo_19">
												<h4 class="panel-title">
													<a class="collapsed" role="button" data-toggle="collapse" href="#collapseTwo_19" aria-expanded="false" aria-controls="collapseTwo_19">
														<i class="material-icons">cloud_download</i> Collapsible Group Item
														#2
													</a>
												</h4>
											</div>
											<div id="collapseTwo_19" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_19">
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
											<div class="panel-heading" role="tab" id="headingThree_19">
												<h4 class="panel-title">
													<a class="collapsed" role="button" data-toggle="collapse" href="#collapseThree_19" aria-expanded="false" aria-controls="collapseThree_19">
														<i class="material-icons">contact_phone</i> Collapsible Group Item
														#3
													</a>
												</h4>
											</div>
											<div id="collapseThree_19" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree_19">
												<div class="panel-body">
													Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
													non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
													eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
													single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
													helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
													Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
													raw denim aesthetic synth nesciunt you probably haven't heard of them
													accusamus labore sustainable VHS.
												</div>
											</div>
										</div>
										<div class="panel panel-col-orange">
											<div class="panel-heading" role="tab" id="headingFour_19">
												<h4 class="panel-title">
													<a class="collapsed" role="button" data-toggle="collapse" href="#collapseFour_19" aria-expanded="false" aria-controls="collapseFour_19">
														<i class="material-icons">folder_shared</i> Collapsible Group Item
														#4
													</a>
												</h4>
											</div>
											<div id="collapseFour_19" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour_19">
												<div class="panel-body">
													Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
													non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
													eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
													single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
													helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
													Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
													raw denim aesthetic synth nesciunt you probably haven't heard of them
													accusamus labore sustainable VHS.
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
	</section>
	@endsection
</body>

</html>
