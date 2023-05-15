<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\User;

use Closure;

class LoginController extends BaseController
{
    // public function login(Request $req)
    // {
    //     $username = $req->input('username');
    //     $password = $req->input('password');

    //     $checkLogin = DB::table('cityadmin_user')->where(['username'=>$username, 'password'=>$password])->get();
    //     if(count($checkLogin)   >0)
    //     {
    //         return view('cityadmin.dash');
    //     }
    //     else{
    //         echo "Login Failed";
    //     }
    // }

    // public function register(Request $req)
    // {
    //     $user =
    //     $user->username=$req->input('username');
    //     $user->password=Crypt::encrypt($req->input('password'));
    //     $user->save();
    // }


    // public function register (Request $request)  
	// {

        
	// 	$username = $request->input('username');
	// 	$password = $request->input('password');
	// 	$hashedPassword = Hash::make($password, [
	// 		'rounds' => 12
	// 	]);

	// 	DB::insert('insert into cityadmin_user (username, password) values (?, ?)', [$username, $hashedPassword]);

	// }

    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {

        // $rules = [
        // 'email' => 'required|email',
        // 'password' => 'required'
        // ];

        // $messages = [
        //     'email.required' => 'The email field is required.',
        //     'email.email' => 'The email field must be a valid email address.',
        //     'password.required' => 'The password field is required.'
        // ];

        // $validator = Validator::make($request->all(), $rules, $messages);

        // if ($validator->fails()) {
        //     return redirect('/login')
        //         ->withErrors($validator)
        //         ->withInput();
        // }



        $username = $request->only('username', 'password');

        // Retrieve the user by the username
        $user = User::where('username', $username['username'])->first();

        // Check if the user exists
        if (!$user) {
            return redirect('/login')->withErrors(['username' => 'Invalid username or password']);
            // return "Invalid username or password";
        }

        // Check if the password matches
        if (!Hash::check($username['password'], $user->password)) {
            return redirect('/admin')->withErrors(['username' => 'Invalid username or password']);
            // return "Invalid username or password";
        }

        // Login the user
        Auth::login($user);

        return redirect('/admin/dashboard');
    }

    public function logout (Request $request)
	{
		$request->session()->flush();
		$request->session()->regenerate();
		Auth::logout();
		return redirect('/admin')->with('successMessage', 'Successfully logged out');
	}
}


