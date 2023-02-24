<?php

namespace App\Models\Admin_Portal;

use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    protected $table = 'clinic';
    protected $primaryKey = 'clinic_id';

    public function getClinicAddress ($subscriber_id) {
    	$clinicAddressQuery = $this->where('subscriber_id', $subscriber_id)->get();
    	
    	foreach ($clinicAddressQuery as $data ) {
    		return $data->address;
    	}
    }
}
