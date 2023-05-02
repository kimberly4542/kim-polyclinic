<?php

namespace App\Http\Controllers\Admin_Portal\AccountManagement;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin_Portal\Subscribers;
use App\Models\Admin_Portal\SubscriberStatus;
use App\Models\Admin_Portal\Specialization;
use App\Models\Admin_Portal\Payment;
use App\Models\Admin_Portal\SubscAccessibility;
use App\Models\Admin_Portal\ModuleList;
use App\Models\Admin_Portal\Clinic;
use App\Models\Admin_Portal\duration;
use App\Models\Admin_Portal\Notification;
use DB;
use Mail;

class ExpiredSubscriberController extends Controller
{

	public function index()
	{
		$mainQuery = SubscriberStatus::where('status', 'Expired')->with(['subscribers'])->get();
		$subscriberStatusModel = new SubscriberStatus;
		$paymentQuery = new Payment;
		$subscriberQuery = new Subscribers;
		$allNotification = Notification::where('notification_status', 'Unread')->get();

		return view ('admin_portal/account_management/expired_subscription', compact('mainQuery', 'subscriberStatusModel', 'paymentQuery', 'subscriberQuery', 'allNotification'));
	}

	public function activate(Request $request)
	{
		$subscriber_id = $request->input('subscriber_id');
		$duration_id = request('duration_id');
		$duration = request('duration');
		$result = Carbon::now()->diffForHumans(Carbon::now()->subMonth($duration));
		$expiryDate = Carbon::now()->addMonth($duration);

		$durationModel = duration::find($duration_id);
		$durationModel->date_from = Carbon::now();
		$durationModel->date_to = $result;
		$durationModel->date_to_datetime = $expiryDate;
		$durationModel->save();

		$subscriberStatusModel = SubscriberStatus::where('subscriber_id', $subscriber_id)->get();
		foreach ($subscriberStatusModel as $subscriberStatus ) {
			$subscriberStatus->status = 'Active';
			$subscriberStatus->save();
		}

		Mail::send('verifyNotification',['name','Kurt Kevin Nebril'],function($message){
			$subscriber_id = request('subscriber_id');
			$query = subscribers::where('subscriber_id', $subscriber_id)->get();
			$subscriberEmail;
			foreach ($query as $data) {
				$subscriberEmail = $data->email;
			}
			$message->to($subscriberEmail)->subject("Account Verified");
			$message->from('nebrilkurtkevin5@gmail.com','From PolyClinic Management System');
		});

		return redirect('account_management/expired_subscription_table')->with('successMessage', 'Successfully Activated Subscriber');
	}

}
