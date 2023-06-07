<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    
    public function pieChart(){
        $result = DB::select(DB::raw("SELECT p.address1 AS province, COUNT(*) AS people_count FROM patient p JOIN consultation c ON p.patient_id = c.patient_id JOIN diagnosis d ON c.consultation_id = d.consultation_id WHERE d.diagnos = 'Dengue' GROUP BY p.address1"));
        $data = "";
        foreach($result as $val){
            $data.="['".$val->province."',     ".$val->people_count."],";
        }
        $chartData = $data;
        return view('cityadmin.charts', compact('chartData'));        
    }
}
