@extends('admin_portal.home')

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
				<h2>EMAIL</h2>
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
									<h2>WYSIWYG Editor</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ullamcorper sapien non nisl facilisis bibendum in quis tellus. Duis in urna bibendum turpis pretium fringilla. Aenean neque velit, porta eget mattis ac, imperdiet quis nisi. Donec non dui et tortor vulputate luctus. Praesent consequat rhoncus velit, ut molestie arcu venenatis sodales.</p>
									<h3>Lacinia</h3>
									<ul>
										<li>Suspendisse tincidunt urna ut velit ullamcorper fermentum.</li>
										<li>Nullam mattis sodales lacus, in gravida sem auctor at.</li>
										<li>Praesent non lacinia mi.</li>
										<li>Mauris a ante neque.</li>
										<li>Aenean ut magna lobortis nunc feugiat sagittis.</li>
									</ul>
									<h3>Pellentesque adipiscing</h3>
									<p>Maecenas quis ante ante. Nunc adipiscing rhoncus rutrum. Pellentesque adipiscing urna mi, ut tempus lacus ultrices ac. Pellentesque sodales, libero et mollis interdum, dui odio vestibulum dolor, eu pellentesque nisl nibh quis nunc. Sed porttitor leo adipiscing venenatis vehicula. Aenean quis viverra enim. Praesent porttitor ut ipsum id ornare.</p>
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
 @endsection
</body>

</html>
