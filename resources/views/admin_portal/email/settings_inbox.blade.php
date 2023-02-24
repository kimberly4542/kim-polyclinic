@extends('admin_portal.home')

<style>
	#div-list-group-item-heading {
		margin-bottom: 0px;
		padding-right: 0px;
		padding-left: 0px;
	}
</style>

@section('body')
	<section class="content">
		<div class="container-fluid">
			<div class="block-header">
				<h2>INBOX</h2>
			</div>

			<div class="row clearfix">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="card">
						<div class="header">
							<h2>
								INBOX
							</h2>
						</div>
						<div class="body">
							<div class="list-group">
								<a href="{{ url('email/send_email_content') }}" class="list-group-item active">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" id="div-list-group-item-heading">
										<h4 class="list-group-item-heading">Subscriber 1 </h4>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 " id="div-list-group-item-heading">
										<h4 class="list-group-item-heading pull-right"> <span style="font-size: 12px;">13:00</span>  </h4>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 " id="div-list-group-item-heading" style="visibility: hidden">		separtor
									</div>
									<p class="list-group-item-text">
										Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
										Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
										pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
										sadipscing mel.
									</p>
								</a>
								<a href="{{ url('email/send_email_content') }}" class="list-group-item">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" id="div-list-group-item-heading">
										<h4 class="list-group-item-heading">Subscriber 2 </h4>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 " id="div-list-group-item-heading">
										<h4 class="list-group-item-heading pull-right"> <span style="font-size: 12px;">12:00</span>  </h4>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 " id="div-list-group-item-heading" style="visibility: hidden">		separtor
									</div>
									<p class="list-group-item-text">
										Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
										Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
										pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
										sadipscing mel.
									</p>
								</a>
								<a href="{{ url('email/send_email_content') }}" class="list-group-item">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" id="div-list-group-item-heading">
										<h4 class="list-group-item-heading">Subscriber 3 </h4>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 " id="div-list-group-item-heading">
										<h4 class="list-group-item-heading pull-right"> <span style="font-size: 12px;">Yesterday</span>  </h4>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 " id="div-list-group-item-heading" style="visibility: hidden">		separtor
									</div>
									<p class="list-group-item-text">
										Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
										Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
										pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
										sadipscing mel.
									</p>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
 @endsection
</body>

</html>
