<?php

// use Illuminate\Routing\Route;

use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/adminHome', 'Admin_Portal\HomeController@home')->name('adminHome');

Route::group(['prefix' => 'admin_session'], function () {
	Route::get('login', 'Admin_Portal\Auth\LoginController@showLoginForm');
	Route::post('login/store', 'Admin_Portal\Auth\LoginController@store');
	Route::get('logout', 'Admin_Portal\Auth\LoginController@logout');

	Route::get('reports', 'Admin_Portal\Reports\ReportsController@view')->name('medical_reports');
});

Route::group(['prefix' => 'settings', 'middleware' => 'auth:admin'], function () {
	Route::get('add_account', 'Admin_Portal\Auth\RegisterController@index');
	Route::post('add_account/store', 'Admin_Portal\Auth\RegisterController@store');

	Route::get('admin_account', 'Admin_Portal\Settings\SettingsController@admin_account');
	Route::put('admin_account/update', 'Admin_Portal\Settings\SettingsController@update');
	Route::delete('admin_account/destroy', 'Admin_Portal\Settings\SettingsController@destroy');

	Route::get('update_account', 'Admin_Portal\Settings\SettingsController@update_account');
	Route::put('update_admin_account', 'Admin_Portal\Settings\SettingsController@update_admin_account');
});

Route::group(['prefix' => 'email', 'middleware' => 'auth:admin'], function () {
	Route::get('subscriber_email', 'Admin_Portal\Email\EmailController@subscriber_email');
	Route::get('settings_send_email', 'Admin_Portal\Email\EmailController@settings_send_email');
	Route::get('settings_inbox', 'Admin_Portal\Email\EmailController@settings_inbox');
	Route::get('settings_sentItems', 'Admin_Portal\Email\EmailController@settings_sentItems');
	Route::get('send_email_content', 'Admin_Portal\Email\EmailController@send_email_content');
	Route::get('sentItems_content', 'Admin_Portal\Email\EmailController@sentItems_content');
});

Route::group(['prefix' => 'subscription', 'middleware' => 'auth:admin'], function () {
	Route::get('under_verification', 'Admin_Portal\Subscription\UnderVerificationController@index');
	Route::put('under_verification/verify', 'Admin_Portal\Subscription\UnderVerificationController@verify');
	Route::put('under_verification/decline', 'Admin_Portal\Subscription\UnderVerificationController@decline');

	Route::get('renewal_table', 'Admin_Portal\Subscription\RenewalController@index');
	Route::put('renewal_table/verify', 'Admin_Portal\Subscription\RenewalController@verify');
	Route::put('renewal_table/decline', 'Admin_Portal\Subscription\RenewalController@decline');

	Route::get('request_addon_table', 'Admin_Portal\Subscription\RequestAddonController@index');
	Route::put('request_addon_table/verify', 'Admin_Portal\Subscription\RequestAddonController@verify');
	Route::put('request_addon_table/decline', 'Admin_Portal\Subscription\RequestAddonController@decline');

	Route::get('declined_subscriber', 'Admin_Portal\Subscription\DeclinedSubscriberController@index');
	Route::put('declined_subscriber/verify', 'Admin_Portal\Subscription\DeclinedSubscriberController@verify');
});

Route::group(['prefix' => 'account_management', 'middleware' => 'auth:admin'], function () {
	Route::get('active_subscriber_table', 'Admin_Portal\AccountManagement\ActiveSubscriberController@index');
	Route::put('active_subscriber_table/deactivate', 'Admin_Portal\AccountManagement\ActiveSubscriberController@deactivate');

	Route::get('expired_subscription_table', 'Admin_Portal\AccountManagement\ExpiredSubscriberController@index');
	Route::put('expired_subscriber/activate', 'Admin_Portal\AccountManagement\ExpiredSubscriberController@activate');

	Route::get('deactivated_subscriber', 'Admin_Portal\AccountManagement\DeactivatedSubscriberController@index');
	Route::put('deactivated_subscriber/activate', 'Admin_Portal\AccountManagement\DeactivatedSubscriberController@activate');

	Route::get('statistics_subscriber', 'Admin_Portal\AccountManagement\StatisticsSubscriberController@index');
});

