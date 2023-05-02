<?php

namespace App\Http\Controllers\Secretary_Portal\ManageReport;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Doctor_Portal\Specialization;
use App\Models\Doctor_Portal\Patient;
use App\Models\Doctor_Portal\Clinic;
use Illuminate\Support\Facades\Auth;
use App\Models\Doctor_Portal\SecondaryUser;
// use Charts;
// use ConsoleTVs\Charts\Facades\Charts;
// use ConsoleTVs\Charts\Charts;

class PatientReportController extends Controller
{
   
	public function patients_report()
	{
		// $pat = Patient::all();
		// $query = Clinic::all();
		// $arrayy = [];
		$urology = Specialization::where('name','=','Urology')->count();
		$orthopedics = Specialization::where('name','=','Orthopedics')->count();
		$opthalmology = Specialization::where('name','=','Opthalmology')->count();
		$dentistry = Specialization::where('name','=','Dentistry')->count();
		$ob_gyn = Specialization::where('name','=','OB/GYN')->count();

		// return view ('doctor_portal.reports.patients_report', compact('query', 'pat', 'urology', 'orthopedics', 'opthalmology', 'dentistry', 'ob_gyn'));

		$patientModel = new Patient;

		$secretary_id = Auth::id();
		$secondaryUserQuery = SecondaryUser::find($secretary_id);
		$subscriber_id = $secondaryUserQuery->subscriber_id;

		$listOfPatients = array();
		$clinicQuery = Clinic::where('subscriber_id', $subscriber_id)->with(['getPatient'])->get();
		foreach ($clinicQuery as $clinic) {
			foreach ($clinic->getPatient as $patient ) {
				array_push($listOfPatients, $patient);
			}
		}

		return view ('secretary_portal.reports.patients_report', compact('patientModel', 'listOfPatients', 'urology', 'orthopedics', 'opthalmology', 'dentistry', 'ob_gyn'));
	}
}
