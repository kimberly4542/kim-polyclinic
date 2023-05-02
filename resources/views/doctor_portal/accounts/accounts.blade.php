@extends('doctor_portal.layouts.master')

@section('style')
<style>
	.modal-size {
			width: 100%;
			max-width: 1350px;
		}
	img.img-shadow:hover {
            box-shadow: 2px 2px 20px 5px rgba(0,0,0,0.2);
        }

        .img-shadow{
            transition: .5s ease;
        }

        .img-font {
            padding-left: 30px;
            color: #888888;
            font-size: 11px;
        }
        .img-font1 {
            padding-left: 30px;
            color: #888888;
            font-size: 15px;
        }
        .img-font2 {
            color: #888888;
            font-size: 15px;
        }


</style>

@endsection
@section('body')
<section class="content">
		@if(session('success'))
			<div class="alert alert-success">
				<p> {{ session('success') }} </p>
			</div>
		@endif
		<div class="container-fluid">
			<div class="block-header">
				{{-- <h2>Tables</h2> --}}
			</div>
			<dwiv class="row clearfix">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					@if(Auth::guard('settings_basicTable')->check())
						<div class="card">
							<div class="header">
								<h2 style="padding: 20px;">
									Accounts
									<small>Existing secretary accounts in table view</small>
								</h2>
							</div>

							<div class="body table-responsive">
								<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
									<thead>
										<tr>
											<th>FIRST NAME</th>
											<th>LAST NAME</th>
											<th>USERNAME</th>
											<th>ACTION</th>
										</tr>
									</thead>
									<tbody>
										@if(count($model) > 0)
											@foreach($model as $data)
												<tr>
													<td>{{ $data->fname }}</td>
													<td>{{ $data->lname }}</td>
													<td>{{ $data->username }}</td>
													<td>
														<button class="btn btn-primary waves-effect btn-sm" 
															{{-- data-pangalan="{{ $kawat->kuha($data->sec_id) }}" --}}
															data-fname="{{ $data->fname }}"
															data-mname="{{ $data->mname }}"
															data-lname="{{ $data->lname }}"
															data-image="{{ $data->image }}"
															data-username="{{ $data->username }}"
															data-address="{{ $data->address }}"
															data-birthdate="{{ $data->birthdate }}"
															data-contact_num="{{ $data->contact_num }}"
															data-email="{{ $data->email }}"
															data-description="{{ $data->description }}"
															data-toggle="modal" 
															data-target="#viewInfo">View
														</button>
														<button class="btn btn-warning waves-effect btn-sm"  
															data-sec_id="{{ $data->sec_id }}" 
															data-fname="{{ $data->fname }}"
															data-mname="{{ $data->mname }}"
															data-lname="{{ $data->lname }}"
															data-image="{{ $data->image }}"
															data-username="{{ $data->username }}"
															data-address="{{ $data->address }}"
															data-birthdate="{{ $data->birthdate }}"
															data-contact_num="{{ $data->contact_num }}"
															data-email="{{ $data->email }}"
															data-description="{{ $data->description }}"
															data-toggle="modal" 
															data-target="#updateSec">Update
														</button>
														<button class="btn btn-danger waves-effect btn-sm" 
															data-toggle="modal"
															data-sec_id="{{ $data->sec_id }}" 
															data-firstname="{{ $data->fname }}" 
															data-lastname="{{ $data->lname }}"
															data-password="{{ $data->password }}"
															data-target="#deleteSec">Delete
														</button>
													</td>
												</tr>
											@endforeach
										@endif
									</tbody>
								</table>
								<div class="pull-right">
										<button class="btn btn-success waves-effect" data-toggle="modal" data-target="#addAccount">ADD ACCOUNT</button>
								</div>
							</div> {{-- div table --}}
						</div> {{-- card --}}
					@endif

					@if(Auth::guard('settings_dataTable')->check())
						<div class="card">
							<div class="header">
								<h2 style="padding: 20px;">
									Accounts
									<small>Existing secretary accounts in table view</small>
								</h2>
							</div>

							<div class="body table-responsive">
								<table class="table table-bordered ">
									<thead>
										<tr>
											<th>FIRST NAME</th>
											<th>LAST NAME</th>
											<th>USERNAME</th>
											<th>ACTION</th>
										</tr>
									</thead>
									<tbody>
										@if(count($model) > 0)
											@foreach($model as $data)
												<tr>
													<td>{{ $data->fname }}</td>
													<td>{{ $data->lname }}</td>
													<td>{{ $data->username }}</td>
													<td>
														<button class="btn btn-primary waves-effect btn-sm" 
															{{-- data-pangalan="{{ $kawat->kuha($data->sec_id) }}" --}}
															data-fname="{{ $data->fname }}"
															data-mname="{{ $data->mname }}"
															data-lname="{{ $data->lname }}"
															data-image="{{ $data->image }}"
															data-username="{{ $data->username }}"
															data-address="{{ $data->address }}"
															data-birthdate="{{ $data->birthdate }}"
															data-contact_num="{{ $data->contact_num }}"
															data-email="{{ $data->email }}"
															data-description="{{ $data->description }}"
															data-toggle="modal" 
															data-target="#viewInfo">View
														</button>
														<button class="btn btn-warning waves-effect btn-sm"  
															data-sec_id="{{ $data->sec_id }}" 
															data-fname="{{ $data->fname }}"
															data-mname="{{ $data->mname }}"
															data-lname="{{ $data->lname }}"
															data-image="{{ $data->image }}"
															data-username="{{ $data->username }}"
															data-address="{{ $data->address }}"
															data-birthdate="{{ $data->birthdate }}"
															data-contact_num="{{ $data->contact_num }}"
															data-email="{{ $data->email }}"
															data-description="{{ $data->description }}"
															data-toggle="modal" 
															data-target="#updateSec">Update
														</button>
														<button class="btn btn-danger waves-effect btn-sm" 
															data-toggle="modal"
															data-sec_id="{{ $data->sec_id }}" 
															data-firstname="{{ $data->fname }}" 
															data-lastname="{{ $data->lname }}"
															data-password="{{ $data->password }}"
															data-target="#deleteSec">Delete
														</button>
													</td>
												</tr>
											@endforeach
										@else
											<tr>
												<td> No Data Found</td>
											</tr>
										@endif
									</tbody>
								</table>
								<div class="pull-right">
										<button class="btn btn-success waves-effect" data-toggle="modal" data-target="#addAccount">ADD ACCOUNT</button>
								</div>
							</div> {{-- div table --}}
						</div> {{-- card --}}
					@endif
				
				</div> {{-- 12 --}}

			</div> {{-- row --}}
		</div> {{-- container --}}

		@if($errors->any())
			@foreach($errors->all() as $error)
				<div class="alert alert-danger">
					{{ $error }}
				</div>
			@endforeach
		@endif

		{{-- View INfo --}}
		<div class="modal fade" id="viewInfo" tabindex="-1" role="dialog">
				<div class="modal-dialog modal-md" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h4>Secretary Information</h4>
							<hr style="margin: 0px;">
						</div>

						<div class="modal-body" >
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 10px; margin-bottom: 10px;">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
										{{-- <img src="{{ URL::asset('AdminSB/images/doctor.jpg') }}" class="img-responsive"> --}}
										<div id="viewImageModal"></div>
									</div>

									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
										<p>
											<b style="color: #00ace6">First Name:</b>
											<span id="fname"></span>
										</p>
										<p>
											<b style="color: #00ace6">Middle Name:</b>
											<span id="mname"></span>
										</p>
										<p>
											<b style="color: #00ace6">Last Name:</b>
											<span id="lname"></span>
										</p>

										<h5 style="color: #00ace6; margin-top: 13px; margin-bottom: 13px;">
										</h5>

										<p>
											<b>Birth date:</b> 
											<span id="birthdate"></span>
										</p>

										<p>
											<b>Address:</b> 
											<span id="address"></span>
										</p>
										<p>
											<input type="hidden" name="subscriber_id" value="">
											<b>Contact #:</b> 
											<span id="contact_num"></span>
										</p>

										<p>
											
										</p>
									</div>
								</div>

								<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" style="margin-top: 10px; margin-bottom: 10px;">
									<b>Description:</b> 
										<span id="address"></span>
								</div>
								<hr id="hr">
								<div class="modal-footer" style="padding: 19px;">
									<button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
								</div>
						</div>
						
					</div>
				</div>
		</div>
		{{-- END VIEW INFO --}}

		{{-- DELETE MODAL --}}
		<div class="modal fade" id="deleteSec" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="defaultModalLabel">Delete Account</h4>
					</div>
					<div class="modal-body">
						<form action="{{ url('accounts/accounts/destroy') }}" method="POST">
							{{ method_field('delete') }}
							@csrf
							<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
								<p>Are you sure want to delete this Account?</p>
								<div class="form-group">
									<input type="hidden" class="form-control" name="sec_id" >
									{{-- <input type="text" class="form-control" placeholder="Firstname" name="admin_id"> --}}
								</div>
							</div>

							<div class="modal-footer">
								<button type="submit" class="btn btn-danger waves-effect">Delete</button>
								<button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div> {{-- delete --}}

		{{-- Update modal --}}
		<div class="modal fade" id="updateSec" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="largeModalLabel">Update Account</h4>
					</div>
					<div class="modal-body">
						<form action="{{ url('accounts/sec_account/update') }}" method="POST" enctype="multipart/form-data">
							{{ method_field('put') }}
							@csrf
							<div class="row clearfix">
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div id="editImageModal"></div>
									<input type="file" name="file">
										<input type="hidden" class="form-control" name="sec_id" >
									</div>
									<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
										<div class="row clearfix">
											<div class="col-xs-4">
											
												<P><b>First name:</b> <input type="text" class="form-control" name="fname"></P>
											</div>
											<div class="col-xs-4">
												<P><b>Middle name:</b> <input type="text" class="form-control" name="mname"></P> 
											</div>
											<div class="col-xs-4">
												<P><b>Lastname:</b> <input type="text" class="form-control" name="lname"></P>
											</div>
										</div>
										<div class="row clearfix">
											<div class="col-xs-6">
												<P><b>Username:</b> <input type="text" class="form-control" name="username"></P> 
											</div>
											<div class="col-xs-6">
												<P><b>Password:</b> <input type="text" class="form-control" name="password"></P>
											</div>
										</div>
										<div class="row clearfix">
											<div class="col-xs-6">
												<P><b>Birth date:</b> <input type="date" class="form-control" name="birthdate"></P>
											</div>
											<div class="col-xs-6">
												<P><b>Contact No.:</b> <input type="text" class="form-control" name="contact_num"></P>
											</div>
										</div>

										<P style="padding: 0px"><b>Email:</b> <input type="text" class="form-control" name="email"></P>
										<P><b>Address:</b> <input type="text" class="form-control" name="address"></P>
										
									</div>
								</div>
							<div class="col-lg-12 col-md-12 col-sm-12  col-xs-12">
							{{-- 	<textarea class="textarea" style="margin-top: 15px; margin-bottom: 15px; width: 100%; height: 150px;">
									<p id="description"></p>
								</textarea> --}}
							</div>
							<br>
							<div class="row">
								<div class="container-fluid">
						           <!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						                	<div class="block-header">
						                		<h1>Accessibility Module</h1>
						                	</div>
						                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						                           <div class="row clearfix">
						                                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
						                             <p align="center" style="height: 95px;"><input type="checkbox" id="msg-attachfile" class="filled-in">
						                            <label for="msg-attachfile">
						                                <img class="img-responsive img-shadow" src="{{ URL::asset('AdminSB/images/profile.fw.png')}}" width="150" heigth="150">
						                            </label></p>
						                                <p align="center" class="img-font1">PROFILE</p>
						                        </div>

						                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
						                           <p align="center" style="height: 95px;"><input type="checkbox" id="msg-attachimg" class="filled-in">
						                            <label for="msg-attachimg">
						                                <img class="img-responsive img-shadow" src="{{ URL::asset('AdminSB/images/queue.fw.png')}}" width="150" heigth="150">
						                            </label></p>
						                            <p align="center" class="img-font1">QUEUE</p>
						                        </div>

						                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
					                                <p align="center" style="height: 95px;"><input type="checkbox" id="msg-email" class="filled-in">
					                            <label for="msg-email">
					                                <img class="img-responsive img-shadow"src="{{ URL::asset('AdminSB/images/schedule.fw.png')}}" width="150" heigth="150">
					                            </label></p>
					                                <p align="center" class="img-font1">SCHEDULE</p>
						                        </div>

						                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
						                            <p align="center" style="height: 95px;"><input type="checkbox" id="msg-book" class="filled-in">
						                            <label for="msg-book">
						                                <img class="img-responsive img-shadow" src="{{ URL::asset('AdminSB/images/booking.fw.png')}}" width="150" heigth="150">
						                            </label></p>
						                                <p align="center" class="img-font1">BOOKING</p>
						                        </div>
						                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
						                            <p align="center" style="height: 95px;"><input type="checkbox" id="msg-bill" class="filled-in">
						                            <label for="msg-bill">
						                                <img class="img-responsive img-shadow" src="{{ URL::asset('AdminSB/images/bills.fw.png')}}" width="150" heigth="150">
						                            </label></p>
						                                <p align="center" class="img-font1">BILLING</p>
						                        </div>
						                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
						                            <p align="center" style="height: 95px;"><input type="checkbox" id="msg-inventory" class="filled-in">
						                            <label for="msg-inventory">
						                                <img class="img-responsive img-shadow" src="{{ URL::asset('AdminSB/images/inventory.fw.png')}}" width="150" heigth="150">
						                            </label></p>
						                                <p align="center" class="img-font1">INVENTORY</p>
						                        </div>
						                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
						                            <p align="center" style="height: 95px;"><input type="checkbox" id="msg-report" class="filled-in">
						                            <label for="msg-report">
						                                <img class="img-responsive img-shadow" src="{{ URL::asset('AdminSB/images/report.fw.png')}}" width="150" heigth="150">
						                            </label></p>
						                                <p align="center" class="img-font1">REPORT</p>
						                        </div>
						                        {{-- <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
						                            <p align="center" style="height: 95px;"><input type="checkbox" id="msg-message" class="filled-in">
						                            <label for="msg-message">
						                                <img class="img-responsive img-shadow" src="{{ URL::asset('AdminSB/images/email.fw.png')}}" width="150" heigth="150">
						                            </label></p>
						                                <p align="center" class="img-font1">MESSAGE</p>
						                        </div> --}}
					                        </div>
					                    </div>
						            </div> -->
						        </div>
							</div>
							@if($errors->any())
								<div class="alert bg-red">
									@foreach($errors->all() as $errorMessage)
										<p>{{ $errorMessage }}</p>
									@endforeach
								</div>
							@endif
						<div class="modal-footer">
							<button type="submit" class="btn btn-primary waves-effect">SAVE CHANGES</button>
							<button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
						</div>
					</form>
					</div>
				</div>
			</div>
		</div>{{-- Update END modal --}}

	</section>


