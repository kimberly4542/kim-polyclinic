<?php

namespace App\Models\Doctor_Portal;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Subscribers extends Authenticatable
{
    use Notifiable;
	
	protected $table = 'subscribers';
	protected $primaryKey = 'subscriber_id';
	public $timestamps = false;
	public $remember_token = false;

	public function getCLinic () {
		return $this->hasMany('App\Models\Doctor_Portal\Clinic', 'subscriber_id', 'subscriber_id');
	}
}