<?php

namespace App\Http\Controllers\Doctor_Portal\ManageReport;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Doctor_Portal\Specialization;
use App\Models\Doctor_Portal\Patient;
use App\Models\Doctor_Portal\Clinic;
use Illuminate\Support\Facades\Auth;
// use Charts;
// use ConsoleTVs\Charts\Facades\Charts;
// use ConsoleTVs\Charts\Charts;

class PatientReportController extends Controller
{
   
	public function patients_report()
	{
		$patientModel = new Patient;
		$subscriber_id = Auth::id();
		$listOfPatients = array();
		$clinicQuery = Clinic::where('subscriber_id', $subscriber_id)->with(['getPatient'])->get();
		$patientCount = 0;
		foreach ($clinicQuery as $clinic) {
			foreach ($clinic->getPatient as $patient ) {
				$patientCount += 1;
				array_push($listOfPatients, $patient);
			}
		}
		return view ('doctor_portal.reports.patients_report', compact('patientModel', 'listOfPatients', 'patientCount'));
	}
}
