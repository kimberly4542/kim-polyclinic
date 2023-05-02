<?php

namespace App\Http\Controllers\Admin_Portal\Subscription;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin_Portal\Subscribers;
use App\Models\Admin_Portal\SubscriberStatus;
use App\Models\Admin_Portal\Specialization;
use App\Models\Admin_Portal\Payment;
use App\Models\Admin_Portal\SubscAccessibility;
use App\Models\Admin_Portal\ModuleList;

class RequestAddonController extends Controller
{
	public function index()
	{
		$mainQuery = SubscriberStatus::where('status', 'RequestAddon')->with(['subscribers'])->get();
		$subscriberStatusModel = new SubscriberStatus;
		$paymentQuery = new Payment;
		$subscriberQuery = new Subscribers;

		return view ('admin_portal/subscription/request_addon', compact('mainQuery', 'subscriberStatusModel', 'paymentQuery', 'subscriberQuery'));
	}

	public function verify(Request $request)
	{
		$subscriber_id = $request->input('subscriber_id');

		$subscriberStatusModel = SubscriberStatus::where('subscriber_id', $subscriber_id)->get();
		foreach ($subscriberStatusModel as $subscriberStatus ) {
			$subscriberStatus->status = 'Active';
			$subscriberStatus->save();
		}

		return redirect('subscription/request_addon_table')->with('successMessage', 'Successfully Verified Subscriber');
	}

	public function decline(Request $request)
	{
		$subscriber_id = $request->input('subscriber_id');

		$subscriberStatusModel = SubscriberStatus::where('subscriber_id', $subscriber_id)->get();
		foreach ($subscriberStatusModel as $subscriberStatus ) {
			$subscriberStatus->status = 'Declined';
			$subscriberStatus->save();
		}

		return redirect('subscription/request_addon_table')->with('successMessage', 'Successfully Declined Subscriber');
	}

}
