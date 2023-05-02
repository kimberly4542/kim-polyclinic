<?php

namespace App\Models\Doctor_Portal;

use Illuminate\Database\Eloquent\Model;

class billings extends Model
{
    protected $table = 'billings';
    protected $primaryKey = 'bill_no';
    public $fillable = [
    	'bill_no', 'created_at', 'unit', 'quantity', 'total_amount', 'downpayment', 'consultation_id', 'particulars'
    ];
}
