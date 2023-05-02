<?php

namespace App\Models\Doctor_Portal;

use Illuminate\Database\Eloquent\Model;
use App\Models\Doctor_Portal\Patient;
use App\Models\Doctor_Portal\Clinic;

class Patient extends Model
{
    protected $table = 'patient';
	protected $primaryKey = 'patient_id';
	public $timestamps = false;
	public $remember_token = false;

	public $fillable = [
		'patient_id', 'img_url', 'fname', 'mname', 'lname', 'suffix', 'gender', 'contact_no', 'birth_date', 'address1', 'address2', 'citizenship', 'email', 'civil_status', 'clinic_id', 'insurance_no', 'employment_id', 'guardian_no', 'order', 'status', 'height', 'weight', 'bloodtype', 'userData'
	];

	public function getClinicName ($clinic_id)
	{
		// dd($clinic_id);		
		$clinicNameQuery = Clinic::find($clinic_id);
		return $clinicNameQuery->clinic_name;
	}

	public function getConsultation () {
    	return $this->hasMany('App\Models\Doctor_Portal\consultation', 'patient_id', 'patient_id');
    	
    }

}
