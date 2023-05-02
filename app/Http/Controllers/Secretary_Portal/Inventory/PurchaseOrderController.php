<?php

namespace App\Http\Controllers\Secretary_Portal\Inventory;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Doctor_Portal\Clinic;
use App\Models\Doctor_Portal\PurchaseOrder;

class PurchaseOrderController extends Controller
{
	public function purchase_order ($clinic_id) {
		return view ('secretary_portal.inventory.purchase_order', compact('clinic_id'));
	}

	public function print_purchase_order (Request $request, $clinic_id) {
		$purchaseOrderQuery = new PurchaseOrder;

		$request->validate([
			'supplier_name' => 'required',
			'po' => 'required',
			'delivery_date' => 'required',
			'item_name' => 'required',
			'quantity' => 'required',
			'item_price' => 'required',
			'total' => 'required',
		]);

		$purchaseOrderQuery::create([
			'supplier_name' => $request->input('supplier_name'),
			'supplier_address' => $request->input('supplier_address'),
			'term' => $request->input('term'),
			'contact' => $request->input('contact'),
			'po' => $request->input('po'),
			'delivery_date' => $request->input('delivery_date'),
			'requested_by' => $request->input('requested_by'),
			'approved_by' => $request->input('approved_by'),
			'notes' => $request->input('notes'),
			'item_name' => $request->input('item_name'),
			'quantity' => $request->input('quantity'),
			'item_price' => $request->input('item_price'),
			'total' => $request->input('total'),
			'clinic_id' => $clinic_id,
		]);

		$last_inserted_id = DB::getPdo()->lastInsertId();

		$query = PurchaseOrder::where('po_id', $last_inserted_id)->get();

		$clinicQuery = Clinic::where('clinic_id', $clinic_id)->get();

		return view ('secretary_portal.inventory.print_purchase_order', compact('clinicQuery', 'query'));
	}
}
