<?php

namespace App\Models\Doctor_Portal;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
	protected $table = 'medicine';
	protected $primaryKey = 'med_id';
	public $remember_token = false;
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
		'stock_in_id',
		'image'
	];

	public function getStockOut () {
		return $this->hasMany('App\Models\Doctor_Portal\StockOut', 'med_id', 'med_id');
	}
}