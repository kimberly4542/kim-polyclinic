<?php

namespace App\Http\Controllers\Doctor_Portal\Inventory;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Doctor_Portal\Medicine;
use App\Models\Doctor_Portal\Clinic;

class InvoiceController extends Controller
{
    public function invoice ($clinic_id) {
    	$medicineQuery = Medicine::where('clinic_id', $clinic_id)->get();

    	return view ('doctor_portal.inventory.invoice', compact('clinic_id', 'medicineQuery'));
    }
}
