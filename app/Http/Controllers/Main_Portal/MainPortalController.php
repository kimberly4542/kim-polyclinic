<?php

namespace App\Http\Controllers\Main_Portal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Main_Portal\specialization;
use App\Models\Main_Portal\subscribers;
use App\Models\Main_Portal\patient;
use App\Models\Doctor_Portal\book_online_patient;
use DB;

class MainPortalController extends Controller
{
	public function index () {

		//$get = DB::select('SELECT specialization.`name`, subscribers.fname, subscribers.lname, subscribers.subscriber_id
		// 					FROM specialization
		// 					INNER JOIN subscribers
		// 					ON subscribers.subscriber_id = specialization.subscriber_id');
		return view ('main_portal.index');

	}

	public function getSpecialization($id) {
		$doctor = DB::table("subscribers")
						->join("specialization", "subscribers.subscriber_id", "=", "specialization.subscriber_id")
						->select("subscribers.*", "specialization.name")
						->where("specialization.name", "=", $id)
						->get();

		$arr = [];
		foreach ($doctor as $data) {
			array_push($arr, $data->fname);

		}
		return json_encode($arr);
	}

	public function getSchedule($id) {

		$clinic = DB::table("clinic_schedule")
						->join("clinic", "clinic_schedule.clinic_id", "=", "clinic.clinic_id")
						->join("subscribers", "clinic.subscriber_id", "=", "subscribers.subscriber_id")
						->select("clinic.*", "clinic_schedule.*")
						->where("subscribers.fname", "=", $id)
						->get();

		// $arr = [];

		// foreach ($clinic as $data) {
		// 	array_push($arr, $data->day);
			
		// }

		return json_encode($clinic);
	}

	public function new_booked(Request $request)
	{
		$doctors = request('doctors');

		$status = 2;

		$clinic = DB::table("clinic")
						->join("subscribers", "clinic.subscriber_id", "=", "subscribers.subscriber_id")
						->select("clinic.clinic_id")
						->where("subscribers.fname", "=", $doctors)
						->get();

		// foreach ($clinic as $data) {

			book_online_patient::create([
				'book_fname' => request('name'),
				'book_email' => request('email'),
				'book_address' => request('address'),
				'book_clinic_id' => request('clinicSched'),
				'book_msg' => request('message'),
				'book_status' => $status,
				'book_lname' => request('lname')
			]);
		// }


		return redirect('/');
	}
}
