<?php

namespace App\Models\Doctor_Portal;

use Illuminate\Database\Eloquent\Model;

class BillingInfo extends Model
{
    protected $table = 'billing_info';
    protected $primaryKey = 'bill_code';
    public $fillable = [
    	'bill_code', 'created_at', 'status', 'payable', 'practitioner', 'insurances', 'mode_of_payment', 'frequency', 'frequency_payment', 'billed_amount', 'insurance_discount', 'total_payable', 'patient_id',
    ];
}
