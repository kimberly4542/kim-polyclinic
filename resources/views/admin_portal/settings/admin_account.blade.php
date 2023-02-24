@extends('admin_portal.home')

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
			<div class="row clearfix">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="card">
						<div class="header">
							<h2>
								Admin Accounts
								<small>Existing admin accounts in table view</small>
							</h2>
						</div>

						<div class="body table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>FIRST NAME</th>
										<th>LAST NAME</th>
										<th>USERNAME</th>
										<th>ACTION</th>
									</tr>
								</thead>
								<tbody>
									@if(count($adminUserQuery) > 0)
										@foreach($adminUserQuery as $data)
											<tr>
												<td>{{ $data->fname }}</td>
												<td>{{ $data->lname }}</td>
												<td>{{ $data->username }}</td>
												<td>
													<button class="btn btn-primary waves-effect btn-sm" 
														data-firstname="{{ $data->fname }}" 
														data-lastname="{{ $data->lname }}"
														data-username="{{ $data->username }}"
														data-toggle="modal" 
														data-target="#viewInfo">View
													</button>
													<button class="btn btn-warning waves-effect btn-sm"  
														data-id="{{ $data->id }}" 
														data-firstname="{{ $data->fname }}" 
														data-lastname="{{ $data->lname }}"
														data-username="{{ $data->username }}"
														data-toggle="modal" 
														data-target="#updateAdmin">Update
													</button>
													<button class="btn btn-danger waves-effect btn-sm" 
														data-toggle="modal"
														data-id="{{ $data->id }}" 
														data-firstname="{{ $data->fname }}" 
														data-lastname="{{ $data->lname }}"
														data-target="#deleteAdmin">Delete
													</button>
												</td>
											</tr>
										@endforeach
									@endif
								</tbody>
							</table>

						</div> {{-- div table --}}
					</div> {{-- card --}}
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

		<div class="modal fade" id="viewInfo" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-md" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="largeModalLabel">User Information</h4>
					</div>
					
					<div class="modal-body">
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<img class="img-responsive thumbnail" src="{{ URL::asset('images/user.png')}}">
						</div>
						
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
							<P><b>Firstname: </b><span id="firstname"></span></P> <br>
							<P><b>Lastname: </b><span id="lastname"></span></P> <br>
							<P><b>Username: </b><span id="username"></span></P>
							{{-- <P><b>Role: </b><span id="role"></span></P> --}}
						</div>
				
						{{-- <div class="col-lg-12 col-md-12 col-sm-12  col-xs-12">
							<span>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales orci ante, sed ornare eros vestibulum ut. Ut accumsan
								vitae eros sit amet tristique. Nullam scelerisque nunc enim, non dignissim nibh faucibus ullamcorper.
								Fusce pulvinar libero vel ligula iaculis ullamcorper. Integer dapibus, mi ac tempor varius, purus
								nibh mattis erat, vitae porta nunc nisi non tellus. Vivamus mollis ante non massa egestas fringilla.
								Vestibulum egestas consectetur nunc at ultricies. Morbi quis consectetur nunc.
							</span>
						</div> --}}
						<div class="clearfix"></div>
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="deleteAdmin" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="defaultModalLabel">Delete Account</h4>
					</div>
					<div class="modal-body">
						<form action="{{ url('settings/admin_account/destroy') }}" method="POST">
							{{ method_field('delete') }}
							@csrf
							<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
								<p>Are you sure want to delete this admin?</p>
								<div class="form-group">
									<input type="hidden" class="form-control" name="id" >
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

		<div class="modal fade" id="updateAdmin" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-md" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="largeModalLabel">Update Information</h4>
					</div>
					
					<div class="modal-body">
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<img class="img-responsive thumbnail" src="{{ URL::asset('images/user.png')}}">
							{{-- <div class="btn-group" role="group">
								<button type="button" class="btn btn-default waves-effect dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Select Role
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="javascript:void(0);">Admin</a></li>
									<li><a href="javascript:void(0);">Others</a></li>
								</ul>
							</div> --}}
						</div>
						<form action="{{ url('settings/admin_account/update') }}" method="POST">
							{{ method_field('put') }}
							@csrf
							<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
								<div class="form-group">
									<br>
									<input type="hidden" class="form-control" name="id" >
									<div class="form-line">
										<input type="text" id="validateLetters" class="form-control" placeholder="Firstname" name="firstname">
									</div><br>
									<div class="form-line">
										<input type="text" id="validateLetters2" class="form-control" placeholder="Lastname" name="lastname">
									</div> <br>
									<div class="form-line">
										<input type="text" class="form-control" placeholder="Username" name="username">
									</div> <br>
								</div>
							</div>

							<div class="modal-footer">
								<button type="submit" class="btn btn-warning waves-effect">Update</button>
								<button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div> {{-- modal --}}

	</section>
	<script>
		$( document ).ready(function() {
			$('#viewInfo').on("show.bs.modal", function (e) {
				$("#firstname").html($(e.relatedTarget).data('firstname'));
				$("#lastname").html($(e.relatedTarget).data('lastname'));
				$("#username").html($(e.relatedTarget).data('username'));
			});

			$('#updateAdmin').on("show.bs.modal", function (e) {
				var id = $(e.relatedTarget).data('id');
				var firstname = $(e.relatedTarget).data('firstname');
				var lastname = $(e.relatedTarget).data('lastname');
				var username = $(e.relatedTarget).data('username');
				$(e.currentTarget).find('input[name="id"]').val(id);
				$(e.currentTarget).find('input[name="firstname"]').val(firstname);
				$(e.currentTarget).find('input[name="lastname"]').val(lastname);
				$(e.currentTarget).find('input[name="username"]').val(username);
			});

			$('#deleteAdmin').on("show.bs.modal", function (e) {
				var id = $(e.relatedTarget).data('id');
				$(e.currentTarget).find('input[name="id"]').val(id);
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


