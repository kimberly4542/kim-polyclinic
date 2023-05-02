<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
	use Notifiable;

	protected $table = 'user';
	protected $primaryKey = 'id';
	public $remember_token = false;

	//  The attributes that are mass assignable.

	protected $fillable = [
		'name', 'email', 'password',
	];

	//  The attributes that should be hidden for arrays.

	protected $hidden = [
		'password', 'remember_token',
	];


}
