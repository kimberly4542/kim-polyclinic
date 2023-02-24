<?php

namespace App\Models\Doctor_Portal;

use Illuminate\Database\Eloquent\Model;

class StockOut extends Model
{
    protected $table = 'stock_out';
    protected $primaryKey = 'stock_out_id';

    public $fillable = [
    	'generic_name', 'brand_name', 'manufacturer', 'weight', 'price', 'total_item_quantity', 'created_at', 'updated_at', 'med_id', 'quantity', 'dose', 'frequency',
    ];

    public function getMedicine () {
		return $this->belongsTo('App\Models\Doctor_Portal\Medicine', 'med_id', 'med_id');
	}
}
