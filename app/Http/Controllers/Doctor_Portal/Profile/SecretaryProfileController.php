<?php

namespace App\Http\Controllers\Doctor_Portal\Profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Doctor_Portal\SecondaryUser;

class SecretaryProfileController extends Controller
{
    
    public function secretary_profile()
    {
        $secondaryUserModel = SecondaryUser::all();
        return view ('doctor_portal.profile.secretary_profile', compact('secondaryUserModel'));
     
    }

   
    public function create()
    {
        
    }
    
    public function store(Request $request)
    {
        //
    }
   
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request)
    {
        // $sec_id = $request->input('sec_id');
        // $fname = $request->input('fname');
        // $mname = $request->input('mname');
        // $lname = $request->input('lname');
        // // $contact = $request->input('contact');
        // // $email = $request->input('email');
        // // $birthdate = $request->input('birthdate');      
        // // $address = $request->input('address');
        // // $description = $request->input('description');


        // $request->validate([
        //     'fname' => 'required|max:50|min:3',
        //     'mname' => 'required|max:50|min:2',
        //     'lname' => 'required|max:50|min:3',
        //     // 'contact' => 'required|max:11|min:11',
        //     // 'email' => 'required|max:50|min:10',
        //     // 'birthdate' => 'required|max:50|min:5',
        //     // 'address' => 'required|max:50|min:5',
        //     // 'description' => 'required|max:255|min:5',
        // ]);

        // $model = SecondaryUser::find($sec_id);
        // $model->fname = $fname;
        // $model->mname = $mname;
        // $model->lname = $lname;
        // // $model->contact_num = $contact;
        // // $model->email = $email;
        // // $model->birthdate = $birthdate;
        // // $model->address = $address;
        // // $model->description = $description;
        // $model->save();

        // return back()->withInput()->with('successMessage', 'Successfully updated');
    }

   
    public function destroy($id)
    {
        //
    }
}
