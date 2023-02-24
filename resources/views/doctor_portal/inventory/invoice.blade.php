
@extends('doctor_portal.layouts.master')

@section('style')
	 <link href="{{ URL::asset('AdminSB/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">
@endsection

@section('body')
	<section class="content">
		<div class="container-fluid">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						<h2 style="padding: 20px;"><b>INVENTORY IN MY CLINIC</b></h2>
					</div>
					<div class="body">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-sx-12">
								<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
									<div class="card">
										<div class="body">
											<div class="list-group">
												<a href="{{ url('inventory/item') }}/{{$clinic_id}}" class="list-group-item">Items</a>
												<a href="{{ url('inventory/purchase_order')}}/{{$clinic_id}}" class="list-group-item">Purchase Order</a>
												<a href="{{ url('inventory/invoice') }}" class="list-group-item active">Invoice</a>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
									<div class="card">
										<div class="header">
											<h2 style="padding: 20px;"> Invoice </h2>
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
													<div class="col-sm-12" style="padding: 0px;">
														<textarea type="text"class="form-control"></textarea>
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