<?php

namespace App\Models\Doctor_Portal;

use Illuminate\Database\Eloquent\Model;

class symptoms extends Model
{
    protected $table = 'symptoms';
	protected $primaryKey = 'symptoms_id';
	public $remember_token = false;

	public $fillable = [
		'symptoms_id', 'symptoms', 'created_at', 'updated_at', 'consultation_id',
	];
}
