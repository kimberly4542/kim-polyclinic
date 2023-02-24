@extends('admin_portal.home')

@section('body')
<section class="content">
	<div class="container-fluid">
		<div class="block-header">
			<h2>
				Statistics of subscribers
				<small>got a lot of things to do on javascripts </small>
			</h2>
		</div>
		<div class="row clearfix">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="card">
					<div class="body">
						<canvas id="chart_Discipline"></canvas>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="card">
					<div class="body">
						<canvas id="chart_Medicine"></canvas>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="card">
					<div class="body">
						<canvas id="chart_monthly_client" ></canvas>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="card">
					<div class="body">
						<canvas id="chart_monthly_client_forecast" ></canvas>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection

<script src="{{ URL::asset('AdminSB/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ URL::asset('AdminSB/plugins/chartjs/Chart.bundle.js')}}"></script>

<script>
	window.onload = function () {

	 	var chart_Discipline = document.getElementById('chart_Discipline');
	 	var chart_Medicine = document.getElementById('chart_Medicine');
	 	var chart_monthly_client = document.getElementById('chart_monthly_client');
	 	var chart_monthly_client_forecast = document.getElementById('chart_monthly_client_forecast');

		var chart = new Chart(chart_Discipline, {
			type: 'bar',
			data: {
				labels: ['Orthopedics', 'Ob/Gyne', 'Dentistry', 'Urology', 'Opthatmology'],
				datasets:[{
					label: 'Subscriber',
					data: [2,10,5,7,9],
					backgroundColor: '#2196F3'
				}]
			},
			options: {
				title:{
					display:true,
					text:'Numbers of Subscriber per Discipline'
				},
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero: true
						}
					}]
				}
			}
		});

		var chart2 = new Chart (chart_Medicine, {
			type: 'bar',
			data: {
				labels: ['paracetamol', 'diatabs', 'neozep', 'others'],
				datasets: [{
					label: 'Medicine',
					data: [25, 40, 15, 60],
					backgroundColor: 'rgb(255, 99, 132)'
				}]
			},
			options: {
				title: {
					display: true,
					text: 'Numbers of Medicine Sold'
				},
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero: true
						}
					}]
				}
			}
		});

		var chart3 = new Chart (chart_monthly_client, {
			type: 'line',
			data: {
				labels: ['January','February','March','April','May','June','July','August','September','October','November','December'],
				datasets: [{
					label: 'Month',
					data: [10,20,30,10,5,7,8,8,23,15,56,70],
					backgroundColor: 'rgb(255, 99, 132)',
					fill: false,
					borderColor: 'rgb(255, 99, 132)'
				}]
			},
			options: {
				title: {
					display: true,
					text: 'Monthly Subscriber Trends in year 2018',
				},
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero: true
						}
					}]
				}
			}
		});

		var chart3 = new Chart (chart_monthly_client_forecast, {
			type: 'line',
			data: {
				labels: ['January','February','March','April','May','June','July','August','September','October','November','December'],
				datasets: [{
					label: 'Month',
					data: [1,19,28,11,26,8,8,9,24,16,51,72],
					backgroundColor: '#FF5722',
					fill: false,
					borderColor: '#FF5722'
				}]
			},
			options: {
				title: {
					display: true,
					text: 'Monthly Forecast for Subscriber Trends in year 2019 ',
				},
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero: true
						}
					}]
				}
			}
		});

		// Other way around

		// var data_discipline = {
		// 	labels: ['Orthopedics', 'Ob/Gyne', 'Dentistry', 'Urology', 'Opthatmology'],
		// 	datasets:[{
		// 		label: 'Subscriber',
		// 		data:[0,10,5,7,9],
		// 		backgroundColor: 'rgb(255, 99, 132)'
		// 	}]
		// };

		// var data_medicine = {
		// 	labels: ['paracetamol', 'diatabs', 'neozep'],
		// 	datasets: [{
		// 		label: 'Medicine',
		// 		data: [25, 40, 25],
		// 		backgroundColor: 'rgb(255, 99, 132)'
		// 	}]
		// };

		// var Bar_Chart_Discipline = new Chart(chart_Discipline, {
		// 	type: 'bar',
		// 	data: data_discipline
		// });

		// var Bar_Chart_Medicine = new Chart(chart_Medicine, {
		// 	type: 'bar',
		// 	data: data_medicine
		// });
	}

</script>
