<section>
	<!-- Left Sidebar -->
	<aside id="leftsidebar" class="sidebar">
		<!-- User Info -->
		<div class="user-info">
			<div class="image">
				<img src="{{ URL::asset('AdminSB/images/doctor.png')}}" width="48" height="48" alt="User" />
			</div>
			<div class="info-container">
				@if(Auth::guard('subscriber')->check())
					<div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->fname }} {{  Auth::user()->lname }}</div>
				@endif
				<div class="btn-group user-helper-dropdown">
					<i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
					<ul class="dropdown-menu pull-right">
					{{-- 	<li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
						<li role="separator" class="divider"></li> --}}
						{{-- <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
						<li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
						<li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li> --}}
						<li role="separator" class="divider"></li>
						<li><a href="{{ url('session/logout') }}"><i class="material-icons">input</i>Sign Out</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- #User Info -->
		<!-- Menu -->
		<div class="menu">
			<ul class="list">
				<li class="header">MAIN NAVIGATION</li>
				<li class = "{{ Request::is('home/') ? 'active' : null }}">
					<a href="{{ url('/home')}}">
						<i class="material-icons">home</i>
						<span>Home</span>
					</a>
				</li>

				@if(Auth::guard('profile')->check())
					<li class = "{{ Request::is('profile/*') ? 'active' : null}}">
						<a href="javascript:void(0);" class="menu-toggle">
							<i class="material-icons">perm_identity</i>
							<span>PROFILE</span>
						</a>
						<ul class="ml-menu">
							@if(Auth::guard('profile_doctors')->check())
								<li class= "{{ Request::is('profile/doctor_profile') ? 'active' : null }}">
									<a href="{{ url('profile/doctor_profile') }}">Doctor Information</a>
								</li>
							@endif
							{{-- <li class="{{ Request::is('profile/secretary_profile') ? 'active' : null }}">
								<a href="{{ url('profile/secretary_profile') }}">Secretary Information</a>
							</li> --}}
							@if(Auth::guard('profile_clinic')->check())
								<li class="{{ Request::is('profile/clinic_profile') ? 'active' : null }}">
									<a href="{{ url('profile/clinic_profile') }}">Clinic Information</a>
								</li>
							@endif

							@if(Auth::guard('profile_patient')->check())
								<li class="{{ 
									Request::is('profile/patient_profile/*') ? 'active' : null 
								|| Request::is('profile/patient_profile_history') ? 'active' : null 
								|| Request::is('profile/patient_profile_billing_history/*') ? 'active' : null 
								|| Request::is('profile/patient_profile_schedule') ? 'active' : null 
								|| Request::is('profile/patient_profile_certificate/*') ? 'active' : null 
								|| Request::is('profile/patient_clinic') ? 'active' : null }}" >
									<a href="{{ url('profile/patient_clinic') }}">Patient Information</a>
								</li>
							@endif

							@if(Auth::guard('profile_medicine')->check())
								<li class="{{ Request::is('profile/clinic_medicines') ? 'active' : null || Request::is('profile/patient_profile_medicine/*') ? 'active' : null}}">
									<a href="{{ url('profile/clinic_medicines') }}">Medicine Information</a>
								</li>
							@endif
						</ul>
					</li>
				@endif

				@if (Auth::guard('queuing')->check())
					<li class= "{{ Request::is('queue/clinic_table') ? 'active' : null}}">
						<a href="{{ url('queue/clinic_table') }}">
							<i class="material-icons">list</i>
							<span>Queuing</span>
						</a>
					</li>
				@endif

				@if (Auth::guard('schedule')->check())
					<li class= "{{ Request::is('schedule/*') ? 'active' : null }}">
						<a href="{{ url('schedule/schedule_clinic_table')}}" >
							<i class="material-icons">date_range</i>
							<span>Schedule</span>
						</a>
						{{-- <ul class="ml-menu">
							<li class= "{{ Request::is('schedule/schedule_patient_in_clinic') ? 'active' : null }}">
								<a href="{{ url('schedule/schedule_patient_in_clinic') }}">Patient in my Clinic</a>
							</li>
							<li class= "{{ Request::is('schedule/schedule_patient_all_clinic') ? 'active' : null }}">
								<a href="{{ url('schedule/schedule_patient_all_clinic') }}">Patient in all Clinic</a>
							</li>
						</ul> --}}
					</li>
				@endif

				@if (Auth::guard('booking')->check())
					<li class= "{{ Request::is('booking/*') ? 'active' : null }}">
						<a href="{{ url('booking/booking_clinic_table')}}">
							<i class="material-icons">book</i>
							<span>Booking</span>
						</a>
						{{-- <ul class="ml-menu">
							<li class= "{{ Request::is('booking/booking_in_clinic') ? 'active' : null }}">
								<a href="{{ url('booking/booking_in_clinic') }}">Book in my Clinic</a>
							</li>
							<li class= "{{ Request::is('booking/booking_other_clinic') ? 'active' : null }}">
								<a href="{{ url('booking/booking_other_clinic') }}">Booking in other Clinic</a>
							</li>
						</ul> --}}
					</li>
				@endif

				{{-- @if (Auth::guard('billing')->check())
					<li class = "{{ Request::is('bills/bills_other_clinic') ? 'active' : null }}">
						<a href="{{ url('bills/bills_other_clinic')}}">
							<i class="material-icons">credit_card</i>
							<span>Billing</span>
						</a>
					</li>
				@endif --}}

				@if (Auth::guard('inventory')->check())
					<li class = "{{ Request::is('inventory/*') ? 'active' : null }}">
						<a href="{{ url('inventory/filter_clinic')}}">
							<i class="material-icons">storage</i>
							<span>Inventory</span>
						</a>
					</li>
					{{-- <li class= "{{ Request::is('inventory/*') ? 'active' : null}}">
						<a href="#" class="menu-toggle">
							<i class="material-icons">storage</i>
							<span>Inventory</span>
						</a>
						<ul class="ml-menu">
							<li class= "{{ Request::is('inventory/inventory_in_clinic') ? 'active' : null || Request::is('inventory/inventory_purchase_order') ? 'active' : null 
							|| Request::is('inventory/inventory_invoice') ? 'active' : null
							|| Request::is('inventory/inventory_purchase_order') ? 'active' : null || Request::is('inventory/inventory_item_return') ? 'active' : null}}">
								<a href="{{ url('inventory/inventory_in_clinic') }}">Inventory in my Clinic</a>
							</li>
							<li class= "{{ Request::is('inventory/inventory_other_clinic') ? 'active' : null }}">
								<a href="{{ url('inventory/inventory_other_clinic') }}">Inventory in my other Clinic</a>
							</li>
						</ul>
					</li> --}}
				@endif

				@if (Auth::guard('manageReport')->check())
					<li class= "{{ Request::is('reports/*') ? 'active' : null}}">
						<a href="#" class="menu-toggle">
							<i class="material-icons">report</i>
							<span>Manage Report</span>
						</a>
						<ul class="ml-menu">
							@if (Auth::guard('manageReport_patient')->check())
								<li class= "{{ Request::is('reports/patients_report') ? 'active' : null }}">
									<a href="{{ url('reports/patients_report') }}">Patients</a>
								</li>
							@endif
							@if (Auth::guard('manageReport_inventory')->check())
								<li class= "{{ Request::is('reports/medicine_report') ? 'active' : null }}">
									<a href="{{ url('reports/medicine_report') }}">Medicine</a>
								</li>
							@endif
							@if (Auth::guard('manageReport_financial')->check())
								<li class= "{{ Request::is('reports/financial_statement') ? 'active' : null }}">
									<a href="{{ url('reports/financial_statement') }}">Financial Statement</a>
								</li>
							@endif
						</ul>
					</li>
				@endif

				@if (Auth::guard('settings')->check())
					<li class= "{{ Request::is('accounts/*') ? 'active' : null}}">
						<a href="{{ url('accounts/accounts') }}">
							<i class="material-icons">account_circle</i>
							<span>Accounts</span>
						</a>
					</li>
				@endif
			</ul>
		</div>
		<!-- #Menu -->
		<!-- Footer -->
		<!-- <div class="legal">
			<div class="copyright">
				&copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
			</div>
			<div class="version">
				<b>Version: </b> 1.0.5
			</div>
		</div> -->
		<!-- #Footer -->
	</aside>
	<!-- #END# Left Sidebar -->
	<!-- Right Sidebar -->
	<aside id="rightsidebar" class="right-sidebar">
		<ul class="nav nav-tabs tab-nav-right" role="tablist">
			<li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
			<li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
		</ul>
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane fade in active in active" id="skins">
				<ul class="demo-choose-skin">
					<li data-theme="red" class="active">
						<div class="red"></div>
						<span>Red</span>
					</li>
					<li data-theme="pink">
						<div class="pink"></div>
						<span>Pink</span>
					</li>
					<li data-theme="purple">
						<div class="purple"></div>
						<span>Purple</span>
					</li>
					<li data-theme="deep-purple">
						<div class="deep-purple"></div>
						<span>Deep Purple</span>
					</li>
					<li data-theme="indigo">
						<div class="indigo"></div>
						<span>Indigo</span>
					</li>
					<li data-theme="blue">
						<div class="blue"></div>
						<span>Blue</span>
					</li>
					<li data-theme="light-blue">
						<div class="light-blue"></div>
						<span>Light Blue</span>
					</li>
					<li data-theme="cyan">
						<div class="cyan"></div>
						<span>Cyan</span>
					</li>
					<li data-theme="teal">
						<div class="teal"></div>
						<span>Teal</span>
					</li>
					
				</ul>
			</div>
			<div role="tabpanel" class="tab-pane fade" id="settings">
				<div class="demo-settings">
					<p>GENERAL SETTINGS</p>
					<ul class="setting-list">
						<li>
							<span>Report Panel Usage</span>
							<div class="switch">
								<label><input type="checkbox" checked><span class="lever"></span></label>
							</div>
						</li>
						<li>
							<span>Email Redirect</span>
							<div class="switch">
								<label><input type="checkbox"><span class="lever"></span></label>
							</div>
						</li>
					</ul>
					<p>SYSTEM SETTINGS</p>
					<ul class="setting-list">
						<li>
							<span>Notifications</span>
							<div class="switch">
								<label><input type="checkbox" checked><span class="lever"></span></label>
							</div>
						</li>
						<li>
							<span>Auto Updates</span>
							<div class="switch">
								<label><input type="checkbox" checked><span class="lever"></span></label>
							</div>
						</li>
					</ul>
					<p>ACCOUNT SETTINGS</p>
					<ul class="setting-list">
						<li>
							<span>Offline</span>
							<div class="switch">
								<label><input type="checkbox"><span class="lever"></span></label>
							</div>
						</li>
						<li>
							<span>Location Permission</span>
							<div class="switch">
								<label><input type="checkbox" checked><span class="lever"></span></label>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</aside>
	<!-- #END# Right Sidebar -->
</section>