{{-- ADD ACCOUNT MODAL --}}

<div class="modal fade" id="addAccount" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="largeModalLabel">Add Account</h4>
				</div>
				<div class="modal-body">
					<form action="{{ url('accounts/add_account/store') }}" method="POST" enctype="multipart/form-data">
						{{ csrf_field() }}
					<div class="row clearfix">
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							{{-- <img class="img-responsive thumbnail" src="{{ URL::asset('AdminSB/images/user.png')}}" style="padding-bottom: 0px;"> --}}
							@if(isset($model->image)  && !empty($model->image))
								<img class="img-responsive thumbnail" src="{{asset('upload')}}/{{ $model->image }}" />
							@else
								<img class="img-responsive thumbnail" src="{{asset('upload/public/noimage.png')}}" />
							@endif
							<input type="file" name="file">
						</div>
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
							<div class="row clearfix">
								<div class="col-xs-4">
									<P><b>First name:</b> <input type="text" class="form-control" name="fname"></P>
								</div>
								<div class="col-xs-4">
									<P><b>Middle name:</b> <input type="text" class="form-control" name="mname"></P> 
								</div>
								<div class="col-xs-4">
									<P><b>Lastname:</b> <input type="text" class="form-control" name="lname"></P>
								</div>
							</div>
							<div class="row clearfix">
								<div class="col-xs-4">
									<P><b>Username:</b> <input type="text" class="form-control" name="username"></P> 
								</div>
								<div class="col-xs-4">
									<P><b>Password:</b> <input type="password" class="form-control" name="password"></P>
								</div>
								<div class="col-xs-4">
									<P><b>Retype Password:</b> <input type="password" class="form-control" name="password_confirmation"></P>
								</div>
							</div>
							<div class="row clearfix">
								<div class="col-xs-6">
									<P><b>Birth date:</b> <input type="date" class="form-control" name="birthdate"></P>
								</div>
								<div class="col-xs-6">
									<P><b>Contact No.:</b> <input type="text" class="form-control" name="contact_num"></P>
								</div>
							</div>
							
							
							
							
							
							<P><b>Email:</b> <input type="text" class="form-control" name="email"></P>
							<P><b>Address:</b> <input type="text" class="form-control" name="address"></P>
							
						</div>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12  col-xs-12">
						{{-- <textarea id="ckeditor" name="description" style="margin-top: 15px; margin-bottom: 15px;">	
						</textarea> --}}
					</div>
					<br>
					<div class="row">
						<div class="container-fluid">
				            <!--<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				                	<div class="block-header">
				                		<h1>Accessibility Module</h1>
				                	</div>
				                    
				                        
				                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						                           <div class="row clearfix">
						                                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
						                             <p align="center" style="height: 95px;"><input type="checkbox" id="msg-attachfile" class="filled-in">
						                            <label for="msg-attachfile">
						                                <img class="img-responsive img-shadow" src="{{ URL::asset('AdminSB/images/profile.fw.png')}}" width="150" heigth="150">
						                            </label></p>
						                                <p align="center" class="img-font1">PROFILE</p>
						                        </div>

						                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
						                           <p align="center" style="height: 95px;"><input type="checkbox" id="msg-attachimg" class="filled-in">
						                            <label for="msg-attachimg">
						                                <img class="img-responsive img-shadow" src="{{ URL::asset('AdminSB/images/queue.fw.png')}}" width="150" heigth="150">
						                            </label></p>
						                            <p align="center" class="img-font1">QUEUE</p>
						                        </div>

						                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
					                                <p align="center" style="height: 95px;"><input type="checkbox" id="msg-email" class="filled-in">
					                            <label for="msg-email">
					                                <img class="img-responsive img-shadow"src="{{ URL::asset('AdminSB/images/schedule.fw.png')}}" width="150" heigth="150">
					                            </label></p>
					                                <p align="center" class="img-font1">SCHEDULE</p>
						                        </div>

						                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
						                            <p align="center" style="height: 95px;"><input type="checkbox" id="msg-book" class="filled-in">
						                            <label for="msg-book">
						                                <img class="img-responsive img-shadow" src="{{ URL::asset('AdminSB/images/booking.fw.png')}}" width="150" heigth="150">
						                            </label></p>
						                                <p align="center" class="img-font1">BOOKING</p>
						                        </div>
						                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
						                            <p align="center" style="height: 95px;"><input type="checkbox" id="msg-bill" class="filled-in">
						                            <label for="msg-bill">
						                                <img class="img-responsive img-shadow" src="{{ URL::asset('AdminSB/images/bills.fw.png')}}" width="150" heigth="150">
						                            </label></p>
						                                <p align="center" class="img-font1">BILLING</p>
						                        </div>
						                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
						                            <p align="center" style="height: 95px;"><input type="checkbox" id="msg-inventory" class="filled-in">
						                            <label for="msg-inventory">
						                                <img class="img-responsive img-shadow" src="{{ URL::asset('AdminSB/images/inventory.fw.png')}}" width="150" heigth="150">
						                            </label></p>
						                                <p align="center" class="img-font1">INVENTORY</p>
						                        </div>
						                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
						                            <p align="center" style="height: 95px;"><input type="checkbox" id="msg-report" class="filled-in">
						                            <label for="msg-report">
						                                <img class="img-responsive img-shadow" src="{{ URL::asset('AdminSB/images/report.fw.png')}}" width="150" heigth="150">
						                            </label></p>
						                                <p align="center" class="img-font1">REPORT</p>
						                        </div>
						                        {{-- <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
						                            <p align="center" style="height: 95px;"><input type="checkbox" id="msg-message" class="filled-in">
						                            <label for="msg-message">
						                                <img class="img-responsive img-shadow" src="{{ URL::asset('AdminSB/images/email.fw.png')}}" width="150" heigth="150">
						                            </label></p>
						                                <p align="center" class="img-font1">MESSAGE</p>
						                        </div> --}}
					                        </div>
					                    </div>
				            </div>-->
				        </div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary waves-effect">SAVE CHANGES</button>
						<button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

