@extends('doctor_portal.layouts.master')

@section('style')
	<style>
		/*h6, h5, h3{
			padding: 0;	
			margin: 0;	
		}
		h5{
			padding: 0;	
			margin: 0;	
		}*/
	/*	table {
    border: 1px solid black;
}*/
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
												<a href="{{ url('inventory/inventory_purchase_order') }}" class="list-group-item active">Purchase Order</a>
												{{-- <a href="#" class="list-group-item">Package</a> --}}
												{{-- <a href="#" class="list-group-item">Item Income</a> --}}
												{{-- <a href="{{ url('inventory/inventory_invoice') }}" class="list-group-item">Invoice</a> --}}
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
			                                Purchase Order
			                            </h2>
			                        </div>
			                        <div class="body">
			                            <div class="row clearfix">
			                                <div class="col-sm-12">
			                                    <div>
			                                         <h6>Supplier</h6> <input type="text"class="form-control">
			                                    </div>
			                                    <div>
			                                         <h6>Supplier Address</h6> <input type="text"class="form-control">
			                                    </div>
			                                </div>
			                            </div>
			                            <div class="row clearfix">
			                                <div class="col-sm-4">
			                                    <div>
			                                         <h6>Term</h6> <input type="text"class="form-control">
			                                    </div>
			                                </div>
			                                <div class="col-sm-4">
			                                     <div>
			                                         <h6>Contact #</h6> <input type="text"class="form-control">
			                                    </div>
			                                </div>
			                                <div class="col-sm-4">
			                                    <div>
			                                         <h6>Thru</h6> <input type="text"class="form-control">
			                                    </div>
			                                </div>
			                            </div>
			                            <div class="row clearfix">
			                                <div class="col-sm-4">
			                                    <div>
			                                         <h6>Delivery Date</h6> <input type="text"class="form-control">
			                                    </div>
			                                </div>
			                                <div class="col-sm-4">
			                                     <div>
			                                         <h6>Requested by</h6> <input type="text"class="form-control">
			                                    </div>
			                                </div>
			                                <div class="col-sm-4">
			                                    <div>
			                                         <h6>Approved by</h6> <input type="text"class="form-control">
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
			                          {{--   <div class="row clearfix">
			                            	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				                                <div class="col-sm-10">
	 												<input type="text"class="form-control" placeholder="Your name..">
				                            	</div>
				                            	<div class="col-sm-2">
				                            		<button class="btn btn-primary waves-effect">CREATE</button>
				                            		<input type="button" class="btn btn-primary waves-effect" name="SAVE">

				                            	</div>
			                            	</div>
			                            </div> --}}

			                            {{-- Insert Here --}}
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
												<h3>PURCHASE ORDER</h3>
											</div>
										</div>
			                            <div class="row clearfix">
										<div class="col-xs-6">
											<h3>PURCHASE CONTROL</h3>
										</div>
										<div class="col-xs-6">
											<h3>PURCHASE ORDER</h3>
										</div>
										<div class="col-xs-6">
											<h6>Boston Office</h6>
											<h6>One post office Square</h6>
											<h6>Boston MA, 02121</h6>
											<h6>USA</h6>
										</div>
										<div class="col-xs-6">
											<h6>PO No.: 0232544</h6>
											<h6>04/27/2018</h6>
											<h6>PO Status Closed Completed</h6>
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
				                                    <tr>
				                                        <th>DELIVERY DATE</th>
				                                        <th>REQUESTED BY</th>
				                                        <th>APPROVED BY</th>
				                                        <th>DEPARTMENT</th>
				                                    </tr>
				                                </thead>
				                                <tbody>
				                                    <tr>
				                                        <td>04/28/2018</td>
				                                        <td>Patrick Smith</td>
				                                        <td>Patrick Smith</td>
				                                        <td>IT Department</td>
				                                    </tr>
				                                </tbody>
				                            </table>
				                        </div>
									</div>
									<div class="row clearfix">
										<div class="body table-responsive">
				                            <table class="table">
				                                <thead>
				                                    <tr>
				                                        <th>NOTES</th>
				                                    </tr>
				                                </thead>
				                                <tbody>
				                                    <tr>
				                                        <td>Description ABC</td>
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
				                                        <th>ITEM NAME</th>
				                                        <th>ITEM CODE</th>
				                                        <th>QTY.</th>
				                                        <th>ITEM PRICE</th>
				                                        <th>DISC</th>
				                                        <th>TOTAL</th>
				                                    </tr>
				                                </thead>
				                                <tbody>
				                                    <tr>
				                                        <td>Nescafe Gold Blend</td>
				                                        <td>QD2-00350</td>
				                                        <td>1.00</td>
				                                        <td>34.99</td>
				                                        <td>0.00</td>
				                                        <td>34.99</td>
				                                    </tr>
				                                    <tr>
				                                        <td>3 Tier Letter Tray</td>
				                                        <td>Q23-05550</td>
				                                        <td>1.00</td>
				                                        <td>34.99</td>
				                                        <td>0.00</td>
				                                        <td>34.99</td>
				                                    </tr>
				                                    <tr>
				                                        <td>Viking A4 Copier</td>
				                                        <td>QSA2-99350</td>
				                                        <td>1.00</td>
				                                        <td>34.99</td>
				                                        <td>0.00</td>
				                                        <td>34.99</td>
				                                    </tr>
				                                </tbody>
				                            </table>
				                        </div>
									</div>
									<br>
									<div class="row clearfix">
			                            	<div class="col-sm-6">
			                            		
			                            	</div>
			                                <div class="col-sm-5">
			                                	<h6>ORDER TOTAL</h6>
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
									
								{{-- END Purchase order2 --}}
								{{-- Purchase HISTORY --}}
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
								</div>
								<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
									<div class="card">
			                        <div class="header">
			                            <h2>
			                                PURCHASE HISTORY
			                            </h2>
			                        </div>
			                        <div class="body">
			                          <div class="body">
			                         	<div class="table-responsive">
						                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
						                                    <thead>
						                                        <tr>
						                                            <th>PO no.</th>
						                                            <th>Supplier</th>
						                                            <th>Delivery Order</th>
						                                            <th>Delivery Date</th>
						                                            <th>Requested By</th>
						                                            <th>Approved By</th>
						                                        </tr>
						                                    </thead>
						                                    <tfoot>
						                                        <tr>
						                                           	<th>PO no.</th>
						                                            <th>Supplier</th>
						                                            <th>Delivery Order</th>
						                                            <th>Delivery Date</th>
						                                            <th>Requested By</th>
						                                            <th>Approved By</th>
						                                        </tr>
						                                    </tfoot>
						                                    <tbody>
						                                         <tr>
						                                            <td> </td>
						                                            <td></td>
						                                            <td></td>
						                                            <td></td>
						                                            <td></td>
						                                            <td></td>
						                                        </tr>
						                                        <tr>
						                                            <td> </td>
						                                            <td></td>
						                                            <td></td>
						                                            <td></td>
						                                            <td></td>
						                                            <td></td>
						                                        </tr>
						                                        <tr>
						                                            <td> </td>
						                                            <td></td>
						                                            <td></td>
						                                            <td></td>
						                                            <td></td>
						                                            <td></td>
						                                        </tr>
						                                        <tr>
						                                            <td> </td>
						                                            <td></td>
						                                            <td></td>
						                                            <td></td>
						                                            <td></td>
						                                            <td></td>
						                                        </tr>
						                                        <tr>
						                                            <td> </td>
						                                            <td></td>
						                                            <td></td>
						                                            <td></td>
						                                            <td></td>
						                                            <td></td>
						                                        </tr>
						                                        <tr>
						                                            <td> </td>
						                                            <td></td>
						                                            <td></td>
						                                            <td></td>
						                                            <td></td>
						                                            <td></td>
						                                        </tr>
						                                    </tbody>
						                                </table>
						                            </div>
			                        </div> 
			                        </div>
			                    </div>
								</div>
									
								{{-- END Purchase HISTORY --}}
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