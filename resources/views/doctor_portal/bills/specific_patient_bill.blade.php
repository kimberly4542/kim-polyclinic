@extends('doctor_portal.layouts.master')

@section('body')
<section class="content">
	<div class="container-fluid">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="card">
				<div class="header" style="padding: 20px;">
					<h2><b> BILLS IN CLINIC </b></h2>
				</div>
				<div class="body">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-sx-12" style="margin:0px;"></div>
								
							<!-- Patient PROFILE -->
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="card">
									<div class="header bg-blue-grey">
										<h5 style="padding-left: 15px; ">BILLING</h5>
									</div>
									<div class="row clearfix">
										<!-- Basic Examples -->
									   <div class="body">
											<div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
												<div class="panel-group" id="accordion_1" role="tablist" aria-multiselectable="true">

													@if($billingInfoQuery->count() > 0)
														@foreach($billingInfoQuery as $data)

															<div class="panel panel-primary">
																<div class="panel-heading" role="tab" id="headingOne_{{ $data->bill_code }}">
																	<h4 class="panel-title">
																		<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseOne_{{ $data->bill_code }}" aria-expanded="false" aria-controls="collapseOne_{{ $data->bill_code }}">
																			<p>Billing Date: <span class="badge bg-indigo"> {{ $data->billing_date }} </span> </p>
																			<p>Status: <span class="badge bg-indigo">{{ $data->status }}</span></p> 
																			<p>Payable: <span class="badge bg-indigo">{{ $data->payable }}</span></p>
																		</a>
																	</h4>
																</div>

																<div id="collapseOne_{{ $data->bill_code }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne_{{ $data->bill_code }}">
																	<div class="panel-body">
																		<div class="body">
																			<div class="row">
																				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="margin-bottom: 0px;">
																					<p><b>Billing Code :</b></p>
																				</div>
																				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="margin-bottom: 0px;">
																					<span><b>Mode of Payment :</b></span>
																				</div>
																				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="margin-bottom: 0px;">
																					<p><b>Billed Amount :</b></p>
																				</div>

																				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
																					<p>{{ $data->bill_code }}</p>
																				</div>

																				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
																					<select>
																					  <option value="Cash">{{ $data->mode_of_payment }}</option>
																					</select>
																				</div>
																				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
																					<input type="text" class="responsive" name="">
																				</div>
																			</div>
																			<div class="row">
																				
																					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
																						<p><b>Practitioner :</b></p>
																						<p>{{ $data->practitioner }}</p>
																					</div>
																					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
																						<p><b>Frequency:</b></p>
																						<input type="texbox" name="" style="width: 35px;">
																						<div class="btn-group">
																							<button type="button" style="width: 100%;" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																								Monthly <span class="caret"></span>
																							</button>
																							<ul class="dropdown-menu">
																								<li><a href="javascript:void(0);">Daily</a></li>
																								<li><a href="javascript:void(0);">Monthly</a></li>
																								<li><a href="javascript:void(0);">Yearly</a></li>
																							</ul>
																						</div>
																					</div>
																					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
																						<p><b>Insurance Discount :</b></p>
																						<input type="text" class="form" name="">
																					</div>
																			</div>
																			<div class="row">
																					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
																						<p><b>Insurance/s :</b></p>
																						<input type="textarea" class="form-line" name="" style="height: 40px; width: 150px;">
																					</div>
																					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
																						<p><b>Frequency Payment:</b></p>
																						<input type="texbox" name="">
																						
																					</div>
																					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
																						<p><b>Total Payable :</b></p>
																						<input type="text" class="form"name="">
																					</div>
																				</div>
																			<div class="row">
																				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
																					<b><p>Particulars</p></b>
																				</div>
																				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
																					<b><p>Qnty/Time</p></b>
																				</div>
																				<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
																					<b><p>Unit</p></b>
																				</div>
																				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
																					<b><p>Amount/Rate</p></b>
																				</div>
																				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
																					<b><p>TotalAmount/Rate</p></b>
																				</div>
																			</div>
																			<div class="row">
																				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
																					<input type="texbox" style="width: 70%" name=""> 
																					<input type="button" class="btn btn-success" value="+" name="">
																				</div>
																				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
																					<input type="texbox" style="width: 100%" name=""> 
																				</div>
																				<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
																					<input type="texbox" style="width: 100%" name=""> 
																				</div>
																				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
																					<input type="texbox" style="width: 100%" name=""> 
																				</div>
																				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
																					<div>
																					<input type="texbox" style="width: 60%" name=""> 
																					<input type="button" class="btn btn-primary" value="+" name="">
																					</div>
																				</div>
																			</div>	
																			{{-- <div class="body table-responsive">
																				<table class="table table-bordered">
																					<thead>
																						<tr>
																							<th><center> Particulars </center></th>
																							<th><center> Qnty/Time </center></th>
																							<th><center> Unit </center></th>
																							<th><center> Amount/Rate </center></th>
																							<th><center> TotalAmount / Rate </center></th>
																						</tr>
																					</thead>
																					<tbody>
																						<tr>
																							<th scope="row">Consultation</th>
																							<td>3</td>
																							<td>hrs</td>
																							<td>P 600.00</td>
																							<td>P 1,600.00</td>
																						</tr>
																						<tr>
																							<th scope="row">Laboratory Test</th>
																							<td>3</td>
																							<td>capsule</td>
																							<td>P 600.00</td>
																							<td>P 1,600.00</td>
																						</tr>
																						<tr>
																							<th scope="row">Agrivastine ASDfg</th>
																							<td>3</td>
																							<td>capsule</td>
																							<td>P 600.00</td>
																							<td>P 1,600.00</td>
																						</tr>
																						<tr>
																							<th scope="row">AMOXICILLIN</th>
																							<td>3</td>
																							<td>hrs</td>
																							<td>P 600.00</td>
																							<td>P 1,600.00</td>
																						</tr>
																						<tr>
																							<th scope="row">NEOZEP</th>
																							<td>3</td>
																							<td>hrs</td>
																							<td>P 600.00</td>
																							<td>P 1,600.00</td>
																						</tr>
																					</tbody>
																				</table>
																			</div> --}}
																		</div>
																	</div>
																</div>
															</div>
														@endforeach
													@else
														<div class="panel panel-primary">
															<div class="panel-heading" role="tab" id="headingOne_1">
																<h4 class="panel-title">
																	<p> No Billing Information Found </p>
																</h4>
															</div>
														</div>
													@endif

												</div>
											</div>
										</div>
									</div><!-- #END# Basic Examples -->
								</div><!-- END Patient PROFILE -->
								
								<div class="col-lg-12 col-md-12 col-sm-12 col-sx-12" style="margin: 0px;">
									<a href="javascript:history.back()" class="btn btn-warning waves-effect">Done</a>
								</div>
									
							</div> <!-- col-lg-12 -->
						</div> {{-- row --}}
					</div> {{-- body --}}
				</div> {{-- card --}}            
			</div> {{-- col-lg-12 --}}
		</div> {{-- container-fluid --}}
	</section>
@endsection