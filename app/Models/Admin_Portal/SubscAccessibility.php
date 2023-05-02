<?php

namespace App\Models\Admin_Portal;

use Illuminate\Database\Eloquent\Model;
use App\Models\Admin_Portal\MainModule;
use App\Models\Admin_Portal\SubModule;
use App\Models\Admin_Portal\SubModule2;
use App\Models\Admin_Portal\SubModule3;

class SubscAccessibility extends Model
{
    protected $table = 'subsc_accessibility';
    protected $primaryKey = 'acc_id';

    public function getMainModules () {
    	return $this->hasMany('App\Models\Admin_Portal\MainModule', 'acc_id', 'acc_id');
    }

    public function getSubModules () {
    	return $this->hasMany('App\Models\Admin_Portal\SubModule', 'acc_id', 'acc_id');
    }

     public function getSubModules2 () {
    	return $this->hasMany('App\Models\Admin_Portal\SubModule2', 'acc_id', 'acc_id');
    }

     public function getSubModules3 () {
    	return $this->hasMany('App\Models\Admin_Portal\SubModule3', 'acc_id', 'acc_id');
    }

    public function getDuration () {
        return $this->belongsTo('App\Models\Admin_Portal\duration', 'duration_id', 'duration_id');
    }
}
