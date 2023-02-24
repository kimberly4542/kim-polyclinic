@extends('doctor_portal.layouts.master')

@section('style')
<style>
	#header {
		background-color: #323232;
	}

	#header-font {
		color: white;
	}

</style>
@endsection

@section('body')
	<section class="content">
		<div class="container-fluid">
			<div class="block-header">
				<h2>EMAIL</h2>
			</div>

			<!-- CKEditor -->
			<div class="row clearfix">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="card">
						<div class="header" id="header">
							<h2 id="header-font">
								Reply Email
							</h2>
						</div>
						<div class="body">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="form-group form-float">
									<br>
									<div class="form-line">
										<input type="text" class="form-control">
										<label class="form-label">Recipient</label>
									</div> <br>
									<div class="form-line">
										<input type="password" class="form-control">
										<label class="form-label">Subject</label>
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
