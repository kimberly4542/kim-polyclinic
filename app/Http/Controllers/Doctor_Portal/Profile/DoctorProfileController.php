<?php

namespace App\Http\Controllers\Doctor_Portal\Profile;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor_Portal\Subscribers;
use Storage;
use Image;
class DoctorProfileController extends Controller
{

	// Display a listing of the resource.

	public function doctor_profile()
	{
		$authenticatedUser = Auth::id();
		$model = Subscribers::find($authenticatedUser);
		// dd($model);
		return view ('doctor_portal.profile.doctor_profile', compact('model'));
	}
	
	function update(Request $request)
	{ 
		$request->validate([
			'fname' => 'required|max:50|min:3',
			'mname' => 'required|max:50|min:2',
			'lname' => 'required|max:50|min:3',
			// 'file' => 'required',
			// 'contact' => 'required|max:11|min:11',
			// 'email' => 'required|max:50|min:10',
			// 'birthdate' => 'required|max:50|min:5',
			// 'address' => 'required|max:50|min:5',
		]);
		$subscriber_id = $request->input('subscriber_id');
		$fname = $request->input('fname');
		$mname = $request->input('mname');
		$lname = $request->input('lname');


		if ($request->file('file')) {
			$filename = $request->file->getClientOriginalName();
			$image_thumb = Image::make($request->file('file'))->resize(250,250)->stream();
			$uploaded = Storage::disk('myDisk')->put($filename, $image_thumb->__toString());
			$path = $request->file->storeAs('public', $filename);
		}


		$contact = $request->input('contact');
		$email = $request->input('email');
		$birthdate = $request->input('birthdate');		
		$address = $request->input('address');
		
		$model = Subscribers::find($subscriber_id);
		$model->fname = $fname;
		$model->mname = $mname;
		$model->lname = $lname;
		if ($request->file('file')) {
			$model->image = $path;
		}
		$model->contact_num = $contact;
		$model->email = $email;
		$model->birthdate = $birthdate;
		$model->address = $address;
		$model->save();

		return back()->withInput()->with('successMessage', 'Successfully updated');
	}

	// Remove the specified resource from storage.

	public function destroy($id)
	{
		//
	}
}
