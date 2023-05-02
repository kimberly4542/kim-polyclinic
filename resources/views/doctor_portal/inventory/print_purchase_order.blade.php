
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
					@if(count($query) > 0)
						@foreach($query as $data)
							@foreach($clinicQuery as $clinic)
								<div class="body">
									<div class="row">
										<div class="col-lg-12 col-md-12 col-sm-12 col-sx-12">
											<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
												{{-- <div class="card">
													<div class="body">
														<div class="list-group">
															<a href="{{ url('inventory/item') }}/{{$clinic_id}}" class="list-group-item">Items</a>
															<a href="{{ url('inventory/purchase_order')}}/{{$clinic_id}}" class="list-group-item active">Purchase Order</a>
															<a href="{{ url('inventory/invoice') }}/{{$clinic_id}}" class="list-group-item">Invoice</a>
														</div>
													</div>
												</div> --}}
											</div>

											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="card">
													<div class="body" id="printOrder">
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
																<h6>{{ $clinic->address }}</h6>
														{{-- 		<h6>One post office Square</h6>
																<h6>Boston MA, 02121</h6>
																<h6>USA</h6> --}}
															</div>
															<div class="col-xs-6">
																<h6>PO No.: {{ $data->po }}</h6>
																<h6>{{ $data->created_at }}</h6>
																{{-- <h6>PO Status Closed Completed</h6> --}}
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
																			<td>{{ $data->supplier_name }}<br>
																				{{ $data->supplier_address }}<br>
																				<br>
																				Terms: {{ $data->terms }}<br>
																				Phone Number: {{ $data->contact }} <br>
																				{{-- Attn: John Sullivan <br>
																				Email: joshn@gmail.com<br> --}}
																			</td>
																			<td>{{ $clinic->address }}<br>
																				<br>
																				Phone Number: {{ $clinic->cell_no }}<br>
																				{{-- Attn: Patrick<br> --}}
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
																			{{-- <th>DEPARTMENT</th> --}}
																		</tr>
																	</thead>
																	<tbody>
																		<tr>
																			<td>{{ $data->created_at }}</td>
																			<td>{{ $data->requested_by }}</td>
																			<td>{{ $data->approved_by }}</td>
																			{{-- <td>IT Department</td> --}}
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
																			<td>{{ $data->notes }}</td>
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
																			<th>QTY.</th>
																			<th>ITEM PRICE</th>
																			{{-- <th>DISC</th> --}}
																			<th>TOTAL</th>
																		</tr>
																	</thead>
																	<tbody>
																		<tr>
																			<td>{{ $data->item_name }}</td>
																			<td>{{ $data->quantity }}</td>
																			<td>{{ $data->item_price }}</td>
																			{{-- <td>0.00</td> --}}
																			<td>{{ $data->total }}</td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div><br>
														
													</div>
												</div>
											</div>

										</div>
									</div>
									<div class="row clearfix">
										<div class="col-sm-4">
											<a href="javascript:history.back()" class="btn btn-warning waves-effect">Back</a>
											<button onclick="printContent('printOrder')" class="btn btn-primary waves-effect">Print</button>
										</div>
										<div class="col-sm-4"></div>
										<div class="col-sm-4">
											<h6>ORDER TOTAL</h6>
											<div class="col-sm-12" style="padding: 0px;">
												<input type="text"class="form-control">
											</div>
										</div>
									</div>
								</div>
							@endforeach
						@endforeach
					@endif
				</div>
			</div>
		</div>
	</section>
	<script type="text/javascript">
		function printContent(el){
			var restorepage = document.body.innerHTML;
			var printcontent = document.getElementById(el).innerHTML;
			document.body.innerHTML = printcontent;
			window.print();
			document.body.innerHTML = restorepage;
		}
	</script>

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