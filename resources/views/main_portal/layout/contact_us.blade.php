<section id="contact" class="section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="ser-title">Contact us</h2>
					<hr class="botm-line">
				</div>
				<div class="col-md-4 col-sm-4">
					<h3>Contact Info</h3>
					<div class="space"></div>
					<p><i class="fa fa-map-marker fa-fw pull-left fa-2x"></i>321 Awesome Street<br> New York, NY 17022</p>
					<div class="space"></div>
					<p><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i>info@companyname.com</p>
					<div class="space"></div>
					<p><i class="fa fa-phone fa-fw pull-left fa-2x"></i>+1 800 123 1234</p>
				</div>
				<div class="col-md-8 col-sm-8 marb20">
					<div class="contact-info">
						<h3 class="cnt-ttl">Having Any Query! Or Book an appointment</h3>
						<div class="space"></div>
						<div id="sendmessage">Your message has been sent. Thank you!</div>
						<div id="errormessage"></div>
						<form action="/new_booked" method="post">
							{{ csrf_field() }}
							<div class="row clearfix">
								<div class="col-lg-6">
									<div class="form-group">
										<select class="form-control show-tick spec" id="doctors" style="text-transform: uppercase;" name="specialization">
                                            <option>SELECT SPECIALIZATION</option>
                                            <option value="Urology">Urology</option>
                                            <option value="Orthopedics">Orthopedics</option>
                                            <option value="Dentistry">Dentistry</option>
                                            <option value="Opthalmology">Opthalmology</option>
                                            <option value="OB/GYN">OB/GYN</option>
                                        </select>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<select class="form-control" name="doctors">
											<option>-- Select Doctor --</option>
											<option id="doctor" style="text-transform: uppercase;"></option>
										</select>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="row clearfix">
										<div class="col-lg-2">
											<h5>Every: </h5>
										</div>
										<div class="row clearfix">
											<div class="col-lg-7">
												<div class="form-group">
													<select class="form-control" name="clinicSched">
														<option id="clinicSched">-- Select Clinic Schedule --</option>
														<option  style="text-transform: uppercase;"></option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row clearfix">
								<div class="col-lg-6">
									<div class="form-group">
										<input type="text" name="name" class="form-control br-radius-zero" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
										<div class="validation"></div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<input type="text" name="lname" class="form-control br-radius-zero" id="lname" placeholder="Your Lastname" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
										<div class="validation"></div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<input type="email" class="form-control br-radius-zero" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control br-radius-zero" name="address" id="address" placeholder="Address" data-rule="minlen:4" data-msg="Please enter your address" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<textarea class="form-control br-radius-zero" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
								<div class="validation"></div>
							</div>

							<div class="form-action">
								<button type="submit" class="btn btn-form">Book Now</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	@section('script')

	@endsection