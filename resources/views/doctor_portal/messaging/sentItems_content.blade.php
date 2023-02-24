@extends('doctor_portal.layouts.master')

@section('style')
<style>
	#div-list-group-item-heading {
		margin-bottom: 0px;
		padding-right: 0px;
		padding-left: 0px;
	}
	#dropdown-content {
		margin: 10px;
	}
</style>
@endsection

@section('body')
	<section class="content">
		<div class="container-fluid">
			<div class="block-header">
				<h2>SENT ITEMS</h2>
			</div>

			<div class="row clearfix">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="card">
						<div class="header">
							<h2>
								Sent Items Content
							</h2>
						</div>
						<div class="body">
							<div class="row clearfix">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" id="div-list-group-item-heading" style="padding-bottom: 20px;">
										<h4 class="list-group-item-heading">jinYurisama@gmail.com</h4>
										<div class="btn-group" role="group">
											<button type="button" class="btn btn-default waves-effect dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> More Information
											<span class="caret"></span>
											</button>
											<ul class="dropdown-menu" >
												<p id="dropdown-content"><b>from:</b> jinYurisama@gmail.com</p>
												<p id="dropdown-content"><b>to:</b>  jinYurisama@gmail.com</p>
												<p id="dropdown-content"><b>date:</b>  Oct 14, 2018, 11:10 PM</p>
												<p id="dropdown-content"><b>subject:</b>  email content test (polyclinic)</p>
											</ul>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" id="div-list-group-item-heading">
										<h4 class="list-group-item-heading pull-right"> <span style="font-size: 12px;">13:00</span>  </h4>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="div-list-group-item-heading">		
										<p>
											Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
											Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
											pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
											sadipscing mel.
										</p>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-left: 0px; padding-left: 0px;">
										<div class="pull-left">
											<a href="javascript:history.back()" type="button" class="btn btn-warning waves-effect" >Back</a>
										</div>
									</div>
									
								</div>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
 @endsection
