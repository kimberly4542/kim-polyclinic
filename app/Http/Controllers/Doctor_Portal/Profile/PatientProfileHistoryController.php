<?php

namespace App\Http\Controllers\Doctor_Portal\Profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Doctor_Portal\consultation;
use App\Models\Doctor_Portal\medications;

class PatientProfileHistoryController extends Controller
{
	
	public function patient_profile_history ($patient_id)
	{
		$consultationModel= new consultation;
		$medicationModel= new medications;
		$consultationQuery = consultation::where('patient_id', $patient_id)->get();
		$consultation_id = '';
		foreach ($consultationQuery as $consultation) {
			 $consultation_id = $consultation->consultation_id;
		}
		return view ('doctor_portal.profile.patient_profile_history', compact('consultationModel', 'medicationModel', 'consultationQuery', 'consultation_id'));  
	}

   
	public function create()
	{
		//
	}

   
	public function store(Request $request)
	{
		//
	}

   
	public function show($id)
	{
		//
	}

   
	public function edit($id)
	{
		//
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
