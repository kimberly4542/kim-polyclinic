<?php

namespace App\Http\Controllers\Doctor_Portal\Inventory;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Doctor_Portal\StockIn;
use App\Models\Doctor_Portal\Medicine;
use App\Models\Doctor_Portal\Supplier;
use Storage;
use Image;

class AddStockController extends Controller
{
	public function addStock (Request $request) {
		$stockInModel = new StockIn;
		$medicineModel = new Medicine;
		$supplierModel = new Supplier;
		// dd($request->all());

		$request->validate([
			'generic_name' => 'required',
			'brand_name' => 'required',
			'manufacturer' => 'required',
			'weight' => 'required',
			'expiration_date' => 'required',
			'price' => 'required',
			'quantity_box' => 'required',
			'pcs_per_box' => 'required',
			'total_item_quantity' => 'required',
			'supplier_name' => 'required',
			'supplier_address' => 'required',
			'term' => 'required',
			'contact' => 'required',
			'file' => 'required|image|mimes:jpeg,png,jpg|max:2048'
		]);

		$clinic_id = $request->input('clinic_id');
		$generic_name = $request->input('generic_name');
		$brand_name = $request->input('brand_name');
		$manufacturer = $request->input('manufacturer');
		$weight = $request->input('weight');
		$expiration_date = $request->input('expiration_date');
		$other_desc = $request->input('other_desc');
		$price = $request->input('price');
		$quantity_box = $request->input('quantity_box');
		$pcs_per_box = $request->input('pcs_per_box');
		$total_item_quantity = $request->input('total_item_quantity');
		$supplier_name = $request->input('supplier_name');
		$supplier_address = $request->input('supplier_address');
		$term = $request->input('term');
		$contact = $request->input('contact');

		if ($request->file('file')) {
			$filename = $request->file->getClientOriginalName();
			$image_thumb = Image::make($request->file('file'))->resize(250,250)->stream();
			$uploaded = Storage::disk('myDisk')->put($filename, $image_thumb->__toString());
			$path = $request->file->storeAs('public', $filename);
		}
		
		$stockInModel::create([
			'clinic_id' => $clinic_id,
			'generic_name' => $generic_name,
			'brand_name' => $brand_name,
			'manufacturer' => $manufacturer,
			'weight' => $weight,
			'expiration_date' => $expiration_date,
			'other_desc' => $other_desc,
			'price' => $price,
			'quantity_box' => $quantity_box,
			'pcs_per_box' => $pcs_per_box,
			'total_item_quantity' => $total_item_quantity
		]);

		$last_inserted_id = DB::getPdo()->lastInsertId();

		$supplierModel::create([
			'stock_in_id' => $last_inserted_id,
			'supplier_name' => $supplier_name,
			'supplier_address' => $supplier_address,
			'term' => $term,
			'contact' => $contact,
		]);

		$medicineModel::create([
			'clinic_id' => $clinic_id,
			'stock_in_id' => $last_inserted_id,
			'generic_name' => $generic_name,
			'brand_name' => $brand_name,
			'manufacturer' => $manufacturer,
			'weight' => $weight,
			'expiration_date' => $expiration_date,
			'other_desc' => $other_desc,
			'price' => $price,
			'quantity_box' => $quantity_box,
			'pcs_per_box' => $pcs_per_box,
			'total_item_quantity' => $total_item_quantity,
			'image' => $path
		]);
		
		return redirect('inventory/item/'.$clinic_id)->with('successMessage', 'Successfully Added New Stock');
	}
}