Route::group(['prefix' => 'module_pricing_and_promo', 'middleware' => 'auth:admin'], function () {
	Route::get('module_pricing', 'Admin_Portal\ModulePricing\ModulePricingController@module_pricing');
	Route::put('update', 'Admin_Portal\ModulePricing\ModulePricingController@update');

	// Route::get('profile', 'Admin_Portal\ModulePricing\ModulePricingController@profile');
	// Route::get('queue', 'Admin_Portal\ModulePricing\ModulePricingController@queue');
	// Route::get('schedule', 'Admin_Portal\ModulePricing\ModulePricingController@schedule');
	// Route::get('book', 'Admin_Portal\ModulePricing\ModulePricingController@book');
	// Route::get('bill', 'Admin_Portal\ModulePricing\ModulePricingController@bill');
	// Route::get('inventory', 'Admin_Portal\ModulePricing\ModulePricingController@inventory');
	// Route::get('message', 'Admin_Portal\ModulePricing\ModulePricingController@message');
	// Route::get('manage_report', 'Admin_Portal\ModulePricing\ModulePricingController@manage_report');
	// Route::get('account_settings', 'Admin_Portal\ModulePricing\ModulePricingController@account_settings');
});

Route::group(['prefix' => 'module_controller'], function () {
	Route::get('request_feature', 'Admin_Portal\ModuleController\ModuleControllerController@request_feature');
});

Route::group(['prefix' => 'notification'], function () {
	Route::get('read_notification/{id}', 'Admin_Portal\Notification\notificationController@read_notification');
});

Route::get('/', function () {
	return view('welcome');
});

// ----------------------------------- Subscription Portal Routes ---------------------------------------- //

Route::get('/registration', 'Subscription_Portal\RegistrationController@register');
Route::post('/registrationUserwithAJAX', 'Subscription_Portal\ajaxController@registrationUser');
Route::get('/select_ranking/{id}', 'Subscription_Portal\ajaxController@selectRanking');

// ----------------------------------- Main Portal Routes ---------------------------------------- //

Route::get('/', 'Main_Portal\MainPortalController@index');
Route::get('/get_specialization/{id}', 'Main_Portal\MainPortalController@getSpecialization');
Route::get('/get_sched/{id}', 'Main_Portal\MainPortalController@getSchedule');
Route::post('/new_booked', 'Main_Portal\MainPortalController@new_booked');

// ----------------------------------- Doctors Portal Routes ---------------------------------------- //

Route::get('/home', 'Doctor_Portal\HomeController@home')->middleware('auth:subscriber');

Route::group(['prefix' => 'session'], function () {
	Route::get('login', 'Doctor_Portal\Auth\LoginController@showLoginForm');
	Route::post('login/store', 'Doctor_Portal\Auth\LoginController@store');
	Route::get('logout', 'Doctor_Portal\Auth\LoginController@logout');
});

