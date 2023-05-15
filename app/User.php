<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
	use Notifiable;

	protected $table = 'cityadmin_user';
	protected $primaryKey = 'id';
	public $remember_token = false;

	// protected $table = 'user';
	// protected $primaryKey = 'id';
	// public $remember_token = false;

	//  The attributes that are mass assignable.

	protected $fillable = [
		'email', 'password',
	];

	//  The attributes that should be hidden for arrays.

	protected $hidden = [
		'password', 'remember_token',
	];


}
