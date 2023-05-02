<?php

namespace App\Models\Doctor_Portal;

use Illuminate\Database\Eloquent\Model;

class clinic_schedule extends Model
{
    public $table = 'clinic_schedule';
    public $fillable = [
    	'sched_id', 'clinic_id', 'day', 'time_in', 'time_out', 'created_at', 'updated_at',
    ];
}