//PROFILE
Route::group(['prefix' => 'profile', 'middleware' => 'auth:subscriber'], function () {
	Route::get('doctor_profile', 'Doctor_Portal\Profile\DoctorProfileController@doctor_profile');
	Route::put('doctor_profile/update', 'Doctor_Portal\Profile\DoctorProfileController@update');

	Route::get('secretary_profile', 'Doctor_Portal\Profile\SecretaryProfileController@secretary_profile');
	Route::put('secretary_profile/update', 'Doctor_Portal\Profile\SecretaryProfileController@update');

	Route::get('clinic_profile', 'Doctor_Portal\Profile\ClinicProfileController@clinic_profile');
	Route::post('add_clinic/store', 'Doctor_Portal\Profile\ClinicProfileController@store');
	Route::put('clinic_info/update', 'Doctor_Portal\Profile\ClinicProfileController@update');
	Route::delete('accounts/destroy', 'Doctor_Portal\Profile\ClinicProfileController@destroy');

	Route::get('patient_clinic', 'Doctor_Portal\Profile\PatientProfileController@patient_clinic');
	Route::get('patient_profile/{clinic_id}', 'Doctor_Portal\Profile\PatientProfileController@patient_profile');
	Route::post('update_patient_basic_info', 'Doctor_Portal\Profile\PatientProfileController@update_patient_basic_info');
	// Route::post('update_patient_basic_info_contextual', 'Doctor_Portal\Profile\PatientProfileController@update_patient_basic_info_contextual');
	Route::post('update_guardian_info', 'Doctor_Portal\Profile\PatientProfileController@update_guardian_info');
	// Route::post('update_patient_basic_info', 'Doctor_Portal\Profile\PatientProfileController@update_patient_basic_info');
	// Route::post('update_patient_basic_info', 'Doctor_Portal\Profile\PatientProfileController@update_patient_basic_info');

	Route::get('patient_profile_history/{patient_id}', 'Doctor_Portal\Profile\PatientProfileHistoryController@patient_profile_history');
	Route::get(
		'patient_profile_billing_history/{patient_id}',
		'Doctor_Portal\Profile\PatientProfileBillingHistoryController@patient_profile_billing_history'
	);
	// Route::get('patient_profile_schedule', 'Doctor_Portal\Profile\PatientProfileScheduleController@patient_profile_schedule');
	Route::get('patient_profile_certificate/{patient_id}/{clinic_id}', 'Doctor_Portal\Profile\PatientProfileCertificateController@patient_profile_certificate');

	Route::get('clinic_medicines', 'Doctor_Portal\Profile\PatientProfileMedicineController@clinic_medicines');
	Route::get('patient_profile_medicine/{clinic_id}', 'Doctor_Portal\Profile\PatientProfileMedicineController@patient_profile_medicine');
	Route::post('med_info/store', 'Doctor_Portal\Profile\PatientProfileMedicineController@store');
	Route::put('med_info/update', 'Doctor_Portal\Profile\PatientProfileMedicineController@update');
});

//QUEUE
Route::group(['prefix' => 'queue', 'middleware' => 'auth:subscriber'], function () {
	Route::get('clinic_table', 'Doctor_Portal\Queue\QueueController@clinic_table');
	Route::get('queue_patient/{clinic_id}', 'Doctor_Portal\Queue\QueueController@queue_patient');

	Route::get('queue_profile', 'Doctor_Portal\Queue\QueueController@queue_profile');
	Route::post('queue_profile', 'Doctor_Portal\Queue\QueueController@queue_update');
	Route::post('addQueue', 'Doctor_Portal\Queue\QueueController@add_queue');
	Route::post('addConsultation', 'Doctor_Portal\Queue\QueueController@consultation');
	Route::get('add_new_queue/{clinic_id}/{patient_id}/{fname}/{lname}', 'Doctor_Portal\Queue\QueueController@add_new_queue');
	Route::get('add_new_queue_2nd/{clinic_id}/{patient_id}/{fname}/{lname}', 'Doctor_Portal\Queue\QueueController@add_new_queue_2nd');
	Route::get('add_new_queue_olbook/{clinic_id}/{book_online_id}/{book_fname}/{book_lname}', 'Doctor_Portal\Queue\QueueController@add_new_queue_olbook');
	Route::get('add_new_queue_2nd_olbook/{clinic_id}/{book_online_id}/{book_fname}/{book_lname}', 'Doctor_Portal\Queue\QueueController@add_new_queue_2nd_olbook');
	Route::get('cons_finish/ref={clinic_id}/patient_id={patient_id}', 'Doctor_Portal\Queue\QueueController@cons_finish');
});

//SCHEDULE
Route::group(['prefix' => 'schedule', 'middleware' => 'auth:subscriber'], function () {
	// Route::get('schedule_patient_all_clinic', 'Doctor_Portal\Schedule\ScheduleAllClinicController@schedule_patient_all_clinic');
	Route::get('schedule_patient_in_clinic', 'Doctor_Portal\Schedule\ScheduleInClinicController@schedule_patient_in_clinic');
	Route::get('schedule_clinic_table', 'Doctor_Portal\Schedule\ScheduleAllClinicController@schedule_clinic_table');
});

