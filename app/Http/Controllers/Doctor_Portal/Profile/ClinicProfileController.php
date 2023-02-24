<?php

namespace App\Http\Controllers\Doctor_Portal\Profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Doctor_Portal\Clinic;
use Illuminate\Support\Facades\Auth;
use Storage;
use Image;

class ClinicProfileController extends Controller
{
	
	public function clinic_profile()
	{
		$subscriberQuery = Auth::id();
		$clinicQuery = Clinic::where('subscriber_id', $subscriberQuery )->get();
		return view ('doctor_portal.profile.clinic_profile', compact('clinicQuery'));
	}

	public function create()
	{
		//
	}

	
	public function store(Request $request)
	{
		$request->validate([
			'clinic_name' => 'required|max:50',
			'license_no' => 'required|max:50|min:5',
			'address' => 'required|max:50|min:2',
			
		]);

		$clinic_name = $request->input('clinic_name');
		$license_no = $request->input('license_no');
		$email_add = $request->input('email_add');
		$cell_no = $request->input('cell_no');
		$tel_no = $request->input('tel_no');
		$address = $request->input('address');
		if ($request->file('file')) {
			$filename = $request->file->getClientOriginalName();
			$image_thumb = Image::make($request->file('file'))->resize(250,250)->stream();
			$uploaded = Storage::disk('clinicDisk')->put($filename, $image_thumb->__toString());
			$path = $request->file->storeAs('public', $filename);
		};
		$subscriber_id = Auth::id();

		$model = new Clinic;
		$model->clinic_name = $clinic_name;
		$model->license_no = $license_no;
		$model->email_add = $email_add;
		$model->cell_no = $cell_no;
		$model->tel_no = $tel_no;
		if ($request->file('file')) {
			$model->image = $path;
		}
		$model->address = $address;
		$model->subscriber_id = $subscriber_id;
		$model->save();

		return back()->withInput()->with('successMessage', 'Successfully Registered');
	}
   
	public function update(Request $request)
	{
		$clinic_id = $request->input('clinic_id');
		$clinic_name = $request->input('clinic_name');
		$address = $request->input('address');
		$license_no = $request->input('license_no');
		$email_add = $request->input('email_add');
		$cell_no = $request->input('cell_no');
		$tel_no = $request->input('tel_no');
		
		// dd( $admin_id, $firstname, $lastname, $username);
		// dd($request->all());

		$request->validate([
			'clinic_id' => 'required|max:50|min:2', 
			'clinic_name' => 'required|max:50|min:3',
			'address' => 'required',
			// 'license_no' => 'required|max:50|min:2',
			// 'email_add' => 'required',
			// 'cell_no' => 'required|max:50|min:2',
			// 'tel_no' => 'required|max:50|min:2',
			
			// 'username' => 'required|unique:secondary_user,username'
		]);

		if ($request->file('file')) {
			$filename = $request->file->getClientOriginalName();
			$image_thumb = Image::make($request->file('file'))->resize(250,250)->stream();
			$uploaded = Storage::disk('myDisk')->put($filename, $image_thumb->__toString());
			$path = $request->file->storeAs('public', $filename);
		}

		$model = Clinic::find($clinic_id);
		$model->clinic_name = $clinic_name;
		$model->address = $address;
		$model->license_no = $license_no;
		$model->email_add = $email_add;
		$model->cell_no = $cell_no;
		$model->tel_no = $tel_no;
		if ($request->file('file')) {
			$model->image = $path;
		}
		$model->save();

		return back()->withInput()->with('success', 'User successfully updated');
	}

	
	public function destroy(Request $request)
	{
		$clinic_id = $request->input('clinic_id');
		$model = Clinic::find($clinic_id);
		$model->delete();

		 return redirect('profile/clinic_profile')->with('success', 'User successfully deleted');
	}
}
