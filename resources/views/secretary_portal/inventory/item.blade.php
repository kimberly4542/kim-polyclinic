
@extends('secretary_portal.layouts.master')

@section('style')
	 <link href="{{ URL::asset('AdminSB/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">
@endsection

@section('body')
	<section class="content">
		<div class="container-fluid">
			@if(session('successMessage'))
				<div class="alert alert-success">
					{{ session('successMessage') }}
				</div>
			@endif
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						<h2 style="padding: 20px;"><b>INVENTORY IN MY CLINIC</b></h2>
					</div>
					<div class="body">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-sx-12">
								<div class="col-lg-3 col-md-3 col-sm-12 col-sx-12">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="card">
											<div class="body" style="padding: 10px;">
												<a href="{{ url('sec_inventory/filter_clinic') }}" 
													class="btn btn-warning waves-effect"
													style="margin: 10px;">Back</a>
												<button type="button" class="btn bg-deep-purple waves-effect"
													style="margin: 10px; margin-left: 20px;"
													data-toggle="modal"
													data-target="#addMedicine">
													<i class="material-icons">playlist_add</i>
													<span>ADD STOCK</span>
												</button>
											</div>
										</div>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="card">
											<div class="body">
												<div class="list-group">
													<a href="{{ url('sec_inventory/item') }}/{{$clinic_id}}" class="list-group-item active">Items</a>
													<a href="{{ url('sec_inventory/purchase_order')}}/{{$clinic_id}}" class="list-group-item">Purchase Order</a>
													{{-- <a href="{{ url('sec_inventory/invoice') }}/{{$clinic_id}}" class="list-group-item">Invoice</a> --}}
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
									<div class="card">
										<div class="body">
											<!-- Nav tabs -->
											<ul class="nav nav-tabs" role="tablist">
												<li role="presentation" class="active">
													<a href="#home_with_icon_title" data-toggle="tab">
														Current Medicines and Status
													</a>
												</li>
												<li role="presentation">
													<a href="#profile_with_icon_title" data-toggle="tab">
														Stock-in
													</a>
												</li>
												<li role="presentation">
													<a href="#messages_with_icon_title" data-toggle="tab">
														Stock-out
													</a>
												</li>
											</ul>

											<!-- Tab panes -->
											<div class="tab-content">
												<div role="tabpanel" class="tab-pane fade in active" id="home_with_icon_title">
													<div class="row clearfix">
														<div class="body">
															<div class="table-responsive">
																<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
																	<thead>
																		<tr>
																			<th>Generic</th>
																			<th>Brand</th>
																			<th>Date Purchased</th>
																			<th>Current Price</th>
																			<th>Current Item Quantity</th>
																			<th>Action</th>
																		</tr>
																	</thead>
																	<tbody>
																		@if(count($medicineQuery) > 0)
																			@foreach($medicineQuery as $data)
																				<tr>																	<td>{{ $data->generic_name }}</td>
																					<td>{{ $data->brand_name }}</td>
																					<td>{{ $data->created_at }}</td>
																					<td>{{ $data->price }}</td>
																					<td>{{ $data->total_item_quantity }}</td>
																					<td>
																						<button class="btn btn-primary waves effect"
																							data-med_id="{{ $data->med_id }}"
																							data-generic_name="{{ $data->generic_name }}"
																							data-brand_name="{{ $data->brand_name }}"
																							data-manufacturer="{{ $data->manufacturer }}"
																							data-weight="{{ $data->weight }}"
																							data-expiration_date="{{ $data->expiration_date }}"
																							data-other_desc="{{ $data->other_desc }}"
																							data-price="{{ $data->price }}"
																							data-quantity_box="{{ $data->quantity_box }}"
																							data-pcs_per_box="{{ $data->pcs_per_box }}"
																							data-total_item_quantity="{{ $data->total_item_quantity }}"
																							data-image="{{ $data->image }}"
																							data-toggle="modal"
																							data-target="#viewModal">
																							View
																						</button>
																					</td>
																				</tr>
																			@endforeach
																		@else
																			<td>No Medicine Found</td>
																		@endif
																	</tbody>
																</table>
															</div>
														</div>
													</div>
												</div>

											{{-- 	<div role="tabpanel" class="tab-pane fade" id="profile_with_icon_title">
													<div class="row clearfix">
														<div class="body">
															<div class="table-responsive">
																<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
																	<thead>
																		<tr>
																			<th>Generic</th>
																			<th>Brand</th>
																			<th>Manufacturer</th>
																			<th>Quantity</th>
																			<th>Date Delivered</th>
																			<th>Action</th>
																		</tr>
																	</thead>
																	<tbody>
																		@if(count($medicineQuery) > 0)
																			@foreach($medicineQuery as $data)
																				<tr>
																					<td>{{ $data->generic_name }}</td>
																					<td>{{ $data->brand_name }}</td>
																					<td>{{ $data->created_at }}</td>
																					<td>{{ $data->price }}</td>
																					<td>{{ $data->total_item_quantity }}</td>
																					<td>
																						<button class="btn btn-primary waves effect"
																							data-med_id="{{ $data->med_id }}"
																							data-generic_name="{{ $data->generic_name }}"
																							data-brand_name="{{ $data->brand_name }}"
																							data-manufacturer="{{ $data->manufacturer }}"
																							data-weight="{{ $data->weight }}"
																							data-expiration_date="{{ $data->expiration_date }}"
																							data-other_desc="{{ $data->other_desc }}"
																							data-price="{{ $data->price }}"
																							data-quantity_box="{{ $data->quantity_box }}"
																							data-pcs_per_box="{{ $data->pcs_per_box }}"
																							data-total_item_quantity="{{ $data->total_item_quantity }}"
																							data-toggle="modal"
																							data-target="#viewModal">
																							View
																						</button>
																					</td>
																				</tr>
																			@endforeach
																		@else
																			<td>No Medicine Found</td>
																		@endif
																	</tbody>
																</table>
															</div>
														</div>
													</div>
												</div>

												<div role="tabpanel" class="tab-pane fade" id="messages_with_icon_title">
													<div class="row clearfix">
														<div class="body">
															<div class="table-responsive">
																<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
																	<thead>
																		<tr>
																			<th>Generic</th>
																			<th>Brand</th>
																			<th>Date Purchased</th>
																			<th>Current Price</th>
																			<th>Current Item Quantity</th>
																			<th>Action</th>
																		</tr>
																	</thead>
																<tbody>
																	@if(count($medicineQuery) > 0)
																		@foreach($medicineQuery as $data)
																			<tr>
																				<td>{{ $data->generic_name }}</td>
																				<td>{{ $data->brand_name }}</td>
																				<td>{{ $data->created_at }}</td>
																				<td>{{ $data->price }}</td>
																				<td>{{ $data->total_item_quantity }}</td>
																				<td>
																					<button class="btn btn-primary waves effect"
																						data-med_id="{{ $data->med_id }}"
																						data-generic_name="{{ $data->generic_name }}"
																						data-brand_name="{{ $data->brand_name }}"
																						data-manufacturer="{{ $data->manufacturer }}"
																						data-weight="{{ $data->weight }}"
																						data-expiration_date="{{ $data->expiration_date }}"
																						data-other_desc="{{ $data->other_desc }}"
																						data-price="{{ $data->price }}"
																						data-quantity_box="{{ $data->quantity_box }}"
																						data-pcs_per_box="{{ $data->pcs_per_box }}"
																						data-total_item_quantity="{{ $data->total_item_quantity }}"
																						data-toggle="modal"
																						data-target="#viewModal">
																						View
																					</button>
																					</td>
																				</tr>
																			@endforeach
																		@else
																			<td>No Medicine Found</td>
																		@endif
																	</tbody>
																</table>
															</div>
														</div>
													</div>
												</div> --}}
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>								
			</div>

			<div class="modal fade" id="addMedicine" tabindex="-1" role="dialog">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h4>Add Medicine Information</h4>
							<hr style="margin: 0px;">
						</div>

						<div class="modal-body" >
							<form action="{{ url('sec_inventory/addStock') }}" method="POST" enctype="multipart/form-data">
								@csrf
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 10px; margin-bottom: 10px;">
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
										<img src="{{ URL::asset('upload/public/noimage.png') }}" class="img-responsive thumbnail">
										{{-- {!! Form::file('image', array('class' => 'image')) !!} --}}
										<input type="hidden" name="_token" value="{{csrf_token()}}">
										<input type="file" name="file"> 
									</div>

									<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
										<div class="row">
											<input type="text" style="display: none;" name="med_id">
											<div class="col-sm-6 col-md-6 col-lg-6 col-xs-6">
												<input type="hidden" value="{{ $clinic_id }}" name="clinic_id">
												<p>
													<b style="color: #00ace6">Generic Name:</b>
													<input type="text" class="form-control" name="generic_name">
												</p>
											</div>
											<div class="col-sm-6 col-md-6 col-lg-6 col-xs-6">
												<p>
													<b style="color: #00ace6">Brand Name:</b>
													<input type="text" class="form-control" name="brand_name">
												</p>
											</div>
										</div>
										<p>
											<b style="color: #00ace6">Manufacturer:</b>
											<input type="text" class="form-control" name="manufacturer">
										</p>
										<div class="row">
											<div class="col-sm-6 col-md-6 col-lg-6 col-xs-6">
												<p>
													<b>Weight:</b>
													<input type="text" class="form-control" name="weight">
												</p>
											</div>
											<div class="col-sm-6 col-md-6 col-lg-6 col-xs-6">
												<p>
													<b>Expiration Date:</b>
													<input type="text" class="form-control" name="expiration_date">
												</p>
											</div>
										</div>	
									</div>
									<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" style="margin-top: 10px; margin-bottom: 10px;">
										<h5>Description:</h5> 
										<textarea class="form-control" name="other_desc"></textarea>
									</div>
									<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" style="margin-top: 10px; margin-bottom: 10px;">
										{{-- <h4>Stock Information</h4>  --}}
										<div class="row">
											<div class="col-sm-3 col-md-3 col-lg-3 col-xs-3">
													<h5>Current Price:</h5>
													<input type="text" class="form-control" value="" name="price">
											</div>
											<div class="col-sm-3 col-md-3 col-lg-3 col-xs-3">
												<h5>Current Quantity/Box:</h5>
												<input type="text" class="form-control" value="" name="quantity_box">
											</div>
											<div class="col-sm-3 col-md-3 col-lg-3 col-xs-3">
												<h5>Pieces per box:</h5>
												<input type="text" class="form-control" value="" name="pcs_per_box">
											</div>
											<div class="col-sm-3 col-md-3 col-lg-3 col-xs-3">
												<h5>Total Item Quantity:</h5>
												<input type="text" class="form-control" value="" name="total_item_quantity">
											</div>
										</div>		
									</div>
									<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
										<div class="row clearfix">
											<div class="col-sm-12">
												<div>
													 <h5>Supplier Name / Company</h5> 
													 <input type="text"class="form-control" name="supplier_name">
												</div>
												<div>
													 <h5>Supplier Address</h5> 
													 <input type="text"class="form-control" name="supplier_address">
												</div>
											</div>
										</div>
										<div class="row clearfix">
											<div class="col-sm-6">
												<div>
													 <h5>Term</h5>
													 <input type="text"class="form-control" name="term">
												</div>
											</div>
											<div class="col-sm-6">
												 <div>
													 <h5>Contact #</h5> 
													 <input type="text"class="form-control" name="contact">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="modal-footer" style="padding: 19px;">
									<button type="submit" class="btn btn-primary waves-effect">ADD STOCK</button>
									<button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
								</div>
							</form>	
						</div>
						
					</div>
				</div>
			</div>   

			<div class="modal fade" id="viewModal" tabindex="-1" role="dialog">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title" id="largeModalLabel">Modal title</h4>
						</div>
						<div class="modal-body">
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
												<div id="jener"></div>
											</div>
											<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="padding: 0px;">
											{{-- 	<p class="font-bold col-teal">
													<b style="font-size: 16px;">Product Number: </b> 
													653216841
												</p> --}}
												
												<p><b>Generic Name:</b> </p>
												<p><b>Brand Name:</b> </p>
												<p><b>Manufacturer:</b> </p>
												<p><b>Weight:</b></p>
												<p><b>Expiration Date:</b></p>
												
											</div>
											<div class="col-lg-5 col-md-3 col-sm-3 col-xs-3">
												{{-- <p> <b style="color: #545454; font-size: 22px;">653216841 </b></p> --}}
												<p id="generic_name">  </p>
												<p id="brand_name">  </p>
												<p id="manufacturer"> </p>
												<p id="weight"> </p>
												<p style="color: orange;" id="expiration_date"> </p>
											</div>
										</div>
										<!-- BASIC INFOMATION -->
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 0px">
												<p style="background-color: teal;"><b style="color: white; font-size: 18px;">Description</b></p>
												<hr id="hr">
											</div>
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-12 col-md-6 col-sm-6 col-xs-6" style="margin-bottom: 0px" id="other_desc">
													
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
														<p id="price">P30.00</p>
														<p id="quantity_box">500 Box</p>
														<p id="pcs_per_box">20 Pcs.</p>
														<p id="total_item_quantity">10000 Pcs.</p>
													</div>
												</div>
												{{-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding: 0px">
													<div class="col-lg-6 col-md-8 col-sm-8 col-xs-8" style="padding:0px;">
														<p><b>Total Box Sold : </b></p>
														<p><b>Total Pcs Sols :</b></p>
													</div>
													<div class="col-lg-6 col-md-4 col-sm-4 col-xs-4" style="padding: 0px;">
														<p>320 Pcs. </p>
														<p>6400 Pcs.  </p>
													</div>
												</div> --}}
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		@if($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
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
		<script type="text/javascript">
			$(document).ready(function() {
				$('#viewModal').on("show.bs.modal", function (e) {
					var med_id = $(e.relatedTarget).data('med_id');
					var generic_name = $(e.relatedTarget).data('generic_name');
					var brand_name = $(e.relatedTarget).data('brand_name');
					var manufacturer = $(e.relatedTarget).data('manufacturer');
					var weight = $(e.relatedTarget).data('weight');
					var expiration_date = $(e.relatedTarget).data('expiration_date');
					var other_desc = $(e.relatedTarget).data('other_desc');
					var price = $(e.relatedTarget).data('price');
					var pcs_per_box = $(e.relatedTarget).data('pcs_per_box');
					var quantity_box = $(e.relatedTarget).data('quantity_box');
					var total_item_quantity = $(e.relatedTarget).data('total_item_quantity');
					var image = $(e.relatedTarget).data('image');

					$('#generic_name').html(generic_name);
					$('#brand_name').html(brand_name);
					$('#manufacturer').html(manufacturer);
					$('#weight').html(weight);
					$('#expiration_date').html(expiration_date);
					$('#other_desc').html(other_desc);
					$('#price').html(price);
					$('#pcs_per_box').html(pcs_per_box);
					$('#quantity_box').html(quantity_box);
					$('#total_item_quantity').html(total_item_quantity);
					
					if(image == "") {
						var wrapper = document.getElementById('jener');
						var tag = '';
						tag += '<img src=';
						tag += '"{{asset('upload/public/noimage.png')}}';
						tag += '"/>';
						wrapper.innerHTML = tag;
						console.log(tag);
					}
					else {
						var wrapper = document.getElementById('jener');
						var tag = '';
						tag += '<img src=';
						tag += '"{{asset('med')}}/';
						tag += image;
						tag += '"/>';

						console.log(image);
						wrapper.innerHTML = tag;
					}
				});
			});
		</script>
	@endsection

@endsection