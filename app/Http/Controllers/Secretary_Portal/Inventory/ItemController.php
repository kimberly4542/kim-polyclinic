<?php

namespace App\Http\Controllers\Secretary_Portal\Inventory;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Doctor_Portal\Medicine;
use App\Models\Doctor_Portal\Clinic;

class ItemController extends Controller
{
	public function item ($clinic_id) {
		$medicineQuery = Medicine::where('clinic_id', $clinic_id)->get();
		// dd($medicineQuery);

		return view ('secretary_portal.inventory.item', compact('clinic_id', 'medicineQuery'));
	}
}
