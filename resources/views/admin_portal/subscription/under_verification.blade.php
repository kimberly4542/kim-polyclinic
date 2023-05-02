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
								Subscription Under Verification
								<small>Subscription requests and payments to verify</small>
							</h2>
						</div>
							
						<div class="body table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>FIRST NAME</th>
										<th>LAST NAME</th>
										<th>Clinic Address</th>
										<th>SPECIALIZATION</th>
										<th>Duration/Month</th>
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
													<td>{{ $clinicQuery->getClinicAddress($data->subscriber_id) }}</td>
													<td>{{ $subscriberStatusModel->specialization($data->subscriber_id) }}</td>
													<td>{{ $subscriberQuery->getDuration($data->subscriber_id) }}</td>
													<td><a class="btn btn-primary waves-effect btn-sm"
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
															data-module_name="{{ $subscriberQuery->getModulesSelected($data->subscriber_id) }}"
															data-sub1="{{ $subscriberQuery->getSub1Module($data->subscriber_id) }}"
															data-sub2="{{ $subscriberQuery->getSub2Module($data->subscriber_id) }}"
															data-sub3="{{ $subscriberQuery->getSub3Module($data->subscriber_id) }}"
															data-duration="{{ $subscriberQuery->getDuration($data->subscriber_id) }}"
															data-duration_id="{{ $subscriberQuery->getDurationId($data->subscriber_id) }}">
															View
														</a>

														{{-- <button class="btn bg-green waves-effect btn-sm" data-placement-from="bottom" data-placement-align="right" data-animate-enter="" data-animate-exit="" data-color-name="bg-green" data-text="subscription-verify">Verify</button>

														<button class="btn btn-danger waves-effect btn-sm" data-placement-from="bottom" data-placement-align="right" data-animate-enter="" data-animate-exit="" data-color-name="bg-red" data-text="subscription-decline" >Decline</button> --}}

														<button class="btn btn-success waves-effect btn-sm"
															data-toggle="modal" 
															data-target="#verifyModal"
															data-subscriber_id="{{ $data->subscriber_id }}"
															data-duration="{{ $subscriberQuery->getDuration($data->subscriber_id) }}"
															data-duration_id="{{ $subscriberQuery->getDurationId($data->subscriber_id) }}">
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
						</div> {{-- for table --}}

					</div> {{-- card --}}
				</div> {{-- 12 --}}
			</div> {{-- row --}}
		</div> {{-- container --}}

		<div class="modal fade" id="declineModal" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="defaultModalLabel">Decline Subscriber</h4>
					</div>
					<form action="{{ url('subscription/under_verification/decline') }}" method="POST">
						@csrf
						{{ method_field('put') }}
						<div class="modal-body">
							<p>Are you sure you want to decline this subscriber? Once verified, subscriber will be declined.</p>
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
					<form action="{{ url('subscription/under_verification/verify') }}" method="POST">
						@csrf
						{{ method_field('put') }}
						<div class="modal-body">
							<p>Are you sure you want to verify this subscriber? Once verified, subscriber will be activated.</p>
							<input type="hidden" name="subscriber_id">
							<input type="hidden" name="duration_id">
							<input type="hidden" name="duration">
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
							<P><b>Firstname:</b> <span id="fname"></span> </P> 
							<P><b>Middlename:</b> <span id="mname"></span> </P> 
							<P><b>Lastname:</b> <span id="lname"></span></P>
							<P><b>Sex:</b> <span id="sex"></span></P>
							<P><b>Username:</b> <span id="username"></span></P>
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
							<h5 style="color: orange;"> Features Selected: </h5>
							<div class="col-lg-3 col-md-3 col-sm-6  col-xs-6">
								<h5>Main</h5>
								<ul id="html_ul_moduleName">
								</ul>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6  col-xs-6">
								<h5>Sub1</h5>
								<ul id="html_sub1module">
								</ul>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6  col-xs-6">
								<h5>Sub2</h5>
								<ul id="html_sub2module">
								</ul>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6  col-xs-6">
								<h5>Sub3</h5>
								<ul id="html_sub3module">
								</ul>
							</div>

							<div class="col-lg-12 col-md-12 col-sm-12  col-xs-12">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding: 0px;">
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

						<div class="col-lg-12 col-md-12 col-sm-12  col-xs-12">
							<br>
						</div>

						<div class="clearfix"></div>

						<div class="modal-footer">
							<button type="button" class="btn btn-primary waves-effect">SAVE CHANGES</button>
							<button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
						</div>
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

				////// ---------------------------- Sub1 Modules --------------------------  //////

				var arrayOfData1 = ($(e.relatedTarget).data('sub1'));
				var arrayOfModuleName1 = [];

				arrayOfData1.forEach(function (items) {
					var objects = items;
					arrayOfModuleName1.push(objects.sub1_name);
				});

				var wrapper1 = document.getElementById('html_sub1module');
				var li_tag1 = '';
				for (var i = 0; i < arrayOfModuleName1.length; i++) {
					li_tag1 += '<li>' + arrayOfModuleName1[i] + '</li>'
				}
				wrapper1.innerHTML = li_tag1;

				////// ---------------------------- Sub1 Modules --------------------------  //////

				var arrayOfData2 = ($(e.relatedTarget).data('sub2'));
				var arrayOfModuleName2 = [];

				arrayOfData2.forEach(function (items) {
					var objects = items;
					arrayOfModuleName2.push(objects.sub2_name);
				});

				var wrapper2 = document.getElementById('html_sub2module');
				var li_tag2 = '';
				for (var i = 0; i < arrayOfModuleName2.length; i++) {
					li_tag2 += '<li>' + arrayOfModuleName2[i] + '</li>'
				}
				wrapper2.innerHTML = li_tag2;

				////// ---------------------------- Sub1 Modules --------------------------  //////

				var arrayOfData3 = ($(e.relatedTarget).data('sub3'));
				var arrayOfModuleName3 = [];

				arrayOfData3.forEach(function (items) {
					var objects = items;
					arrayOfModuleName3.push(objects.sub3_name);
				});

				console.log(arrayOfModuleName3);
				var wrapper3 = document.getElementById('html_sub3module');
				var li_tag3 = '';
				for (var i = 0; i < arrayOfModuleName3.length; i++) {
					li_tag3 += '<li>' + arrayOfModuleName3[i] + '</li>'
				}
				wrapper3.innerHTML = li_tag3;

			});

			$('#verifyModal').on("show.bs.modal", function (e) {
				var subscriber_id = $(e.relatedTarget).data('subscriber_id');
				var duration_id = $(e.relatedTarget).data('duration_id');
				var duration = $(e.relatedTarget).data('duration');

				$(e.currentTarget).find('input[name="duration_id"]').val(duration_id);
				$(e.currentTarget).find('input[name="subscriber_id"]').val(subscriber_id);
				$(e.currentTarget).find('input[name="duration"]').val(duration);
			});

			$('#declineModal').on("show.bs.modal", function (e) {
				var subscriber_id = $(e.relatedTarget).data('subscriber_id');
				$(e.currentTarget).find('input[name="subscriber_id"]').val(subscriber_id);
			});

		});
	</script>
@endsection

