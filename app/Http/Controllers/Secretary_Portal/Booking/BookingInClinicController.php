<?php

namespace App\Http\Controllers\Secretary_Portal\Booking;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Doctor_Portal\patient_schedule;
use App\Models\Doctor_Portal\Clinic;
use App\Models\Doctor_Portal\clinic_schedule;
use App\Models\Doctor_Portal\patient;
use Illuminate\Support\Facades\Auth;
use App\Models\Doctor_Portal\book_online_patient;
use App\Models\Doctor_Portal\GuardianInformation;
use App\Models\Doctor_Portal\SecondaryUser;
use DB;

class BookingInClinicController extends Controller
{
   
	public function booking_in_clinic()
	{
		$secretary_id = Auth::id();
		$secondaryUserQuery = SecondaryUser::find($secretary_id);
		$subscriber_id = $secondaryUserQuery->subscriber_id;

		$clinicQuery1 = Clinic::where('subscriber_id', $subscriber_id)->get();
		$clinicQuery = DB::select('SELECT clinic.*, clinic_schedule.*, patient_schedule.*, patient.*
									FROM clinic
									INNER JOIN clinic_schedule
									ON clinic_schedule.clinic_id = clinic.clinic_id
									INNER JOIN patient_schedule
									ON patient_schedule.clinic_id = clinic.clinic_id
									INNER JOIN patient
									ON patient.patient_id = patient_schedule.patient_id
									WHERE patient_schedule.clinic_id = clinic.clinic_id
									AND clinic.subscriber_id = '.$subscriber_id);
		$clinicQuery2 = DB::table('clinic_schedule')
							->join('clinic', 'clinic_schedule.clinic_id', '=', 'clinic.clinic_id')
							->where('clinic.subscriber_id', '=', $subscriber_id)
							->get();

		$patient_sched = DB::table('patient_schedule')
							->join('patient', 'patient_schedule.patient_id', '=', 'patient.patient_id')
							->join('clinic', 'patient_schedule.clinic_id', '=', 'clinic.clinic_id')
							->where('clinic.subscriber_id', '=', $subscriber_id)
							->get(); 
		$clinic_id = '';
		foreach ($clinicQuery1 as $clinic) {
			$clinic_id = $clinic->clinic_id;
		}
		$clinicQuery4 = patient_schedule::where('clinic_id', $clinic_id)->get();
		// dd($patient_sched);
		// dd($clinicQuery4);

		return view ('secretary_portal.booking.booking_clinic_table', compact('clinicQuery','clinicQuery1', 'patient_sched', 'clinicQuery2', 'clinicQuery4'));
	}

	public function booking_patient()
	{
		$doctors = request('doctors');
		$clinic_id = request('clinicSched');
		$date = request('date');
		$status = 3;
		$clinic = DB::table("clinic")
						->join("subscribers", "clinic.subscriber_id", "=", "subscribers.subscriber_id")
						->select("clinic.clinic_id")
						->where("subscribers.fname", "=", $doctors)
						->get();

		// foreach ($clinic as $data) {

			patient::create([
				'fname' => request('name'),
				'email' => request('email'),
				'address' => request('address'),
				'clinic_id' => request('clinicSched'),
				'message' => request('message'),
				'status' => $status,
				'lname' => request('lname')
			]);

			// $get_new_patient = DB::select('SELECT patient.patient_id, patient.clinic_id
			//                                 FROM patient
			//                                 INNER JOIN clinic
			//                                 ON clinic.clinic_id = patient.clinic_id
			//                                 WHERE clinic.subscriber_id = ".$subscriber_id." 
			//                                 ORDER BY patient_id DESC LIMIT 1');
			// $get_new_patient_clinic_id = DB::select('SELECT patient.clinic_id
			//                                          FROM patient 
			//                                         INNER JOIN clinic
			//                                         ON clinic.clinic_id = patient.clinic_id
			//                                         WHERE clinic.subscriber_id = ".$subscriber_id"
			//                                         ORDER BY clinic_id DESC LIMIT 1');
			$lastInserted = DB::getPdo()->lastInsertId();
			$guardianModel = new GuardianInformation;
			$guardianModel->patient_id = $lastInserted;
			$guardianModel->save();

			patient_schedule::create([
				'patient_id' => $lastInserted,
				'clinic_id' => $clinic_id,
				'sched_date' => $date
			]);
			// foreach ($get_new_patient_clinic_id as $clinic_id) {
			//     # code...
			// }
			


		// }
			return redirect('/sec_booking/booking_clinic_table');
	}

}
