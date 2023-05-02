<?php

namespace App\Models\Main_Portal;

use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    public $table = 'patient';
    public $fillable = [
    	'fname', 'email', 'address1', 'message', 'clinic_id', 'status', 'lname',
    ];
}
