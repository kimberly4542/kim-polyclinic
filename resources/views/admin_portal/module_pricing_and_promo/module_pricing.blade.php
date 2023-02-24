@extends('admin_portal.home')

@section('body')
<section class="content">
	<div class="container-fluid">
		@if($errors->any())
			<div class="alert alert-danger">
				{{ $errors->any() }}
			</div>
		@endif

		@if(session('successMessage'))
			<div class="alert alert-success">
				{{ session('successMessage') }}
			</div>
		@endif

		<div class="block-header">
			<div class="block-header">
				<h2>Module Pricing</h2>
			</div>
			<div class="row">
				<a data-toggle="modal" 
					data-target="#updateContent"
					data-module_name="{{ $moduleListQuery->getModuleName('profile') }}"
					data-module_amount="{{ $moduleListQuery->getModuleAmount('profile') }}"
					data-module_icon="account_circle">
					<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
						<div class="info-box-2 bg-red hover-zoom-effect">
							<div class="icon">
								<i class="material-icons">account_circle</i>
							</div>
							<div class="content">
								<div class="text">PROFILE</div>
							</div>
						</div>
					</div>
				</a>
				<a data-toggle="modal" 
					data-target="#updateContent"
					data-module_name="{{ $moduleListQuery->getModuleName('queuing') }}"
					data-module_amount="{{ $moduleListQuery->getModuleAmount('queuing') }}"
					data-module_icon="queue">
					<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
						<div class="info-box-2 bg-pink hover-zoom-effect">
							<div class="icon">
								<i class="material-icons">queue</i>
							</div>
							<div class="content">
								<div class="text">QUEUE</div>
							</div>
						</div>
					</div>
				</a>
				<a data-toggle="modal" data-target="#updateContent"
					data-module_name="{{ $moduleListQuery->getModuleName('schedule') }}"
					data-module_amount="{{ $moduleListQuery->getModuleAmount('schedule') }}"
					data-module_icon="schedule">
					<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
						<div class="info-box-2 bg-purple hover-zoom-effect">
							<div class="icon">
								<i class="material-icons">schedule</i>
							</div>
							<div class="content">
								<div class="text">SCHEDULE</div>
							</div>
						</div>
					</div>
				</a>
				<a data-toggle="modal" data-target="#updateContent"
					data-module_name="{{ $moduleListQuery->getModuleName('booking') }}"
					data-module_amount="{{ $moduleListQuery->getModuleAmount('booking') }}"
					data-module_icon="booking">

					<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
						<div class="info-box-2 bg-deep-purple hover-zoom-effect">
							<div class="icon">
								<i class="material-icons">book</i>
							</div>
							<div class="content">
								<div class="text">BOOKING</div>
							</div>
						</div>
					</div>
				</a>
				<a data-toggle="modal" data-target="#updateContent"
					data-module_name="{{ $moduleListQuery->getModuleName('billing') }}"
					data-module_amount="{{ $moduleListQuery->getModuleAmount('billing') }}"
					data-module_icon="attach_money">

					<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
						<div class="info-box-2 bg-indigo hover-zoom-effect">
							<div class="icon">
								<i class="material-icons">attach_money</i>
							</div>
							<div class="content">
								<div class="text">BILLING</div>
							</div>
						</div>
					</div>
				</a>
				<a data-toggle="modal" data-target="#updateContent"
					data-module_name="{{ $moduleListQuery->getModuleName('inventory') }}"
					data-module_amount="{{ $moduleListQuery->getModuleAmount('inventory') }}"
					data-module_icon="widgets">

					<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
						<div class="info-box-2 bg-blue hover-zoom-effect">
							<div class="icon">
								<i class="material-icons">widgets</i>
							</div>
							<div class="content">
								<div class="text">INVENTORY</div>
							</div>
						</div>
					</div>
				</a>
				{{-- <a data-toggle="modal" data-target="#updateContent">
					<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
						<div class="info-box-2 bg-light-blue hover-zoom-effect">
							<div class="icon">
								<i class="material-icons">mail_outline</i>
							</div>
							<div class="content">
								<div class="text">MESSAGING</div>
							</div>
						</div>
					</div>
				</a> --}}
				<a data-toggle="modal" data-target="#updateContent"
					data-module_name="{{ $moduleListQuery->getModuleName('manage report') }}"
					data-module_amount="{{ $moduleListQuery->getModuleAmount('manage report') }}"
					data-module_icon="poll">

					<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
						<div class="info-box-2 bg-light-blue hover-zoom-effect">
							<div class="icon">
								<i class="material-icons">poll</i>
							</div>
							<div class="content">
								<div class="text">MANAGE REPORT</div>
							</div>
						</div>
					</div>
				</a>
				<a data-toggle="modal" data-target="#updateContent"
					data-module_name="{{ $moduleListQuery->getModuleName('settings') }}"
					data-module_amount="{{ $moduleListQuery->getModuleAmount('settings') }}"
					data-module_icon="settings">

					<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
						<div class="info-box-2 bg-cyan hover-zoom-effect">
							<div class="icon">
								<i class="material-icons">settings</i>
							</div>
							<div class="content">
								<div class="text">ACCOUNT SETTINGS</div>
							</div>
						</div>
					</div>
				</a>
			</div> <!-- #END# Hover Zoom Effect -->

			<div class="modal fade" id="updateContent" tabindex="-1" role="dialog">
				<div class="modal-dialog modal-md" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title" id="largeModalLabel">Update Module Pricing and Information</h4>
						</div>
						
						<div class="modal-body">
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								{{-- <img class="img-responsive thumbnail" src="{{ URL::asset('images/basic_table.png')}}"> --}}
								<div class="info-box-2 bg-deep-orange">
									<div class="icon" style="padding-left: 35%;">
										<i class="material-icons" id="module_icon"></i>
									</div>
								</div>
							</div>
							<form action="{{ url('module_pricing_and_promo/update') }}" method="POST">
								{{ method_field('put') }}
								@csrf
								<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
									<div class="form-group">
										<div class="form-line disabled">
											<input type="text" class="form-control" name="module_name" readonly>
										</div>
									</div><br>
									<div class="form-group form-float">
										<div class="form-line">
											<input type="number" class="form-control" name="module_amount" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
										</div>
									</div>
								</div>
								<div class="clearfix"></div>
								<div class="modal-footer">
									<button type="submit" class="btn btn-primary waves-effect">SAVE CHANGES</button>
									<button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
								</div>
							</form>
						</div>
					
					</div>
				</div>
			</div> {{-- modal --}}
			
		</div>
	</div>

</section>
<script>
	$( document ).ready(function() {
		$('#updateContent').on("show.bs.modal", function (e) {
			var module_name = $(e.relatedTarget).data('module_name');
			var module_amount = $(e.relatedTarget).data('module_amount');
			$("#module_icon").html($(e.relatedTarget).data('module_icon'));
			$(e.currentTarget).find('input[name="module_name"]').val(module_name);
			$(e.currentTarget).find('input[name="module_amount"]').val(module_amount);
		});
	});
</script>
@endsection
