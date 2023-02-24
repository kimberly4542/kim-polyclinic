<?php

namespace App\Http\Controllers\Doctor_Portal\ManageReport;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Doctor_Portal\Subscribers;
use Illuminate\Support\Facades\Auth;

class MedicineReportController extends Controller
{
	
	public function medicine_report()
	{
		$subscriber_id = Auth::id();
		$stockInQuery = Subscribers::where('subscriber_id', $subscriber_id)->with(['getCLinic.getStockIn'])->get();
		$stockOutQuery = Subscribers::where('subscriber_id', $subscriber_id)->with(['getCLinic.getMedicine.getStockOut.getMedicine'])->get();
		$totalRevenue = 0.0;
		$totalExpenditures = 0.0;
		foreach($stockInQuery as $subscriber) {
			foreach($subscriber->getCLinic as $clinic) {
				foreach($clinic->getStockIn as $stockin) {
					$price = (float) $stockin->price;
					$quantity = (int) $stockin->total_item_quantity;
					$totalExpenditures = $price * $quantity;
				}
			}
		}
		foreach($stockOutQuery as $subscriber) {
			foreach($subscriber->getCLinic as $clinic) {
				foreach($clinic->getMedicine as $medicine) {
					foreach($medicine->getStockOut as $stockOut) {
						$price = (float) $stockOut->getMedicine->price;
						$quantity = (int) $stockOut->quantity;
						$totalRevenue = $price * $quantity;
					}
				}
			}
		}
		return view ('doctor_portal.reports.medicine_report', compact('stockInQuery', 'stockOutQuery', 'totalRevenue', 'totalExpenditures'));
	}
}
