<?php

namespace App\Models\Doctor_portal;

use Illuminate\Database\Eloquent\Model;

class patient_schedule extends Model
{
    public $table = 'patient_schedule';
    public $fillable = [
    	'patient_schedule_id', 'patient_id', 'clinic_id', 'sched_date', 'consultation_id', 'updated_at', 'created_at', 'note',
    ];
}
