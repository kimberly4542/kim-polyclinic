@extends('secretary_portal.layouts.master')

@section('body')
	<section class="content" id="app">
		<div class="container-fluid">
			@if ($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif
			@if(session('successMessage'))
				<div class="alert alert-success">
					{{ session('successMessage') }}
				</div>
			@endif
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						<h2 style="padding: 20px;"> <b>Medicine Information</b> </h2>
					</div>
					<div class="body">
						<div class="row clearfix">
							<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="padding: ">
								<div class="card">
									<div class="body" style="padding: 10px;">
										<a href="{{ url('sec_profile/clinic_medicines') }}" 
											class="btn btn-warning waves-effect"
											style="margin: 10px;">Back</a>
										{{-- <button type="button" class="btn bg-deep-purple waves-effect"
											style="margin: 10px; margin-left: 20px;"
											data-toggle="modal"
											data-target="#addMedicine">
											<i class="material-icons">playlist_add</i>
											<span>ADD MEDICINE</span>
										</button> --}}
									</div>
								</div>
								<div class="card">
									<div class="header">
										<input type="text" class="form-control date" placeholder="Search Medicine">
									</div>
									<div class="body">
										<div class="list-group" id="redemption">
											@if(count($medicineQuery) > 0)
												@foreach($medicineQuery as $data)
													<button class="list-group-item"
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
													@click="showDiv"
													>
													{{ $data->generic_name }}
													</button>
												@endforeach
											@else
												<p>No Medicines Found</p>
											@endif

										</div>
									</div>
								</div>
							</div>
							
							<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
								<div class="card">
									<div class="header bg-grey">
										<h2>
											<center><h5>MEDICINE INFORMATION</h5></center>
										</h2>
									</div>
									<div class="body">
										<div class="row clearfix">
											<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="padding: 0px;">
												<div class="image">
													<template v-if="divIsActive">
														{{-- <img src="{{ URL::asset('AdminSB/images/amoxicillin.jpg') }}"  width="250" height="250" class="img-responsive"> --}}
														<div style="margin-left: 15px;" id="jener">
													{{-- 	@if(isset($data->image)  && !empty($data->image))
															<img src="{{asset('upload')}}/{{ $data->image }}" />
														@else
															<img src="{{asset('upload/noimage.png')}}" />
														@endif
														 --}}
														</div>
													</template>
												</div>
											</div>
											<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" style="padding: 0px;">
											{{-- 	<p class="font-bold col-teal">
													<b style="font-size: 16px;">Product Number: </b> 
													653216841 
												</p> --}}

												<template v-if="divIsActive">
													<p><b>Generic Name:</b> </p>
													<p><b>Brand Name:</b> </p>
													<p><b>Manufacturer:</b> </p>
													<p><b>Weight:</b></p>
													<p><b>Expiration Date:</b></p>
												</template>
												
											</div>
											<div class="col-lg-5 col-md-3 col-sm-6 col-xs-6">
												{{-- <p> <b style="color: #545454; font-size: 16px;">653216841 </b></p> --}}
												<p> <span id="generic_name"></span> </p>
												<p><span id="brand_name"></span></p>
												<p><span id="manufacturer"></span></p>
												<p>	<span id="weight"></span></p>
												<p style="color: orange;">
													<span id="expiration_date"></span>
												</p>
											</div>
										</div>

										{{-- <div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 0px">
												<p style="background-color: teal;"><b style="color: white; font-size: 18px;">Description</b></p>
												<hr id="hr">
											</div>
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-12 col-md-6 col-sm-6 col-xs-6" style="margin-bottom: 0px">
													<p id="other_desc"></p>
												</div>
											</div>
										</div> --}}

										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 0px">
											<template v-if="divIsActive">
												<p style="background-color: teal;"><b style="color: white; font-size: 18px;">Stock Information</b></p>
												<hr id="hr">
											</template>
										</div>
											
										<div class="row clearfix">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="margin-bottom: 0px">
													<div class="col-lg-8 col-md-6 col-sm-6 col-xs-6">
														<template v-if="divIsActive">
															<p><b>Current Price :</b></p>
															<p><b>Current Quantity /Box :</b></p>
															<p><b>Pcs per Box :</b></p>
															<p><b>Total Item :</b></p>
														</template>
													</div>
													<div class="col-lg-4 col-md-6 col-sm-6 col-xs-6" style="padding: 0px;">
														<p><span id="price"></span></p>
														<p><span id="quantity_box"></span></p>
														<p><span id="pcs_per_box"></span></p>
														<p><span id="total_item_quantity"></span></p>
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding: 0px">
													<div class="col-lg-6 col-md-8 col-sm-8 col-xs-8" style="padding:0px;">
														<template v-if="divIsActive">
															<p><b>Total Box Sold : </b></p>
															<p><b>Total Pcs Sols :</b></p>
														</template>
													</div>
													<div class="col-lg-6 col-md-4 col-sm-4 col-xs-4" style="padding: 0px;">
														{{-- <p>320 Pcs. </p>
														<p>6400 Pcs.  </p> --}}
													</div>
												</div>
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0px;">
													<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
														
													</div>
													<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
														<div style="text-align: right;">
															@if(count($medicineQuery) > 0)
																<button type="button" id="ButtonDataReciever" class="btn btn-primary waves-effect"
																	v-bind:style="{'visibility': buttonState()}" 
																	data-med_id=""
																	data-generic_name=""
																	data-brand_name=""
																	data-manufacturer=""
																	data-weight=""
																	data-expiration_date=""
																	data-other_desc=""
																	data-price=""
																	data-quantity_box=""
																	data-pcs_per_box=""
																	data-total_item_quantity=""
																	data-image=""
																	data-toggle="modal"
																	data-target="#editMedicine">
																	<i class="material-icons">edit</i>
																	<span>EDIT MEDICINE</span>
																</button>
															@endif
														</div>
													</div>
												</div>
											</div>
										
										</div>
									</div>
								</div> 
							</div>
						</div>
						<!-- END Medicine PROFILE -->
					</div>
				</div>
			</div>

			<div class="modal fade" id="editMedicine" tabindex="-1" role="dialog">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h4>Edit Medicine Information</h4>
							<hr style="margin: 0px;">
						</div>

						<div class="modal-body" >
							<form action="{{ url('sec_profile/med_info/update') }}" method="POST" enctype="multipart/form-data">
								@csrf
								{{ method_field('put') }}
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 10px; margin-bottom: 10px;">
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
										{{-- <img src="{{ URL::asset('AdminSB/images/doctor.jpg') }}" class="img-responsive"> --}}
										<div id="april"></div>
										{{-- @if(Auth::guard('profile_medicine_information_basicTableImageUpload')->check()) --}}
											<input type="file" name="file">
										{{-- @endif --}}
										
									</div>

									<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
										<div class="row">
										<input type="text" style="display: none;" name="med_id">
											<div class="col-sm-6 col-md-6 col-lg-6 col-xs-6">
												<p>
													<b style="color: #00ace6">Generic Name:</b>
													<input type="text" class="form-control" value="" name="generic_name">
												</p>
											</div>
											<div class="col-sm-6 col-md-6 col-lg-6 col-xs-6">
												<p>
													<b style="color: #00ace6">Brand Name:</b>
													<input type="text" class="form-control" value="" name="brand_name">
												</p>
											</div>
										</div>
										<p>
											<b style="color: #00ace6">Manufacturer:</b>
											<input type="text" 	class="form-control" value="" name="manufacturer">
										</p>
										<div class="row">
											<div class="col-sm-6 col-md-6 col-lg-6 col-xs-6">
												<p>
													<b>Weight:</b>
													<input type="text" class="form-control" value="" name="weight">
												</p>
											</div>
											<div class="col-sm-6 col-md-6 col-lg-6 col-xs-6">
												<p>
													<b>Expiration Date:</b>
													<input type="text" class="form-control" value="" name="expiration_date">
												</p>
											</div>
										</div>	
									</div>
								{{-- 	<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" style="margin-top: 10px; margin-bottom: 10px;">
										<h4>Description:</h4> 
										<textarea id="ckeditor" name="other_desc"></textarea>
									</div> --}}
									<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" style="margin-top: 10px; margin-bottom: 10px;">
										<h4>Stock Information</h4> 
										<div class="row">
											<div class="col-sm-3 col-md-3 col-lg-3 col-xs-3">
												<p>
													<b>Current Price:</b>
													<input type="text" 	class="form-control" value="" name="price">
												</p>
											</div>
											<div class="col-sm-3 col-md-3 col-lg-3 col-xs-3">
												<p>
													<b>Current Quantity/Box:</b>
													<input type="text" class="form-control" value="" name="quantity_box">
												</p>
											</div>
											<div class="col-sm-3 col-md-3 col-lg-3 col-xs-3">
												<p>
													<b>Pieces per box:</b>
													<input type="text" class="form-control" value="" name="pcs_per_box">
												</p>
											</div>
											<div class="col-sm-3 col-md-3 col-lg-3 col-xs-3">
												<p>
													<b>Total Item Quantity:</b>
													<input type="text" class="form-control" value="" name="total_item_quantity">
												</p>
											</div>
										</div>		
									</div>
								</div>
								
								<div class="modal-footer" style="padding: 19px;">
									<button type="submit" class="btn btn-primary waves-effect">SAVE CHANGES</button>
									<button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
								</div>
							</form>	
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
							<form action="{{ url('sec_profile/med_info/store') }}" method="POST" enctype="multipart/form-data">
								@csrf
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 10px; margin-bottom: 10px;">
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
										 <img src="{{ URL::asset('upload/public/noimage.png') }}" class="img-responsive thumbnail">
										{{-- @if(Auth::guard('profile_medicine_information_basicTableImageUpload')->check()) --}}
											<input type="file" style="margin-top: 5px;" name="file">
										{{-- @endif --}}
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
									{{-- <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" style="margin-top: 10px; margin-bottom: 10px;">
										<h4>Description:</h4> 
										<div class="form-group">
											<div class="form-line">
												<textarea rows="1" class="form-control no-resize auto-growth" name="other_desc"></textarea>
											</div>
										</div>
									</div> --}}
									<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" style="margin-top: 10px; margin-bottom: 10px;">
										<h4>Stock Information</h4> 
										<div class="row">
											<div class="col-sm-3 col-md-3 col-lg-3 col-xs-3">
												<p>
													<b>Current Price:</b>
													<input type="text" class="form-control" value="" name="price">
												</p>
											</div>
											<div class="col-sm-3 col-md-3 col-lg-3 col-xs-3">
												<p>
													<b>Current Quantity/Box:</b>
													<input type="text" class="form-control" value="" name="quantity_box">
												</p>
											</div>
											<div class="col-sm-3 col-md-3 col-lg-3 col-xs-3">
												<p>
													<b>Pieces per box:</b>
													<input type="text" class="form-control" value="" name="pcs_per_box">
												</p>
											</div>
											<div class="col-sm-3 col-md-3 col-lg-3 col-xs-3">
												<p>
													<b>Total Item Quantity:</b>
													<input type="text" class="form-control" value="" name="total_item_quantity">
												</p>
											</div>
										</div>		
									</div>
								</div>
								<div class="modal-footer" style="padding: 19px;">
									<button type="submit" class="btn btn-primary waves-effect">SAVE CHANGES</button>
									<button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
								</div>
							</form>	
						</div>
						
					</div>
				</div>
			</div>          
		</div>
	</section>
	@section('javascript')
{{-- 		<script src="{{ URL::asset('AdminSB/js/pages/forms/editors.js')}}"></script>
		<script src="{{ URL::asset('AdminSB/plugins/ckeditor/ckeditor.js')}}"></script>
		<script src="{{ URL::asset('AdminSB/plugins/jquery/jquery.min.js')}}"></script>
		<script src="{{ URL::asset('AdminSB/plugins/bootstrap/js/bootstrap.js')}}"></script>
		<script src="{{ URL::asset('AdminSB/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>
		<script src="{{ URL::asset('AdminSB/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
		<script src="{{ URL::asset('AdminSB/plugins/node-waves/waves.js')}}"></script>
		<script src="{{ URL::asset('AdminSB/js/demo.js')}}"></script>
		<script src="{{ URL::asset('AdminSB/js/admin.js')}}"></script>
 --}}	
		<script type="text/javascript">
			$(document).ready(function() {
				$("#redemption button").on("click", function (e) {
					var med_id = $(this).attr("data-med_id");
					var generic_name = $(this).attr("data-generic_name");
					var brand_name = $(this).attr("data-brand_name");
					var manufacturer = $(this).attr("data-manufacturer");
					var weight = $(this).attr("data-weight");
					var expiration_date = $(this).attr("data-expiration_date");
					var other_desc = $(this).attr("data-other_desc");
					var price = $(this).attr("data-price");
					var pcs_per_box = $(this).attr("data-pcs_per_box");
					var quantity_box = $(this).attr("data-quantity_box");
					var total_item_quantity = $(this).attr("data-total_item_quantity");
					var image = $(this).attr("data-image");

					$('#ButtonDataReciever').data('med_id', med_id);
					$('#ButtonDataReciever').data('generic_name', generic_name);
					$('#ButtonDataReciever').data('brand_name', brand_name);
					$('#ButtonDataReciever').data('manufacturer', manufacturer);
					$('#ButtonDataReciever').data('weight', weight);
					$('#ButtonDataReciever').data('expiration_date', expiration_date);
					$('#ButtonDataReciever').data('other_desc', other_desc);
					$('#ButtonDataReciever').data('price', price);
					$('#ButtonDataReciever').data('pcs_per_box', pcs_per_box);
					$('#ButtonDataReciever').data('quantity_box', quantity_box);
					$('#ButtonDataReciever').data('total_item_quantity', total_item_quantity);
					$('#ButtonDataReciever').data('image', image);

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
						$('#ButtonDataReciever').data('image', tag);
					}
					else {
						var wrapper = document.getElementById('jener');
						var tag = '';
						tag += '<img src=';
						tag += '"{{asset('upload')}}/';
						tag += image;
						tag += '"/>';

						console.log(image);
						wrapper.innerHTML = tag;
						$('#ButtonDataReciever').data('image', tag);
					}
				});

				$('#editMedicine').on("show.bs.modal", function (e) {
				
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

					var wrapper = document.getElementById('april');
					wrapper.innerHTML = image;
					
					$(e.currentTarget).find('input[name="med_id"]').val(med_id);
					$(e.currentTarget).find('input[name="generic_name"]').val(generic_name);
					$(e.currentTarget).find('input[name="brand_name"]').val(brand_name);
					$(e.currentTarget).find('input[name="manufacturer"]').val(manufacturer);
					$(e.currentTarget).find('input[name="weight"]').val(weight);
					$(e.currentTarget).find('input[name="expiration_date"]').val(expiration_date);
					$(e.currentTarget).find('input[name="other_desc"]').val(other_desc);
					$(e.currentTarget).find('input[name="price"]').val(price);
					$(e.currentTarget).find('input[name="pcs_per_box"]').val(pcs_per_box);
					$(e.currentTarget).find('input[name="quantity_box"]').val(quantity_box);
					$(e.currentTarget).find('input[name="total_item_quantity"]').val(total_item_quantity);

				});
			});

			var vm = new Vue ({
				el: '#app',
				data: {
					divIsActive: false,

				},
				methods: {
					showDiv: function () {
						this.divIsActive = true
					},
					buttonState: function () {
						return (this.divIsActive == true) ? '':'hidden'
					}
				}
			})
		</script>
	@endsection
@endsection