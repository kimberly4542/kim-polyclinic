@extends('admin_portal.home')

@section('body')
	<section class="content">
		@if(session('successMessage'))
			<div class="alert alert-success">
				<p> {{ session('successMessage') }}</p>
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
								Subscription Request for Renewal
								<small>Subscription requests for renewal</small>
							</h2>
						</div>
						<div class="body table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>FIRST NAME</th>
										<th>LAST NAME</th>
										<th>GENDER</th>
										<th>SPECIALIZATION</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@if (count($mainQuery) > 0)
										@foreach($mainQuery as $query)
											@foreach($query->subscribers as $data)
												<tr>
													<td>{{ $data->fname }}</td>
													<td>{{ $data->lname }}</td>
													<td>{{ $data->sex }}</td>
													<td>{{ $subscriberStatusModel->specialization($data->subscriber_id) }}</td>
													<td><a 
														class="btn btn-primary waves-effect btn-sm"
														 data-toggle="modal" 
														 data-target="#viewInfo"
														 data-fname="{{ $data->fname }}"
														 data-mname="{{ $data->mname }}"
														 data-lname="{{ $data->lname }}"
														 data-sex="{{ $data->sex }}"
														 data-address="{{ $data->address }}"
														 data-contact="{{ $data->contact_num }}"
														 data-username="{{ $data->username }}"
														 data-birthdate="{{ $data->birthdate }}"
														 data-specialization="{{ $subscriberStatusModel->specialization($data->subscriber_id) }}"
														 data-payment_amount="{{ $paymentQuery->paymentAmount($data->subscriber_id) }}"
														 data-payment_mode="{{ $paymentQuery->paymentMode($data->subscriber_id) }}"
														 data-module_name="{{ $subscriberQuery->getModulesSelected($data->subscriber_id) }}">
														 View
														</a>
														<button class="btn btn-success waves-effect btn-sm"
															data-toggle="modal" 
															data-target="#verifyModal"
															data-subscriber_id="{{ $data->subscriber_id }}">
															Verify 
														</button>
															<button class="btn btn-danger waves-effect btn-sm"
															data-toggle="modal" 
															data-target="#declineModal"
															data-subscriber_id="{{ $data->subscriber_id }}">
															Decline 
														</button>
													</td>
									
												</tr>
											@endforeach
										@endforeach
									@else
										<td> <p>No Subscriber found</p></td>
									@endif
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="declineModal" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="defaultModalLabel">Decline Subscriber</h4>
					</div>
					<form action="{{ url('subscription/renewal_table/decline') }}" method="POST">
						@csrf
						{{ method_field('put') }}
						<div class="modal-body">
							<p>Are you sure you want to decline this subscriber? Once verified, subscriber will be activated.</p>
							<input type="hidden" name="subscriber_id">
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-danger waves-effect">Decline</button>
							<button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Cancel</button>
						</div>
					</form>
				</div>
			</div>
		</div> {{-- decline modal --}}

		<div class="modal fade" id="verifyModal" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="defaultModalLabel">Verify Subscriber</h4>
					</div>
					<form action="{{ url('subscription/renewal_table/verify') }}" method="POST">
						@csrf
						{{ method_field('put') }}
						<div class="modal-body">
							<p>Are you sure you want to verify this subscriber? Once verified, subscriber will be activated.</p>
							<input type="hidden" name="subscriber_id">
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-success waves-effect">Verify</button>
							<button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Cancel</button>
						</div>
					</form>
				</div>
			</div>
		</div> {{-- activate modal --}}

		<div class="modal fade" id="viewInfo" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-md" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="largeModalLabel">Subscriber Information</h4>
					</div>
					
					<div class="modal-body">
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<img class="img-responsive thumbnail" src="{{ URL::asset('images/user.png')}}">
						</div>

						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
							<P><b>Firstname:</b> <span id="fname"></span></P> 
							<P><b>Middlename:</b> <span id="mname"></span></P>
							<P><b>Lastname:</b> <span id="lname"></span></P>
							<P><b>sex:</b> <span id="sex"></span></P>
							<P><b>username:</b> <span id="username"></span></P>
						</div>

						<div class="col-lg-12 col-md-12 col-sm-12  col-xs-12">
							<div class="col-lg-6 col-md-6 col-sm-6  col-xs-6">
								<P><b>Specialization: </b> <span id="specialization"></span></P>
								<P><b>Birthdate: </b> <span id="birthdate"></span></P>
								<P><b>Address: </b> <span id="address"></span> </P> 
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6  col-xs-6">
								<P><b>Contact: </b> <span id="contact"></span></P>
							</div>
						</div>

						<div class="col-lg-12 col-md-12 col-sm-12  col-xs-12">
							<div class="col-lg-6 col-md-6 col-sm-6  col-xs-6">
								<h5>Features Selected:</h5>
								<ul id="html_ul_moduleName">
								</ul>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6  col-xs-6">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<h5>Total Payment:</h5>
									<ul class="list-group">
										<li class="list-group-item"> 
											<span id="payment_amount"></span>
											<span class="badge bg-deep-purple" id="payment_mode"></span>
										</li>
									</ul>
								</div>
							</div>
						</div> <br>

						<div class="clearfix"></div>
					<div>

					<div class="modal-footer">
						<button type="button" class="btn btn-primary waves-effect">SAVE CHANGES</button>
						<button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script type="text/javascript">
		$( document ).ready(function() {
			$('#viewInfo').on("show.bs.modal", function (e) {
				$("#fname").html($(e.relatedTarget).data('fname'));
				$("#mname").html($(e.relatedTarget).data('mname'));
				$("#lname").html($(e.relatedTarget).data('lname'));
				$("#sex").html($(e.relatedTarget).data('sex'));
				$("#address").html($(e.relatedTarget).data('address'));
				$("#contact").html($(e.relatedTarget).data('contact'));
				$("#username").html($(e.relatedTarget).data('username'));
				$("#birthdate").html($(e.relatedTarget).data('birthdate'));
				$("#specialization").html($(e.relatedTarget).data('specialization'));
				$("#payment_amount").html($(e.relatedTarget).data('payment_amount'));
				$("#payment_mode").html($(e.relatedTarget).data('payment_mode'));

				var arrayOfData = ($(e.relatedTarget).data('module_name'));
				var arrayOfModuleName = [];

				arrayOfData.forEach(function (items) {
					var objects = items;
					arrayOfModuleName.push(objects.module_name);
				});

				var wrapper = document.getElementById('html_ul_moduleName');
				var li_tag = '';
				for (var i = 0; i < arrayOfModuleName.length; i++) {
					li_tag += '<li>' + arrayOfModuleName[i] + '</li>'
				}
				wrapper.innerHTML = li_tag;
			});

			$('#verifyModal').on("show.bs.modal", function (e) {
				var subscriber_id = $(e.relatedTarget).data('subscriber_id');
				$(e.currentTarget).find('input[name="subscriber_id"]').val(subscriber_id);
			});

			$('#declineModal').on("show.bs.modal", function (e) {
				var subscriber_id = $(e.relatedTarget).data('subscriber_id');
				$(e.currentTarget).find('input[name="subscriber_id"]').val(subscriber_id);
			});

		});
	</script>
@endsection

