@extends('doctor_portal.layouts.master')

<style>
	#header {
		background-color: #323232;
	}

	#header-font {
		color: white;
	}

</style>

@section('body')
	<section class="content">
		<div class="container-fluid">
			<div class="block-header">
				<h2>SEND EMAIL</h2>
			</div>

			<!-- CKEditor -->
			<div class="row clearfix">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="card">
						<div class="header" id="header">
							<h2 id="header-font">
								New Email
							</h2>
						</div>
						<div class="body">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
									<br>
									<div class="btn-group" role="group">
										<button type="button" class="btn btn-default waves-effect dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Select Recipient
										<span class="caret"></span>
										</button>
										<ul class="dropdown-menu">
											<li><a href="javascript:void(0);">All Active Subscribers </a></li>
											<li><a href="javascript:void(0);">All Nearly Expired Subsription</a></li>
											<li><a href="javascript:void(0);">Manually Select Recipient</a></li>
										</ul>
									</div>
									
								</div>
								<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
									<div class="form-group form-float">
										<br>
										<div class="form-line disabled">
											<input type="text" class="form-control" disabled>
											<label class="form-label">All Active Subscribers</label>
										</div>
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="form-group form-float">
										<div class="form-line">
											<input type="password" class="form-control">
											<label class="form-label">Subject</label>
										</div>
									</div>
								</div>
								
							</div>
							
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<textarea id="ckeditor">
									
								</textarea>
							</div>

							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
								<div class="footer pull right">
									<button type="button" class="btn btn-primary waves-effect">SEND</button>
									<a type="button" class="btn btn-link waves-effect" data-dismiss="modal" href="javascript:history.back()">CANCEL</a>
								</div>
							</div>

							<div class="row clearfix"></div>
						</div>
					</div>
				</div>
			</div>
			<!-- #END# CKEditor -->
		</div>
	</section>
	@section('javascript')
		<script src="{{ URL::asset('AdminSB/js/pages/forms/editors.js')}}"></script>
		<script src="{{ URL::asset('AdminSB/plugins/ckeditor/ckeditor.js')}}"></script>
	@endsection
 @endsection

