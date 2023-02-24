@extends('secretary_portal.layouts.master')

@section('style')
	<link href="{{ URL::asset('AdminSB/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">
@endsection

@section('body')
	<section class="content">
		<div class="container-fluid">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 

				<div class="body">
					<div class="row clearfix">
						<div class="card">
							<div class="header">
								<h2 style="padding: 20px;"> Inventory In Clinic </h2>
							</div>
							<div class="body">
								<div class="table-responsive">
									<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
										<thead>
											<tr>
												<th>Clinic Name</th>
												<th>Clinic Address</th>
												<th>Email Address</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											@if(count($clinicQuery) > 0)	
												@foreach($clinicQuery as $data)	
													<tr>
														<td>{{ $data->clinic_name }}</td>
														<td>{{ $data->address }}</td>
														<td>{{ $data->email_add }}</td>
														<td>
															<a href="{{ url('sec_inventory/item') }}/{{ $data->clinic_id }}"
															class="btn btn-primary"> View Medicines 
															</a> 
														</td>
													</tr>
												@endforeach
											@endif
										</tbody>
									</table>
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