{{-- END ADD ACCOUNT MODAL --}}

@section('javascript')
{{-- 		<script src="{{ URL::asset('AdminSB/js/pages/forms/editors.js')}}"></script>
		<script src="{{ URL::asset('AdminSB/plugins/ckeditor/ckeditor.js')}}"></script>
		<!-- modal -->
		<script src="{{ URL::asset('AdminSB/js/pages/ui/modals.js')}}"></script>
		<!-- Jquery Core Js -->
		<script src="{{ URL::asset('AdminSB/plugins/jquery/jquery.min.js')}}"></script>
		<!-- Bootstrap Core Js -->
		<script src="{{ URL::asset('AdminSB/plugins/bootstrap/js/bootstrap.js')}}"></script>
		<!-- Select Plugin Js -->
		<script src="{{ URL::asset('AdminSB/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>
		<!-- Slimscroll Plugin Js -->
		<script src="{{ URL::asset('AdminSB/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
		<!-- Waves Effect Plugin Js -->
		<script src="{{ URL::asset('AdminSB/plugins/node-waves/waves.js')}}"></script>
		<!-- Demo Js -->
		<script src="{{ URL::asset('AdminSB/js/demo.js')}}"></script>
		<!-- Custom Js -->
		<script src="{{ URL::asset('AdminSB/js/admin.js')}}"></script>
 --}}
		<script src="{{ URL::asset('AdminSB/plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
		<script src="{{ URL::asset('AdminSB/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
		<script src="{{ URL::asset('AdminSB/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}"></script>
		<script src="{{ URL::asset('AdminSB/js/pages/tables/jquery-datatable.js')}}"></script> 
		<script>
			$(document).ready(function() {
				$('#viewInfo').on("show.bs.modal", function (e) {
					$("#fname").html($(e.relatedTarget).data('fname'));
					$("#mname").html($(e.relatedTarget).data('mname'));
					$("#lname").html($(e.relatedTarget).data('lname'));
					$("#username").html($(e.relatedTarget).data('username'));
					$("#address").html($(e.relatedTarget).data('address'));
					$("#birthdate").html($(e.relatedTarget).data('birthdate'));
					$("#contact_num").html($(e.relatedTarget).data('contact_num'));
					$("#email").html($(e.relatedTarget).data('email'));
					$("#description").html($(e.relatedTarget).data('description'));
					 // $("#image").html($(e.relatedTarget).data('image'));
					 var image = $(e.relatedTarget).data('image');
					 console.log(image);
					if(image == "") {
						var wrapper = document.getElementById('viewImageModal');
						var tag = '';
						tag += '<img src=';
						tag += '"{{asset('upload/public/noimage.png')}}"';
						tag += 'class="img-responsive thumbnail"';
						tag += '/>';
						wrapper.innerHTML = tag;
					}
					else {
						var wrapper = document.getElementById('viewImageModal');
						var tag = '';
						tag += '<img src=';
						tag += '"{{asset('secretary')}}/';
						tag += image;
						tag += '"';
						tag += 'class="img-responsive thumbnail"';
						tag += '/>';

						wrapper.innerHTML = tag;
					}
				});

				$('#deleteSec').on("show.bs.modal", function (e) {
					var sec_id = $(e.relatedTarget).data('sec_id');
					$(e.currentTarget).find('input[name="sec_id"]').val(sec_id);
				});

				$('#updateSec').on("show.bs.modal", function (e) {
					var sec_id = $(e.relatedTarget).data('sec_id');
					var fname = $(e.relatedTarget).data('fname');
					var mname = $(e.relatedTarget).data('mname');
					var lname = $(e.relatedTarget).data('lname');
					var username = $(e.relatedTarget).data('username');
					var address = $(e.relatedTarget).data('address');
					var birthdate = $(e.relatedTarget).data('birthdate');
					var contact_num = $(e.relatedTarget).data('contact_num');
					var email = $(e.relatedTarget).data('email');
					var description = $(e.relatedTarget).data('description');
					var image = $(e.relatedTarget).data('image');
					console.log(image);

						if(image == "") {
							var wrapper = document.getElementById('editImageModal');
							var tag = '';
							tag += '<img src=';
							tag += '"{{asset('secretary/public/noimage.png')}}"';
							tag += 'class="img-responsive thumbnail"';
							tag += '/>';
							wrapper.innerHTML = tag;
						}
						else {
							var wrapper = document.getElementById('editImageModal');
							var tag = '';
							tag += '<img src=';
							tag += '"{{asset('secretary')}}/';
							tag += image;
							tag += '"';
							tag += 'class="img-responsive thumbnail"';
							tag += '/>';

							wrapper.innerHTML = tag;
						}

					$(e.currentTarget).find('input[name="sec_id"]').val(sec_id);
					$(e.currentTarget).find('input[name="fname"]').val(fname);
					$(e.currentTarget).find('input[name="mname"]').val(mname);
					$(e.currentTarget).find('input[name="lname"]').val(lname);
					$(e.currentTarget).find('input[name="username"]').val(username);
					$(e.currentTarget).find('input[name="address"]').val(address);
					$(e.currentTarget).find('input[name="birthdate"]').val(birthdate);
					$(e.currentTarget).find('input[name="contact_num"]').val(contact_num);
					$(e.currentTarget).find('input[name="email"]').val(email);
					$(e.currentTarget).find('input[name="description"]').val(description);
					$(e.currentTarget).find('input[name="textarea"]').val(description);

					
				});


				$("#validateLetters").keypress(function(event){
					regex = new RegExp("^[a-zA-Z ]+$");
					var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
					if (!regex.test(key)) {
						event.preventDefault();
						return false;
					}
				});

				$("#validateLetters2").keypress(function(event){
					regex = new RegExp("^[a-zA-Z ]+$");
					var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
					if (!regex.test(key)) {
						event.preventDefault();
						return false;
					}
				});
			});
		</script>
		
	@endsection
@endsection
