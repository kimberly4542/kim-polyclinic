@extends('secretary_portal.layouts.master')
@section('style')
<style>
	
</style>
@endsection

@section('body')
	<section class="content">
		<div class="container-fluid">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="modal-header">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding-left: 0px; margin-top: 10px;">
							<h4 class="modal-title" id="largeModalLabel">Certificate</h4>
						</div>

						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
							<a href="javascript:history.back()" class="btn btn-warning waves-effect pull-right modal-header-button"><p style="margin-top:10px;">Back</p>
							</a>
						</div>
					</div>
					<div class="body">
						<div class="row clearfix">
							<div class="col-lg-12 col-md-9 col-sm-12 col-xs-12">
								<div class="card">
									<div class="header bg-grey">
										<h2>
											<center><h5>CERTIFICATES</h5></center>
										</h2>
									</div>
									<div class="table-responsive" style="width: 100%">
									<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
										<thead>
											<tr>
												<th>Doctor Name</th>
												<th>Address</th>
												<th>Clinic Name</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											@if(count($consultationQuery) > 0 )
												@foreach($consultationQuery as $data)
													 <tr>
														<td> {{ $subscriberQuery->fname }} {{ $subscriberQuery->mname }} {{ $subscriberQuery->lname }}</td>
														<td> {{ $clinicQuery->address }} </td>
														<td> {{ $clinicQuery->clinic_name }} </td>
														<td>
															<button class="btn btn-primary waves-effect" 
																data-toggle="modal" 
																data-target="#ViewCert"
																data-patient_name="{{ $patientQuery->fname}} {{ $patientQuery->mname}} {{ $patientQuery->lname}}"
																data-subscriber_name="{{ $subscriberQuery->fname }} {{ $subscriberQuery->mname }} {{ $subscriberQuery->lname }}"
																data-clinic_name="{{ $clinicQuery->clinic_name }}"
																data-clinic_address="{{ $clinicQuery->address }}"
																data-consultation_date="{{ $consultationModel->getConsultationDate($data->consultation_id) }}"
																data-diagnosis="{{ $consultationModel->getConsultation($data->consultation_id) }}">
																View Certificate
															</button>
														</td>
													</tr>
												@endforeach
											@else
												<td>No Data found</td>
											@endif
										</tbody>
									</table>
								</div>
							</div>
						</div>
			<div class="modal fade" id="ViewCert" tabindex="-1" role="dialog">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h4>Consultation Certificate</h4>
							<hr style="margin: 0px;">
						</div>

						<div class="modal-body">
							
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="printable">
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
									  		This is to certify that the person named <span id="patient_name"></span> has undergone a thorough medical examination conducted at <span id="clinic_name"></span>, <span id="clinic_address"></span> on <span id="consultation_date"></span> by Dr. <span id="subscriber_name"></span> in currently suffering from <h1 id="diagnosis"></h1>.
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
												<h3 style="margin-bottom: 2px;" id="subscriber_name1"></h3>
												<h4>Medical Officer</h4><br>
											</center>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
											<center>
												<h3 style="margin-bottom: 2px;" id="subscriber_name2"></h3>
												<h4>Doctor-in-Charge</h4><br>
											</center>
										</div>
									</div>
								</div>
								<div class="modal-footer pull-right">
									<button type="button" class="btn btn-primary waves" onclick="printContent('printable')">PRINT</button>
									<button type="button" class="btn btn-primary waves" data-dismiss="modal"">CLOSE</button>
								</div>
							</div>
						</div>
					</div>
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

					$('#ViewCert').on("show.bs.modal", function (e) {
						var patient_name = $(e.relatedTarget).data('patient_name');
						var clinic_name = $(e.relatedTarget).data('clinic_name');
						var clinic_address = $(e.relatedTarget).data('clinic_address');
						var subscriber_name = $(e.relatedTarget).data('subscriber_name');
						var consultation_date = $(e.relatedTarget).data('consultation_date');
						var diagnosis = $(e.relatedTarget).data('diagnosis');

						$('#patient_name').html(patient_name);
						$('#clinic_name').html(clinic_name);
						$('#clinic_address').html(clinic_address);
						$('#subscriber_name').html(subscriber_name);
						$('#subscriber_name1').html(subscriber_name);
						$('#subscriber_name2').html(subscriber_name);
						$('#consultation_date').html(consultation_date);
						$('#diagnosis').html(diagnosis);
					});	
				});
			</script>
		@endsection
		</div>
			            
		</div>
	</section>
@endsection