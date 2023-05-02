@extends('doctor_portal.layouts.master')

{{-- @section('style')
	<style> 
	input[type=text]{
		width: 20px;
	    padding: 12px 20px;
	    margin: 8px 0;
	    display: inline-block;
	    border: 1px solid #ccc;
	    border-radius: 4px;
	    box-sizing: border-box;
	}
	</style>
@endsection --}}
@section('body')
	<section class="content">
		<div class="container-fluid">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						<h2>BILLS</h2>
					</div>
					<div class="body">
						<div class="row">
							
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<!-- LIST Patient Profile -->
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
								<!-- END LIST Patient Profile -->
								<!-- Patient PROFILE -->
							<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
								<div class="card">
									<div class="header bg-grey">
										<h2>
											<center><h5>PATIENT BILLING HISTORY</h5></center>
										</h2>
									</div>
									<div class="row clearfix">
                						<!-- Basic Examples -->
					                    <div class="body">
			                                <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
			                                    <div class="panel-group" id="accordion_1" role="tablist" aria-multiselectable="true">
			                                        <div class="panel panel-primary">
			                                            <div class="panel-heading" role="tab" id="headingOne_1">
			                                                <h4 class="panel-title">
			                                                    <a role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseOne_1" aria-expanded="true" aria-controls="collapseOne_1">
			                                                    	<i class="material-icons">attach_money</i> 
			                                                        <p>Billing Date: December 22, 2017 11:00AM</p>
			                                                        <p>Status:<i class="col-green">Settled</i></p> 
			                                                        <p>Payable: P1,750</p>
			                                                    </a>
			                                                </h4>
			                                            </div>
			                                            <div id="collapseOne_1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_1">
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
																			<p>BC54213132</p>
																		</div>

																		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
										                           			<select style="width: 30px;">
																		      <option value="Cash">Cash</option>
																		      <option value="Credit Card">Credit Card</option>
																		    </select>
																		</div>
																		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
																			<input type="text" class="responsive" name="">
																		</div>
																	</div>
																	<div class="row">
																		
																			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
																				<p><b>Practitioner :</b></p>
																				<p>Dr. Juan Smith, MD.</p>
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
										                            <div class="body table-responsive">
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
										                        </div>
										                        </div>
			                                                </div>
			                                            </div>
			                                        </div>
			                                        <div class="panel panel-primary">
			                                            <div class="panel-heading" role="tab" id="headingTwo_1">
			                                                <h4 class="panel-title">
			                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseTwo_1" aria-expanded="false"
			                                                       aria-controls="collapseTwo_1">
			                                                       <i class="material-icons">attach_money</i> 
			                                                        <p>Billing Date: December 23, 2017 10:00AM</p> 
			                                                        <p>Status:<i class="col-pink">Unsettled</i></p>
			                                                        <p>Payable: P2,250</p>
			                                                    </a>
			                                                </h4>
			                                            </div>
			                                            <div id="collapseTwo_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_1">
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
																			<p>BC54213132</p>
																		</div>

																		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
										                           			<select>
																		      <option value="Cash">Cash</option>
																		      <option value="Credit Card">Credit Card</option>
																		    </select>
																		</div>
																		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
																			<input type="text" class="responsive" name="">
																		</div>
																	</div>
																	<div class="row">
																		
																			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
																				<p><b>Practitioner :</b></p>
																				<p>Dr. Juan Smith, MD.</p>
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
										                            <div class="body table-responsive">
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
										                        </div>
										                        </div>
										                                
										                        </div>
			                                                </div>
			                                            </div>
			                                            <div class="panel panel-primary">
			                                            <div class="panel-heading" role="tab" id="headingThree_1">
			                                                <h4 class="panel-title">
			                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseThree_1" aria-expanded="false"
			                                                       aria-controls="collapseThree_1">
			                                                        <i class="material-icons">attach_money</i> 
			                                                        <p>Billing Date: April 20, 2017 8:00AM</p>
			                                                        <p>Status:<i class="col-pink">Unsettled</i></p>
			                                                        <p>Payable: P1,110</p>
			                                                    </a>
			                                                </h4>
			                                            </div>
			                                            <div id="collapseThree_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree_1">
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
																			<p>BC54213132</p>
																		</div>

																		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
										                           			<select>
																		      <option value="Cash">Cash</option>
																		      <option value="Credit Card">Credit Card</option>
																		    </select>
																		</div>
																		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
																			<input type="text" class="responsive" name="">
																		</div>
																	</div>
																	<div class="row">
																		
																			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
																				<p><b>Practitioner :</b></p>
																				<p>Dr. Juan Smith, MD.</p>
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
										                        <div class="body table-responsive">
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
           							<!-- #END# Basic Examples -->
        						</div>
							</div>
						</div>
						<!-- END Patient PROFILE -->
					</div>
				</div>
			</div>	            
		</div>
	</section>
@endsection