@extends('doctor_portal.layouts.master')
@section('style')
	<style> 
		.modal {
				overflow-y: scroll;
			}
			.modal-header-button {
				min-height: 50px;
				max-height: 50px;
				min-width: 100px;
				max-width: 120px; 
				position: relative;
			}

			.modal-size {
				width: 100%;
				max-width: 1350px;
			}
	</style>
@endsection
@section('body')
	<section class="content">
		<div class="container-fluid">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="modal-header">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding-left: 0px; margin-top: 10px;">
						 <h4 class="modal-title" id="largeModalLabel">Billing Information</h4>
						</div>

						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
							<a href="javascript:history.back()" class="btn btn-warning waves-effect pull-right modal-header-button"><p style="margin-top:10px;">Back</p>
							</a>
						</div>
					</div>
					<div class="body">
						<div class="row clearfix">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="table-responsive" style="width: 100%">
								<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
									<thead>
										<tr>
											<th>Billing Date</th>
											<th>Particulars</th>
											<th>Duration</th>
											<th>Payable</th>
										</tr>
									</thead>
									<tbody>
										@if(count($consultationQuery) > 0 )
											@foreach($consultationQuery as $data)
												 <tr>
													<td> {{ $consultationModel->getBillingDate($data->consultation_id) }} </td>
													<td> {{ $consultationModel->getParticulars($data->consultation_id) }} </td>
													<td> {{ $consultationModel->getDuration($data->consultation_id) }} </td>
													<td> {{ $consultationModel->getPayable($data->consultation_id) }} </td>
													<td>
												</tr>
											@endforeach
										@else
											<td>No Data found</td>
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
@section('javascript')
	<script src="{{ URL::asset('AdminSB/plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
	<script src="{{ URL::asset('AdminSB/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
	<script src="{{ URL::asset('AdminSB/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}"></script>
	<script src="{{ URL::asset('AdminSB/js/pages/tables/jquery-datatable.js')}}"></script> 
@endsection
</section>
@endsection