
	
@extends('doctor_portal.layouts.master')

@section('style')
	<!-- Calendar -->
		<link href="{{ URL::asset('AdminSB/css/fullcalendar.min.css')}}" rel="stylesheet">
		<link href="{{ URL::asset('AdminSB/css/calendar.css')}}" rel="stylesheet">
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
</head>

@section('body')
	<section class="content">
		<div class="container-fluid">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						<h2>Patient Information</h2>
					</div>
					<div class="body">
						<div class="row">
								<!-- LIST Medicine Profile -->
							<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
			                    <div class="card">
			                        <div class="header">
			                        	<input type="text" class="form-control date" placeholder="Search Patient">
			                        </div>
			                        <div class="body">
			                            <div class="list-group">
			                                <a href="patient-profile-schedule.html" class="list-group-item active">Cody Paloma Javier
			                                </a>
			                                <a href="patient-profile-schedule1.html" class="list-group-item">Kurt Kevin Nebril</a>
			                                <a href="javascript:void(0);" class="list-group-item">Loren Mae Gumban</a>
			                                <a href="javascript:void(0);" class="list-group-item">Apple Caponan</a>
			                                <a href="javascript:void(0);" class="list-group-item">Richmon Monteadora</a>
			                            </div>
			                        </div>
			                    </div>
			                </div>
						<!-- END LIST Medicine Profile -->
						<!-- Patient PROFILE -->
							<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
								<div class="card">
									<div class="header bg-grey">
										<h2>
											<center><h5>PATIENT SCHEDULES</h5></center>
										</h2>
									</div>
									<div class="row clearfix">
                						<!-- Basic Examples -->
						                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						                   <div class="body">
				                               <div class="row">
				                               		<div class="header">
				                               			<center>
				                               			<span>Modes: </span>
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

						                                <span>Clinic: </span>
				                               			<div class="btn-group">
						                                    <button type="button" style="width: 100%;" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						                                        Butuan Doctors <span class="caret"></span>
						                                    </button>
						                                    <ul class="dropdown-menu">
						                                        <li><a href="javascript:void(0);">Butuan Doctors</a></li>
						                                        <li><a href="javascript:void(0);">Santos</a></li>
						                                        <li><a href="javascript:void(0);">123</a></li>
						                                        <li><a href="javascript:void(0);">Char123</a></li>
						                                    </ul>
						                                </div>

						                                 <span>Filter: </span>
				                               			<div class="btn-group">
						                                    <button type="button" style="width: 80%;" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						                                        Upcoming Transactions <span class="caret"></span>
						                                    </button>
						                                    <ul class="dropdown-menu">
						                                        <li><a href="javascript:void(0);">Butuan Doctors</a></li>
						                                        <li><a href="javascript:void(0);">Santos</a></li>
						                                        <li><a href="javascript:void(0);">123</a></li>
						                                        <li><a href="javascript:void(0);">Char123</a></li>
						                                    </ul>
						                                </div>
						                                </center>
				                               		</div>
				                               		<!-- CALENDAR -->
													<div class="col-lg-12">
													    <div class="card-body b-l calender-sidebar">
													        <div id="calendar"></div>
													    </div>
													</div>
													<!-- END CALENDAR -->
				                               </div> 
						                        </div>
						                </div>
               							<!-- #END# Basic Examples -->
            						</div>
								</div>
								@include('doctor_portal.profile.layouts.buttons')
							</div>
							<!-- END Patient PROFILE -->

				</div>
				  <!-- Medicine profile modal -->
			<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-body" >
							<div class="col-sm-3 col-md-3 col-lg-3 col-xs-3">
								<img src="{{ URL::asset('AdminSB/images/secretary.jpg') }}" class="img-responsive">
							</div>
							<div class="col-sm-9 col-md-9 col-lg-9 col-xs-9">
								<h3 style="color: #00ace6">Janine B. Gonzaga.</h3>
								<h4 style="color: #00ace6">Secretary, Dr. Adrian 123 here QWERTY, ASDFG</h4>
								<h5 style="color: #ff751a;">contact #&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;<input type="text_fields" name=""></h5>
								<h5 style="color: #ff751a;">email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;<input type="text_fields" name=""></h5>
								<h5 style="color: #ff751a;">birth date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;<input type="text_fields" name=""></h5>
								<h5 style="color: #ff751a;">address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;<input type="text_fields" name=""></h5>
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
			<!-- END Medicine profile modal -->

			</div>	            
		</div>
	</section>
	@section('javascript')
		<script src="{{ URL::asset('AdminSB/js/moment.min.js')}}"></script>
		<script src="{{ URL::asset('AdminSB/js/fullcalendar.min.js')}}"></script>
		<script src="{{ URL::asset('AdminSB/js/cal-init.js')}}"></script>
	@endsection
@endsection