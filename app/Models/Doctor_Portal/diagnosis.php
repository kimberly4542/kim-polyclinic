<?php

namespace App\Models\Doctor_Portal;

use Illuminate\Database\Eloquent\Model;

class diagnosis extends Model
{
	protected $table = 'diagnosis';
	protected $primaryKey = 'diag_id';
	public $remember_token = false;

	public $fillable = [
		'diag_id', 'diagnos', 'created_at', 'updated_at', 'consultation_id',
	];
}
