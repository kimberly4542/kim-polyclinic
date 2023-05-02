@extends('secretary_portal.layouts.master')


@section('style')

	<!-- Sweetalert Css -->
	<link href="{{ URL::asset('AdminSB/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet" />

@endsection
@section('body')
	<section class="content">
				<div class="container-fluid">
					<div class="block-header">
						<h1>
							Stock-In
						</h1>
					</div>
					<div class="row">
		                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		                    <div class="card">
		                        <div class="body">
		                            <div class="table-responsive">
		                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
		                                    <thead>
		                                        <tr>
		                                            <th>Medicine Name</th>
		                                            <th>Brand Name</th>
		                                            <th>Current Price</th>
		                                            <th>Quantity/Box</th>
		                                            <th>Pcs per Box</th>
		                                            <th>Stock-in Date</th>
		                                            <th>Total Item Quantity</th>
		                                        </tr>
		                                    </thead>
		                                    <tbody>
		                                        <tr>
		                                            <td>  </td>
		                                            <td>  </td>
		                                            <td>  </td>
		                                            <td>  </td>
		                                            <td>  </td>
		                                            <td>  </td>
		                                            <td>  </td>
		                                        </tr>
		                                        
		                                    </tbody>
		                                </table>
		                            </div>
		                        </div>
		                    </div>
		                </div>
					</div>
					<div class="block-header">
						<h1>
							Stock-Out
						</h1>
					</div>
					<div class="row">
		                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		                    <div class="card">
		                        <div class="body">
		                            <div class="table-responsive">
		                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
		                                    <thead>
		                                        <tr>
		                                            <th>Medicine Name</th>
		                                            <th>Brand Name</th>
		                                            <th>Current Price</th>
		                                            <th>Quantity/Box</th>
		                                            <th>Pcs per Box</th>
		                                            <th>Stock-out Date</th>
		                                            <th>Total Item Quantity</th>
		                                        </tr>
		                                    </thead>
		                                    <tbody>
		                                        <tr>
		                                            <td>  </td>
		                                            <td>  </td>
		                                            <td>  </td>
		                                            <td>  </td>
		                                            <td>  </td>
		                                            <td>  </td>
		                                            <td>  </td>
		                                        </tr>
		                                    </tbody>
		                                </table>
		                            </div>
		                        </div>
		                    </div>
		                </div>
					</div>
				{{-- 	<div class="block-header">
						<h2>
							PATIENT REPORT
						</h2>
					</div>
					<div class="row clearfix">
				<div class="col-lg-12 col-md-6 col-sm-12 col-xs-12" style="display: none;">
					<div class="card">
						<div class="body">
							<canvas id="chart_Discipline"></canvas>
						</div>
					</div>
				</div>
				<div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
					<div class="card">
						<div class="body">
							<canvas id="chart_Medicine"></canvas>
						</div>
					</div>
				</div>
				<div class="col-lg-12 col-md-6 col-sm-12 col-xs-12" style="display: none;">
					<div class="card">
						<div class="body">
							<canvas id="chart_monthly_client" ></canvas>
						</div>
					</div>
				</div>
				<div class="col-lg-12 col-md-6 col-sm-12 col-xs-12" style="display: none;">
					<div class="card">
						<div class="body">
							<canvas id="chart_monthly_client_forecast" ></canvas>
						</div>
					</div>
				</div>
			</div> --}}
				</div>
	</section>
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