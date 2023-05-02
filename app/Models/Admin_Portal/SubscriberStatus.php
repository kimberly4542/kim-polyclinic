<?php

namespace App\Models\Admin_Portal;

use Illuminate\Database\Eloquent\Model;
use App\Models\Admin_Portal\Specialization;

class SubscriberStatus extends Model
{
   	protected $table = 'subscriber_status';
	protected $primaryKey = 'status_id';
	public $timestamps = false;
	public $remember_token = false;

	public function subscribers () {
		return $this->hasMany('App\Models\Admin_Portal\Subscribers', 'subscriber_id', 'subscriber_id');
	}

	public function specialization ($subscriber_id) {
		$specializationModel = new Specialization;
		$query = $specializationModel->where('subscriber_id', $subscriber_id)->get();
		foreach ($query as $data) {
			return $data->name;
		}
	}
}
