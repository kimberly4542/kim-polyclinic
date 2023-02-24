<?php

namespace App\Http\Controllers\Doctor_Portal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin_Portal\Subscribers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\Admin_Portal\SubscAccessibility;
use App\Models\Admin_Portal\SubscriberStatus;
use Carbon\Carbon;

class HomeController extends Controller
{

	public function __construct() 
	{
		$this->middleware('auth');
	}

	public function home () {
		$subscriberQuery = new Subscribers;
		$subscriber_id = Auth::id();

		$expiry;
		$subsQuery = SubscAccessibility::where('subscriber_id', $subscriber_id)->with(['getDuration'])->get();
		foreach ($subsQuery as $subscriber) {
			$expiry = ($subscriber->getDuration->date_to_datetime);
		}
		if(Carbon::parse($expiry)->lessThanOrEqualTo(Carbon::now())) {
			$subscriberStatusModel = SubscriberStatus::where('subscriber_id', $subscriber_id)->get();
		
			foreach ($subscriberStatusModel as $subscriberStatus ) {
				$subscriberStatus->status = 'Expired';
				$subscriberStatus->save();
			}
			return back()->withInput()->with('message', 'User Expired');
		}
		else {
			$mainModules = $subscriberQuery->getModulesSelected($subscriber_id);
			$subModules1 = $subscriberQuery->getSub1Module($subscriber_id);
			$subModules2 = $subscriberQuery->getSub2Module($subscriber_id);
			$subModules3 = $subscriberQuery->getSub3Module($subscriber_id);

			foreach ($mainModules as $main) {
				if ($main->module_name == 'profile') {
					Auth::guard('profile')->loginUsingId($subscriber_id);
					foreach ($subModules1 as $sub1) {
						if ($sub1->sub1_name == 'doctors') {
							Auth::guard('profile_doctors')->loginUsingId($subscriber_id);

							foreach ($subModules3 as $sub3) {
								if ($sub3->unique_identifier == 'profile_doctors_information_basicTable') {
									Auth::guard('profile_doctors_information_basicTable')->loginUsingId($subscriber_id);
								}
								elseif ($sub3->unique_identifier == 'profile_doctors_information_basicTableModal') {
									Auth::guard('profile_doctors_information_basicTableModal')->loginUsingId($subscriber_id);
								}
								elseif ($sub3->unique_identifier == 'profile_doctors_information_singleImageUpload') {
									Auth::guard('profile_doctors_information_singleImageUpload')->loginUsingId($subscriber_id);
								}
							}
						}
						elseif ($sub1->sub1_name == 'clinic') {
							Auth::guard('profile_clinic')->loginUsingId($subscriber_id);

							foreach ($subModules3 as $sub3) {
								if ($sub3->unique_identifier == 'profile_clinic_information_basicTable') {
									Auth::guard('profile_clinic_information_basicTable')->loginUsingId($subscriber_id);
								}
								elseif ($sub3->unique_identifier == 'profile_clinic_information_modalImageUpload') {
									Auth::guard('profile_clinic_information_modalImageUpload')->loginUsingId($subscriber_id);
								}
							}
						}
						elseif ($sub1->sub1_name == 'patient') {
							Auth::guard('profile_patient')->loginUsingId($subscriber_id);

							foreach ($subModules3 as $sub3) {
								if ($sub3->unique_identifier == 'profile_patient_patientList_basicTable') {
									Auth::guard('profile_patient_patientList_basicTable')->loginUsingId($subscriber_id);
								}
								elseif ($sub3->unique_identifier == 'profile_patient_patientList_contextual') {
									Auth::guard('profile_patient_patientList_contextual')->loginUsingId($subscriber_id);
								}
								elseif ($sub3->unique_identifier == 'profile_patient_medicalHistory_basicTable') {
									Auth::guard('profile_patient_medicalHistory_basicTable')->loginUsingId($subscriber_id);
								}
								elseif ($sub3->unique_identifier == 'profile_patient_medicalHistory_hoverTable') {
									Auth::guard('profile_patient_medicalHistory_hoverTable')->loginUsingId($subscriber_id);
								}
								elseif ($sub3->unique_identifier == 'profile_patient_bills_basicTable') {
									Auth::guard('profile_patient_bills_basicTable')->loginUsingId($subscriber_id);
								}
								elseif ($sub3->unique_identifier == 'profile_patient_bills_hoverTable') {
									Auth::guard('profile_patient_bills_hoverTable')->loginUsingId($subscriber_id);
								}
							}
						}
						elseif ($sub1->sub1_name == 'medicine') {
							Auth::guard('profile_medicine')->loginUsingId($subscriber_id);

							foreach ($subModules3 as $sub3) {
								if ($sub3->unique_identifier == 'profile_medicine_basicTableModal') {
									Auth::guard('profile_medicine_basicTableModal')->loginUsingId($subscriber_id);
								}
								elseif ($sub3->unique_identifier == 'profile_medicine_basicTableImageUpload') {
									Auth::guard('profile_medicine_basicTableImageUpload')->loginUsingId($subscriber_id);
								}
							}
						}
					}
				}
				elseif  ($main->module_name == 'queuing') {
					Auth::guard('queuing')->loginUsingId($subscriber_id);
					foreach ($subModules2 as $sub2) {
						if ($sub2->unique_identifier == 'queue_1st_priority') {
							Auth::guard('queue_1st_priority')->loginUsingId($subscriber_id);

							foreach ($subModules3 as $sub3) {
								if ($sub3->unique_identifier == 'queue_1st_priority_basicTable') {
									Auth::guard('queue_1st_priority_basicTable')->loginUsingId($subscriber_id);
								}
								elseif ($sub3->unique_identifier == 'queue_1st_priority_dragDrop') {
									Auth::guard('queue_1st_priority_dragDrop')->loginUsingId($subscriber_id);
								}
							}
						}
						elseif ($sub2->unique_identifier == 'queue_2nd_priority') {
							Auth::guard('queue_2nd_priority')->loginUsingId($subscriber_id);

							foreach ($subModules3 as $sub3) {
								if ($sub3->unique_identifier == 'queue_2nd_priority_basicTable') {
									Auth::guard('queue_2nd_priority_basicTable')->loginUsingId($subscriber_id);
								}
								elseif ($sub3->unique_identifier == 'queue_2nd_priority_dragDrop') {
									Auth::guard('queue_2nd_priority_dragDrop')->loginUsingId($subscriber_id);
								}
							}
						}
					}
				}
				elseif  ($main->module_name == 'schedule') {
					Auth::guard('schedule')->loginUsingId($subscriber_id);
					foreach ($subModules2 as $sub2) {
						if ($sub2->unique_identifier == 'schedule_patient') {
							Auth::guard('schedule_patient')->loginUsingId($subscriber_id);
							foreach ($subModules3 as $sub3) {
								if ($sub3->unique_identifier == 'schedule_patient_basicTable') {
									Auth::guard('schedule_patient_basicTable')->loginUsingId($subscriber_id);
								}
								elseif ($sub3->unique_identifier == 'schedule_patient_hoverTable') {
									Auth::guard('schedule_patient_hoverTable')->loginUsingId($subscriber_id);
								} 
							}
						}
						elseif ($sub2->unique_identifier == 'schedule_clinic') {
							Auth::guard('schedule_clinic')->loginUsingId($subscriber_id);
							foreach ($subModules3 as $sub3) {
								if ($sub3->unique_identifier == 'schedule_clinic_basicTable') {
									Auth::guard('schedule_clinic_basicTable')->loginUsingId($subscriber_id);
								}
								elseif ($sub3->unique_identifier == 'schedule_clinic_hoverTable') {
									Auth::guard('schedule_clinic_hoverTable')->loginUsingId($subscriber_id);
								} 
							}
						}
					}
				}
				elseif  ($main->module_name == 'booking') {
					Auth::guard('booking')->loginUsingId($subscriber_id);
					foreach ($subModules3 as $sub3) {
						if ($sub3->unique_identifier == 'booking_hoverTable') {
							Auth::guard('booking_hoverTable')->loginUsingId($subscriber_id);
						}
						elseif ($sub3->unique_identifier == 'booking_basicTable') {
							Auth::guard('booking_basicTable')->loginUsingId($subscriber_id);
						} 
					}
				}
				elseif  ($main->module_name == 'billing') {
					Auth::guard('billing')->loginUsingId($subscriber_id);
				}
				elseif  ($main->module_name == 'inventory') {
					Auth::guard('inventory')->loginUsingId($subscriber_id);
				}
				elseif  ($main->module_name == 'manage report') {
					Auth::guard('manageReport')->loginUsingId($subscriber_id);
					foreach ($subModules1 as $sub1) {
						if ($sub1->sub1_name == 'patients') {
							Auth::guard('manageReport_patient')->loginUsingId($subscriber_id);

							foreach ($subModules3 as $sub3) {
								if ($sub3->unique_identifier == 'manageReport_patient_basicTable') {
									Auth::guard('manageReport_patient_basicTable')->loginUsingId($subscriber_id);
								}
								elseif ($sub3->unique_identifier == 'manageReport_patient_dataTable') {
									Auth::guard('manageReport_patient_dataTable')->loginUsingId($subscriber_id);
								}
							}
						}
						elseif ($sub1->sub1_name == 'inventory') {
							Auth::guard('manageReport_inventory')->loginUsingId($subscriber_id);
							foreach ($subModules3 as $sub3) {
								if ($sub3->unique_identifier == 'manageReport_inventory_basicTable') {
									Auth::guard('manageReport_inventory_basicTable')->loginUsingId($subscriber_id);
								}
								elseif ($sub3->unique_identifier == 'manageReport_inventory_dataTable') {
									Auth::guard('manageReport_inventory_dataTable')->loginUsingId($subscriber_id);
								}
							} 
						}
						elseif ($sub1->sub1_name == 'financial') {
							Auth::guard('manageReport_financial')->loginUsingId($subscriber_id);
							foreach ($subModules3 as $sub3) {
								if ($sub3->unique_identifier == 'manageReport_financial_basicTable') {
									Auth::guard('manageReport_financial_basicTable')->loginUsingId($subscriber_id);
								}
								elseif ($sub3->unique_identifier == 'manageReport_financial_dataTable') {
									Auth::guard('manageReport_financial_dataTable')->loginUsingId($subscriber_id);
								}
							} 
						}
					}
				}
				elseif  ($main->module_name == 'settings') {
					Auth::guard('settings')->loginUsingId($subscriber_id);
					foreach ($subModules3 as $sub3) {
						if ($sub3->unique_identifier == 'settings_basicTable') {
							Auth::guard('settings_basicTable')->loginUsingId($subscriber_id);
						}
						elseif ($sub3->unique_identifier == 'settings_dataTable') {
							Auth::guard('settings_dataTable')->loginUsingId($subscriber_id);
						}
					} 
				}
			}
		}

		return view ('doctor_portal.home.index');
	}
}