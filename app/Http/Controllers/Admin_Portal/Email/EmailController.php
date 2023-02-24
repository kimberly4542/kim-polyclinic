<?php

namespace App\Http\Controllers\Admin_Portal\Email;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmailController extends Controller
{
	public function subscriber_email () {
		return view ('admin_portal/email/subscriber_email');
	}

	public function settings_send_email () {
		return view ('admin_portal/email/settings_send_email');
	}

	public function settings_inbox () {
		return view ('admin_portal/email/settings_inbox');
	}

	public function settings_sentItems () {
		return view ('admin_portal/email/settings_sentItems');
	}

	public function send_email_content () {
		return view ('admin_portal/email/send_email_content');
	}

	public function sentItems_content () {
		return view ('admin_portal/email/sentItems_content');
	}
}
