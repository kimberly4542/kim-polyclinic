<?php

namespace App\Models\Admin_Portal;

use Illuminate\Database\Eloquent\Model;

class Specialization extends Model
{
    protected $table = 'specialization';
	protected $primaryKey = 'spec_id';
	public $timestamps = false;
	public $remember_token = false;

	public function subscribers() {
		return $this->hasMany('App\Models\Admin_Portal\Subscribers', 'subscriber_id');
	}
}
