@extends('doctor_portal.layouts.master')
@section('style')
<style>
	
</style>
@endsection

@section('body')
	<section class="content">
		<div class="container-fluid">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						<h2>Patient Information</h2>
					</div>
					<div class="body">
						<div class="row clearfix">
							<!-- LIST Patient -->
							<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
								<div class="card">
									{{-- <div class="header">
										 <div class="input-group">
											<span class="input-group-addon">
												<i class="material-icons">search</i>
											</span>
											<div class="form-line">
												<input type="text" class="form-control date" placeholder="Search Patient">
											</div>
										</div>
									</div> --}}
									<div class="body">
									<div class="list-group" id="redemption">
											@if(count($query) > 0)
												@foreach($query as $data)
													<button class="list-group-item"
													data-fname="{{ $data->fname }}"
													data-mname="{{ $data->mname }}"
													data-lname="{{ $data->lname }}"
													data-gender="{{ $data->gender }}"
													data-suffix="{{ $data->suffix }}"
													data-birth_date="{{ $data->birth_date }}"
													data-contact_no="{{ $data->contact_no }}"
													data-address1="{{ $data->address1 }}"
													data-address2="{{ $data->address2 }}"
													data-citizenship="{{ $data->citizenship }}"
													data-email="{{ $data->email }}"
													data-civil_status="{{ $data->civil_status }}"
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
							</div>
						<!-- END LIST Patient -->
						<!-- Patient PROFILE -->
							<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
								<div class="card">
									<div class="header bg-grey">
										<h2>
											<center><h5>CERTIFICATES</h5></center>
										</h2>
									</div>
									<div class="body" style="padding: 0px; margin-top: 5px;">
										<div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
											<div class="panel-group" id="accordion_1" role="tablist" aria-multiselectable="true">
												<div class="panel panel-primary">
													<div class="panel-heading" role="tab" id="headingOne_1">
														<h4 class="panel-title">
															<a role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseOne_1" aria-expanded="true" aria-controls="collapseOne_1">
																<i class="material-icons">perm_contact_calendar</i>  
																<p>Consultation Date: December 22, 2017</p>
															</a>
														</h4>
													</div>
													<div id="collapseOne_1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_1">
														<div class="panel-body">
															<div class="body" id="printable">
																<div class="row" style="padding: 0px;">
																	<div>
																	  <center>
																	  	<img src="{{ URL::asset('AdminSB/images/4Cert.png') }}" class="img-responsive">
																	  	<h2>POLYCLINIC MANAGEMENT SYSTEM</h2>
																	  </center>
																	</div>
																	<br>
																  	<div>
																	  	<center>
																	  		<p style="font-size: 30px;">
																	  		This is to certify that the individual known as ____ has undergone a thorough medical examination conducted at ClinicName, Address on Date by Doctor in currently suffering from diagnosis.
																	  		</p>
																	  	</center>
																  	</div>
																	  <div>
																	  	<center>
																	  		<p style="font-size: 20px; margin-top: 12px;"><br>
																	  		The examineer has advised that for the sake of the individual's overall health, He should be allowed absence from her company duties for 7 days.
																	  		</p>
																	  	</center>
																	  </div>
																	<br>
																	<br>

																	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 15px; padding: 0px; margin-bottom: 0px;">
																		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="">
																			<center>
																				<h3 style="margin-bottom: 2px;" name="name">Name</h3>
																				<h4>Medical Officer</h4><br>
																			</center>
																		</div>
																		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
																			<center>
																				<h3 style="margin-bottom: 2px;" name="DocName">Name</h3>
																				<h4>Doctor-in-Charge</h4><br>
																			</center>
																		</div>
																	</div>
																</div>
																
															</div>
															<div class="pull-right">
																<button class="btn btn-primary waves" onclick="printContent('printable')" style="margin: 0px;">PRINT</button>
														</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								@include('doctor_portal.profile.layouts.buttons')
							</div>
						</div>
					</div>
				</div>
			<script>
function printContent(el){
    var restorepage = document.body.innerHTML;
    var printcontent = document.getElementById(el).innerHTML;
    document.body.innerHTML = printcontent;
    window.print();
    document.body.innerHTML = restorepage;
}
</script>
@section('javascript')
			<script>
				$(document).ready(function() {
					$("#redemption button").on("click", function (e) {
						var fname = $(this).attr("data-fname");
						var mname = $(this).attr("data-mname");
						var lname = $(this).attr("data-lname");
						var suffix = $(this).attr("data-suffix");
						var birth_date = $(this).attr("data-birth_date");
						var contact_no = $(this).attr("data-contact_no");
						var address1 = $(this).attr("data-address1");
						var address2 = $(this).attr("data-address2");
						var citizenship = $(this).attr("data-citizenship");
						var email = $(this).attr("data-email");
						var civil_status = $(this).attr("data-civil_status");
						var gender = $(this).attr("data-gender");

						$('#fname').html(fname);
						$('#mname').html(mname);
						$('#lname').html(lname);
						$('#suffix').html(suffix);
						$('#birth_date').html(birth_date);
						$('#contact_no').html(contact_no);
						$('#address1').html(address1);
						$('#address2').html(address2);
						$('#citizenship').html(citizenship);
						$('#email').html(email);
						$('#civil_status').html(civil_status);
						$('#gender').html(gender);

					});
				});
			</script>
		@endsection
		</div>	            
		</div>
	</section>
@endsection