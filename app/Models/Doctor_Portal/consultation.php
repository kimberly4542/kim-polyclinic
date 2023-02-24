<?php

namespace App\Models\Doctor_Portal;

use Illuminate\Database\Eloquent\Model;

class consultation extends Model
{
	protected $table = 'consultation';
	protected $primaryKey = 'consultation_id';
	public $remember_token = false;

	public $fillable = [
		'consultation_id','created_at', 'updated_at', 'patient_id',
	];

	public function getConsultation ($consultation_id) {
		$consultationQuery = consultation::where('consultation_id', $consultation_id)->with(['getDiagnosis'])->get();
		foreach ($consultationQuery as $consultation) {
			foreach ($consultation->getDiagnosis as $diagnosis) {
			   return ($diagnosis->diagnos);
			}
		}
	}

	public function getConsultationDate ($consultation_id) {
		$consultationQuery = consultation::where('consultation_id', $consultation_id)->with(['getDiagnosis'])->get();
		foreach ($consultationQuery as $consultation) {
			foreach ($consultation->getDiagnosis as $diagnosis) {
			   return ($diagnosis->created_at);
			}
		}
	}

	public function getMedicationDose ($consultation_id) {
		$medicationQuery = consultation::where('consultation_id', $consultation_id)->with(['getMedication'])->get();
		foreach ($medicationQuery as $medication) {
			foreach ($medication->getMedication as $medication) {
			   return ($medication->dose);
			}
		}
	}

	public function getMedicationFrequency ($consultation_id) {
		$medicationQuery = consultation::where('consultation_id', $consultation_id)->with(['getMedication'])->get();
		foreach ($medicationQuery as $medication) {
			foreach ($medication->getMedication as $medication) {
			   return ($medication->frequency);
			}
		}
	}

	public function getBillingDate ($consultation_id) {
		$consultationQuery = consultation::where('consultation_id', $consultation_id)->with(['getBilling'])->get();
		foreach ($consultationQuery as $consultation) {
			foreach ($consultation->getBilling as $billing) {
			  	return ($billing->created_at);
			}
		}
	}

	public function getParticulars ($consultation_id) {
		$consultationQuery = consultation::where('consultation_id', $consultation_id)->with(['getBilling'])->get();
		foreach ($consultationQuery as $consultation) {
			foreach ($consultation->getBilling as $billing) {
			  	return ($billing->particulars);
			}
		}
	}

	public function getDuration ($consultation_id) {
		$consultationQuery = consultation::where('consultation_id', $consultation_id)->with(['getBilling'])->get();
		foreach ($consultationQuery as $consultation) {
			foreach ($consultation->getBilling as $billing) {
			  	return ($billing->quantity);
			}
		}
	}

	public function getPayable ($consultation_id) {
		$consultationQuery = consultation::where('consultation_id', $consultation_id)->with(['getBilling'])->get();
		foreach ($consultationQuery as $consultation) {
			foreach ($consultation->getBilling as $billing) {
			  	return ($billing->total_amount);
			}
		}
	}

	public function getBilling () {
		return $this->hasMany('App\Models\Doctor_Portal\billings', 'consultation_id', 'consultation_id');
	}

	public function getMedication () {
		return $this->hasMany('App\Models\Doctor_Portal\medications', 'consultation_id', 'consultation_id');
	}

	public function getDiagnosis () {
		return $this->hasMany('App\Models\Doctor_Portal\diagnosis', 'consultation_id', 'consultation_id');
	}

}
