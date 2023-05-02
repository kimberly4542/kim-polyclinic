<?php

namespace App\Http\Controllers\Secretary_Portal\ManageReport;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MedicalDataController extends Controller
{
    public function show()
    {
		 return view ('secretary_portal.reports.medical_data');
         
    }

    public function index(Request $request)
    {
        $results = \DB::table('patient')
            ->select('patient.*','diagnosis.*')         
            ->join('consultation','consultation.patient_id','=','patient.patient_id')
            ->join('diagnosis', 'diagnosis.consultation_id','=','consultation.consultation_id');

        if(strlen($request->diagnosis) > 0) {
             $results->where('diagnosis.diagnos', $request->diagnosis);   
        }

        if(strlen($request->age) > 0) {

        }

        if(strlen($request->address) > 0) {
            $results->where('patient.address1', $request->address);
        }

        if(strlen($request->gender) > 0) {
            $results->where('patient.gender', $request->gender);
        }
        $results->whereNotNull('diagnos');
        return $results->paginate(10);
    

    }
    public function getDiagnosis() {
        return \DB::table('diagnosis')
            ->select('diagnos')
            ->whereNotNull('diagnos')
            ->groupBy('diagnos')
            ->get();
    }
    public function getLocation() {
        return \DB::table('patient')
            ->select('address1')
            ->whereNotNull('address1')
            ->groupBy('address1')
            ->get();
    }
    

    
}
