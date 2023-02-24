<?php

namespace App\Http\Controllers\Secretary_Portal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin_Portal\Subscribers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function __construct() 
	{
		$this->middleware('auth');
	}

	public function home($subscriber_id) {
		$subscriberQuery = new Subscribers;
		$secretary_id = Auth::id();
		
		$mainModules = $subscriberQuery->getModulesSelected($subscriber_id);
		$subModules1 = $subscriberQuery->getSub1Module($subscriber_id);
		$subModules2 = $subscriberQuery->getSub2Module($subscriber_id);
		$subModules3 = $subscriberQuery->getSub3Module($subscriber_id);

		foreach ($mainModules as $main) {
			if ($main->module_name == 'profile') {
				Auth::guard('sec_profile')->loginUsingId($secretary_id);
				foreach ($subModules1 as $sub1) {
					if ($sub1->sub1_name == 'doctors') {
						Auth::guard('sec_profile_doctors')->loginUsingId($secretary_id);

						foreach ($subModules3 as $sub3) {
							if ($sub3->unique_identifier == 'profile_doctors_information_basicTable') {
								Auth::guard('sec_profile_doctors_information_basicTable')->loginUsingId($secretary_id);
							}
							elseif ($sub3->unique_identifier == 'profile_doctors_information_basicTableModal') {
								Auth::guard('sec_profile_doctors_information_basicTableModal')->loginUsingId($secretary_id);
							}
							elseif ($sub3->unique_identifier == 'profile_doctors_information_singleImageUpload') {
								Auth::guard('sec_profile_doctors_information_singleImageUpload')->loginUsingId($secretary_id);
							}
						}
					}
					elseif ($sub1->sub1_name == 'clinic') {
						Auth::guard('sec_profile_clinic')->loginUsingId($secretary_id);

						foreach ($subModules3 as $sub3) {
							if ($sub3->unique_identifier == 'profile_clinic_information_basicTable') {
								Auth::guard('sec_profile_clinic_information_basicTable')->loginUsingId($secretary_id);
							}
							elseif ($sub3->unique_identifier == 'profile_clinic_information_modalImageUpload') {
								Auth::guard('sec_profile_clinic_information_modalImageUpload')->loginUsingId($secretary_id);
							}
						}
					}
					elseif ($sub1->sub1_name == 'patient') {
						Auth::guard('sec_profile_patient')->loginUsingId($secretary_id);

						foreach ($subModules3 as $sub3) {
							if ($sub3->unique_identifier == 'profile_patient_patientList_basicTable') {
								Auth::guard('sec_profile_patient_patientList_basicTable')->loginUsingId($secretary_id);
							}
							elseif ($sub3->unique_identifier == 'profile_patient_patientList_contextual') {
								Auth::guard('sec_profile_patient_patientList_contextual')->loginUsingId($secretary_id);
							}
							elseif ($sub3->unique_identifier == 'profile_patient_medicalHistory_basicTable') {
								Auth::guard('sec_profile_patient_medicalHistory_basicTable')->loginUsingId($secretary_id);
							}
							elseif ($sub3->unique_identifier == 'profile_patient_medicalHistory_hoverTable') {
								Auth::guard('sec_profile_patient_medicalHistory_hoverTable')->loginUsingId($secretary_id);
							}
							elseif ($sub3->unique_identifier == 'profile_patient_bills_basicTable') {
								Auth::guard('sec_profile_patient_bills_basicTable')->loginUsingId($secretary_id);
							}
							elseif ($sub3->unique_identifier == 'profile_patient_bills_hoverTable') {
								Auth::guard('sec_profile_patient_bills_hoverTable')->loginUsingId($secretary_id);
							}
						}
					}
					elseif ($sub1->sub1_name == 'medicine') {
						Auth::guard('sec_profile_medicine')->loginUsingId($secretary_id);

						foreach ($subModules3 as $sub3) {
							if ($sub3->unique_identifier == 'profile_medicine_basicTableModal') {
								Auth::guard('sec_profile_medicine_basicTableModal')->loginUsingId($secretary_id);
							}
							elseif ($sub3->unique_identifier == 'profile_medicine_basicTableImageUpload') {
								Auth::guard('sec_profile_medicine_basicTableImageUpload')->loginUsingId($secretary_id);
							}
						}
					}
				}
			}
			elseif  ($main->module_name == 'queuing') {
				Auth::guard('sec_queuing')->loginUsingId($secretary_id);
				foreach ($subModules2 as $sub2) {
					if ($sub2->unique_identifier == 'queue_1st_priority') {
						Auth::guard('sec_queue_1st_priority')->loginUsingId($secretary_id);

						foreach ($subModules3 as $sub3) {
							if ($sub3->unique_identifier == 'queue_1st_priority_basicTable') {
								Auth::guard('sec_queue_1st_priority_basicTable')->loginUsingId($secretary_id);
							}
							elseif ($sub3->unique_identifier == 'queue_1st_priority_dragDrop') {
								Auth::guard('sec_queue_1st_priority_dragDrop')->loginUsingId($secretary_id);
							}
						}
					}
					elseif ($sub2->unique_identifier == 'queue_2nd_priority') {
						Auth::guard('sec_queue_2nd_priority')->loginUsingId($secretary_id);

						foreach ($subModules3 as $sub3) {
							if ($sub3->unique_identifier == 'queue_2nd_priority_basicTable') {
								Auth::guard('sec_queue_2nd_priority_basicTable')->loginUsingId($secretary_id);
							}
							elseif ($sub3->unique_identifier == 'queue_2nd_priority_dragDrop') {
								Auth::guard('sec_queue_2nd_priority_dragDrop')->loginUsingId($secretary_id);
							}
						}
					}
				}
			}
			elseif  ($main->module_name == 'schedule') {
				Auth::guard('sec_schedule')->loginUsingId($subscriber_id);
				foreach ($subModules2 as $sub2) {
					if ($sub2->unique_identifier == 'schedule_patient') {
						Auth::guard('sec_schedule_patient')->loginUsingId($subscriber_id);
						foreach ($subModules3 as $sub3) {
							if ($sub3->unique_identifier == 'schedule_patient_basicTable') {
								Auth::guard('sec_schedule_patient_basicTable')->loginUsingId($subscriber_id);
							}
							elseif ($sub3->unique_identifier == 'schedule_patient_hoverTable') {
								Auth::guard('sec_schedule_patient_hoverTable')->loginUsingId($subscriber_id);
							} 
						}
					}
					elseif ($sub2->unique_identifier == 'schedule_clinic') {
						Auth::guard('sec_schedule_clinic')->loginUsingId($subscriber_id);
						foreach ($subModules3 as $sub3) {
							if ($sub3->unique_identifier == 'schedule_clinic_basicTable') {
								Auth::guard('sec_schedule_clinic_basicTable')->loginUsingId($subscriber_id);
							}
							elseif ($sub3->unique_identifier == 'schedule_clinic_hoverTable') {
								Auth::guard('sec_schedule_clinic_hoverTable')->loginUsingId($subscriber_id);
							} 
						}
					}
				}
			}
			elseif  ($main->module_name == 'booking') {
				Auth::guard('sec_booking')->loginUsingId($subscriber_id);
				foreach ($subModules3 as $sub3) {
					if ($sub3->unique_identifier == 'booking_hoverTable') {
						Auth::guard('sec_booking_hoverTable')->loginUsingId($subscriber_id);
					}
					elseif ($sub3->unique_identifier == 'booking_basicTable') {
						Auth::guard('sec_booking_basicTable')->loginUsingId($subscriber_id);
					} 
				}
			}
			elseif  ($main->module_name == 'billing') {
				Auth::guard('sec_billing')->loginUsingId($subscriber_id);
			}
			elseif  ($main->module_name == 'inventory') {
				Auth::guard('sec_inventory')->loginUsingId($subscriber_id);
			}
			elseif  ($main->module_name == 'manage report') {
				Auth::guard('sec_manageReport')->loginUsingId($subscriber_id);
				foreach ($subModules1 as $sub1) {
					if ($sub1->sub1_name == 'patients') {
						Auth::guard('sec_manageReport_patient')->loginUsingId($subscriber_id);

						foreach ($subModules3 as $sub3) {
							if ($sub3->unique_identifier == 'manageReport_patient_basicTable') {
								Auth::guard('sec_manageReport_patient_basicTable')->loginUsingId($subscriber_id);
							}
							elseif ($sub3->unique_identifier == 'manageReport_patient_dataTable') {
								Auth::guard('sec_manageReport_patient_dataTable')->loginUsingId($subscriber_id);
							}
						}
					}
					elseif ($sub1->sub1_name == 'inventory') {
						Auth::guard('sec_manageReport_inventory')->loginUsingId($subscriber_id);
						foreach ($subModules3 as $sub3) {
							if ($sub3->unique_identifier == 'manageReport_inventory_basicTable') {
								Auth::guard('sec_manageReport_inventory_basicTable')->loginUsingId($subscriber_id);
							}
							elseif ($sub3->unique_identifier == 'manageReport_inventory_dataTable') {
								Auth::guard('sec_manageReport_inventory_dataTable')->loginUsingId($subscriber_id);
							}
						} 
					}
					elseif ($sub1->sub1_name == 'financial') {
						Auth::guard('sec_manageReport_financial')->loginUsingId($subscriber_id);
						foreach ($subModules3 as $sub3) {
							if ($sub3->unique_identifier == 'manageReport_financial_basicTable') {
								Auth::guard('sec_manageReport_financial_basicTable')->loginUsingId($subscriber_id);
							}
							elseif ($sub3->unique_identifier == 'manageReport_financial_dataTable') {
								Auth::guard('sec_manageReport_financial_dataTable')->loginUsingId($subscriber_id);
							}
						} 
					}
				}
			}
			elseif  ($main->module_name == 'settings') {
				Auth::guard('sec_settings')->loginUsingId($subscriber_id);
				foreach ($subModules3 as $sub3) {
					if ($sub3->unique_identifier == 'settings_basicTable') {
						Auth::guard('sec_settings_basicTable')->loginUsingId($subscriber_id);
					}
					elseif ($sub3->unique_identifier == 'settings_dataTable') {
						Auth::guard('sec_settings_dataTable')->loginUsingId($subscriber_id);
					}
				} 
			}
		}
		return view ('secretary_portal.home.index');
	}
}
