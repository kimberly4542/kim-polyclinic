@extends('doctor_portal.layouts.master')

@section('style')
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

@section('body')
	<section class="content">
		<div class="container-fluid">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						<h2 style="padding: 20px;">Patient Medical History</h2>
					</div>
					<div class="body">
						<div class="row clearfix">
							{{-- <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
								 <div class="card">
									<div class="header">
										 <div class="input-group">
											<span class="input-group-addon">
												<i class="material-icons">search</i>
											</span>
											<div class="form-line">
												<input type="text" class="form-control date" placeholder="Search Patient">
											</div>
										</div>
									</div>
									<div class="body">
										<div class="list-group">
											<a href="javascript:void(0);" class="list-group-item active">Cody Paloma Javier
											</a>
											<a href="patient-profile-history1.html" class="list-group-item">Kurt Kevin Nebril</a>
											<a href="javascript:void(0);" class="list-group-item">Loren Mae Gumban</a>
											<a href="javascript:void(0);" class="list-group-item">Apple Caponan</a>
											<a href="javascript:void(0);" class="list-group-item">Richmon Monteadora</a>
										</div>
									</div>
								</div> 
							</div> --}}
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								@if(Auth::guard('profile_patient_medicalHistory_basicTable')->check())
									<div class="card">
										<div class="header bg-grey">
											<h2>
												<center><h5>PATIENT MEDICAL HISTORY</h5></center>
											</h2>
										</div>
										<div class="body">
										<div class="row clearfix">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="card">
													<div class="header">
														<center>
															<h2 style="color: teal;">
																DIAGNOSIS AND MEDICATION
															</h2>
													   </center>
													</div>
													<div class="body table-responsive">
														<table class="table table-bordered">
															<thead>
																<tr>
																	<th>Date</th>
																	<th>Diagnosis</th>
																	<th>Medicine</th>
																	<th>Dose</th>
																	<th>Frequency</th>
																</tr>
															</thead>
															<tbody>
																@if(count($consultationQuery) > 0)
																	@foreach($consultationQuery as $data)
																		<tr>
																			<td>11/11/11</td>
																			<td>{{ $consultationModel->getConsultation($data->patient_id) }}</td>
																			<td>ACRIVASTINE AND PSEUDOOPHERDINE</td>
																			<td>25mg</td>
																			<td>3x a Day</td>
																		</tr>
																	@endforeach
																@else
																	<td> No Data Found</td>
																@endif
															</tbody>
														</table>
													</div>
												</div>
											 {{--    <div class="card">
													<div class="header">
														<center>
															<h2 style="color: teal;">
																SOCIAL HABIT HISTORY
															</h2>
													   </center>
													</div>
													<div class="body table-responsive">
														<table class="table table-bordered">
															<thead>
																<tr>
																	<th>#</th>
																	<th>Questions</th>
																	<th>Response</th>
																	<th>Specification</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<th scope="row">1</th>
																	<td>Do you smoke?</td>
																	<td>Yes</td>
																	<td>3 years</td>
																</tr>
																<tr>
																	<th scope="row">2</th>
																	<td>Have you been drinking?</td>
																	<td>Yes</td>
																	<td>4 years</td>
																</tr>
																<tr>
																	<th scope="row">3</th>
																	<td>Do you smoke?</td>
																	<td>Yes</td>
																	<td>3 years</td>
																</tr>
																<tr>
																	<th scope="row">4</th>
																	<td>Have you been drinking?</td>
																	<td>Yes</td>
																	<td>4 years</td>
																</tr>
																<tr>
																	<th scope="row">5</th>
																	<td>Do you smoke?</td>
																	<td>Yes</td>
																	<td>3 years</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
												<div class="card">
													<div class="header">
														<center>
															<h2 style="color: teal;">
																SURGERIES AND HOSPITALIZATIONS
															</h2>
													   </center>
													</div>
													<div class="body table-responsive">
														<table class="table table-bordered">
															<thead>
																<tr>
																	<th>Date</th>
																	<th>Surgery or Hospitalization</th>
																	<th>Hospital Name/Address</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td></td>
																	<td></td>
																	<td></td>
																</tr>
																<tr>
																	<td></td>
																	<td></td>
																	<td></td>
																</tr>
																<tr>
																	<td></td>
																	<td></td>
																	<td></td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
									<div class="row clearfix">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											
												<div class="header">
													<h5>
														OTHER REMARKS
													</h5>
												</div>
												<div class="body">
													<blockquote class="m-b-50">
														<p style="font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
													</blockquote>
													<blockquote class="m-b-2">
														<p style="font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
													</blockquote>
												</div>
											</div>
										</div> --}}
									</div>
									</div>
									</div>
								@endif
					
								@if(Auth::guard('profile_patient_medicalHistory_hoverTable')->check())
									{{-- STRIPE --}}
									<div class="card">
										<div class="header bg-grey">
											<h2>
												<center><h5>PATIENT MEDICAL HISTORY</h5></center>
											</h2>
										</div>
										<div class="body">
										<div class="row clearfix">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="card">
													<div class="header">
														<center>
															<h2 style="color: teal;">
																DIAGNOSIS AND MEDICATION
															</h2>
													   </center>
													</div>
													<div class="body table-responsive">
														<table class="table table-striped">
															<thead>
																<tr>
																	<th>Date</th>
																	<th>Diagnosis</th>
																	<th>Medicine</th>
																	<th>Dose</th>
																	<th>Frequency</th>
																</tr>
															</thead>
															<tbody>
																@if(count($consultationQuery) > 0)
																	@foreach($consultationQuery as $data)
																		<tr>
																			<td>{{ $consultationModel->getConsultationDate($data->consultation_id) }}</td>
																			<td>{{ $consultationModel->getConsultation($data->consultation_id) }}</td>
																			<td>{{ $medicationModel->getMedication($data->consultation_id) }}</td>
																			<td>{{ $consultationModel->getMedicationDose($data->consultation_id) }}</td>
																			<td>{{ $consultationModel->getMedicationFrequency($data->consultation_id) }}</td>
																		</tr>
																	@endforeach
																@else
																	<td> No Data Found</td>
																@endif
															</tbody>
														</table>
													</div>
												</div>
											   {{--  <div class="card">
													<div class="header">
														<center>
															<h2 style="color: teal;">
																SOCIAL HABIT HISTORY
															</h2>
													   </center>
													</div>
													<div class="body table-responsive">
														<table class="table table-striped">
															<thead>
																<tr>
																	<th>#</th>
																	<th>Questions</th>
																	<th>Response</th>
																	<th>Specification</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<th scope="row">1</th>
																	<td>Do you smoke?</td>
																	<td>Yes</td>
																	<td>3 years</td>
																</tr>
																<tr>
																	<th scope="row">2</th>
																	<td>Have you been drinking?</td>
																	<td>Yes</td>
																	<td>4 years</td>
																</tr>
																<tr>
																	<th scope="row">3</th>
																	<td>Do you smoke?</td>
																	<td>Yes</td>
																	<td>3 years</td>
																</tr>
																<tr>
																	<th scope="row">4</th>
																	<td>Have you been drinking?</td>
																	<td>Yes</td>
																	<td>4 years</td>
																</tr>
																<tr>
																	<th scope="row">5</th>
																	<td>Do you smoke?</td>
																	<td>Yes</td>
																	<td>3 years</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
												<div class="card">
													<div class="header">
														<center>
															<h2 style="color: teal;">
																SURGERIES AND HOSPITALIZATIONS
															</h2>
													   </center>
													</div>
													<div class="body table-responsive">
														<table class="table table-striped">
															<thead>
																<tr>
																	<th>Date</th>
																	<th>Surgery or Hospitalization</th>
																	<th>Hospital Name/Address</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td></td>
																	<td></td>
																	<td></td>
																</tr>
																<tr>
																	<td></td>
																	<td></td>
																	<td></td>
																</tr>
																<tr>
																	<td></td>
																	<td></td>
																	<td></td>
																</tr>
															</tbody>
														</table>
													</div>
												</div> --}}
											</div>
								  
								 {{--    <div class="row clearfix">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											
												<div class="header">
													<h5>
														OTHER REMARKS
													</h5>
												</div>
												<div class="body">
													<blockquote class="m-b-50">
														<p style="font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
													</blockquote>
													<blockquote class="m-b-2">
														<p style="font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
													</blockquote>
												</div>
											</div>
										</div>
									</div> --}}
									</div>
									</div>
								@endif
								<a href="javascript:history.back()" class="btn btn-warning waves-effect" >Back</a>
								{{-- @include('doctor_portal.profile.layouts.buttons') --}}
							</div>
							<!-- END Patient PROFILE -->
						</div>
					</div>
				</div>

			</div>	            
		</div>
	</section>
@endsection