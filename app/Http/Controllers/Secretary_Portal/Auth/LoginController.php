<?php

namespace App\Http\Controllers\Secretary_Portal\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Events\UserLogin;
use App\Events\UserFailedLogin;
use App\Models\Doctor_Portal\Subscribers;
use App\Models\Doctor_Portal\SecondaryUser;
use App\Models\Admin_Portal\SubscriberStatus;

class LoginController extends Controller
{
	use AuthenticatesUsers;

	protected $redirectTo = '/secHome';
	
	public function __construct() {
	   $this->middleware('guest')->except('logout');
	   #  $this->middleware('guest')->except('logout', 'index');
	}

	public function showLoginForm () {
		return view ('secretary_portal.login.login');
	}

	public function store (Request $request) {
		$username = $request->input('username');
		$password = $request->input('password');
		$subscriber_id = '';
		$subscriber_status = '';
		
		$secondaryUserQuery = SecondaryUser::where('username', $username)->get();
		#dd($secondaryUserQuery);
		foreach ($secondaryUserQuery as $id) {
			$subscriber_id = $id->subscriber_id;
		}

	
		$subscriberStatusQuery = SubscriberStatus::where('subscriber_id', $subscriber_id)->get();
		
		foreach ($subscriberStatusQuery as $data) {
			$subscriber_status = $data->status;
		}
		
		if (Auth::guard('secretary')->attempt(['username' => $username, 'password' => $password])) {
			if ($subscriber_status == null) {
				// return redirect('secHome')->with('message', 'successfully logged in');
				return back()->withInput()->with('message', 'user does not');;
			}
			elseif ($subscriber_status == 'Active') {
				event (New UserLogin($username));
				return redirect('secHome/'.$subscriber_id)->with('message', 'successfully logged in');
			}
			else {
				$request->session()->flush();
				$request->session()->regenerate();
				event (New UserFailedLogin($username));
				return back()->withInput()->with('message', 'Subscriber maybe expired or not not activated yet');
			}
		}
		else {
			return back()->withInput()->with('message', 'Secretary account does not exist');
		}
	}

	public function logout (Request $request) 
	{
		$request->session()->flush();
		$request->session()->regenerate();
		Auth::logout();
		return redirect('sec_session/login')->with('logoutMessage', 'Logged out');
	}
}
