@extends('admin_portal.home')

@section('body')
<section class="content" id="app_vue">
	@if(session('success'))
		<div class="alert bg-green">
			{{ session('success') }}
		</div>
	@endif
	<div class="container-fluid">
		<div class="block-header">
			{{-- <h2>Tables</h2> --}}
		</div>
		<div class="row clearfix">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						<h2>
							Add New Admin Accounts
							<small>Add New Admin Account</small>
						</h2>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<img class="img-responsive thumbnail" src="{{ URL::asset('images/user.png')}}">
						{{-- <div class="btn-group" role="group">
							<button type="button" class="btn btn-default  waves-effect dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Select Role
								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu">
								<li><a href="javascript:void(0);" v-on:click="roleAdmin()">Admin</a></li>
								<li><a href="javascript:void(0);" v-on:click="roleOther()">Others</a></li>
							</ul>
						</div>	 --}}
					</div>
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
						<form action="{{ url('settings/add_account/store') }}" method="POST">
							{{ csrf_field() }}
							<div class="form-group form-float">
								<br>
								<div class="form-line">
									<input type="text" id="validateLetters" class="form-control" name="firstname">
									<label class="form-label">First Name:</label>
								</div><br>
								<div class="form-line">
									<input type="text" id="validateLetters2" class="form-control" name="lastname">
									<label class="form-label">Last Name:</label>
								</div> <br>
								<div class="form-line">
									<input type="text" class="form-control" name="username">
									<label class="form-label">Username:</label>
								</div> <br>
								<div class="form-line">
									<input type="password" class="form-control" name="password">
									<label class="form-label">Password:</label>
								</div> <br>
								<div class="form-line">
									<input type="password" id="password_confirmation" class="form-control" name="password_confirmation">
									<label class="form-label">Retype Password:</label>
								</div> <br>

							{{-- 	<template v-if="adminRole">
									<div class="form-line">
										<input type="text" class="form-control" name="role" value="Admin" disabled="true">
									</div> <br>
								</template>

								<template v-else-if="otherRole">
									<div class="form-line">
										<input type="text" class="form-control" name="role" value="Other" disabled="true">
									</div> <br>
								</template>

								<template v-else>
									<div class="form-line">
										<input type="text" placeholder="Select Role" class="form-control" name="role" value="" disabled="true">
									</div> <br>
								</template> --}}

								@if($errors->any())
									<div class="alert bg-red">
										@foreach($errors->all() as $errorMessage)
											<p>{{ $errorMessage }}</p>
										@endforeach
									</div>
								@endif

								<div class="footer pull right" style="padding-bottom: 20px;">
									<button type="submit" class="btn btn-primary waves-effect">SAVE CHANGES</button>
									<a type="button" class="btn btn-link waves-effect" data-dismiss="modal" href="javascript:history.back()">CLOSE</a>
								</div>
							</div>
						</form>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
</section>

{{-- <script type="text/javascript">
	var vm = new Vue ({
		el: '#app_vue',
		data: {
			adminRole: false,
			otherRole: false
		},
		methods: {
			roleAdmin: function () {
				this.adminRole = true
				this.otherRole = false
			},
			roleOther: function () {
				this.otherRole = true
				this.adminRole = false
			}
		}
	});
</script> --}}
<script>
		$( document ).ready(function() {
			$("#validateLetters").keypress(function(event){
				var regex = new RegExp("^[a-zA-Z ]+$");
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
