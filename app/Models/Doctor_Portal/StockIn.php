<?php

namespace App\Models\Doctor_Portal;

use Illuminate\Database\Eloquent\Model;

class StockIn extends Model
{
	protected $table = 'stock_in';
	protected $primaryKey = 'stock_in_id';
	protected $fillable = [
		'generic_name',
		'brand_name',
		'manufacturer',
		'weight',
		'expiration_date',
		'other_desc',
		'price',
		'quantity_box',
		'pcs_per_box',
		'total_item_quantity',
		'clinic_id',
	];

	public function getMedicine () {
		return $this->belongsTo('App\Models\Doctor_Portal\Medicine', 'stock_in_id', 'stock_in_id'); 
	}
}
