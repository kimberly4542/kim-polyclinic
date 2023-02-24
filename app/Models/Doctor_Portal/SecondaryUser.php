<?php

namespace App\Models\Doctor_Portal;

use Illuminate\Database\Eloquent\Model;

class SecondaryUser extends Model
{
	protected $table = 'secondary_user';
	protected $primaryKey = 'sec_id';
	public $timestamps = false;
}
