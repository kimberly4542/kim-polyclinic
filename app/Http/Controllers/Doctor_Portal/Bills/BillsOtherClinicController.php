<?php

namespace App\Http\Controllers\Doctor_Portal\Bills;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Doctor_Portal\Patient;
use App\Models\Doctor_Portal\Clinic;
use App\Models\Doctor_Portal\BillingInfo;

class BillsOtherClinicController extends Controller
{
   
	public function bills_other_clinic ()
	{
		$clinicName = 0;
		$patientModel = new Patient;
		$clinicDataQuery = Patient::all();

		$authenticatedUserId = Auth::id();
		$clinicQuery = Clinic::with(['getPatients'])->get();
		dd($authenticatedUserId);

		return view ('doctor_portal.bills.bills_other_clinic', compact('clinicQuery', 'clinicDataQuery', 'clinicName', 'patientModel'));
	}

	public function select_clinic ($clinic_id) 
	{   
		$authenticatedUserId = Auth::id();
		$clinicQuery = Clinic::where('subscriber_id', $authenticatedUserId)->get();

		$clinicNameQuery = Clinic::find($clinic_id);
		$clinicName = $clinicNameQuery->clinic_name;

		$patientModel = new Patient;

		$clinicDataQuery = Patient::where('clinic_id', $clinic_id)->get();

		return view ('doctor_portal.bills.bills_other_clinic', compact('clinicQuery', 'clinicName', 'clinicDataQuery', 'patientModel'));
	}


	public function specific_patient_bill ($patient_id) 
	{
		$billingInfoQuery = BillingInfo::where('patient_id', $patient_id)->get();

		return view ('doctor_portal.bills.specific_patient_bill', compact('billingInfoQuery'));
	}
   
	public function update(Request $request, $id)
	{
		//
	}

   
	public function destroy($id)
	{
		//
	}
}
