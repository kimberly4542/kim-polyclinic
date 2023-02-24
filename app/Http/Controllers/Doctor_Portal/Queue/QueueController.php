<?php

namespace App\Http\Controllers\Doctor_Portal\Queue;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Doctor_Portal\Patient;
use App\Models\Doctor_Portal\Clinic;
use App\Models\Doctor_Portal\symptoms;
use App\Models\Doctor_Portal\diagnosis;
use App\Models\Doctor_Portal\consultation;
use App\Models\Doctor_Portal\Medicine;
use App\Models\Doctor_Portal\medications;
use App\Models\Doctor_Portal\BillingInfo;
use App\Models\Doctor_Portal\StockOut;
use App\Models\Doctor_Portal\billings;
use App\Models\Doctor_Portal\patient_schedule;
use App\Models\Doctor_Portal\book_online_patient;
use App\Models\Doctor_Portal\GuardianInformation;
use DB;
use Illuminate\Support\Facades\Auth;

class QueueController extends Controller
{

	public function clinic_table () {
		$subscriber_id = Auth::id();
		$clinicQuery = Clinic::where('subscriber_id', $subscriber_id)->get();

		return view ('doctor_portal.queue.clinic_table', compact('clinicQuery'));
	}

	public function queue_patient ($clinic_id) {
		$specificSubscriber = Auth::id();
		$clinic_id_forinput = '';

		$get = Patient::orderBy('order')->where('status', '=', 1)->where('clinic_id', $clinic_id)->get();
		$get1 = Patient::orderBy('order')->where('status', '=', 2)->where('clinic_id', $clinic_id)->get();
		$get2 = book_online_patient::where('book_clinic_id', $clinic_id)->get();
		$get3 = Patient::orderBy('order')->where('status', '=', 3)->where('clinic_id', $clinic_id)->get();
		$get_med = DB::table('medicine')
						->join('clinic', 'medicine.clinic_id', '=', 'clinic.clinic_id')
						->select('medicine.*')
						->where('medicine.clinic_id', '=', $clinic_id)
						->get();
		$patient_new_sched = DB::table('patient_schedule')
								->join('patient', 'patient_schedule.patient_id', '=', 'patient.patient_id')
								->orderBy('patient_schedule.sched_date', 'DESC')
								->get();
		return view ('doctor_portal.queue.queue_profile',compact('get','get1', 'clinic_id','get_med','patient_new_sched', 'get2', 'get3'));
	}
	
	// public function queue_profile()
	// {
	//  $specificSubscriber = Auth::id();
	//  $clinic_id = Clinic::where('subscriber_id', '=', $specificSubscriber)->get();

	//  foreach ($clinic_id as $data) {
	//      $id = $data->clinic_id;
	//      $get = Patient::orderBy('order')->where('status', 1)->where('clinic_id', $id)->get();
	//      $get1 = Patient::orderBy('order')->where('status', 0)->where('clinic_id', $id)->get();
	//  }
	   
	//  $clinic = Clinic::where('subscriber_id', $specificSubscriber)->get();
	//  return view ('doctor_portal.queue.queue_profile',compact('get','get1','clinic'));
	// }
	public function add_new_queue($clinic_id, $patient_id, $fname, $lname)
	{

		$new_status = 1;

		$update = Patient::where('patient_id', '=', $patient_id)->first();
		$update->status = $new_status;
		$update->save();

		return redirect('queue/queue_patient/'.$clinic_id);
	}

	public function add_new_queue_2nd($clinic_id, $patient_id, $fname, $lname)
	{

		$new_status = 2;

		$update = Patient::where('patient_id', '=', $patient_id)->first();
		$update->status = $new_status;
		$update->save();

		return redirect('queue/queue_patient/'.$clinic_id);
	}

		public function add_new_queue_olbook($clinic_id, $book_online_id, $book_fname, $book_lname)
	{

		$new_status = 1;
		Patient::create([
			'fname' => $book_fname,
			'lname' => $book_lname,
			'status' => $new_status,
			'clinic_id' => $clinic_id

		]);


		$del_patient = DB::table('book_online_patient')
						->where('book_online_id', '=', $book_online_id)
						->delete();
		return redirect('queue/queue_patient/'.$clinic_id);
	}

	public function add_new_queue_2nd_olbook($clinic_id, $book_online_id, $book_fname, $book_lname)
	{

		$new_status = 2;
		Patient::create([
			'fname' => $book_fname,
			'lname' => $book_lname,
			'status' => $new_status,
			'clinic_id' => $clinic_id

		]);


		$del_patient = DB::table('book_online_patient')
						->where('book_online_id', '=', $book_online_id)
						->delete();
		return redirect('queue/queue_patient/'.$clinic_id);
	}

	public function queue_update(Request $request)
	{
		$datas = Patient::all();

		foreach ($datas as $data) {
			$id = $data->patient_id;

			foreach ($request->order as $order) {
				if ($order['id'] == $id) {
					$data->update(['order' => $order['position']]);
				}
			}
		}
		return response('Update Successfully.', 200);
	}

	public function add_queue(Request $request)
	{
	   $clinic_id = $request->input('clinic_id');

	   $query = Patient::create([
			'fname' => request('fname'),
			'lname' => request('lname'),
			'mname' => request('mname'),
			'suffix' => request('suffix'),
			'birth_date' => request('birth_date'),
			'gender' => request('gender'),
			'civil_status' => request('civil_status'),
			'email' => request('email'),
			'citizenship' => request('citizenship'),
			'contact_no' => request('contact_no'),
			'height' => request('height'),
			'weight' => request('weight'),
			'bloodtype' => request('bloodtype'),
			'address1' => request('address1'),
			'clinic_id' => $clinic_id,
			'status' => request('queue')
		]);

		$lastInserted = DB::getPdo()->lastInsertId();
		$guardianModel = new GuardianInformation;
		$guardianModel->patient_id = $lastInserted;
		$guardianModel->save();

		return redirect('/queue/clinic_table');
	}

