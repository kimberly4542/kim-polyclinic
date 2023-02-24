@extends('secretary_portal.layouts.master')

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
						<h2>SCHEDULE</h2>
					</div>
					<div class="body">
						<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-sx-12">
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
											<a href="patient-profile.html" class="list-group-item active">Cody Paloma Javier
											</a>
											<a href="patient-profile1.html" class="list-group-item">Kurt Kevin Nebril</a>
											<a href="javascript:void(0);" class="list-group-item">Loren Mae Gumban</a>
											<a href="javascript:void(0);" class="list-group-item">Apple Caponan</a>
											<a href="javascript:void(0);" class="list-group-item">Richmon Monteadora</a>
										</div>
									</div>
								</div>	
							</div>

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
					                    <!-- #END# Basic Examples -->
						            </div>
           							
        						</div>
							</div>
						</div>

					</div> <!-- row -->

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