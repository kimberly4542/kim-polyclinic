<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'fname',
        'mname',
        'lname',
        'birth_date',
        'contact_no',
        'gender',
        'address1',
        'email',
        // Add other fillable fields here
    ];
    protected $table = "patient";
    public $timestamps = false;
}
