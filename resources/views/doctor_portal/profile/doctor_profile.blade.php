@extends('doctor_portal.layouts.master')

@section('body')
	<section class="content">
		@if(session('successMessage'))
			<div class="alert alert-success">
				<p> {{ session('successMessage') }} </p>
			</div>
		@endif

		<div class="container-fluid">
			<!-- Doctor Profile -->
			<div class="row clearfix">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="card">
						<div class="header">
							<h2 style="padding:20px"> <b>Doctor Information</b> </h2>
						</div>

						<div class="body">
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
										{{-- <img src="{{ URL::asset('AdminSB/images/noimage.jpg') }}" class="img-responsive"> --}}
										<div style="margin-left: 15px;">
											@if(isset($model->image)  && !empty($model->image))
												<img class="img-responsive thumbnail" src="{{asset('upload')}}/{{ $model->image }}" />
											@else
												<img class="img-responsive thumbnail" src="{{asset('upload/public/noimage.png')}}" />
											@endif
										</div>
									</div>
									<div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
									</div>
									<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
										<div>
											<h3 style="color: #00ace6">{{ $model->fname }} {{ $model->mname }} {{ $model->lname }} </h3>
										</div>
									{{-- 	<div>
											<h5 style="color: #00ace6">Hospital Name here</h5>
										</div>  --}}
										<div>
											<h5> Contact #&nbsp;: {{ $model->contact_num }} </h5>
										</div>
										<div>
											<h5 >Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 
												{{ $model->email }} </h5>
										</div>
										<div>
											<h5 >birth date&nbsp;: {{ $model->birthdate }}</h5>
										</div>
										<div>
											<h5 >address&nbsp;&nbsp;&nbsp;&nbsp;: {{ $model->address }}</h5>
										</div>
										<br>
										<div class="row clearfix">
											{!! $model->description !!}
										</div>
										<div style="text-align: right;">
											@if(Auth::guard('profile_doctors_information_basicTableModal')->check())
												<button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#doctorModal">
												<i class="material-icons">edit</i>
												<span>EDIT PROFILE</span>
												</button>
											@endif
											@if(Auth::guard('profile_doctors_information_singleImageUpload')->check())
												<button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#doctorModalWithImg">
												<i class="material-icons">edit</i>
												<span>EDIT PROFILE</span>
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
			<!-- Doctor profile modal -->
			<div class="modal fade" id="doctorModal" tabindex="-1" role="dialog">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h4>Doctor Information</h4>
							<hr style="margin: 0px;">
						</div>

						<div class="modal-body" >
							<form action="{{ url('profile/doctor_profile/update') }}" method="POST">
								@csrf
								{{ method_field('put') }}
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 10px; margin-bottom: 10px;">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
										<div style="margin-left: 15px;">
											@if(isset($model->image)  && !empty($model->image))
												<img class="img-responsive thumbnail" src="{{asset('upload')}}/{{ $model->image }}" />
											@else
												<img class="img-responsive thumbnail" src="{{asset('upload/public/noimage.png')}}" />
											@endif
										</div>
										<p>
											<input type="hidden" name="subscriber_id" value="{{ $model->subscriber_id }}">
											<b>Contact #:</b> 
											<input type="text" 
												class="form-control" 
												value="{{ $model->contact_num }} " 
												name="contact">
										</p>

										<p>
											<b>Email:</b> 
											<input type="text" 
												class="form-control" 
												value="{{ $model->email }}" 
												name="email">
										</p>
									</div>

									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
										<p>
											<b style="color: #00ace6">First Name:</b>
											<input type="text" 
												class="form-control" 
												value="{{ $model->fname }}" 
												name="fname">
										</p>
										<p>
											<b style="color: #00ace6">Middle Name:</b>
											<input type="text" 
												class="form-control" 
												value="{{ $model->mname }}" 
												name="mname">
										</p>
										<p>
											<b style="color: #00ace6">Last Name:</b>
											<input type="text" 
												class="form-control" 
												value="{{ $model->lname }}" 
												name="lname">
										</p>
{{-- 
										<h5 style="color: #00ace6; margin-top: 13px; margin-bottom: 13px;">
											Clinic Name: Doctors Hospital
										</h5>
 --}}
										<p>
											<b>Birth date:</b> 
											<input type="text" class="form-control" 
												name="birthdate" 
												value="{{ $model->birthdate }}">
										</p>

										<p>
											<b>Address:</b> 
											<input type="text" class="form-control" 
												value="{{ $model->address }}" 
												name="address">
										</p>

									</div>
								</div>
								{{-- <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" style="margin-top: 10px; margin-bottom: 10px;">
									<b>Description:</b> 
									<textarea id="ckeditor" name="description">
										{!! $model->description !!}. 
									</textarea>
								</div> --}}
								<div class="modal-footer" style="padding: 19px;">
									<button type="submit" class="btn btn-primary waves-effect">SAVE CHANGES</button>
									<button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
								</div>
							</form>	
						</div>
						
					</div>
				</div>
			</div>
			<!-- DOCTOR MODAL -->

			{{-- DOCTOR MODAL with IMAGE --}}
			<div class="modal fade" id="doctorModalWithImg" tabindex="-1" role="dialog">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h4>Doctor Information</h4>
							<hr style="margin: 0px;">
						</div>

						<div class="modal-body" >
							<form action="{{ url('profile/doctor_profile/update') }}" method="POST" enctype="multipart/form-data">
								@csrf
								{{ method_field('put') }}
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 10px; margin-bottom: 10px;">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
										{{-- <img src="{{asset('upload')}}/{{ $model->image }}" class="img-responsive" /> --}}
										
										@if(isset($model->image)  && !empty($model->image))
											<img class="img-responsive thumbnail" src="{{asset('upload')}}/{{ $model->image }}" />
										@else
											<img class="img-responsive thumbnail" src="{{asset('upload/public/noimage.png')}}" />
										@endif
										
										<input type="file" name="file">
										<p>
											<input type="hidden" name="subscriber_id" value="{{ $model->subscriber_id }}">
											<b>Contact #:</b> 
											<input type="text" 
												class="form-control" 
												value="{{ $model->contact_num }} " 
												name="contact">
										</p>

										<p>
											<b>Email:</b> 
											<input type="text" 
												class="form-control" 
												value="{{ $model->email }}" 
												name="email">
										</p>
									</div>

									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
										<p>
											<b style="color: #00ace6">First Name:</b>
											<input type="text" 
												class="form-control" 
												value="{{ $model->fname }}" 
												name="fname">
										</p>
										<p>
											<b style="color: #00ace6">Middle Name:</b>
											<input type="text" 
												class="form-control" 
												value="{{ $model->mname }}" 
												name="mname">
										</p>
										<p>
											<b style="color: #00ace6">Last Name:</b>
											<input type="text" 
												class="form-control" 
												value="{{ $model->lname }}" 
												name="lname">
										</p>
{{-- 
										<h5 style="color: #00ace6; margin-top: 13px; margin-bottom: 13px;">
											Clinic Name: Doctors Hospital
										</h5>
 --}}
										<p>
											<b>Birth date:</b> 
											<input type="text" class="form-control" 
												name="birthdate" 
												value="{{ $model->birthdate }}">
										</p>

										<p>
											<b>Address:</b> 
											<input type="text" class="form-control" 
												value="{{ $model->address }}" 
												name="address">
										</p>

									</div>
								</div>
								{{-- <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" style="margin-top: 10px; margin-bottom: 10px;">
									<b>Description:</b> 
									<textarea id="ckeditor" name="description">
										{!! $model->description !!}. 
									</textarea>
								</div> --}}
								<div class="modal-footer" style="padding: 19px;">
									<button type="submit" class="btn btn-primary waves-effect">SAVE CHANGES</button>
									<button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
								</div>
							</form>	
						</div>
						
					</div>
				</div>
			</div>
			{{-- END MODAL WITH IMAGE --}}
		</div>
		@if($errors->any())
			<div class="alert alert-danger">
				@foreach($errors->all() as $error)
					<p> {{ $error }} </p>
				@endforeach
			</div>
		@endif

	</section>

	@section('javascript')
		<script src="{{ URL::asset('AdminSB/js/pages/forms/editors.js')}}"></script>
		<script src="{{ URL::asset('AdminSB/plugins/ckeditor/ckeditor.js')}}"></script>
		
		@endsection
@endsection