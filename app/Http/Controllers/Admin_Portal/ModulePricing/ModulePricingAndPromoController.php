<?php

namespace App\Http\Controllers\Admin_Portal\ModulePricing;

use Illuminate\Http\Request;

class ModulePricingAndPromoController extends Controller
{
	public function module_pricing () {
		return view ('admin_portal.module_pricing_and_promo.module_pricing');
	}
	public function profile() {
		return view ('admin_portal.module_pricing_and_promo.profile');
	}
	public function queue() {
		return view ('admin_portal.module_pricing_and_promo.queue');
	}
	public function schedule() {
		return view ('admin_portal.module_pricing_and_promo.schedule');
	}
	public function book() {
		return view ('admin_portal.module_pricing_and_promo.book');
	}
	public function bill() {
		return view ('admin_portal.module_pricing_and_promo.bill');
	}
	public function inventory() {
		return view ('admin_portal.module_pricing_and_promo.inventory');
	}
	public function message() {
		return view ('admin_portal.module_pricing_and_promo.message');
	}
	public function manage_report() {
		return view ('admin_portal.module_pricing_and_promo.manage_report');
	}
	public function account_settings() {
		return view ('admin_portal.module_pricing_and_promo.account_settings');
	}
}
