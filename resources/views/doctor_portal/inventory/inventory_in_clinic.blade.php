@extends('doctor_portal.layouts.master')

@section('style')
<!-- JQuery DataTable Css -->
 <link href="{{ URL::asset('AdminSB/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">
@endsection

@section('body')
<section class="content">
		<div class="container-fluid">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						<h2>INVENTORY IN MY CLINIC</h2>
					</div>
					<div class="body">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-sx-12">
								 <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
									<div class="card">
										{{-- <div class="header">
											 <h5>Option</h5>
										</div> --}}
										<div class="body">
											<div class="list-group">
												<a href="{{ url('inventory/inventory_in_clinic') }}" class="list-group-item active">Items</a>
												<a href="{{ url('inventory/inventory_purchase_order') }}" class="list-group-item">Purchase Order</a>
												{{-- <a href="#" class="list-group-item">Package</a> --}}
												{{-- <a href="#" class="list-group-item">Item Income</a> --}}
												<a href="{{ url('inventory/inventory_invoice') }}" class="list-group-item">Invoice</a>
												<a href="{{ url('inventory/inventory_item_return') }}" class="list-group-item">Return</a>
											</div>
										</div>
									</div>
								</div>
							<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="body">
										 <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#home_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">home</i> Current Item List and Status
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#profile_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">face</i> Stock - In
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#messages_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">email</i> Stock - Out
                                    </a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="home_with_icon_title">
                                    <!-- Current Item List And Status -->
						            <div class="row clearfix">
						                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						                    <div class="card">
						                        <div class="header">
						                            <h2>
						                                Current Item List and Status
						                            </h2>
						                        </div>
						                        <div class="body">
						                            <div class="table-responsive">
						                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
						                                    <thead>
						                                        <tr>
						                                            <th>Generic</th>
						                                            <th>Brand</th>
						                                            <th>Current Price</th>
						                                            <th>Quantity/Box</th>
						                                            <th>Pcs per Box</th>
						                                            <th>Total Item Quantity</th>
						                                        </tr>
						                                    </thead>
						                                    <tfoot>
						                                        <tr>
						                                            <th>Generic</th>
						                                            <th>Brand</th>
						                                            <th>Current Price</th>
						                                            <th>Quantity/Box</th>
						                                            <th>Pcs per Box</th>
						                                            <th>Total Item Quantity</th>
						                                        </tr>
						                                    </tfoot>
						                                    <tbody>
						                                        <tr>
						                                            <td>Paracetamol</td>
						                                            <td>Alvedon</td>
						                                            <td>P 6.00</td>
						                                            <td>579</td>
						                                            <td>24</td>
						                                            <td>1800</td>
						                                        </tr>
						                                        <tr>
						                                            <td>Amoxell </td>
						                                            <td>Amoxicillin</td>
						                                            <td>P 9.00</td>
						                                            <td>16</td>
						                                            <td>12</td>
						                                            <td>750</td>
						                                        </tr>
						                                       <tr>
						                                            <td>Paracetamol</td>
						                                            <td>Alvedon</td>
						                                            <td>P 6.00</td>
						                                            <td>579</td>
						                                            <td>24</td>
						                                            <td>1800</td>
						                                        </tr>
						                                        <tr>
						                                            <td>Ascorbic Acid </td>
						                                            <td>Neozep</td>
						                                            <td>P 9.00</td>
						                                            <td>16</td>
						                                            <td>12</td>
						                                            <td>750</td>
						                                        </tr>
						                                       <tr>
						                                            <td>Paracetamol</td>
						                                            <td>Alvedon</td>
						                                            <td>P 6.00</td>
						                                            <td>579</td>
						                                            <td>24</td>
						                                            <td>1800</td>
						                                        </tr>
						                                        <tr>
						                                            <td>Paracetamol</td>
						                                            <td>Alvedon</td>
						                                            <td>P 6.00</td>
						                                            <td>579</td>
						                                            <td>24</td>
						                                            <td>1800</td>
						                                        </tr>
						                                         <tr>
						                                            <td>Amoxell </td>
						                                            <td>Amoxicillin</td>
						                                            <td>P 9.00</td>
						                                            <td>16</td>
						                                            <td>12</td>
						                                            <td>750</td>
						                                        </tr>
						                                        <tr>
						                                            <td>Paracetamol</td>
						                                            <td>Alvedon</td>
						                                            <td>P 6.00</td>
						                                            <td>579</td>
						                                            <td>24</td>
						                                            <td>1800</td>
						                                        </tr>
						                                        <tr>
						                                            <td>Amoxell </td>
						                                            <td>Amoxicillin</td>
						                                            <td>P 9.00</td>
						                                            <td>16</td>
						                                            <td>12</td>
						                                            <td>750</td>
						                                        </tr>
						                                        <tr>
						                                            <td>Paracetamol</td>
						                                            <td>Alvedon</td>
						                                            <td>P 6.00</td>
						                                            <td>579</td>
						                                            <td>24</td>
						                                            <td>1800</td>
						                                        </tr>
						                                         <tr>
						                                            <td>Amoxell </td>
						                                            <td>Amoxicillin</td>
						                                            <td>P 9.00</td>
						                                            <td>16</td>
						                                            <td>12</td>
						                                            <td>750</td>
						                                        </tr>
						                                       <tr>
						                                            <td>Paracetamol</td>
						                                            <td>Alvedon</td>
						                                            <td>P 6.00</td>
						                                            <td>579</td>
						                                            <td>24</td>
						                                            <td>1800</td>
						                                        </tr>
						                                        <tr>
						                                            <td>Paracetamol</td>
						                                            <td>Alvedon</td>
						                                            <td>P 6.00</td>
						                                            <td>579</td>
						                                            <td>24</td>
						                                            <td>1800</td>
						                                        </tr>
						                                         <tr>
						                                            <td>Amoxell </td>
						                                            <td>Amoxicillin</td>
						                                            <td>P 9.00</td>
						                                            <td>16</td>
						                                            <td>12</td>
						                                            <td>750</td>
						                                        </tr>
						                                        <tr>
						                                            <td>Paracetamol</td>
						                                            <td>Alvedon</td>
						                                            <td>P 6.00</td>
						                                            <td>579</td>
						                                            <td>24</td>
						                                            <td>1800</td>
						                                        </tr>
						                                        <tr>
						                                            <td>Amoxell </td>
						                                            <td>Amoxicillin</td>
						                                            <td>P 9.00</td>
						                                            <td>16</td>
						                                            <td>12</td>
						                                            <td>750</td>
						                                        </tr>
						                                    </tbody>
						                                </table>
						                            </div>
						                        </div>
						                    </div>
						                </div>
						            </div>
           						 <!-- Current Item List and Status End -->
           						 <div class="row">
							<div class="body" style="padding: 0px;">
								<!--Stock-In -->
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="card">
										<div class="header bg-grey">
											<h2>
												<center><h5>MEDICINE INFORMATION</h5></center>
											</h2>
											{{-- <div class="pull-right">
												<button class="btn btn-primary">ADD</button>
											</div> --}}
										</div>
										<div class="body">
											<div class="row">
												<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6" style="padding: 0px;">
													<div class="image">
														  <img src="{{ URL::asset('AdminSB/images/amoxicillin.jpg') }}"  width="250" height="250" class="img-responsive">
													</div>
												</div>
												<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="padding: 0px;">
													<p class="font-bold col-teal">
														<b style="font-size: 16px;">Product Number: </b> 
														{{-- 653216841 --}}
													</p>
													<p><b>Generic Name:</b> </p>
													<p><b>Brand Name:</b> </p>
													<p><b>Manufacturer:</b> </p>
													<p><b>Weight:</b></p>
													<p><b>Expiration Date:</b></p>
													
												</div>
												<div class="col-lg-5 col-md-3 col-sm-3 col-xs-3">
													<p> <b style="color: #545454; font-size: 22px;">653216841 </b></p>
													<p> Amoxicillin </p>
													<p> Moxatag </p>
													<p> ABIOLEX - (Andrimaco - Chile CHILE) </p>
													<p> 25mg </p>
													<p style="color: orange;"> 10/12/2019 </p>
												</div>
											</div>
											<!-- BASIC INFOMATION -->
											<div class="row">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 0px">
													<p style="background-color: teal;"><b style="color: white; font-size: 18px;">Description</b></p>
													<hr id="hr">
												</div>
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<div class="col-lg-12 col-md-6 col-sm-6 col-xs-6" style="margin-bottom: 0px">
														And is full of waffle to It has multiple paragraphs and is full of waffle to pad out the comment. Usually, you just wish these sorts of comments would come to an end.multiple paragraphs and is full of waffle to pad out the comment..And is full of waffle to It has multiple paragraphs and is full of waffle to pad out the comment. Usually, you just wish these sorts of comments would come to an end.multiple paragraphs and is full of waffle to pad out the comment..And is full of waffle to It has multiple paragraphs and is full of waffle to pad out the comment. Usually, you just wish these sorts of comments would come to an end.multiple paragraphs and is full of waffle to pad out the comment..And is full of waffle to It has multiple paragraphs and is full of waffle to pad out the comment. Usually, you just wish these sorts of comments would come to an end.multiple paragraphs and is full of waffle to pad out the comment..And is full of waffle to It has multiple paragraphs and is full of waffle to pad out the comment. Usually, you just wish these sorts of comments would come to an end.multiple paragraphs and is full of waffle to pad out the comment..
													</div>
											</div>
											<!-- END BASIC INFORMATION -->
											
											
											<!-- EMERGENCY INFORMATION -->
											
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 0px">
													<p style="background-color: teal;"><b style="color: white; font-size: 18px;">Stock Information</b></p>
													<hr id="hr">
												
											</div>
											<div class="row">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="margin-bottom: 0px">
														<div class="col-lg-8 col-md-6 col-sm-6 col-xs-6">
															<p><b>Current Price :</b></p>
															<p><b>Current Quantity /Box :</b></p>
															<p><b>Pcs per Box :</b></p>
															<p><b>Total Item :</b></p>
														</div>
														<div class="col-lg-4 col-md-6 col-sm-6 col-xs-6" style="padding: 0px;">
															<p>P30.00</p>
															<p>500 Box</p>
															<p>20 Pcs.</p>
															<p>10000 Pcs.</p>
																{{-- <input type="text" value="P30.00" name="">
															<div class="row">
																<input type="text" value="500" style="width: 50%;" name=""><input type="text" value="500" style="width: 50%;" name="">
															</div>
																<input type="text" value="20" style="width: 50%;" name="">
																<input type="text" value="pcs" style="width: 50%;" name="">
																
																<input type="text" value="10000" style="width: 50%;" name="">
																<input type="text" value="pcs" style="width: 50%;" name="">
															 --}}
															
														</div>
													</div>
													<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding: 0px">
														<div class="col-lg-6 col-md-8 col-sm-8 col-xs-8" style="padding:0px;">
															<p><b>Total Box Sold : </b></p>
															<p><b>Total Pcs Sols :</b></p>
														</div>
														<div class="col-lg-6 col-md-4 col-sm-4 col-xs-4" style="padding: 0px;">
															<p>320 Pcs. </p>
															<p>6400 Pcs.  </p>
														</div>
														{{-- <div style="text-align: right;">
						                                    <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#defaultModal">
						                                    <i class="material-icons">save</i><span>SAVE</span>
						                                    </button>
						                                </div> --}}
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							{{-- END Stock-in --}}
						</div>
				</div>
                 </div>
                                <div role="tabpanel" class="tab-pane fade" id="profile_with_icon_title">
                                <div class="row">
							<div class="body">
								<!-- SStock out -->
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="card">
										<div class="header bg-grey">
											<h2>
												<center><h5>MEDICINE INFORMATION</h5></center>
											</h2>
										</div>
										<div class="body">
											<div class="row">
												<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6" style="padding: 0px;">
													<div class="image">
														  <img src="{{ URL::asset('AdminSB/images/amoxicillin.jpg') }}"  width="250" height="250" class="img-responsive">
													</div>
												</div>
												<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="padding: 0px;">
													<p class="font-bold col-teal">
														<b style="font-size: 16px;">Product Number: </b> 
														{{-- 653216841 --}}
													</p>
													<p><b>Generic Name:</b> </p>
													<p><b>Brand Name:</b> </p>
													<p><b>Manufacturer:</b> </p>
													<p><b>Weight:</b></p>
													<p><b>Expiration Date:</b></p>
													
												</div>
												<div class="col-lg-5 col-md-3 col-sm-3 col-xs-3">
													<p> <b style="color: #545454; font-size: 22px;">653216841 </b></p>
													<p> Amoxicillin </p>
													<p> Moxatag </p>
													<p> ABIOLEX - (Andrimaco - Chile CHILE) </p>
													<p> 25mg </p>
													<p style="color: orange;"> 10/12/2019 </p>
												</div>
											</div>
											<!-- BASIC INFOMATION -->
											<div class="row">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 0px">
													<p style="background-color: teal;"><b style="color: white; font-size: 18px;">Description</b></p>
													<hr id="hr">
												</div>
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<div class="col-lg-12 col-md-6 col-sm-6 col-xs-6" style="margin-bottom: 0px">
														And is full of waffle to It has multiple paragraphs and is full of waffle to pad out the comment. Usually, you just wish these sorts of comments would come to an end.multiple paragraphs and is full of waffle to pad out the comment..And is full of waffle to It has multiple paragraphs and is full of waffle to pad out the comment. Usually, you just wish these sorts of comments would come to an end.multiple paragraphs and is full of waffle to pad out the comment..And is full of waffle to It has multiple paragraphs and is full of waffle to pad out the comment. Usually, you just wish these sorts of comments would come to an end.multiple paragraphs and is full of waffle to pad out the comment..And is full of waffle to It has multiple paragraphs and is full of waffle to pad out the comment. Usually, you just wish these sorts of comments would come to an end.multiple paragraphs and is full of waffle to pad out the comment..And is full of waffle to It has multiple paragraphs and is full of waffle to pad out the comment. Usually, you just wish these sorts of comments would come to an end.multiple paragraphs and is full of waffle to pad out the comment..
													</div>
											</div>
											<!-- END BASIC INFORMATION -->
											
											
											<!-- EMERGENCY INFORMATION -->
											
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 0px">
													<p style="background-color: teal;"><b style="color: white; font-size: 18px;">Stock Information</b></p>
													<hr id="hr">
												
											</div>
											<div class="row">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="margin-bottom: 0px">
														<div class="col-lg-8 col-md-6 col-sm-6 col-xs-6">
															<p><b>Current Price :</b></p>
															<p><b>Current Quantity /Box :</b></p>
															<p><b>Pcs per Box :</b></p>
															<p><b>Total Item :</b></p>
														</div>
														<div class="col-lg-4 col-md-6 col-sm-6 col-xs-6" style="padding: 0px;">
															<p>P30.00</p>
															<p>500 Box</p>
															<p>20 Pcs.</p>
															<p>10000 Pcs.</p>
																{{-- <input type="text" value="P30.00" name="">
															<div class="row">
																<input type="text" value="500" style="width: 50%;" name=""><input type="text" value="500" style="width: 50%;" name="">
															</div>
																<input type="text" value="20" style="width: 50%;" name="">
																<input type="text" value="pcs" style="width: 50%;" name="">
																
																<input type="text" value="10000" style="width: 50%;" name="">
																<input type="text" value="pcs" style="width: 50%;" name="">
															 --}}
															
														</div>
													</div>
													<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding: 0px">
														<div class="col-lg-6 col-md-8 col-sm-8 col-xs-8" style="padding:0px;">
															<p><b>Total Box Sold : </b></p>
															<p><b>Total Pcs Sols :</b></p>
														</div>
														<div class="col-lg-6 col-md-4 col-sm-4 col-xs-4" style="padding: 0px;">
															<p>320 Pcs. </p>
															<p>6400 Pcs.  </p>
														</div>
														<div style="text-align: right;">
			                                    	<button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#defaultModal">
			                                    	<i class="material-icons">save</i><span>SAVE</span>
			                                    </button>
			                                </div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- Basic Examples -->
						            <div class="row clearfix">
						                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						                    <div class="card">
						                        <div class="header">
						                            <h2>
						                               Stock-In Total
						                            </h2>
						                        </div>
						                        <div class="body">
						                            <div class="table-responsive">
						                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
						                                    <thead>
						                                        <tr>
						                                            <th>Generic</th>
						                                            <th>Brand</th>
						                                            <th>Current Price</th>
						                                            <th>Quantity/Box</th>
						                                            <th>Pcs per Box</th>
						                                            <th>Total Item Quantity</th>
						                                        </tr>
						                                    </thead>
						                                    <tfoot>
						                                        <tr>
						                                            <th>Generic</th>
						                                            <th>Brand</th>
						                                            <th>Current Price</th>
						                                            <th>Quantity/Box</th>
						                                            <th>Pcs per Box</th>
						                                            <th>Total Item Quantity</th>
						                                        </tr>
						                                    </tfoot>
						                                    <tbody>
						                                        <tr>
						                                            <td>Paracetamol</td>
						                                            <td>Alvedon</td>
						                                            <td>P 6.00</td>
						                                            <td>579</td>
						                                            <td>24</td>
						                                            <td>1800</td>
						                                        </tr>
						                                        <tr>
						                                            <td>Amoxell </td>
						                                            <td>Amoxicillin</td>
						                                            <td>P 9.00</td>
						                                            <td>16</td>
						                                            <td>12</td>
						                                            <td>750</td>
						                                        </tr>
						                                       <tr>
						                                            <td>Paracetamol</td>
						                                            <td>Alvedon</td>
						                                            <td>P 6.00</td>
						                                            <td>579</td>
						                                            <td>24</td>
						                                            <td>1800</td>
						                                        </tr>
						                                        <tr>
						                                            <td>Ascorbic Acid </td>
						                                            <td>Neozep</td>
						                                            <td>P 9.00</td>
						                                            <td>16</td>
						                                            <td>12</td>
						                                            <td>750</td>
						                                        </tr>
						                                       <tr>
						                                            <td>Paracetamol</td>
						                                            <td>Alvedon</td>
						                                            <td>P 6.00</td>
						                                            <td>579</td>
						                                            <td>24</td>
						                                            <td>1800</td>
						                                        </tr>
						                                        <tr>
						                                            <td>Paracetamol</td>
						                                            <td>Alvedon</td>
						                                            <td>P 6.00</td>
						                                            <td>579</td>
						                                            <td>24</td>
						                                            <td>1800</td>
						                                        </tr>
						                                         <tr>
						                                            <td>Amoxell </td>
						                                            <td>Amoxicillin</td>
						                                            <td>P 9.00</td>
						                                            <td>16</td>
						                                            <td>12</td>
						                                            <td>750</td>
						                                        </tr>
						                                        <tr>
						                                            <td>Paracetamol</td>
						                                            <td>Alvedon</td>
						                                            <td>P 6.00</td>
						                                            <td>579</td>
						                                            <td>24</td>
						                                            <td>1800</td>
						                                        </tr>
						                                        <tr>
						                                            <td>Amoxell </td>
						                                            <td>Amoxicillin</td>
						                                            <td>P 9.00</td>
						                                            <td>16</td>
						                                            <td>12</td>
						                                            <td>750</td>
						                                        </tr>
						                                        <tr>
						                                            <td>Paracetamol</td>
						                                            <td>Alvedon</td>
						                                            <td>P 6.00</td>
						                                            <td>579</td>
						                                            <td>24</td>
						                                            <td>1800</td>
						                                        </tr>
						                                         <tr>
						                                            <td>Amoxell </td>
						                                            <td>Amoxicillin</td>
						                                            <td>P 9.00</td>
						                                            <td>16</td>
						                                            <td>12</td>
						                                            <td>750</td>
						                                        </tr>
						                                       <tr>
						                                            <td>Paracetamol</td>
						                                            <td>Alvedon</td>
						                                            <td>P 6.00</td>
						                                            <td>579</td>
						                                            <td>24</td>
						                                            <td>1800</td>
						                                        </tr>
						                                        <tr>
						                                            <td>Paracetamol</td>
						                                            <td>Alvedon</td>
						                                            <td>P 6.00</td>
						                                            <td>579</td>
						                                            <td>24</td>
						                                            <td>1800</td>
						                                        </tr>
						                                         <tr>
						                                            <td>Amoxell </td>
						                                            <td>Amoxicillin</td>
						                                            <td>P 9.00</td>
						                                            <td>16</td>
						                                            <td>12</td>
						                                            <td>750</td>
						                                        </tr>
						                                        <tr>
						                                            <td>Paracetamol</td>
						                                            <td>Alvedon</td>
						                                            <td>P 6.00</td>
						                                            <td>579</td>
						                                            <td>24</td>
						                                            <td>1800</td>
						                                        </tr>
						                                        <tr>
						                                            <td>Amoxell </td>
						                                            <td>Amoxicillin</td>
						                                            <td>P 9.00</td>
						                                            <td>16</td>
						                                            <td>12</td>
						                                            <td>750</td>
						                                        </tr>
						                                    </tbody>
						                                </table>
						                            </div>
						                        </div>
						                    </div>
						                </div>
						            </div>
           						 <!-- #END# Basic Examples -->
								<!-- Basic Examples -->
						            <div class="row clearfix">
						                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						                    <div class="card">
						                        <div class="header">
						                            <h2>
						                               Stock-In History
						                            </h2>
						                        </div>
						                        <div class="body">
						                            <div class="table-responsive">
						                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
						                                    <thead>
						                                        <tr>
						                                            <th>Generic</th>
						                                            <th>Brand</th>
						                                            <th>Current Price</th>
						                                            <th>Quantity/Box</th>
						                                            <th>Pcs per Box</th>
						                                            <th>Total Item Quantity</th>
						                                        </tr>
						                                    </thead>
						                                    <tfoot>
						                                        <tr>
						                                            <th>Generic</th>
						                                            <th>Brand</th>
						                                            <th>Current Price</th>
						                                            <th>Quantity/Box</th>
						                                            <th>Pcs per Box</th>
						                                            <th>Total Item Quantity</th>
						                                        </tr>
						                                    </tfoot>
						                                    <tbody>
						                                        <tr>
						                                            <td>Paracetamol</td>
						                                            <td>Alvedon</td>
						                                            <td>P 6.00</td>
						                                            <td>579</td>
						                                            <td>24</td>
						                                            <td>1800</td>
						                                        </tr>
						                                        <tr>
						                                            <td>Amoxell </td>
						                                            <td>Amoxicillin</td>
						                                            <td>P 9.00</td>
						                                            <td>16</td>
						                                            <td>12</td>
						                                            <td>750</td>
						                                        </tr>
						                                       <tr>
						                                            <td>Paracetamol</td>
						                                            <td>Alvedon</td>
						                                            <td>P 6.00</td>
						                                            <td>579</td>
						                                            <td>24</td>
						                                            <td>1800</td>
						                                        </tr>
						                                        <tr>
						                                            <td>Ascorbic Acid </td>
						                                            <td>Neozep</td>
						                                            <td>P 9.00</td>
						                                            <td>16</td>
						                                            <td>12</td>
						                                            <td>750</td>
						                                        </tr>
						                                       <tr>
						                                            <td>Paracetamol</td>
						                                            <td>Alvedon</td>
						                                            <td>P 6.00</td>
						                                            <td>579</td>
						                                            <td>24</td>
						                                            <td>1800</td>
						                                        </tr>
						                                        <tr>
						                                            <td>Paracetamol</td>
						                                            <td>Alvedon</td>
						                                            <td>P 6.00</td>
						                                            <td>579</td>
						                                            <td>24</td>
						                                            <td>1800</td>
						                                        </tr>
						                                         <tr>
						                                            <td>Amoxell </td>
						                                            <td>Amoxicillin</td>
						                                            <td>P 9.00</td>
						                                            <td>16</td>
						                                            <td>12</td>
						                                            <td>750</td>
						                                        </tr>
						                                        <tr>
						                                            <td>Paracetamol</td>
						                                            <td>Alvedon</td>
						                                            <td>P 6.00</td>
						                                            <td>579</td>
						                                            <td>24</td>
						                                            <td>1800</td>
						                                        </tr>
						                                        <tr>
						                                            <td>Amoxell </td>
						                                            <td>Amoxicillin</td>
						                                            <td>P 9.00</td>
						                                            <td>16</td>
						                                            <td>12</td>
						                                            <td>750</td>
						                                        </tr>
						                                        <tr>
						                                            <td>Paracetamol</td>
						                                            <td>Alvedon</td>
						                                            <td>P 6.00</td>
						                                            <td>579</td>
						                                            <td>24</td>
						                                            <td>1800</td>
						                                        </tr>
						                                         <tr>
						                                            <td>Amoxell </td>
						                                            <td>Amoxicillin</td>
						                                            <td>P 9.00</td>
						                                            <td>16</td>
						                                            <td>12</td>
						                                            <td>750</td>
						                                        </tr>
						                                       <tr>
						                                            <td>Paracetamol</td>
						                                            <td>Alvedon</td>
						                                            <td>P 6.00</td>
						                                            <td>579</td>
						                                            <td>24</td>
						                                            <td>1800</td>
						                                        </tr>
						                                        <tr>
						                                            <td>Paracetamol</td>
						                                            <td>Alvedon</td>
						                                            <td>P 6.00</td>
						                                            <td>579</td>
						                                            <td>24</td>
						                                            <td>1800</td>
						                                        </tr>
						                                         <tr>
						                                            <td>Amoxell </td>
						                                            <td>Amoxicillin</td>
						                                            <td>P 9.00</td>
						                                            <td>16</td>
						                                            <td>12</td>
						                                            <td>750</td>
						                                        </tr>
						                                        <tr>
						                                            <td>Paracetamol</td>
						                                            <td>Alvedon</td>
						                                            <td>P 6.00</td>
						                                            <td>579</td>
						                                            <td>24</td>
						                                            <td>1800</td>
						                                        </tr>
						                                        <tr>
						                                            <td>Amoxell </td>
						                                            <td>Amoxicillin</td>
						                                            <td>P 9.00</td>
						                                            <td>16</td>
						                                            <td>12</td>
						                                            <td>750</td>
						                                        </tr>
						                                    </tbody>
						                                </table>
						                            </div>
						                        </div>
						                    </div>
						                </div>
						            </div>
           						 <!-- #END# Basic Examples -->
								</div>
							</div>
							{{-- End Stock-Out --}}
						</div>
				</div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="messages_with_icon_title">
                                   <div class="row">
							<div class="body">
								<!-- Medicine Information -->
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="card">
										<div class="header bg-grey">
											<h2>
												<center><h5>MEDICINE INFORMATION</h5></center>
											</h2>
										</div>
										<div class="body">
											<div class="row">
												<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6" style="padding: 0px;">
													<div class="image">
														  <img src="{{ URL::asset('AdminSB/images/amoxicillin.jpg') }}"  width="250" height="250" class="img-responsive">
													</div>
												</div>
												<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="padding: 0px;">
													<p class="font-bold col-teal">
														<b style="font-size: 16px;">Product Number: </b> 
														{{-- 653216841 --}}
													</p>
													<p><b>Generic Name:</b> </p>
													<p><b>Brand Name:</b> </p>
													<p><b>Manufacturer:</b> </p>
													<p><b>Weight:</b></p>
													<p><b>Expiration Date:</b></p>
													
												</div>
												<div class="col-lg-5 col-md-3 col-sm-3 col-xs-3">
													<p> <b style="color: #545454; font-size: 22px;">653216841 </b></p>
													<p> Amoxicillin </p>
													<p> Moxatag </p>
													<p> ABIOLEX - (Andrimaco - Chile CHILE) </p>
													<p> 25mg </p>
													<p style="color: orange;"> 10/12/2019 </p>
												</div>
											</div>
											<!-- BASIC INFOMATION -->
											<div class="row">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 0px">
													<p style="background-color: teal;"><b style="color: white; font-size: 18px;">Description</b></p>
													<hr id="hr">
												</div>
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<div class="col-lg-12 col-md-6 col-sm-6 col-xs-6" style="margin-bottom: 0px">
														And is full of waffle to It has multiple paragraphs and is full of waffle to pad out the comment. Usually, you just wish these sorts of comments would come to an end.multiple paragraphs and is full of waffle to pad out the comment..And is full of waffle to It has multiple paragraphs and is full of waffle to pad out the comment. Usually, you just wish these sorts of comments would come to an end.multiple paragraphs and is full of waffle to pad out the comment..And is full of waffle to It has multiple paragraphs and is full of waffle to pad out the comment. Usually, you just wish these sorts of comments would come to an end.multiple paragraphs and is full of waffle to pad out the comment..And is full of waffle to It has multiple paragraphs and is full of waffle to pad out the comment. Usually, you just wish these sorts of comments would come to an end.multiple paragraphs and is full of waffle to pad out the comment..And is full of waffle to It has multiple paragraphs and is full of waffle to pad out the comment. Usually, you just wish these sorts of comments would come to an end.multiple paragraphs and is full of waffle to pad out the comment..
													</div>
											</div>
											<!-- END BASIC INFORMATION -->
											
											
											<!-- EMERGENCY INFORMATION -->
											
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 0px">
													<p style="background-color: teal;"><b style="color: white; font-size: 18px;">Stock Information</b></p>
													<hr id="hr">
												
											</div>
											<div class="row">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="margin-bottom: 0px">
														<div class="col-lg-8 col-md-6 col-sm-6 col-xs-6">
															<p><b>Current Price :</b></p>
															<p><b>Current Quantity /Box :</b></p>
															<p><b>Pcs per Box :</b></p>
															<p><b>Total Item :</b></p>
														</div>
														<div class="col-lg-4 col-md-6 col-sm-6 col-xs-6" style="padding: 0px;">
															<p>P30.00</p>
															<p>500 Box</p>
															<p>20 Pcs.</p>
															<p>10000 Pcs.</p>
																{{-- <input type="text" value="P30.00" name="">
															<div class="row">
																<input type="text" value="500" style="width: 50%;" name=""><input type="text" value="500" style="width: 50%;" name="">
															</div>
																<input type="text" value="20" style="width: 50%;" name="">
																<input type="text" value="pcs" style="width: 50%;" name="">
																
																<input type="text" value="10000" style="width: 50%;" name="">
																<input type="text" value="pcs" style="width: 50%;" name="">
															 --}}
															
														</div>
													</div>
													<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding: 0px">
														<div class="col-lg-6 col-md-8 col-sm-8 col-xs-8" style="padding:0px;">
															<p><b>Total Box Sold : </b></p>
															<p><b>Total Pcs Sols :</b></p>
														</div>
														<div class="col-lg-6 col-md-4 col-sm-4 col-xs-4" style="padding: 0px;">
															<p>320 Pcs. </p>
															<p>6400 Pcs.  </p>
														</div>
														<div style="text-align: right;">
						                                    <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#defaultModal">
						                                    <i class="material-icons">save</i><span>SAVE</span>
						                                    </button>
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
                            </div>
                        </div>

                        		</div>
							</div>
            			</div>

					</div> 
						            
		</div>
</section>

@section('javascript')
<!-- Jquery DataTable Plugin Js -->
<script src="{{ URL::asset('AdminSB/plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
<script src="{{ URL::asset('AdminSB/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
<script src="{{ URL::asset('AdminSB/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}"></script>
<script src="{{ URL::asset('AdminSB/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')}}"></script>
<script src="{{ URL::asset('AdminSB/plugins/jquery-datatable/extensions/export/jszip.min.js')}}"></script>
<script src="{{ URL::asset('AdminSB/plugins/jquery-datatable/extensions/export/pdfmake.min.js')}}"></script>
<script src="{{ URL::asset('AdminSB/plugins/jquery-datatable/extensions/export/vfs_fonts.js')}}"></script>
<script src="{{ URL::asset('AdminSB/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')}}"></script>
<script src="{{ URL::asset('AdminSB/plugins/jquery-datatable/extensions/export/buttons.print.min.js')}}"></script>

{{-- CUSTOM JS --}}
<script src="{{ URL::asset('AdminSB/js/pages/tables/jquery-datatable.js')}}"></script> 
@endsection
@endsection