<?php

namespace App\Http\Controllers\Doctor_Portal\Profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Doctor_Portal\Medicine;
use App\Models\Doctor_Portal\Clinic;
use Illuminate\Support\Facades\Auth;
use Storage;
use Image;

class PatientProfileMedicineController extends Controller
{

	public function clinic_medicines () {
		$subscriber_id = Auth::id();
		$clinicQuery = Clinic::where('subscriber_id', $subscriber_id)->get();
		
		return view ('doctor_portal.profile.medicine_clinic', compact('clinicQuery'));
	}
	
	public function patient_profile_medicine($clinic_id)
	{
		$medicineQuery = Medicine::where('clinic_id', $clinic_id)->get();
		// dd($medicineQuery);

		return view ('doctor_portal.profile.patient_profile_medicine', compact('medicineQuery', 'clinic_id'));
	}


	public function store(Request $request)
	{
		$request->validate([
			'generic_name' => 'required|min:3',
			'brand_name' => 'required|min:3',
			'manufacturer' => 'required|min:3',
			'weight' => 'required',
			// 'file' => 'required',
			// 'expiration_date' => 'required',
			// 'other_desc' => 'required',
			'price' => 'required',
			'quantity_box' => 'required',
			'pcs_per_box' => 'required',
			'total_item_quantity' => 'required',
		]);

		$clinic_id = $request->input('clinic_id');
		$generic_name = $request->input('generic_name');
		$brand_name = $request->input('brand_name');
		$manufacturer = $request->input('manufacturer');
		$weight = $request->input('weight');
		 if ($request->file('file')) {
            $filename = $request->file->getClientOriginalName();
            
           // Storage::disk('myowndisk')->put($filename, file_get_contents($request->file('file')->getRealPath()));

            $image_thumb = Image::make($request->file('file'))->resize(250,250)->stream();

            $uploaded = Storage::disk('medDisk')->put($filename, $image_thumb->__toString());
            

            // $fileSize = $request->file->getClientSize();

           $path = $request->file->storeAs('public', $filename);
        
        }
		// $expiration_date = $request->input('expiration_date');
		// $other_desc = $request->input('other_desc');
		$price = $request->input('price');
		$quantity_box = $request->input('quantity_box');
		$pcs_per_box = $request->input('pcs_per_box');
		$total_item_quantity = $request->input('total_item_quantity');

		$model = new Medicine;
		$model->clinic_id = $clinic_id;
		$model->generic_name = $generic_name;
		$model->brand_name = $brand_name;
		$model->manufacturer = $manufacturer;
		$model->weight = $weight;
		// $model->expiration_date = $expiration_date;
		// $model->other_desc = $other_desc;
		$model->price = $price;
		$model->quantity_box = $quantity_box;
		$model->pcs_per_box = $pcs_per_box;
		$model->total_item_quantity = $total_item_quantity;
		if ($request->file('file')) {
			$model->image = $path;
		}

		$model->save();

		return back()->withInput()->with('successMessage', 'Successfully added new medicine');
	}
   
	public function update(Request $request)
	{
		$med_id = $request->input('med_id');
		$generic_name = $request->input('generic_name');
		$brand_name = $request->input('brand_name');
		$manufacturer = $request->input('manufacturer');
		$weight = $request->input('weight');
		if ($request->file('file')) {
			$filename = $request->file->getClientOriginalName();
		   // Storage::disk('myowndisk')->put($filename, file_get_contents($request->file('file')->getRealPath()));
			$image_thumb = Image::make($request->file('file'))->resize(250,250)->stream();
			$uploaded = Storage::disk('myDisk')->put($filename, $image_thumb->__toString());
			// $fileSize = $request->file->getClientSize();
			$path = $request->file->storeAs('public', $filename);
		
		};
		$expiration_date = $request->input('expiration_date');
		// $other_desc = $request->input('other_desc');
		$price = $request->input('price');
		$quantity_box = $request->input('quantity_box');
		$pcs_per_box = $request->input('pcs_per_box');
		$total_item_quantity = $request->input('total_item_quantity');
		
		// dd( $admin_id, $firstname, $lastname, $username);
		// dd($request->all());

		$request->validate([
			'med_id' => 'required', 
			'generic_name' => 'required',
			'brand_name' => 'required',
			'manufacturer' => 'required',
			'weight' => 'required',
			// 'other_desc' => 'required',
			'price' => 'required',
			// 'file' => 'required'
		]);

		$model = Medicine::find($med_id);

		$model->generic_name = $generic_name;
		$model->brand_name = $brand_name;
		$model->manufacturer = $manufacturer;
		$model->weight = $weight;
		$model->expiration_date = $expiration_date;
		// $model->other_desc = $other_desc;
		$model->price = $price;
		$model->quantity_box = $quantity_box;
		$model->pcs_per_box = $pcs_per_box;
		$model->total_item_quantity = $total_item_quantity;
		if ($request->file('file')) {
			$model->image = $path;
		}
		$model->save();

		 return back()->withInput()->with('successMessage', 'Medicine Updated');
	}

	public function destroy($id)
	{
		//
	}
}
