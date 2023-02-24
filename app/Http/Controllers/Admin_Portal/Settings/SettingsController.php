<?php

namespace App\Http\Controllers\Admin_Portal\Settings;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Support\Facades\DB;
use App\Models\Admin_Portal\Notification;


class SettingsController extends Controller
{
	public function admin_account () {
		$id = Auth::id();
		$adminUserQuery = DB::table('user')->get();
		$allNotification = Notification::where('notification_status', 'Unread')->get();
		
		return view ('admin_portal.settings.admin_account', compact('adminUserQuery', 'allNotification'));
	}

	public function update_account () {
		$id = Auth::id();
		$adminModel = DB::table('user')->where('id', $id)->first();
		$admin_fname = $adminModel->fname;
		$admin_lname = $adminModel->lname;
		$admin_username = $adminModel->username;
		$allNotification = Notification::where('notification_status', 'Unread')->get();

		return view ('admin_portal.settings.update_account', compact('admin_fname', 'admin_lname', 'admin_username', 'allNotification'));
	}

	public function update_admin_account (Request $request) {
		$id = Auth::id();
		$firstname = $request->input('firstname');
		$lastname = $request->input('lastname');
		$username = $request->input('username');
		$password = Hash::make(request('password'));

		$request->validate([
			'firstname' => 'required|max:50|min:2', 
			'lastname' => 'required|max:50|min:2',
			'username' => 'required|max:255|min:2|unique:user,username,'.$id.',id',
			'password' => 'confirmed'
		]);
			$update = DB::table('user')->where('id', '=', $id)
						->update(['fname' => $firstname, 'lname' => $lastname, 'username' => $username, 'password' => $password]);

		return back()->withInput()->with('successMessage', 'successfully updated account');
	}

	public function update (Request $request) {
		$id = $request->input('id');
		$firstname = $request->input('firstname');
		$lastname = $request->input('lastname');
		$username = $request->input('username');
		
		// dd( $admin_id, $firstname, $lastname, $username);
		// dd($request->all());

		$request->validate([
			'firstname' => 'required|max:50|min:2', 
			'lastname' => 'required|max:50|min:2',
			'username' => 'required|max:255|min:2|unique:user,username,'.$id.',id'
		]);
		$update = DB::table('user')->where('id', '=', $id)
						->update(['fname' => $firstname, 'lname' => $lastname, 'username' => $username]);

		return redirect('settings/admin_account')->with('success', 'User successfully updated');
	} 

	public function destroy (Request $request) {
		$id = $request->input('id');
		DB::table('user')->where('id', '=', $id)->delete();

		return redirect('settings/admin_account')->with('success', 'User successfully deleted');
	}
}
