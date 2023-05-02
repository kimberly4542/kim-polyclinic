<?php

namespace App\Http\Controllers\Doctor_Portal\Inventory;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Doctor_Portal\Medicine;
use App\Models\Doctor_Portal\Clinic;
use Illuminate\Support\Facades\Auth;

class FilterClinicController extends Controller
{
	public function filter_clinic () {
		$subscriber_id = Auth::id();
		$clinicQuery = Clinic::where('subscriber_id', $subscriber_id)->get();

		return view ('doctor_portal.inventory.filter_clinic', compact('clinicQuery'));
	}
}
