<?php

namespace App\Http\Controllers\Doctor_Portal\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Events\UserLogin;
use App\Events\UserFailedLogin;
use App\Models\Doctor_Portal\Subscribers;
use App\Models\Admin_Portal\SubscriberStatus;
use App\Models\Admin_Portal\SubscAccessibility;
use Mail;

class LoginController extends Controller
{
	use AuthenticatesUsers;

	protected $redirectTo = '/home';

	
	public function __construct()
	{
	   $this->middleware('guest')->except('logout');
	   #  $this->middleware('guest')->except('logout', 'index');
	}

	 public function showLoginForm () {
		return view ('doctor_portal.login.login');
	}

	 public function store (Request $request) 
	 {
		// $formData = $request->only('username', 'password');
		$username = $request->input('username');
		$password = $request->input('password');
		$subscriber_id = '';
		$subscriber_status = '';

		$subscriberQuery = Subscribers::where('username', $username)->get();
		foreach ($subscriberQuery as $id) {
			$subscriber_id = $id->subscriber_id;
		}

		// $expiryDate = '';

		// $subsExpiry = SubscAccessibility::where('subscriber_id', $subscriber_id)->with(['getDuration'])->get();
		// foreach ($subsExpiry as $data) {
		//  $expiryDate = $data->getDuration->date_to;
		// }

		// dd($expiryDate);

		$query = SubscriberStatus::where('subscriber_id', $subscriber_id)->get();
		foreach ($query as $data) {
			$subscriber_status = $data->status;
		}

		if (Auth::guard('subscriber')->attempt(['username' => $username, 'password' => $password])) {
			if ($subscriber_status == 'Active') {
				event (New UserLogin($username));
				return redirect('home')->with('message', 'successfully logged in');
			}
			elseif ($subscriber_status == 'Expired') {

				Mail::send('mail',['name','Kurt Kevin Nebril'],function($message){
					$username = request('username');
					$subscriber_id = '';
					$subscriberQuery = Subscribers::where('username', $username)->get();
					foreach ($subscriberQuery as $id) {
						$subscriber_id = $id->subscriber_id;
					}

					$query = subscribers::where('subscriber_id', $subscriber_id)->get();
					$subscriberEmail;
					foreach ($query as $data) {
						$subscriberEmail = $data->email;
					}
					$message->to($subscriberEmail)->subject("Account Expired");
					$message->from('nebrilkurtkevin5@gmail.com','From PolyClinic Management System');
				});
				return back()->withInput()->with('message', 'User Expired');
			}
			else {
				$request->session()->flush();
				$request->session()->regenerate();
				event (New UserFailedLogin($username));
				return back()->withInput()->with('message', 'user exist but not activated yet');
			}
		}
		 else {
			event (New UserFailedLogin($username));
			return back()->withInput()->with('message', 'user does not exist');
		}

		// if ($subscriber_status == 'Active') {
		//  if (Auth::guard('subscriber')->attempt(['username' => $username, 'password' => $password])) {
		//      event (New UserLogin($data));
		//      return redirect('home')->with('message', 'successfully logged in');
		//  }
		//  else {
		//      event (New UserFailedLogin($data));
		//      return back()->withInput()->with('message', 'invalid user or password');
		//  }
		// }
		// else {
		//  return back()->withInput()->with('message', 'invalid user');
		// }
			
	}

	public function logout (Request $request) 
	{
		$request->session()->flush();
		$request->session()->regenerate();
		Auth::logout();

		return redirect('session/login')->with('logoutMessage', 'Logged out');
	}
}

