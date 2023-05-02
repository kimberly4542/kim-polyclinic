<?php

namespace App\Http\Controllers\Admin_Portal\Reports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin_Portal\Notification;


class ReportsController extends Controller
{
    public function view()
    {
        $allNotification = Notification::where('notification_status', 'Unread')->get();
		 
        return view('admin_portal.reports.report', compact('allNotification'));
    }
}
