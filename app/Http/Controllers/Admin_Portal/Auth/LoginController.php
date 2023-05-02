<?php

namespace App\Http\Controllers\Admin_Portal\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Events\UserLogin;
use App\Events\UserFailedLogin;

class LoginController extends Controller
{
	use AuthenticatesUsers;

	protected $redirectTo = '/adminHome';

	public function __construct()
	{
		$this->middleware('guest')->except('logout');
	}

	public function showLoginForm()
	{
		return view('admin_portal.login');
	}

	// public function index () {
	//  return view ('admin_portal.login');
	// }

	public function store (Request $request)
	{
		$formData = $request->only(['username', 'password']);

		if (Auth::guard('admin')->attempt($formData)) {
			event (New UserLogin($formData));
			return redirect('adminHome')->with('message', 'Successfully signed-in');
		}
		else {
			event (New UserFailedLogin($formData));
			return redirect('admin_session/login')->with('errorMessage', 'Username or password not found');
		}
	}

	public function logout (Request $request)
	{
		$request->session()->flush();
		$request->session()->regenerate();
		Auth::logout();
		return redirect('admin_session/login')->with('successMessage', 'Successfully logged out');
	}
}
