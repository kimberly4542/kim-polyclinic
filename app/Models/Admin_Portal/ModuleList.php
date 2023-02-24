<?php

namespace App\Models\Admin_Portal;

use Illuminate\Database\Eloquent\Model;

class ModuleList extends Model
{
    protected $table = 'module_list';
    protected $primaryKey = 'modlist_id';

    public function getModuleName ($stringIdentifier) {
    	$profileNameQuery = $this->where('module_name', $stringIdentifier)->get();
    	foreach ($profileNameQuery as $data) {
    		return $data->module_name;
    	}
    }

    public function getModuleAmount ($stringIdentifier) {
    	$profileAmountQuery = $this->where('module_name', $stringIdentifier)->get();
    	foreach ($profileAmountQuery as $data) {
    		return $data->amount;
    	}
    }
}
