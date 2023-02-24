
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
												<a href="{{ url('inventory/purchase_order')}}/{{$clinic_id}}" class="list-group-item active">Purchase Order</a>
												{{-- <a href="{{ url('inventory/invoice') }}/{{$clinic_id}}" class="list-group-item">Invoice</a> --}}
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
									<div class="card">
										<div class="header">
											<h2 style="padding: 20px;"> Purchase Order </h2>
										</div>
										<form action="{{ url('inventory/print_purchase_order') }}/{{ $clinic_id }}" method="POST">
											@csrf
											<div class="body">
												<div class="row clearfix">
													<div class="col-sm-12">
														<div>
															 <h6>Supplier Name / Company</h6> <input type="text"class="form-control" name="supplier_name">
														</div>
														<div>
															 <h6>Supplier Address</h6> <input type="text"class="form-control" name="supplier_address">
														</div>
													</div>
												</div>
												<div class="row clearfix">
													<div class="col-sm-4">
														<div>
															 <h6>Term</h6> <input type="text"class="form-control" name="term">
														</div>
													</div>
													<div class="col-sm-4">
														 <div>
															 <h6>Contact #</h6> <input type="text"class="form-control" name="contact">
														</div>
													</div>
													<div class="col-sm-4">
														<div>
															 <h6>PO#</h6> <input type="text"class="form-control" name="po">
														</div>
													</div>
												</div>
												<div class="row clearfix">
													<div class="col-sm-4">
														<div>
															 <h6>Delivery Date</h6> <input type="text"class="form-control" name="delivery_date">
														</div>
													</div>
													<div class="col-sm-4">
														 <div>
															 <h6>Requested by</h6> <input type="text"class="form-control" name="requested_by">
														</div>
													</div>
													<div class="col-sm-4">
														<div>
															 <h6>Approved by</h6> <input type="text"class="form-control" name="approved_by">
														</div>
													</div>
												</div>
												<div class="row clearfix">
													<div class="col-sm-12">
														<h6>Notes / Remarks</h6>
														<div class="col-sm-12" style="padding: 0px;">
															<textarea type="text" class="form-control" name="notes"></textarea> 
														</div>
													</div>
												</div> <hr>

												 <div class="row clearfix">
												<div class="col-sm-12">
													<div>
														 <h6>Item Name</h6> <input type="text"class="form-control" name="item_name">
													</div>
													<div>
														 <h6>Supplier Address</h6> <input type="text"class="form-control">
													</div>
												</div>
											</div>
											<div class="row clearfix">
												<div class="col-sm-4">
													<div>
														 <h6>Quantity</h6> <input type="text"class="form-control" name="quantity">
													</div>
												</div>
												<div class="col-sm-4">
													 <div>
														 <h6>Item Price</h6> <input type="text"class="form-control" name="item_price">
													</div>
												</div>
											    <div class="col-sm-4">
													<div>
														 <h6>Total</h6> <input type="text"class="form-control" name="total">
													</div>
												</div>
											</div>
											<div class="row clearfix">
												<div class="col-sm-2">
													{{-- <button class="btn btn-primary waves-effect">ADD ROW</button> --}}
												</div>
											</div>
												<div class="modal-footer" style="padding: 19px;">
													<button type="submit" class="btn btn-primary waves-effect">SAVE CHANGES</button>
													<button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
												</div>
											</div>
										</form>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		@if($errors->any())
				<ul>
					<div class="alert alert-danger">
						@foreach($errors->all() as $error)
							<li>
								{{ $error }}
							</li>
						@endforeach
					</div>
				</ul>
			@endif
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