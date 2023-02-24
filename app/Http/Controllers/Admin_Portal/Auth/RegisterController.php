<?php

namespace App\Http\Controllers\Admin_Portal\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin_Portal\Notification;
use DB;

class RegisterController extends Controller
{
    use RegistersUsers;

	// protected $redirectTo = '/home';

	// public function __construct()
	// {
	// 	$this->middleware('auth');
	// }

	// protected function validator(array $data)
	// {
	// 	return Validator::make($data, [
	// 		'name' => 'required|string|max:255',
	// 		'email' => 'required|string|email|max:255|unique:users',
	// 		'password' => 'required|string|min:6|confirmed',
	// 	]);
	// }

	// protected function create(array $data)
	// {
	//     return User::create([
	//         'name' => $data['name'],
	//         'email' => $data['email'],
	//         'password' => Hash::make($data['password']),
	//     ]);
	// }

    public function index () {
		$allNotification = Notification::where('notification_status', 'Unread')->get();
    	return view ('admin_portal.settings.add_account', compact('allNotification'));
    }

	public function store (Request $request)  
	{
		$request->validate([
			'firstname' => 'required|max:50|min:2',
			'lastname' => 'required|max:50|min:2',
			'username' => 'required|unique:user,username|max:50',
			'password' => 'required|confirmed'
		]);

		$firstname = $request->input('firstname');
		$lastname = $request->input('lastname');
		$username = $request->input('username');
		$password = $request->input('password');
		$hashedPassword = Hash::make($password, [
			'rounds' => 12
		]);

		DB::insert('insert into user (fname, lname, username, password) values (?, ?, ?, ?)', [$firstname, $lastname, $username, $hashedPassword]);

		return redirect('settings/add_account')->with('success', 'successfuly registered new user');
	}
}
