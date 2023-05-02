<?php

namespace App\Models\Doctor_Portal;

use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    protected $table = 'purchase_order';
    protected $primaryKey = 'po_id';
    protected $fillable = [
    	'supplier_name',
    	'supplier_address',
    	'term',
    	'po',
    	'delivery_date',
    	'requested_by',
    	'approved_by',
    	'notes',
    	'item_name',
    	'quantity',
    	'item_price',
    	'total',
    	'clinic_id',
    ];
}
