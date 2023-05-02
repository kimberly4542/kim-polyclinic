<?php

namespace App\Models\Doctor_Portal;

use Illuminate\Database\Eloquent\Model;
use App\Models\Doctor_Portal\medications;

class medications extends Model
{
    protected $table = 'medications';
	protected $primaryKey = 'presc_id';
	public $remember_token = false;

	public $fillable = [
		'presc_id', 'med_id', 'quantity', 'frequency', 'note', 'created_at', 'updated_at', 'consultation_id', 'dose',
	];

	public function getMedication ($consultation_id) {
		$medicationQuery = medications::where('consultation_id', $consultation_id)->with(['getMedicine'])->get();

		foreach ($medicationQuery as $medication) {
			if($medication->getMedicine != null) {
				return ($medication->getMedicine->generic_name);
			}
			else {
				return 'No Medicine Provided';
			}
		}
	}

	public function getMedicine () {
		return $this->belongsTo('App\Models\Doctor_Portal\Medicine', 'med_id', 'med_id');
	}
}
