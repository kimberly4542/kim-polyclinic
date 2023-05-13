<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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


    public function register (Request $request)  
	{

        
		$username = $request->input('username');
		$password = $request->input('password');
		$hashedPassword = Hash::make($password, [
			'rounds' => 12
		]);

		DB::insert('insert into cityadmin_user (username, password) values (?, ?)', [$username, $hashedPassword]);

	}
}
