<?php

namespace App\Http\Controllers\Doctor_Portal\Profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PatientProfileScheduleController extends Controller
{
    
    public function patient_profile_schedule()
    {
        return view ('doctor_portal.profile.patient_profile_schedule');
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
