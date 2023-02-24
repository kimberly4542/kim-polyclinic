<?php

namespace App\Models\Admin_Portal;

use Illuminate\Database\Eloquent\Model;
use App\Models\Admin_Portal\Subscribers;
use App\Models\Admin_Portal\SubscAccessibility;
use App\Models\Admin_Portal\ModuleList;
use App\Models\Admin_Portal\Sub1;
use App\Models\Admin_Portal\Sub2;
use App\Models\Admin_Portal\Sub3;

class Subscribers extends Model
{
	protected $table = 'subscribers';
	protected $primaryKey = 'subscriber_id';
	public $timestamps = false;
	public $remember_token = false;

	public function specialization ($spec_id) {
		$data = $this->belongsTo('App\Models\Admin_Portal\Specialization', 'spec_id', 'spec_id')->where('spec_id', $spec_id)->get();
		$newData = $data[0]->name;
		return $newData;
	}

	public function subscriberStatus () {
		return  $this->hasMany(SubscriberStatus::class,'subscriber_id');
	}

	public function getModulesSelected ($subscriber_id) {
		$modlist_id = array();
		$subscAccessibilityQuery  = SubscAccessibility::where('subscriber_id', $subscriber_id)->with(['getMainModules'])->get();
		foreach ($subscAccessibilityQuery as $mainModules) {
			foreach ($mainModules->getMainModules as $moduleList) {
				array_push($modlist_id, $moduleList->modlist_id);
			}
		}

		$moduleName = ModuleList::find($modlist_id);
		return $moduleName;
	}

	public function getSub1Module ($subscriber_id) {
		$sub1_id = array();
		$subscAccessibilityQuery  = SubscAccessibility::where('subscriber_id', $subscriber_id)->with(['getSubModules'])->get();
		foreach ($subscAccessibilityQuery as $sub_modules) {
			foreach ($sub_modules->getSubModules as $sub1module_list) {
				array_push($sub1_id, $sub1module_list->sub1_id);
			}
		}

		$moduleName = Sub1::find($sub1_id);
		
		return $moduleName;
	}

	public function getSub2Module ($subscriber_id) {
		$sub2_id = array();
		$subscAccessibilityQuery  = SubscAccessibility::where('subscriber_id', $subscriber_id)->with(['getSubModules2'])->get();
		foreach ($subscAccessibilityQuery as $sub_modules) {
			foreach ($sub_modules->getSubModules2 as $sub2module_list) {
				array_push($sub2_id, $sub2module_list->sub2_id);
			}
		}

		$moduleName = Sub2::find($sub2_id);
		return $moduleName;
	}

	public function getSub3Module ($subscriber_id) {
		$sub3_id = array();
		$subscAccessibilityQuery  = SubscAccessibility::where('subscriber_id', $subscriber_id)->with(['getSubModules3'])->get();
		foreach ($subscAccessibilityQuery as $sub_modules) {
			foreach ($sub_modules->getSubModules3 as $sub2module_list) {
				array_push($sub3_id, $sub2module_list->sub3_id);
			}
		}

		$moduleName = Sub3::find($sub3_id);
		return $moduleName;
	}

	public function getDuration ($subscriber_id) {
		$subscAccessibilityQuery  = SubscAccessibility::where('subscriber_id', $subscriber_id)->with(['getDuration'])->get();
		foreach ($subscAccessibilityQuery as $data) {
			return ($data->getDuration->type);
		}
	}

	public function getActiveDuration ($subscriber_id) {
		$subscAccessibilityQuery  = SubscAccessibility::where('subscriber_id', $subscriber_id)->with(['getDuration'])->get();
		foreach ($subscAccessibilityQuery as $data) {
			return ($data->getDuration->date_to);
		}
	}

	public function getDurationId ($subscriber_id) {
		$subscAccessibilityQuery  = SubscAccessibility::where('subscriber_id', $subscriber_id)->with(['getDuration'])->get();
		foreach ($subscAccessibilityQuery as $data) {
			return ($data->getDuration->duration_id);
		}
	}

}