//BOOKING
Route::group(['prefix' => 'booking', 'middleware' => 'auth:subscriber'], function () {
	Route::get('booking_other_clinic', 'Doctor_Portal\Booking\BookingOtherClinicController@booking_other_clinic');
	Route::get('booking_clinic_table', 'Doctor_Portal\Booking\BookingInClinicController@booking_in_clinic');
	Route::post('booking_patient', 'Doctor_Portal\Booking\BookingInClinicController@booking_patient');
});

//BILLS
Route::group(['prefix' => 'bills', 'middleware' => 'auth:subscriber'], function () {
	Route::get('bills_in_clinic', 'Doctor_Portal\Bills\BillsInClinicController@bills_in_clinic');
	Route::get('bills_other_clinic', 'Doctor_Portal\Bills\BillsOtherClinicController@bills_other_clinic');
	Route::get('select_clinic/{id}', 'Doctor_Portal\Bills\BillsOtherClinicController@select_clinic');
	Route::get('specific_patient_bill/{id}', 'Doctor_Portal\Bills\BillsOtherClinicController@specific_patient_bill');
});

//INVENTORY
Route::group(['prefix' => 'inventory', 'middleware' => 'auth:subscriber'], function () {
	Route::get('inventory_in_clinic', 'Doctor_Portal\Inventory\InventoryInClinicController@inventory_in_clinic');
	Route::get('inventory_purchase_order', 'Doctor_Portal\Inventory\InventoryPurchaseOrderController@inventory_purchase_order');
	Route::get('inventory_invoice', 'Doctor_Portal\Inventory\InventoryInvoiceController@inventory_invoice');
	Route::get('inventory_item_return', 'Doctor_Portal\Inventory\InventoryItemReturnController@inventory_item_return');

	Route::get('inventory_other_clinic', 'Doctor_Portal\Inventory\InventoryOtherClinicController@inventory_other_clinic');

	Route::get('filter_clinic', 'Doctor_Portal\Inventory\FilterClinicController@filter_clinic');
	Route::get('item/{clinic_id}', 'Doctor_Portal\Inventory\ItemController@Item');

	Route::get('purchase_order/{clinic_id}', 'Doctor_Portal\Inventory\PurchaseOrderController@purchase_order');
	Route::post('print_purchase_order/{clinic_id}', 'Doctor_Portal\Inventory\PurchaseOrderController@print_purchase_order');

	Route::get('invoice/{clinic_id}', 'Doctor_Portal\Inventory\InvoiceController@invoice');

	Route::post('addStock', 'Doctor_Portal\Inventory\AddStockController@addStock');
});

//MESSAGING
Route::group(['prefix' => 'messaging', 'middleware' => 'auth:subscriber'], function () {
	Route::get('compose_mail', 'Messaging\ComposeMailController@compose_mail');
	Route::get('mail_inbox', 'Messaging\MailInboxController@mail_inbox');
	Route::get('sent_mail', 'Messaging\SentMailController@sent_mail');
	Route::get('mail_content', 'Messaging\MailContentController@mail_content');
	Route::get('sentItems_content', 'Messaging\SentItemContentController@sentItems_content');
	Route::get('reply_subscriber_email', 'Messaging\ReplyRecipientController@reply_subscriber_email');
});

//REPORTS
Route::group(['prefix' => 'reports', 'middleware' => 'auth:subscriber'], function () {
	Route::get('patients_report', 'Doctor_Portal\ManageReport\PatientReportController@patients_report');
	Route::get('medicine_report', 'Doctor_Portal\ManageReport\MedicineReportController@medicine_report');
	Route::get('financial_statement', 'Doctor_Portal\ManageReport\FinancialStatementReportController@financial_statement');
});

//ACCOUNTS
Route::group(['prefix' => 'accounts', 'middleware' => 'auth:subscriber'], function () {
	Route::get('accounts', 'Doctor_Portal\ManageAccounts\AccountController@accounts');
	Route::post('add_account/store', 'Doctor_Portal\ManageAccounts\AccountController@store');
	Route::put('sec_account/update', 'Doctor_Portal\ManageAccounts\AccountController@update');
	Route::delete('accounts/destroy', 'Doctor_Portal\ManageAccounts\AccountController@destroy');
});

