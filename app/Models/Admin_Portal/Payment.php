<?php

namespace App\Models\Admin_Portal;

use Illuminate\Database\Eloquent\Model;
use App\Models\Admin_Portal\Payment;
use App\Models\Admin_Portal\SubscAccessibility;

class Payment extends Model
{
    protected $table = 'payment';
	protected $primaryKey = 'payment_id';
	public $timestamps = false;
	public $remember_token = false;

	public function paymentAmount ($subscriber_id) {
		$amountQuery = SubscAccessibility::where('subscriber_id', $subscriber_id)->get();
		foreach ($amountQuery as $amount) {
			return $amount->total_payment;
		}

	}

	public function paymentMode ($subscriber_id) {
		$paymentModeQuery = $this->where('subscriber_id', $subscriber_id)->get();
		foreach ($paymentModeQuery as $paymentMode) {
			return $paymentMode->payment_mode;
		}
	}
}
