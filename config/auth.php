<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Authentication Defaults
	|--------------------------------------------------------------------------
	|
	| This option controls the default authentication "guard" and password
	| reset options for your application. You may change these defaults
	| as required, but they're a perfect start for most applications.
	|
	*/

	'defaults' => [
		'guard' => 'admin',
		'passwords' => 'users',
	],

	/*
	|--------------------------------------------------------------------------
	| Authentication Guards
	|--------------------------------------------------------------------------
	|
	| Next, you may define every authentication guard for your application.
	| Of course, a great default configuration has been defined for you
	| here which uses session storage and the Eloquent user provider.
	|
	| All authentication drivers have a user provider. This defines how the
	| users are actually retrieved out of your database or other storage
	| mechanisms used by this application to persist your user's data.
	|
	| Supported: "session", "token"
	|
	*/

	'guards' => [
		'web' => [
			'driver' => 'session',
			'provider' => 'users',
		],
		'api' => [
			'driver' => 'token',
			'provider' => 'users',
		],
		'admin' => [
			'driver' => 'session',
			'provider' => 'users',
		],

		'cityadmin' => [
			'driver' => 'session',
			'provider' => 'cityadmin_user',
		],

		// 'admin-api' => [
		// 	'driver' => 'token',
		// 	'provider' => 'users',
		// ],
		'subscriber'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],

		// main ------------------------------------------
		'profile'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		// sub1
		'profile_doctors'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		// sub3
		'profile_doctors_information_basicTable'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		'profile_doctors_information_basicTableModal'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		'profile_doctors_information_singleImageUpload'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],

		// sub1
		'profile_clinic'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		// sub3
		'profile_clinic_information_basicTable'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		'profile_clinic_information_modalImageUpload'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],

		// sub1
		'profile_patient'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		// sub3
		'profile_patient_patientList_basicTable'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		'profile_patient_patientList_contextual'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		'profile_patient_medicalHistory_basicTable'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		'profile_patient_medicalHistory_hoverTable'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		'profile_patient_bills_basicTable'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		'profile_patient_bills_hoverTable'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],

		// sub1
		'profile_medicine'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		// sub3
		'profile_medicine_information_basicTableModal'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		'profile_medicine_information_basicTableImageUpload'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		// main ------------------------------------------
		'queuing'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		// sub2
		'queue_1st_priority'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		// sub3
		'queue_1st_priority_basicTable'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		'queue_1st_priority_dragDrop'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		// sub2
		'queue_2nd_priority'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		// sub3
		'queue_2nd_priority_basicTable'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		'queue_2nd_priority_dragDrop'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		'schedule'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		// sub2	
		'schedule_patient'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		// sub3	
		'schedule_patient_basicTable'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		'schedule_patient_hoverTable'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		// sub2	
		'schedule_clinic'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		// sub3	
		'schedule_clinic_basicTable'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		'schedule_clinic_hoverTable'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',

		],
		'booking'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		// Sub3
		'booking_hoverTable'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		'booking_basicTable'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],

		'billing'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		'inventory'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],

		'manageReport'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		//sub1
		'manageReport_patient'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		//sub3
		'manageReport_patient_basicTable'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		'manageReport_patient_dataTable'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		//sub1
		'manageReport_inventory'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		//sub3
		'manageReport_inventory_basicTable'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		'manageReport_inventory_dataTable'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		//sub1
		'manageReport_financial'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		//sub3
		'manageReport_financial_basicTable'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		'manageReport_financial_dataTable'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],

		'settings'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		'settings_basicTable'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		'settings_dataTable'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],


		// --------------------  Secretary --------------------  
		'secretary'  => [
			'driver'  => 'session',
			'provider' => 'secretaries',
		],
		// main ------------------------------------------
		'sec_profile'  => [
			'driver'  => 'session',
			'provider' => 'secretaries',
		],
		// sub1
		'sec_profile_doctors'  => [
			'driver'  => 'session',
			'provider' => 'secretaries',
		],
		// sub3
		'sec_profile_doctors_information_basicTable'  => [
			'driver'  => 'session',
			'provider' => 'secretaries',
		],
		'sec_profile_doctors_information_basicTableModal'  => [
			'driver'  => 'session',
			'provider' => 'secretaries',
		],
		'sec_profile_doctors_information_singleImageUpload'  => [
			'driver'  => 'session',
			'provider' => 'secretaries',
		],

		// sub1
		'sec_profile_clinic'  => [
			'driver'  => 'session',
			'provider' => 'secretaries',
		],
		// sub3
		'sec_profile_clinic_information_basicTable'  => [
			'driver'  => 'session',
			'provider' => 'secretaries',
		],
		'sec_profile_clinic_information_modalImageUpload'  => [
			'driver'  => 'session',
			'provider' => 'secretaries',
		],

		// sub1
		'sec_profile_patient'  => [
			'driver'  => 'session',
			'provider' => 'secretaries',
		],
		// sub3
		'sec_profile_patient_patientList_basicTable'  => [
			'driver'  => 'session',
			'provider' => 'secretaries',
		],
		'sec_profile_patient_patientList_contextual'  => [
			'driver'  => 'session',
			'provider' => 'secretaries',
		],
		'sec_profile_patient_medicalHistory_basicTable'  => [
			'driver'  => 'session',
			'provider' => 'secretaries',
		],
		'sec_profile_patient_medicalHistory_hoverTable'  => [
			'driver'  => 'session',
			'provider' => 'secretaries',
		],
		'sec_profile_patient_bills_basicTable'  => [
			'driver'  => 'session',
			'provider' => 'secretaries',
		],
		'sec_profile_patient_bills_hoverTable'  => [
			'driver'  => 'session',
			'provider' => 'secretaries',
		],

		// sub1
		'sec_profile_medicine'  => [
			'driver'  => 'session',
			'provider' => 'secretaries',
		],
		// sub3
		'sec_profile_medicine_information_basicTableModal'  => [
			'driver'  => 'session',
			'provider' => 'secretaries',
		],
		'sec_profile_medicine_information_basicTableImageUpload'  => [
			'driver'  => 'session',
			'provider' => 'secretaries',
		],
		'sec_queuing'  => [
			'driver'  => 'session',
			'provider' => 'secretaries',
		],
		// sub2
		'sec_queue_1st_priority'  => [
			'driver'  => 'session',
			'provider' => 'secretaries',
		],
		// sub3
		'sec_queue_1st_priority_basicTable'  => [
			'driver'  => 'session',
			'provider' => 'secretaries',
		],
		'sec_queue_1st_priority_dragDrop'  => [
			'driver'  => 'session',
			'provider' => 'secretaries',
		],
		'sec_queue_2nd_priority'  => [
			'driver'  => 'session',
			'provider' => 'secretaries',
		],
		// sub3
		'sec_queue_2nd_priority_basicTable'  => [
			'driver'  => 'session',
			'provider' => 'secretaries',
		],
		'sec_queue_2nd_priority_dragDrop'  => [
			'driver'  => 'session',
			'provider' => 'secretaries',
		],
		'sec_schedule'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		// sub2	
		'sec_schedule_patient'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		// sub3	
		'sec_schedule_patient_basicTable'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		'sec_schedule_patient_hoverTable'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		// sub2	
		'sec_schedule_clinic'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		// sub3	
		'sec_schedule_clinic_basicTable'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		'sec_schedule_clinic_hoverTable'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',

		],
		'sec_booking'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		// Sub3
		'sec_booking_hoverTable'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		'sec_booking_basicTable'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],

		'sec_billing'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		'sec_inventory'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],

		'sec_manageReport'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		//sub1
		'sec_manageReport_patient'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		//sub3
		'sec_manageReport_patient_basicTable'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		'sec_manageReport_patient_dataTable'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		//sub1
		'sec_manageReport_inventory'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		//sub3
		'sec_manageReport_inventory_basicTable'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		'sec_manageReport_inventory_dataTable'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		//sub1
		'sec_manageReport_financial'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		//sub3
		'sec_manageReport_financial_basicTable'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		'sec_manageReport_financial_dataTable'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],

		'sec_settings'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		'sec_settings_basicTable'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
		'sec_settings_dataTable'  => [
			'driver'  => 'session',
			'provider' => 'subscribers',
		],
	],

	/*
	|--------------------------------------------------------------------------
	| User Providers
	|--------------------------------------------------------------------------
	|
	| All authentication drivers have a user provider. This defines how the
	| users are actually retrieved out of your database or other storage
	| mechanisms used by this application to persist your user's data.
	|
	| If you have multiple user tables or models you may configure multiple
	| sources which represent each model / table. These sources may then
	| be assigned to any extra authentication guards you have defined.
	|
	| Supported: "database", "eloquent"
	|
	*/

	'providers' => [
		// 'users' => [
		// 	'driver' => 'eloquent',
		// 	'model' => App\User::class,
		// 	// 'table' => 'user'
		// ],

		'users' => [
			'driver' => 'database',
			'table' => 'user',
		],

		'cityadmin_user' => [
			'driver' => 'eloquent',
			'model' => App\CityAdmin::class,
		],

		'subscribers' => [
			'driver' => 'eloquent',
			'model'  => App\Models\Doctor_Portal\Subscribers::class,
			// 'table' => 'subscribers'
		],

		'secretaries' => [
			'driver' => 'eloquent',
			'model'  => App\Models\Secretary_Portal\SecondaryUser::class,
			// 'table' => 'secondary_user',
		],


	],

	/*
	|--------------------------------------------------------------------------
	| Resetting Passwords
	|--------------------------------------------------------------------------
	|
	| You may specify multiple password reset configurations if you have more
	| than one user table or model in the application and you want to have
	| separate password reset settings based on the specific user types.
	|
	| The expire time is the number of minutes that the reset token should be
	| considered valid. This security feature keeps tokens short-lived so
	| they have less time to be guessed. You may change this as needed.
	|
	*/

	'passwords' => [
		'users' => [
			'provider' => 'users',
			'table' => 'password_resets',
			'expire' => 60,
		],
	],

];
