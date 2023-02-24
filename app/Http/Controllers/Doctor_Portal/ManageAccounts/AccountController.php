<?php

namespace App\Http\Controllers\Doctor_Portal\ManageAccounts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Doctor_Portal\Account;
use App\Models\Doctor_Portal\SecondaryUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Image;
use Storage;

class AccountController extends Controller
{
   
    public function accounts()
    {
        $subscriber_id = Auth::id();
        $model = Account::where('subscriber_id', $subscriber_id)->get();
        
        return view ('doctor_portal.accounts.accounts', compact('model'));
    }

   
    public function create()
    {
        //
    }

   
   public function store (Request $request)  
    {
        $subscriber_id = Auth::id();
        $request->validate([
            'fname' => 'required|max:50|min:2',
            'mname' => 'required|max:50|min:2',
            'lname' => 'required|max:50',
            'username' => 'required|unique:secondary_user,username|max:50|min:2',
            'password' => 'required|confirmed',
        ]);

        $fname = $request->input('fname');
        $mname = $request->input('mname');
        $lname = $request->input('lname');
        $username = $request->input('username');
        $password = $request->input('password');
        $hashedPassword = Hash::make($password, [
            'rounds' => 12
        ]);
        if ($request->file('file')) {
            $filename = $request->file->getClientOriginalName();
            $image_thumb = Image::make($request->file('file'))->resize(250,250)->stream();
            $uploaded = Storage::disk('accountDisk')->put($filename, $image_thumb->__toString());
            $path = $request->file->storeAs('public', $filename);
        };

        $birthdate = $request->input('birthdate');
        $contact_num = $request->input('contact_num');
        $email = $request->input('email');
        $address = $request->input('address');
        $description = $request->input('description');
        

        $model = new SecondaryUser;
        $model->fname = $fname;
        $model->mname = $mname;
        $model->lname = $lname;
        if ($request->file('file')) {
            $model->image = $path;
        }
        $model->username = $username;
        $model->password = $hashedPassword;
        $model->birthdate = $birthdate;
        $model->contact_num = $contact_num;
        $model->email = $email;
        $model->address = $address;
        $model->description = $description;
        $model->subscriber_id = $subscriber_id;
        $model->save();
        return back()->withInput()->with('success', 'Successfully Registered');
        // return redirect()->action('Auth\RegisterController@index')->with('success', 'successfuly registered new user');
    }
   
    public function update(Request $request)
    {

        $sec_id = $request->input('sec_id');
        $fname = $request->input('fname');
        $mname = $request->input('mname');
        $lname = $request->input('lname');
        $username = $request->input('username');
        if ($request->file('file')) {
            $filename = $request->file->getClientOriginalName();
            $image_thumb = Image::make($request->file('file'))->resize(250,250)->stream();
            $uploaded = Storage::disk('accountDisk')->put($filename, $image_thumb->__toString());
            $path = $request->file->storeAs('public', $filename);
        };
        $lname = $request->input('lname');
        $contact_num = $request->input('lname');
        $address = $request->input('lname');
        $description = $request->input('description');

        
        // dd( $admin_id, $firstname, $lastname, $username);
        // dd($request->all());

        $request->validate([
            'fname' => 'required|max:50|min:2', 
            'mname' => 'required|max:50|min:2',
            'lname' => 'required|max:50|min:2',
            
            // 'username' => 'required|max:255|min:2|unique:secondary_user,username,'.$sec_id.',sec_id'
            'username' => 'required'
        ]);

        $model = SecondaryUser::find($sec_id);

        $model->fname = $fname;
        $model->mname = $mname;
        $model->lname = $lname;
        $model->contact_num = $contact_num;
        $model->address = $address;
        $model->description = $description;

        if ($request->file('file')) {
            $model->image = $path;
        }
        $model->username = $username;
        $model->save();

        return redirect()->action('Doctor_Portal\ManageAccounts\AccountController@accounts')->with('success', 'User successfully updated');
        // return redirect()->action('SettingsController@admin_account')->with('success', 'User successfully updated');
    }

   
    public function destroy(Request $request)
    {
        $sec_id = $request->input('sec_id');
        $model = Account::find($sec_id);
        $model->delete();

        return redirect()->action('Doctor_Portal\ManageAccounts\AccountController@accounts')->with('success', 'User successfully deleted');
    }
}
