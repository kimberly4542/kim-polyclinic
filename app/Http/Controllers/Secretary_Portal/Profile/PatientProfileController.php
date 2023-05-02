<?php

namespace App\Http\Controllers\Secretary_Portal\Profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Doctor_Portal\Patient;
use Illuminate\Support\Facades\Auth;
use App\Models\Doctor_Portal\Clinic;
use App\Models\Doctor_Portal\GuardianInformation;
use App\Models\Doctor_Portal\SecondaryUser;
use Illuminate\Support\Facades\DB;
use Storage;
use Image;

class PatientProfileController extends Controller
{
   public function patient_clinic () {
		$secretary_id = Auth::id();
		$secondaryUserQuery = SecondaryUser::find($secretary_id);
		$subscriber_id = $secondaryUserQuery->subscriber_id;
		$clinicQuery = Clinic::where('subscriber_id', $subscriber_id)->get();
		
		return view ('secretary_portal.profile.patient_clinic', compact('clinicQuery'));
	}

	public function patient_profile($clinic_id)
	{
		$query = Patient::where('clinic_id', $clinic_id)->get();
		$guardianQuery = new GuardianInformation;
		
		return view ('secretary_portal.profile.patient_profile', compact('query', 'clinic_id', 'guardianQuery'));
	}

	public function update_patient_basic_info (Request $request) {
		$patient_id = $request->input('patient_id');
		$clinic_id = $request->input('clinic_id');
		$userData = $request->except(['_token', 'clinic_id', 'file']);
		if ($request->file('file')) {
			$filename = $request->file->getClientOriginalName();
			$image_thumb = Image::make($request->file('file'))->resize(250,250)->stream();
			$uploaded = Storage::disk('myDisk')->put($filename, $image_thumb->__toString());
			$path = $request->file->storeAs('public', $filename);
		}
		$patientQuery = Patient::find($patient_id);
		if ($request->file('file')) {
			$patientQuery->image = $path;
			$patientQuery->save();
		}
		Patient::findOrFail($patient_id)->fill($userData)->save();

		return redirect('sec_profile/patient_profile/'.$clinic_id)->with('successMessage', 'successfully updated patient basic information');
	} 

	public function update_guardian_info (Request $request) {
		$guardianData = $request->except(['_token', 'clinic_id', 'patient_id']);
		$clinic_id =  $request->input('clinic_id');
		$guardian_no =  $request->input('guardian_no');
		$guardianQuery = GuardianInformation::find($guardian_no);
		$guardianQuery->fill($guardianData)->save();
		// GuardianInformation::findOrFail($lastInserted)->first()->fill($guardianData)->save();
		return redirect('sec_profile/patient_profile/'.$clinic_id)->with('successMessage', 'successfully added guardian information');
	}
}