	public function consultation(Request $request)
	{
		$symptoms = request('symptoms');
		$diagnosis = request('diagnosis');
		$patient_id = request('patient_id');
		$consultationMed = request('consultationMed');
		$quantity = request('quantity');
		$dose = request('dose');
		$frequency = request('frequency');
		$note = request('note');
		

		consultation::create([
			'patient_id' => $patient_id
		]);

		$get_cons_id = DB::select('SELECT * FROM consultation ORDER BY consultation_id DESC LIMIT 1');

		foreach ($get_cons_id as $cons_id)
		{
			foreach($symptoms as $data)
			{
				symptoms::create([
					'symptoms' => $data,
					'consultation_id' => $cons_id->consultation_id
				]);
			}
		}

		foreach ($get_cons_id as $cons_id)
		{
			diagnosis::create([
				'diagnos' => $diagnosis,
				'consultation_id' => $cons_id->consultation_id
			]);
		}

		$arr = array($consultationMed, $quantity, $dose, $frequency);
		$arr1 = [];

		for ($i = 0; $i < count($arr[0]); $i++) {
			foreach ($arr as $key => $value) {
				$arr1[$i][] = $arr[$key][$i];

			}
		}

		foreach ($get_cons_id as $cons_id)
		{
			for ($i = 0; $i < count($arr1); $i++) {
				medications::create([
					'med_id' => $arr1[$i][0 ],
					'quantity' => $arr1[$i][1],
					'dose' => $arr1[$i][2],
					'frequency' => $arr1[$i][3],
					'consultation_id' => $cons_id->consultation_id,
					'note' => $note
				]);
			}

			for ($i = 0; $i < count($arr1); $i++) {
				StockOut::create([
					'med_id' => $arr1[$i][0 ],
					'quantity' => $arr1[$i][1],
					'dose' => $arr1[$i][2],
					'frequency' => $arr1[$i][3],
					'consultation_id' => $cons_id->consultation_id,
					'note' => $note
				]);
				$clinic_id = request('clinic_id');
				$get_med = DB::table('medicine')
					->join('clinic', 'medicine.clinic_id', '=', 'clinic.clinic_id')
					->select('medicine.*')
					->where('medicine.clinic_id', '=', $clinic_id)
					->get();

				$purchaseQuantity = (int)$arr1[$i][1];
				$medQuantity = '';
				foreach ($get_med as $data) {
					$medQuantity = $data->total_item_quantity;
				}
				$medQuantity = (int) $medQuantity;
				$deductedQuantity = $medQuantity - $purchaseQuantity;

				// $medicineQuery = Medicine::find($arr1[$i][0 ]);
				// $medicineQuery->quantity = 
				Medicine::updateOrCreate(['med_id' => $arr1[$i][0 ]],
					['total_item_quantity' => $deductedQuantity]);
			} 
		}


		$mode_payment = request('mode_payment');
		$billAmount = request('billAmount');
		$doc_id = request('doc_id');
		$billFrequency = request('billFrequency');
		$frequency_method = request('frequency_method');
		$insurance_discount = request('insurance_discount');
		$insurance = request('insurance');
		$frequency_payment = request('frequency_payment');
		$total_payable = request('total_payable');
		$billPaticulars = request('billPaticulars');
		$billQnty = request('billQnty');
		$billUnit = request('billUnit');
		$billAmountRate = request('billAmountRate');
		$billTotalAmount = request('billTotalAmount');

		BillingInfo::create([
			'practitioner' => $doc_id,
			'insurances' => $insurance,
			'mode_of_payment' => $mode_payment,
			'frequency' => $billFrequency,
			'frequency_method' => $frequency_method,
			'frequency_payment' => $frequency_payment,
			'billed_amount' => $billAmount,
			'insurance_discount' => $insurance_discount,
			'total_payable' => $total_payable,
			'patient_id' => $patient_id
		]);

		$bill_arr = array($billPaticulars, $billUnit, $billQnty, $billAmountRate, $billTotalAmount);
		$bill_arr1 = [];

		for ($i = 0; $i < count($bill_arr[0]); $i++) {
			foreach ($bill_arr as $key => $value) {
				$bill_arr1[$i][] = $bill_arr[$key][$i];

			}
		}

		// dd($bill_arr1[$i][0]);
		$cons_date = request('cons_date');
		$cons_note = request('cons_note');
		$clinic_id = request('clinic_id');

		foreach ($get_cons_id as $cons_id)
		{
			for ($i = 0; $i < count($bill_arr1); $i++) {
				billings::create([
					'particulars' => $bill_arr1[$i][0],
					'unit' => $bill_arr1[$i][1],
					'quantity' => $bill_arr1[$i][2],
					'total_amount' => $bill_arr1[$i][3],
					'consultation_id' => $cons_id->consultation_id
				]);
			}



		}

		foreach ($get_cons_id as $cons_ids) {
			patient_schedule::create([
				'patient_id' => $patient_id,
				'clinic_id' =>  $clinic_id,
				'sched_date' => $cons_date,
				'consultation_id' => $cons_ids->consultation_id,
				'note' => $cons_note
			]);
		}

		return redirect('/queue/clinic_table');

	}

	public function cons_finish($clinic_id, $patient_id)
	{
		$new_status = 3;

		$update = Patient::where('patient_id', '=', $patient_id)->first();
		$update->status = $new_status;
		$update->save();

		return redirect('/queue/queue_patient/'.$clinic_id);

	}
}
