<?php

namespace App\Models\Doctor_Portal;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
	protected $table = 'supplier';
	protected $primaryKey = 'supplier_id';
	protected $fillable = [
		'stock_in_id',
		'supplier_name',
		'supplier_address',
		'term',
		'contact'
	];
}
