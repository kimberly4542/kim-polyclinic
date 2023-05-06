	<section id="banner" class="banner">
		<div class="bg-color">
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<div class="col-md-12">
						@if(session('errorMessage'))
							<div class="alert alert-danger">
								{{ session('errorMessage') }}
							</div>
						@endif
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#"><img src="{{ asset('Main_portal/img/logo2.png') }}" class="img-responsive" style="width: 140px; margin-top: -16px;"></a>
						</div>
						<div class="collapse navbar-collapse navbar-right" id="myNavbar">
							<ul class="nav navbar-nav">

							 <!--  <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="color: #00b3b3; background-color: Transparent;
		background-repeat:no-repeat;
		border: 1px;
		cursor:pointer;
		overflow: hidden;
		outline:none;">Login</button> -->
						
								<li class="active"><a href="#banner">Home</a></li>
								<li class=""><a href="#service">Services</a></li>
								<li class=""><a href="#about">About</a></li>
								<li class=""><a href="#contact">Contact</a></li>
								<li class=""><a href="{{ url('registration') }}">Register</a></li>
								<li class=""><a href="{{ url('session/login') }}">Login Subscriber</a></li>
								<li class=""><a href="{{ url('sec_session/login') }}">Login Secretary</a></li>
								<li class=""><a href="{{ url('cityadmin') }}">City Admin</a></li>
							</ul>
							
						</div>
					</div>
				</div>
			</nav>
			<div class="container">
				<div class="row">
					<div class="banner-info">
						<div class="banner-logo text-center">
							<img src="{{ asset('Main_portal/img/logo2.png') }}" class="img-responsive">
						</div>
						<div class="banner-text text-center">
							<h1 class="white">Healthcare at your desk</h1>
							<p>Polyclinic is developed to improve clinic transaction and help manage patient care services<br></p>
							<a href="#contact" class="btn btn-appoint">Make an Appointment.</a>
						</div>
						<div class="overlay-detail text-center">
							<a href="#service"><i class="fa fa-angle-down"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>