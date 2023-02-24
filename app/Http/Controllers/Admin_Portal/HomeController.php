<?php

namespace App\Http\Controllers\Admin_Portal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin_Portal\Notification;


class HomeController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function home()
	{
		$allNotification = Notification::where('notification_status', 'Unread')->get();
		return view('admin_portal.home', compact('allNotification'));
	}
}
