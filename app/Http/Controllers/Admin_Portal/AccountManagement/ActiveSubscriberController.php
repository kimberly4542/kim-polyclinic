<?php

namespace App\Http\Controllers\Admin_Portal\AccountManagement;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin_Portal\Subscribers;
use App\Models\Admin_Portal\SubscriberStatus;
use App\Models\Admin_Portal\Payment;
use App\Models\Admin_Portal\SubscAccessibility;
use App\Models\Admin_Portal\ModuleList;
use App\Models\Admin_Portal\Notification;

class ActiveSubscriberController extends Controller
{

	public function index()
	{
		$mainQuery = SubscriberStatus::where('status', 'Active')->with(['subscribers'])->get();
		$subscriberStatusModel = new SubscriberStatus;
		$paymentQuery = new Payment;
		$subscriberQuery = new Subscribers;

		$allNotification = Notification::where('notification_status', 'Unread')->get();

		return view ('admin_portal/account_management/active_subscriber', compact('mainQuery', 'subscriberStatusModel', 'paymentQuery', 'subscriberQuery', 'allNotification'));
	}

	public function deactivate(Request $request)
	{
		$subscriber_id = $request->input('subscriber_id');

		$subscriberStatusModel = SubscriberStatus::where('subscriber_id', $subscriber_id)->get();
		foreach ($subscriberStatusModel as $subscriberStatus ) {
			$subscriberStatus->status = 'Deactivated';
			$subscriberStatus->save();
		}

		return redirect('account_management/active_subscriber_table')->with('successMessage', 'Successfully Deactivated Subscriber');
	}
}
