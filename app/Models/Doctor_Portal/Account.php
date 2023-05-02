<?php

namespace App\Models\Doctor_Portal;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table = 'secondary_user';
	protected $primaryKey = 'sec_id';
	public $timestamps = false;

	public function kuha ($sec_id)
	{
		$query = Account::find($sec_id);
		dd($query->address);
	}
}
