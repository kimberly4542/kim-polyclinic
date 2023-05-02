<?php

namespace App\Http\Controllers\Subscription_Portal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Subscription_Portal\subscribers;
use App\Models\Subscription_Portal\clinic;
use App\Models\Subscription_Portal\clinic_schedule;
use App\Models\Subscription_Portal\specialization;
use App\Models\Subscription_Portal\module_list;
use App\Models\Subscription_Portal\sub_1;
use App\Models\Subscription_Portal\sub_2;
use App\Models\Subscription_Portal\subsc_accessibility;
use App\Models\Subscription_Portal\dict;
use App\Models\Subscription_Portal\subscriber_status;
use App\Models\Subscription_Portal\main_module;
use App\Models\Subscription_Portal\duration;
use App\Models\Subscription_Portal\lvl1;
use App\Models\Subscription_Portal\lvl2;
use App\Models\Subscription_Portal\lvl3;
use App\Models\Admin_Portal\Notification;
use Illuminate\Support\Facades\Hash;
use DB;
class ajaxController extends Controller
{
	public function registrationUser(Request $request)
	{
		$this->validate($request, [
			'firstname' => 'required',
			'username' => 'required',
			'password' => 'required',
			'lastname' => 'required',
			'email' => 'required',
			'specialization' => 'required',
			'clinic_name' => 'required',
			'clinic_address' => 'required',
			'day' => 'required',
			'time_in' => 'required',
			'time_out' => 'required'
		]);

		$password = $request->input('password');
		$hashed = Hash::make($password, [
			'rounds' => 12
		]);
		

		subscribers::create([
			'fname' => $request->input('firstname'),
			'username' => $request->input('username'),
			'mname' => $request->input('middlename'),
			'password' => $hashed,
			'lname' => $request->input('lastname'),
			'email' => $request->input('email')
		]);

		Notification::create(['notification_status' => 'Unread', 'subscriber_status' => 'UnderVerification']);

		$get_id = DB::select('SELECT subscriber_id
								FROM subscribers
								ORDER BY subscriber_id
								DESC LIMIT 1');

		foreach ($get_id as $data)
		{
			clinic::create([
				'clinic_name' => $request->input('clinic_name'),
				'address' => $request->input('clinic_address'),
				'subscriber_id' => $data->subscriber_id

			]);
		}

		$UnderVerification = 'UnderVerification';

		foreach ($get_id as $data) {
			subscriber_status::create([
				'subscriber_id' => $data->subscriber_id,
				'status' => $UnderVerification
			]);
		}

		foreach ($get_id as $data) {
			specialization::create([
				'subscriber_id' => $data->subscriber_id,
				'name' => request('specialization')
			]);
		}

		$get_clinic_id = DB::select('SELECT clinic_id
										FROM clinic
										ORDER BY clinic_id
										DESC LIMIT 1');
		
		foreach ($get_clinic_id as $clinic_data)
		{
			clinic_schedule::create([
				'clinic_id' => $clinic_data->clinic_id,
				'day' => $request->input('day'),
				'time_in' => $request->input('time_in'),
				'time_out' => $request->input('time_out')

			]);
		}
		$duration = request('duration');

		duration::create([
			'type' => $duration
		]);

		$get_duration = DB::select('SELECT duration_id
									FROM duration
									ORDER BY duration_id
									DESC LIMIT 1');

		foreach ($get_id as $sub_id)
		{
			foreach($get_duration as $duration_id)
			{
				subsc_accessibility::create([
					'duration_id' => $duration_id->duration_id,
					'subscriber_id' => $sub_id->subscriber_id,
					'total_payment' => request('total_payable')
				]); 
			}   
		}


		$get_subs_access_id = DB::select('SELECT acc_id
											FROM subsc_accessibility
											ORDER BY acc_id
											DESC LIMIT 1');

		
		$main_module = request('main_module');
		$lvl1 = request('lvl1');
		$lvl2 = request('lvl2');
		$lvl3 = request('lvl3');

		foreach ($get_subs_access_id as $acc_id)
		{
			foreach($main_module as $main_id)
			{
				main_module::create([
					'modlist_id' => $main_id,
					'acc_id' => $acc_id->acc_id
				]);
			}

			foreach ($lvl1 as $lvl1_id)
			{
				lvl1::create([
					'sub1_id' => $lvl1_id,
					'acc_id' => $acc_id->acc_id
				]);
			}

			foreach ($lvl2 as $lvl2_id)
			{
				lvl2::create([
					'sub2_id' => $lvl2_id,
					'acc_id' => $acc_id->acc_id
				]);
			}

			foreach ($lvl3 as $lvl3_id)
			{
				lvl3::create([
					'sub3_id' => $lvl3_id,
					'acc_id' => $acc_id->acc_id
				]);
			}
		}

		$time_in = request('time_in');
		$time_out = request('time_out');
		
	 //    $main_module = request('main_module');
	 //    $lvl1 = request('lvl1');
	 //    $lvl2 = request('lvl2');
	 //    $lvl3 = request('lvl3');

		// if($main_module == '' || $time_in == $time_out || $lvl1 == '' || $lvl2 == '' || $lvl3 == '')
		// {
		//     return "ERROR";
		// }
		// return redirect('/')->with('success', 'Successfully Subscribes. Please wait for confirmation');

		return 1;

		// $main_arr =  Array();
		// for($i = 0;$i < count($main_module);$i++)
		// {
		//    $query = module_list::where('modlist_id', $main_module[$i])->get();
		//    foreach ($query as $qs) 
		//    {
		//         array_push($main_arr, $qs->module_name);
		//     }

		// }

		// for($i = 0;$i < count($lvl1);$i++)
		// {
		//  $query1 = sub_1::where('sub1_id', $lvl1[$i])->get();
		//  foreach ($query1 as $qs1) {
		//      array_push($main_arr, $qs1->sub1_name);
		//  }
		// }

		// for($i = 0; $i < count($lvl2); $i++)
		// {
		//  $query2 = sub_2::where('sub2_id', $lvl2[$i])->get();
		//  foreach ($query2 as $qs2) {
		//      array_push($main_arr, $qs2->sub2_name);
		//  }
		// }

		// return $main_arr;


	}

	public function selectRanking($id)
	{

	   $profile = DB::table('main_module')
					   ->join('module_list', 'main_module.modlist_id', '=', 'module_list.modlist_id')
					   ->join('subsc_accessibility', 'main_module.acc_id', '=', 'subsc_accessibility.acc_id')
					   ->join('subscribers', 'subsc_accessibility.subscriber_id', '=', 'subscribers.subscriber_id')
					   ->join('specialization', 'subscribers.subscriber_id', '=', 'specialization.subscriber_id')
					   ->select('module_list.module_name', DB::raw('COUNT(module_list.module_name) as Used'))
					   ->where('specialization.name', '=', $id)
					   ->groupBy('module_name')
					   ->get();

		return json_encode($profile);
	}

		//$arr = [];
	   // foreach ($doctor as $data) {
		//    array_push($arr, $data->fname);

	   // }

		//return json_encode($arr);
}
