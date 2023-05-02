<?php

namespace App\Http\Controllers\Admin_Portal\Subscription;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin_Portal\Subscribers;
use App\Models\Admin_Portal\SubscriberStatus;
use App\Models\Admin_Portal\Specialization;
use App\Models\Admin_Portal\Payment;
use App\Models\Admin_Portal\Notification;


class RenewalController extends Controller
{

	public function index()
	{   
		$mainQuery = SubscriberStatus::where('status', 'Renewal')->with(['subscribers'])->get();
		$subscriberStatusModel = new SubscriberStatus;
		$paymentQuery = new Payment;
		$subscriberQuery = new Subscribers;
		$allNotification = Notification::where('notification_status', 'Unread')->get();

		return view ('admin_portal.subscription.renewal', compact('mainQuery', 'subscriberStatusModel', 'paymentQuery', 'subscriberQuery', 'allNotification'));
	}

	public function verify(Request $request)
	{
		$subscriber_id = $request->input('subscriber_id');

		$subscriberStatusModel = SubscriberStatus::where('subscriber_id', $subscriber_id)->get();
		foreach ($subscriberStatusModel as $subscriberStatus ) {
			$subscriberStatus->status = 'Active';
			$subscriberStatus->save();
		}

		return redirect('subscription/renewal_table')->with('successMessage', 'Successfully Verified Subscriber');
	}

	public function decline(Request $request)
	{
		$subscriber_id = $request->input('subscriber_id');

		$subscriberStatusModel = SubscriberStatus::where('subscriber_id', $subscriber_id)->get();
		foreach ($subscriberStatusModel as $subscriberStatus ) {
			$subscriberStatus->status = 'Declined';
			$subscriberStatus->save();
		}

		return redirect('subscription/renewal_table')->with('successMessage', 'Successfully Declined Subscriber');
	}
}

