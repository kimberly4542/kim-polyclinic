<?php

namespace App\Http\Controllers\Admin_Portal\Subscription;

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


class UnderVerificationController extends Controller
{

	public function index()
	{ 
		// $subscriber_id = Auth::id();
		$mainQuery = SubscriberStatus::where('status', 'UnderVerification')->with(['subscribers'])->get();
		$subscriberStatusModel = new SubscriberStatus;
		$paymentQuery = new Payment;
		$subscriberQuery = new Subscribers;
		$clinicQuery = new Clinic;
		// $notificationModel = new Notification;
		$allNotification = Notification::where('notification_status', 'Unread')->get();

		return view ('admin_portal/subscription/under_verification', compact('mainQuery', 'subscriberStatusModel', 'paymentQuery', 'subscriberQuery', 'clinicQuery', 'allNotification'));
	}

	public function verify(Request $request)
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

		$subscriberStatusModel = SubscriberStatus::where('subscriber_id', $subscriber_id)->get();
		
		foreach ($subscriberStatusModel as $subscriberStatus ) {
			$subscriberStatus->status = 'Active';
			$subscriberStatus->save();
		}

		return redirect('subscription/under_verification')->with('successMessage', 'Successfully Verified Subscriber');
	}

	public function decline(Request $request)
	{
		$subscriber_id = $request->input('subscriber_id');

		$subscriberStatusModel = SubscriberStatus::where('subscriber_id', $subscriber_id)->get();
		foreach ($subscriberStatusModel as $subscriberStatus ) {
			$subscriberStatus->status = 'Declined';
			$subscriberStatus->save();
		}

		return redirect('subscription/under_verification')->with('successMessage', 'Successfully Declined Subscriber');
	}
}