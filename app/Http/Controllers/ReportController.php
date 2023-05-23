<?php

namespace App\Http\Controllers;

use App\Report;
use App\CityAdminPatients;
use App\Diagnosis;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function index()
    {
        $clinic_data = DB::table('diagnosis')->pluck('diagnos');
        $city_admin_data = DB::table('cityadmin_patients')->pluck('diagnosis');
        $cases_options = $clinic_data->merge($city_admin_data)->unique();

        $clinic_address_data = DB::table('patient')->pluck('address1');
        $city_admin_address_data = DB::table('cityadmin_patients')->pluck('address1');
        $address_options = $clinic_address_data->merge($city_admin_address_data)->unique();

        return view('cityadmin.reports', ['cases_options' => $cases_options, 'address_options' => $address_options]);
    }

    /**
     * Get diagnosis records
     *
     * @return void
     */



    public function getDiagnosis()
    {
        $diagnosis = Report::getDiagnosis();

        return response()->json($diagnosis);
    }

  

}