Route::get('/doctor_profile_copy', function () {
	return view('doctor_portal.profile.doctor_profile_copy');
});

// ----------------------------------- City Admin Portal Routes ---------------------------------------- //

Route::get('/admin', function () {
	return view('cityadmin.login2');
});

Route::get('/admin/dashboard', function () {
	return view('cityadmin.dash');
});

Route::get('/admin/reports', function () {
	return view('cityadmin.reports');
});

Route::get('/admin/analytics', function () {
	return view('cityadmin.stats');
});


Route::get('/diagnos', function () {
	$diagnos = DB::table('patient')
		->join('consultation', 'patient.patient_id', '=', 'consultation.patient_id')
		->join('diagnosis', 'consultation.consultation_id', '=', 'diagnosis.diag_id')
		->select('patient.gender', 'patient.birth_date', 'patient.address1', 'diagnosis.diagnos as diagnos',)
		->get();

	return response()->json($diagnos);
});
// Route::post('/add-customer', 'CustomerController@addCustomer');

// Route::post('/patient', 'PatientController@addPatient');

// Route::get('/cityadmin/patient', function () {
// 	return view('cityadmin.patient');
// });


// Route::view('patient', 'cityadmin.patient');
// Route::post('submit', 'test@save');


// ----------------------------------- Secretary Portal Routes ---------------------------------------- //

Route::get('/secHome/{subscriber_id}', 'Secretary_Portal\HomeController@home')->middleware('auth:secretary');

Route::group(['prefix' => 'sec_session'], function () {
	Route::get('login', 'Secretary_Portal\Auth\LoginController@showLoginForm');
	Route::post('login/store', 'Secretary_Portal\Auth\LoginController@store');
	Route::get('logout', 'Secretary_Portal\Auth\LoginController@logout');
});

//PROFILE
Route::group(['prefix' => 'sec_profile', 'middleware' => 'auth:secretary'], function () {
	Route::get('patient_clinic', 'Secretary_Portal\Profile\PatientProfileController@patient_clinic');
	Route::get('patient_profile/{clinic_id}', 'Secretary_Portal\Profile\PatientProfileController@patient_profile');
	Route::post('update_patient_basic_info', 'Secretary_Portal\Profile\PatientProfileController@update_patient_basic_info');
	// Route::post('update_patient_basic_info_contextual', 'Secretary_Portal\Profile\PatientProfileController@update_patient_basic_info_contextual');
	Route::post('update_guardian_info', 'Secretary_Portal\Profile\PatientProfileController@update_guardian_info');

	Route::get('patient_profile_history/{patient_id}', 'Secretary_Portal\Profile\PatientProfileHistoryController@patient_profile_history');
	Route::get(
		'patient_profile_billing_history/{patient_id}',
		'Secretary_Portal\Profile\PatientProfileBillingHistoryController@patient_profile_billing_history'
	);
	// Route::get('patient_profile_schedule', 'Secretary_Portal\Profile\PatientProfileScheduleController@patient_profile_schedule');
	Route::get('patient_profile_certificate/{patient_id}/{clinic_id}', 'Secretary_Portal\Profile\PatientProfileCertificateController@patient_profile_certificate');

	Route::get('clinic_medicines', 'Secretary_Portal\Profile\PatientProfileMedicineController@clinic_medicines');
	Route::get('patient_profile_medicine/{clinic_id}', 'Secretary_Portal\Profile\PatientProfileMedicineController@patient_profile_medicine');
	Route::post('med_info/store', 'Secretary_Portal\Profile\PatientProfileMedicineController@store');
	Route::put('med_info/update', 'Secretary_Portal\Profile\PatientProfileMedicineController@update');
});

