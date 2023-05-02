@extends('secretary_portal.layouts.master')


@section('style')

	<!-- Sweetalert Css -->
	<link href="{{ URL::asset('AdminSB/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet" />

@endsection
@section('body')
	<section id="app" class="content">
		<div class="container-fluid">
			<div class="row clearfix">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="card">
						<div class="header">
							<h2 style="padding: 20px;">
								Medical Record
							</h2>
						</div>
						<div class="body">
							<div class="row">
								<div class="col-md-3">
									<select name="" id="" class="form-control" v-model="diagnos" @change="index">
										<option value="" selected>Diagnosis</option>									
										
										<option v-for="item in diagnosis" :value="item.diagnos" >@{{item.diagnos}}</option>
									</select>
								</div>
								<div class="col-md-3">
									<input type="text" class="form-control" placeholder="Age">
								</div>
								<div class="col-md-3">
									<select name="" id="" class="form-control" v-model="location"  @change="index">
										<option value="" selected>Location</option>
										
										<option v-for="item in locations" :value="item.address1">@{{item.address1}}</option>
									</select>
								</div>
								<div class="col-md-3">
									<select name="" id="" class="form-control" v-model="gender"  @change="index">
										<option value="" selected>Gender</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
								</div>
							</div>
							<div class="table-responsive">
								<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
									<thead>
										<tr>
											<th>Diagnosis</th>
											<th>Age</th>
											<th>Location</th>											
											<th>Gender</th>
										</tr>
									</thead>
									<tbody>
										<tr v-for="result in results">
											<td>@{{result.diagnos}}</td>
											<td>@{{getAge(result.birth_date)}}</td>
											<td>@{{result.address1}}</td>
											<td>@{{result.gender}}</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="card-footer">
						<pagination :next_page_url=next_page_url :prev_page_url=prev_page_url :current_page_url=current_page_url :current_page=current_page @paginate="paginatedData"></pagination>
						</div>
					</div>
				</div>
			</div>	
		</div>
		
	</section>

@endsection
@push('js')
<script src="{{mix('js/medical_report.js')}}"></script>
@endpush