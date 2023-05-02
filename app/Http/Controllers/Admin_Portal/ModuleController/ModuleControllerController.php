<?php

namespace App\Http\Controllers\Admin_Portal\ModuleController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ModuleControllerController extends Controller
{
    public function request_feature () {
		return view ('admin_portal/module_controller/request_feature');
	}
}
