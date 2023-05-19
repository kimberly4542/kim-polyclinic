<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CityAdminPatients extends Model
{
    protected $table = "cityadmin_patients";

    protected $fillable = [
        'fname',
        'mname',
        'lname',
        'suffix',
        'birth_date',
        'contact_no',
        'gender',
        'address1',
        'email',
        'diagnosed_date',
        'diagnosis'
        // Add other fillable fields here
    ];
}
