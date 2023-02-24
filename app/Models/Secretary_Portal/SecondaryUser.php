<?php

namespace App\Models\Secretary_Portal;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class SecondaryUser extends Authenticatable
{
	use Notifiable;
    protected $table = 'secondary_user';
    protected $primaryKey = 'sec_id';
}