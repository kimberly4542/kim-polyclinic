<?php

namespace App\Models\Doctor_Portal;

use Illuminate\Database\Eloquent\Model;

class GuardianInformation extends Model
{
	protected $table = 'guardian_info';
	protected $primaryKey = 'guardian_no';
	protected $fillable = ['patient_id', 'fname', 'lname' , 'mname' , 'suffix' , 'birth_date' , 'gender' , 'occupation' , 'employer' , 'email' , 'contact' , 'address'];

	public function getGuardianNo ($patient_id) {
		$guardianDataQuery = $this->where('patient_id', $patient_id)->get();
		foreach ($guardianDataQuery as $data) {
			return $data->guardian_no;
		}
	}

	public function getFname ($patient_id) {
		$guardianDataQuery = $this->where('patient_id', $patient_id)->get();
		foreach ($guardianDataQuery as $data) {
			return $data->fname;
		}
	}

	public function getMname ($patient_id) {
		$guardianDataQuery = $this->where('patient_id', $patient_id)->get();
		foreach ($guardianDataQuery as $data) {
			return $data->mname;
		}
	}

	public function getLname ($patient_id) {
		$guardianDataQuery = $this->where('patient_id', $patient_id)->get();
		foreach ($guardianDataQuery as $data) {
			return $data->lname;
		}
	}

	public function getSuffix ($patient_id) {
		$guardianDataQuery = $this->where('patient_id', $patient_id)->get();
		foreach ($guardianDataQuery as $data) {
			return $data->suffix;
		}
	}

	public function getBirthDate ($patient_id) {
		$guardianDataQuery = $this->where('patient_id', $patient_id)->get();
		foreach ($guardianDataQuery as $data) {
			return $data->birth_date;
		}
	}

	public function getGender ($patient_id) {
		$guardianDataQuery = $this->where('patient_id', $patient_id)->get();
		foreach ($guardianDataQuery as $data) {
			return $data->gender;
		}
	}

	public function getOccupation ($patient_id) {
		$guardianDataQuery = $this->where('patient_id', $patient_id)->get();
		foreach ($guardianDataQuery as $data) {
			return $data->occupation;
		}
	}

	public function getEmployer ($patient_id) {
		$guardianDataQuery = $this->where('patient_id', $patient_id)->get();
		foreach ($guardianDataQuery as $data) {
			return $data->employer;
		}
	}

	public function getEmail ($patient_id) {
		$guardianDataQuery = $this->where('patient_id', $patient_id)->get();
		foreach ($guardianDataQuery as $data) {
			return $data->email;
		}
	}

	public function getContact ($patient_id) {
		$guardianDataQuery = $this->where('patient_id', $patient_id)->get();
		foreach ($guardianDataQuery as $data) {
			return $data->contact;
		}
	}

	public function getAddress ($patient_id) {
		$guardianDataQuery = $this->where('patient_id', $patient_id)->get();
		foreach ($guardianDataQuery as $data) {
			return $data->address;
		}
	}
}
