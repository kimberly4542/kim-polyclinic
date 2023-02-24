<?php

namespace App\Models\Doctor_Portal;

use Illuminate\Database\Eloquent\Model;

class PatientReportModel extends Model
{
	protected $table = 'patient';
	protected $primaryKey = 'patient_id';
	public $timestamps = false;
}