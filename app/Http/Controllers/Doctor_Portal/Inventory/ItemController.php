<?php

namespace App\Http\Controllers\Doctor_Portal\Inventory;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Doctor_Portal\Medicine;
use App\Models\Doctor_Portal\Clinic;
use App\Models\Doctor_Portal\StockIn;
use App\Models\Doctor_Portal\StockOut;

class ItemController extends Controller
{
    public function item ($clinic_id) {
    	$medicineQuery = Medicine::where('clinic_id', $clinic_id)->get();
    	$stockInQuery = StockIn::where('clinic_id', $clinic_id)->get();
    	$stockOutQuery = Medicine::where('clinic_id', $clinic_id)->with(['getStockOut'])->get();
    	// $stockOutData = '';
    	// $medicine = '';
    	// foreach ($stockOutQuery as $stockout) {
    	// 	$medicine = $stockout;
    	// 	foreach ($stockout->getStockOut as $data) {
    	// 		$stockOutData = $data;
    	// 	}
    	// }
    	// dd($stockOutData);
    	// return view ('doctor_portal.inventory.item', compact('clinic_id', 'medicineQuery', 'stockInQuery', 'stockOutQuery', 'stockOutData', 'medicine'));
    	// dd($stockOutQuery);
    	return view ('doctor_portal.inventory.item', compact('clinic_id', 'medicineQuery', 'stockInQuery', 'stockOutQuery'));
    }
}