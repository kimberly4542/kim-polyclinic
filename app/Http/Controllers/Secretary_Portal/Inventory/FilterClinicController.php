<?php

namespace App\Http\Controllers\Secretary_Portal\Inventory;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Doctor_Portal\Medicine;
use App\Models\Doctor_Portal\Clinic;
use Illuminate\Support\Facades\Auth;
use App\Models\Doctor_Portal\SecondaryUser;

class FilterClinicController extends Controller
{
    public function filter_clinic () {
		$secretary_id = Auth::id();
		$secondaryUserQuery = SecondaryUser::find($secretary_id);
		$subscriber_id = $secondaryUserQuery->subscriber_id;
		$clinicQuery = Clinic::where('subscriber_id', $subscriber_id)->get();

		return view ('secretary_portal.inventory.filter_clinic', compact('clinicQuery'));
	}
}
