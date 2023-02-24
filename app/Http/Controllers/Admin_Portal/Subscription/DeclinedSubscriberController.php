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
use App\Models\Admin_Portal\Notification;



class DeclinedSubscriberController extends Controller
{

    public function index()
    {
        $mainQuery = SubscriberStatus::where('status', 'Declined')->with(['subscribers'])->get();
        $subscriberStatusModel = new SubscriberStatus;
        $paymentQuery = new Payment;
        $subscriberQuery = new Subscribers;
        $allNotification = Notification::where('notification_status', 'Unread')->get();

        return view ('admin_portal.subscription.declined_subcriber', compact('mainQuery', 'subscriberStatusModel', 'paymentQuery', 'subscriberQuery', 'allNotification'));
    }

    public function verify(Request $request)
    {
        $subscriber_id = $request->input('subscriber_id');

        $subscriberStatusModel = SubscriberStatus::where('subscriber_id', $subscriber_id)->get();
        foreach ($subscriberStatusModel as $subscriberStatus ) {
            $subscriberStatus->status = 'Active';
            $subscriberStatus->save();
        }

        return redirect('subscription/declined_subscriber')->with('successMessage', 'Successfully Declined Subscriber');
    }

}