<?php

namespace App\Models\Doctor_Portal;

use Illuminate\Database\Eloquent\Model;
use App\Models\Doctor_Portal\Patient;

class Clinic extends Model
{
	protected $table = 'clinic';
	protected $primaryKey = 'clinic_id';
	// public $timestamps = false;

	public function getPatients () {
		// $patientQuery = Patient::where('clinic_id', $clinic_id);
		return 1;

	}
	public function getPatient () {
		// $patientQuery = Patient::where('clinic_id', $clinic_id);
		return $this->hasMany('App\Models\Doctor_Portal\Patient', 'clinic_id', 'clinic_id');
		
	}
	public function getStockIn () {
		return $this->hasMany('App\Models\Doctor_Portal\StockIn', 'clinic_id', 'clinic_id');
	}

	public function getMedicine () {
		return $this->hasMany('App\Models\Doctor_Portal\Medicine', 'clinic_id', 'clinic_id');
	}
}
