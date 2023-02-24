@extends('doctor_portal.layouts.master')


@section('style')

	<!-- Sweetalert Css -->
	<link href="{{ URL::asset('AdminSB/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet" />

@endsection
@section('body')
	<section class="content">
		<div class="container-fluid">
			<div class="block-header">
				<h2>
					Stock-In
				</h2>
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
										@if(count($stockInQuery) > 0)
											@foreach($stockInQuery as $subscriber)
												@foreach($subscriber->getCLinic as $clinic)
													@foreach($clinic->getStockIn as $stockin)
														<tr>
															<td>{{ $stockin->generic_name }}</td>
															<td>{{ $stockin->brand_name }}</td>
															<td>{{ $stockin->price }}</td>
															<td>{{ $stockin->quantity_box }}</td>
															<td>{{ $stockin->pcs_per_box }}</td>
															<td>{{ $stockin->created_at->diffForHumans() }}</td>
															<td>{{ $stockin->total_item_quantity }}</td>
														</tr>
													@endforeach
												@endforeach
											@endforeach
										@else
											<td> No Data Found </td>
										@endif
										
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="block-header">
				<h2>
					Stock-Out
				</h2>
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
											<th>Stock-out Date</th>
											<th>Item Quantity Sold</th>
										</tr>
									</thead>
									<tbody>
										@if(count($stockOutQuery) > 0)
											@foreach($stockOutQuery as $subscriber)
												@foreach($subscriber->getCLinic as $clinic)
													@foreach($clinic->getMedicine as $medicine)
														@foreach($medicine->getStockOut as $stockOut)
															<tr>
																<td>{{ $stockOut->getMedicine->generic_name }}</td>
																<td>{{ $stockOut->getMedicine->brand_name }}</td>
																<td>{{ $stockOut->getMedicine->price }}</td>
																<td>{{ $stockOut->created_at->diffForHumans() }}</td>
																<td>{{ $stockOut->quantity }}</td>
															</tr>
														@endforeach
													@endforeach
												@endforeach
											@endforeach
										@else
											<td> No Data Found </td>
										@endif
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="block-header">
				<h2>
					Graphical Representation
				</h2>
			</div>
			<div class="row">
				<div class="row clearfix">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="card">
							<div class="body">
								<canvas id="StockOutChart"></canvas>
								<input type="hidden" id="totalRevenue" value="{{ $totalRevenue }}">
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="card">
							<div class="body">
								<canvas id="StockInChart"></canvas>
								<input type="hidden" id="totalExpenditures" value="{{ $totalExpenditures }}">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{ URL::asset('AdminSB/chartsJs/chart.min.js')}}"></script>
	<script type="text/javascript">
		let StockOutChart = document.getElementById('StockOutChart').getContext('2d');
		let StockInChart = document.getElementById('StockInChart').getContext('2d');

		var totalRevenue = document.getElementById("totalRevenue").value;
		var totalExpenditures = document.getElementById("totalExpenditures").value;

		Chart.defaults.global.defaultFontFamily = 'Lato';
		Chart.defaults.global.defaultFontSize = 18;
		Chart.defaults.global.defaultFontColor = '#777';
		var value = 500;

		let MassStockOutChart = new Chart(StockOutChart, {
			type:'radar', //bar, horzontalBar, pie, line, doughnut, radar, polarArea
			data:{
				labels:['January','Febuary','March','April','May','June', 'July', 'August', 'September', 'October', 'November', 'December'],
				datasets:[{
					label:'Income', 
					data:[
						0,0,0,0,0,0,0,0,0,0,0,totalRevenue
					],
					backgroundColor:[
					'rgba(25, 99, 132, 0.6)',
					'rgba(153, 102, 255, 0.6)',
					'rgba(255, 206, 86, 0.6)',
					'rgba(75, 192, 192, 0.6)',
					'rgba(255, 99, 132, 0.6)'
					],
					borderWidth:1,
					borderColor:'#777',
					hoverBorderWidth:'1.5',
					hoverBorderColor:'#000'
				}]
			},
			options:{
				title:{
					display: true,
					text: 'Stock In Revenue'
				}
			} 
		}); 

		let MassStockInChart = new Chart(StockInChart, {
			type:'radar', //bar, horzontalBar, pie, line, doughnut, radar, polarArea
			data:{
				labels:['January','Febuary','March','April','May','June', 'July', 'August', 'September', 'October', 'November', 'December'],
				datasets:[{
					label:'Income', 
					data:[
						0,0,0,0,0,0,0,0,0,0,0,totalExpenditures
					],
					backgroundColor:[
					'rgba(25, 99, 132, 0.6)',
					'rgba(153, 102, 255, 0.6)',
					'rgba(255, 206, 86, 0.6)',
					'rgba(75, 192, 192, 0.6)',
					'rgba(255, 99, 132, 0.6)'
					],
					borderWidth:1,
					borderColor:'#777',
					hoverBorderWidth:'1.5',
					hoverBorderColor:'#000'
				}]
			},
			options:{
				title:{
					display: true,
					text: 'Stock In Expenditures'
				}
			} 
		}); 


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