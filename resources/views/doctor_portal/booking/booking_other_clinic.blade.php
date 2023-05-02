@extends('doctor_portal.layouts.master')

@section('style')
<!-- Calendar -->
<link href="{{ URL::asset('AdminSB/css/fullcalendar.min.css')}}" rel="stylesheet">
<link href="{{ URL::asset('AdminSB/css/calendar.css')}}" rel="stylesheet">
@endsection

@section('body')
	<section class="content">
		<div class="container-fluid">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						<h2>BOOKING</h2>
					</div>
					<div class="body">

						<div class="row clearfix">
							<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
								<div class="card">
									<div class="header">
										 <h5>Clinic List</h5>
									</div>
									<div class="body">
										<div class="list-group">
											<a href="#" class="list-group-item active">AMA Clinic123
											</a>
											<a href="#" class="list-group-item">Clinic 1 </a>
											<a href="javascript:void(0);" class="list-group-item">Butuan Doctors</a>
										</div>
									</div>
								</div>
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
							<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
								<div class="card">
									<div class="header">
										<h4>Patient</h4>
									</div>
									<div class="body">
										<div class="row clearfix">
                                            <p class="col-sm-4" style="margin-bottom: 0px;">First Name</p>
                                            <p class="col-sm-3" style="margin-bottom: 0px;">Middle Name</p>
                                            <p class="col-sm-3" style="margin-bottom: 0px;">Last Name</p>
                                            <p class="col-sm-2" style="margin-bottom: 0px;">Suffix</p>
                                        </div>
                                        <div class="row clearfix">
                                        	<div class="col-sm-4">
                                                <input type="text" class="form-control col-md-4" name=""> 
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control col-md-4" name=""> 
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control col-md-4" name=""> 
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control col-md-4" name=""> 
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                        	<p class="col-sm-8" style="margin-bottom: 0px;">Address</p>
                                        	<p class="col-sm-2" style="margin-bottom: 0px;">Date</p>
                                        	<p class="col-sm-2" style="margin-bottom: 0px;">Time</p>
                                        </div>
                                        <div class="row clearfix">
                                        	<div class="col-sm-8">
                                                <input type="text" class="form-control col-md-4" name=""> 
                                            </div>
                                            <div class="col-sm-2">
			                                    <div class="form-group">
			                                        <div class="form-line">
			                                            <input type="text" class="datepicker form-control" placeholder="Please choose a date...">
			                                        </div>
			                                    </div>
                                			</div>
			                                <div class="col-sm-2">
			                                    <div class="form-group">
			                                        <div class="form-line">
			                                            <input type="text" class="timepicker form-control" placeholder="Please choose a time...">
			                                        </div>
			                                    </div>
			                                </div>
                                        </div>
                                        <div class="row clearfix">
                                        	<p class="col-sm-12" style="margin-bottom: 0px;">Initial Symptoms</p>
                                        </div>
                                        <div class="row clearfix">
                                        	<input type="textarea" class="form-control" style="height: 80px; margin-bottom: 5px;" name="">
                                        </div>
                                        <div class="footer row clearfix">
                                        	<button class="btn btn-grey">
                                        		Search if patient already exists
                                        	</button>
                                        	<button class="btn btn-primary pull-right" style="width: 10%">
                                        		BOOK
                                        	</button>
                                        </div>
									</div>
								</div>
								<div class="row">
								
								<!-- Patient PROFILE -->
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
							</div>
							</div>	
						</div>
				</div>

			</div>	            
		</div>
	</section>
	@section('javascript')
		 <!-- Calendar Js -->
		<script src="{{ URL::asset('AdminSB/js/moment.min.js')}}"></script>
		<script src="{{ URL::asset('AdminSB/js/fullcalendar.min.js')}}"></script>
		<script src="{{ URL::asset('AdminSB/js/cal-init.js')}}"></script>
	@endsection
@endsection