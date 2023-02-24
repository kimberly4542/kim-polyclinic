@extends('doctor_portal.layouts.master')

@section('style')
	<style>
		h4{
			padding-bottom: 5px;
		}
	</style>

 {{-- <link href="{{ URL::asset('AdminSB/')}}" rel="stylesheet"> --}}
 <link href="{{ URL::asset('AdminSB/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css')}}" rel="stylesheet">

@endsection

@section('body')
<section class="content">
		<div class="container-fluid">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						<h2>INVENTORY IN MY CLINIC</h2>
					</div>
					<div class="body" style="padding: 0px;">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-sx-12">
								 <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
									<div class="card">
										{{-- <div class="header">
											 <h5>Option</h5>
										</div> --}}
										<div class="body">
											<div class="list-group">
												<a href="{{ url('inventory/inventory_in_clinic') }}" class="list-group-item">Items</a>
												<a href="{{ url('inventory/inventory_purchase_order') }}" class="list-group-item">Purchase Order</a>
												{{-- <a href="#" class="list-group-item">Package</a> --}}
												{{-- <a href="#" class="list-group-item">Item Income</a> --}}
												<a href="{{ url('inventory/inventory_invoice') }}" class="list-group-item active">Invoice</a>
												<a href="{{ url('inventory/inventory_item_return') }}" class="list-group-item">Return</a>
											</div>
										</div>
									</div>
								</div>
								{{-- Purchase order1 --}}
								<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
									<div class="card">
			                        <div class="header">
			                            <h2>
			                                Invoice
			                            </h2>
			                        </div>
			                        <div class="body">
			                            <div class="row clearfix">
			                                <div class="col-sm-12">
			                                    <div>
			                                         <h6>Bill to</h6> <input type="text"class="form-control">
			                                    </div>
			                                    <div>
			                                         <h6>Address</h6> <input type="text"class="form-control">
			                                    </div>
			                                </div>
			                            </div>
			                            <div class="row clearfix">
			                                <div class="col-sm-4">
			                                    <div>
			                                         <h6>Invoice Number</h6> <input type="text"class="form-control">
			                                    </div>
			                                </div>
			                                <div class="col-sm-4">
			                                     <div>
			                                         <h6>PO Number</h6> <input type="text"class="form-control">
			                                    </div>
			                                </div>
			                                <div class="col-sm-4">
			                                    <div>
			                                         <h6>Due Date</h6> <input type="text"class="form-control">
			                                    </div>
			                                </div>
			                            </div>
			                            <div class="row clearfix">
			                                <div class="col-sm-12">
			                                	<h6>Notes / Remarks</h6>
			                                	<div class="col-sm-10" style="padding: 0px;">
			                                        <input type="text"class="form-control">
			                                	</div>
			                                	<div class="col-sm-2">
													<button class="btn btn-primary waves-effect">CREATE</button>
			                                	</div>
			                                </div>
			                            </div>
			                            <hr id="hr">
			                            

			                            <div class="row clearfix">
			                                <div class="col-sm-12">
			                                    <div>
			                                         <h6>Item Name</h6> <input type="text"class="form-control">
			                                    </div>
			                                    <div>
			                                         <h6>Supplier Address</h6> <input type="text"class="form-control">
			                                    </div>
			                                </div>
			                            </div>
			                            <div class="row clearfix">
			                                <div class="col-sm-4">
			                                    <div>
			                                         <h6>Quantity</h6> <input type="text"class="form-control">
			                                    </div>
			                                </div>
			                                <div class="col-sm-4">
			                                     <div>
			                                         <h6>Item Price</h6> <input type="text"class="form-control">
			                                    </div>
			                                </div>
			                                <div class="col-sm-4">
			                                    <div>
			                                         <h6>Disc</h6> <input type="text"class="form-control">
			                                    </div>
			                                </div>
			                            </div>
			                            <div class="row clearfix">
			                            	<div class="col-sm-6">
			                            		
			                            	</div>
			                                <div class="col-sm-5">
			                                	<h6>Total</h6>
			                                	<div class="col-sm-10" style="padding: 0px;">
			                                        <input type="text"class="form-control">
			                                	</div>
			                                	<div class="col-sm-2">
													<button class="btn btn-primary waves-effect">ADD</button>
			                                	</div>
			                                </div>
			                            </div>
			                        </div>
			                    </div>
								</div>
								{{-- END Purchase order1 --}}
								{{-- Purchase order2 --}}
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
								</div>
								<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
									<div class="card">
			                        {{-- <div class="header">
			                            <h2>
			                                Purchase Order
			                            </h2>
			                        </div> --}}
			                        <div class="body">
			                            <div class="row clearfix">
											<div class="col-xs-2">
												<img src="{{ URL::asset('AdminSB/images/icon.png')}}" width="70px" height="70px" alt="User" />
											</div>
											<div class="col-xs-10">
												<h3>Invoice</h3>
											</div>
										</div>
			                            <div class="row clearfix">
										<div class="col-xs-12">
											<h5>Bill to</h5>
										</div>
										<div class="col-xs-6">
											<h6>John Smith</h6>
											<h6>2 office Square</h6>
											<h6>Boston MA, 02121</h6>
											<h6>USA 123</h6>
										</div>
										<div class="col-xs-6">
											<h6>Invoice #: 0232544</h6>
											<h6>Invoice Date: 04/27/2018</h6>
											<h6>P.O. #: 132123</h6>
											<h6>Due Date #: 04/27/2018</h6>
										</div>	
									</div>
									<div class="row clearfix">
										<div class="body table-responsive">
				                            <table class="table">
				                                <thead>
				                                    <tr>
				                                        <th>Supplier</th>
				                                        <th>Delivery Address</th>
				                                    </tr>
				                                </thead>
				                                <tbody>
				                                    <tr>
				                                        <td>Taylor Dickern<br>
				                                        	70Bowman St.<br>
				                                        	South Windsor<br>
				                                        	USA<br>
				                                        	<br>
				                                        	Terms: 30 Days<br>
				                                        	Phone Number: 09123456789 <br>
				                                        	Attn: John Sullivan <br>
				                                        	Email: joshn@gmail.com<br>
				                                        </td>
				                                        <td>Boston Office<br>
				                                        	One Post Office Square, Suite 3600<br>
				                                        	Boston MA, 029000<br>
				                                        	USA<br>
				                                        	<br>
				                                        	Phone Number: 09123456789<br>
				                                        	Attn: Patrick<br>
				                                        </td>
				                                    </tr>
				                                </tbody>
				                            </table>
				                        </div>
									</div>
									<div class="row clearfix">
										<div class="body table-responsive">
				                            <table class="table">
				                                <thead>
				                                    <tr style="border: 31px;">
				                                        <th>QUANTITY</th>
				                                        <th>DESCRIPTION</th>
				                                        <th>UNIT PRICE</th>
				                                        <th>AMOUNT</th>
				                                    </tr>
				                                </thead>
				                                <tbody>
				                                    <tr>
				                                        <td>1</td>
				                                        <td>Medicol</td>
				                                        <td>5.00</td>
				                                        <td>5.00</td>
				                                    </tr>
				                                    <tr>
				                                        <td>1</td>
				                                        <td>Medicol</td>
				                                        <td>5.00</td>
				                                        <td>5.00</td>
				                                    </tr>
				                                    <tr>
				                                        <td>1</td>
				                                        <td>Medicol</td>
				                                        <td>5.00</td>
				                                        <td>5.00</td>
				                                    </tr>
				                                </tbody>
				                            </table>
				                        </div>
									</div>
									<br>
									<div class="row clearfix">
			                            	<div class="col-sm-5">
			                            		
			                            	</div>
			                                <div class="col-sm-7">
			                                	<div class="col-sm-5">
			                                    	<h4>Subtotal</h4>
				                            		<h4>Sales Tax 5.0%</h4>
				                            		<h4>TOTAL</h4>
			                                	</div>
			                                	<div class="col-sm-7">
													<input type="text"class="form-control">
			                                        <input type="text"class="form-control">
			                                        <input type="text"class="form-control">
			                                	</div>
			                                        <button class="btn btn-primary waves-effect pull-right" style="margin-right: 4%;">PRINT</button>

			                                </div>
			                            </div>
			                        </div>
			                    </div>
								</div>
								{{-- END Purchase order2 --}}
							</div>

            			</div>
					</div> 

				</div>
			</div>
		</div>
</section>

@section('javascript')
	{{-- <script src="{{ URL::asset('AdminSB/')}}"></script> --}}
	<script src="{{ URL::asset('AdminSB/plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
	<script src="{{ URL::asset('AdminSB/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
	<script src="{{ URL::asset('AdminSB/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}"></script>

	{{-- CUSTOM JS --}}
	<script src="{{ URL::asset('AdminSB/js/pages/tables/jquery-datatable.js')}}"></script>
	{{-- <script src="{{ URL::asset('AdminSB/plugins/jquery-inputmask/jquery.inputmask.bundle.js')}}"></script> --}}
	{{-- <script src="{{ URL::asset('AdminSB/js/pages/forms/advanced-form-elements.js')}}"></script> --}}

@endsection
@endsection