//QUEUE
Route::group(['prefix' => 'sec_queue', 'middleware' => 'auth:secretary'], function () {
	Route::get('clinic_table', 'Secretary_Portal\Queue\QueueController@clinic_table');
	Route::get('queue_patient/{clinic_id}', 'Secretary_Portal\Queue\QueueController@queue_patient');

	Route::get('queue_profile', 'Secretary_Portal\Queue\QueueController@queue_profile');
	Route::post('queue_profile', 'Secretary_Portal\Queue\QueueController@queue_update');
	Route::post('addQueue', 'Secretary_Portal\Queue\QueueController@add_queue');
	Route::post('addConsultation', 'Secretary_Portal\Queue\QueueController@consultation');
	Route::get('add_new_queue/{clinic_id}/{patient_id}/{fname}/{lname}', 'Secretary_Portal\Queue\QueueController@add_new_queue');
	Route::get('add_new_queue_2nd/{clinic_id}/{patient_id}/{fname}/{lname}', 'Secretary_Portal\Queue\QueueController@add_new_queue_2nd');
	Route::get('add_new_queue_olbook/{clinic_id}/{book_online_id}/{book_fname}/{book_lname}', 'Secretary_Portal\Queue\QueueController@add_new_queue_olbook');
	Route::get('add_new_queue_2nd_olbook/{clinic_id}/{book_online_id}/{book_fname}/{book_lname}', 'Secretary_Portal\Queue\QueueController@add_new_queue_2nd_olbook');
	Route::get('cons_finish/ref={clinic_id}/patient_id={patient_id}', 'Secretary_Portal\Queue\QueueController@cons_finish');
});

//SCHEDULE
Route::group(['prefix' => 'sec_schedule', 'middleware' => 'auth:secretary'], function () {
	// Route::get('schedule_patient_all_clinic', 'Secretary_Portal\Schedule\ScheduleAllClinicController@schedule_patient_all_clinic');
	Route::get('schedule_patient_in_clinic', 'Secretary_Portal\Schedule\ScheduleInClinicController@schedule_patient_in_clinic');
	Route::get('schedule_clinic_table', 'Secretary_Portal\Schedule\ScheduleAllClinicController@schedule_clinic_table');
});

Route::group(['prefix' => 'sec_booking', 'middleware' => 'auth:secretary'], function () {
	Route::get('booking_other_clinic', 'Secretary_Portal\Booking\BookingOtherClinicController@booking_other_clinic');
	Route::get('booking_clinic_table', 'Secretary_Portal\Booking\BookingInClinicController@booking_in_clinic');
	Route::post('booking_patient', 'Secretary_Portal\Booking\BookingInClinicController@booking_patient');
});

//INVENTORY
Route::group(['prefix' => 'sec_inventory', 'middleware' => 'auth:secretary'], function () {
	Route::get('filter_clinic', 'Secretary_Portal\Inventory\FilterClinicController@filter_clinic');
	Route::get('item/{clinic_id}', 'Secretary_Portal\Inventory\ItemController@Item');

	Route::get('purchase_order/{clinic_id}', 'Secretary_Portal\Inventory\PurchaseOrderController@purchase_order');
	Route::post('print_purchase_order/{clinic_id}', 'Secretary_Portal\Inventory\PurchaseOrderController@print_purchase_order');

	Route::get('invoice/{clinic_id}', 'Secretary_Portal\Inventory\InvoiceController@invoice');

	Route::post('addStock', 'Secretary_Portal\Inventory\AddStockController@addStock');
});

//REPORTS
Route::group(['prefix' => 'sec_reports', 'middleware' => 'auth:secretary'], function () {
	Route::get('patients_report', 'Secretary_Portal\ManageReport\PatientReportController@patients_report');
	Route::get('medicine_report', 'Secretary_Portal\ManageReport\MedicineReportController@medicine_report');
	Route::get('financial_statement', 'Secretary_Portal\ManageReport\FinancialStatementReportController@financial_statement');
	Route::get('medical-data', 'Secretary_Portal\ManageReport\MedicalDataController@show');

	Route::get('medical-data-index', 'Secretary_Portal\ManageReport\MedicalDataController@index');
	Route::get('medical-data-diagnosis', 'Secretary_Portal\ManageReport\MedicalDataController@getDiagnosis');
	Route::get('medical-data-locations', 'Secretary_Portal\ManageReport\MedicalDataController@getLocation');
});

// Route::get('/admin/patient', [PatientController::class, 'index'])->name('patient.index');

Route::get('/admin/patients', 'PatientController@index')->name('patient.index');

Route::resource('patients', 'PatientController');
