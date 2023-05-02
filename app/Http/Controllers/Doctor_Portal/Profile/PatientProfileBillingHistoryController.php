<?php

namespace App\Http\Controllers\Doctor_Portal\Profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Doctor_Portal\Patient;
use App\Models\Doctor_Portal\consultation;
use App\Models\Doctor_Portal\billings;

class PatientProfileBillingHistoryController extends Controller
{
   
	public function patient_profile_billing_history ($patient_id)
	{
		$consultationModel = new consultation; //for model access
		$consultationQuery = consultation::where('patient_id', $patient_id)->get(); //for loop
		return view ('doctor_portal.profile.patient_profile_billing_history', compact('consultationModel', 'consultationQuery')); 
	}

}
