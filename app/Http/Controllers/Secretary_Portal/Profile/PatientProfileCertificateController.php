<?php

namespace App\Http\Controllers\Secretary_Portal\Profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Doctor_Portal\Patient;
use App\Models\Doctor_Portal\Subscribers;
use App\Models\Doctor_Portal\consultation;
use App\Models\Doctor_Portal\medications;
use App\Models\Doctor_Portal\Clinic;
use App\Models\Doctor_Portal\SecondaryUser;
use Illuminate\Support\Facades\Auth;

class PatientProfileCertificateController extends Controller
{
    public function patient_profile_certificate ($patient_id, $clinic_id)
	{
		$secretary_id = Auth::id();
		$secondaryUserQuery = SecondaryUser::find($secretary_id);
		$subscriber_id = $secondaryUserQuery->subscriber_id;

		$subscriberQuery = Subscribers::find($subscriber_id);
		$clinicQuery = Clinic::find($clinic_id);
		$patientQuery = Patient::find($patient_id);

		$consultationModel = new consultation;
        $medicationModel = new medications;
        $consultationQuery = consultation::where('patient_id', $patient_id)->get();
        $consultation_id = '';
        foreach ($consultationQuery as $consultation) {
             $consultation_id = $consultation->consultation_id;
        }
		return view ('secretary_portal.profile.patient_profile_certificate', compact('subscriberQuery', 'clinicQuery', 'consultationModel', 'medicationModel', 'consultationQuery', 'patientQuery', 'consultation_id'));
	}
}
