<?php

namespace App\Http\Controllers\Admin_Portal\ModulePricing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin_Portal\ModuleList;
use App\Models\Admin_Portal\Notification;

class ModulePricingController extends Controller
{
	public function module_pricing () {
		$moduleListQuery = new ModuleList;
		$allNotification = Notification::where('notification_status', 'Unread')->get();

		return view ('admin_portal.module_pricing_and_promo.module_pricing', compact('moduleListQuery', 'allNotification'));
	}

	public function update (Request $request) {

		$request->validate([
			'module_amount' => 'required|max:6|min:2'
		]);

		$module_name = $request->input('module_name');
		$module_amount = $request->input('module_amount');

		$moduleListModel = ModuleList::where('module_name', $module_name)->first();
		$moduleListModel->amount = $module_amount;
		$moduleListModel->save();

		return back()->withInput()->with('successMessage', 'Price, Successfully Updated!');
	}

	// public function profile() {
	// 	return view ('admin_portal.module_pricing_and_promo.profile');
	// }
	// public function queue() {
	// 	return view ('admin_portal.module_pricing_and_promo.queue');
	// }
	// public function schedule() {
	// 	return view ('admin_portal.module_pricing_and_promo.schedule');
	// }
	// public function book() {
	// 	return view ('admin_portal.module_pricing_and_promo.book');
	// }
	// public function bill() {
	// 	return view ('admin_portal.module_pricing_and_promo.bill');
	// }
	// public function inventory() {
	// 	return view ('admin_portal.module_pricing_and_promo.inventory');
	// }
	// public function message() {
	// 	return view ('admin_portal.module_pricing_and_promo.message');
	// }
	// public function manage_report() {
	// 	return view ('admin_portal.module_pricing_and_promo.manage_report');
	// }
	// public function account_settings() {
	// 	return view ('admin_portal.module_pricing_and_promo.account_settings');
	// }
}