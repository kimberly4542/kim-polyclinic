<?php

namespace App\Http\Controllers\Doctor_Portal;

use Illuminate\Http\Request;

class login extends Controller
{
     public function login() {
    	return view ('doctor_portal.login.login');
    }
}
