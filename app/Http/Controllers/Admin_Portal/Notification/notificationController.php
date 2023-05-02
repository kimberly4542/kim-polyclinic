<?php

namespace App\Http\Controllers\Admin_Portal\Notification;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin_Portal\Notification;

class notificationController extends Controller
{
    public function read_notification ($id) {
    	$notificationModel = Notification::find($id);
		$notificationModel->fill(['notification_status' => 'Read'])->save();

		return redirect('subscription/under_verification');
    }
}
