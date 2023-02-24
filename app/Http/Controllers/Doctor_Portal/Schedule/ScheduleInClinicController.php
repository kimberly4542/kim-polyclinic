<?php

namespace App\Http\Controllers\Doctor_Portal\Schedule;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ScheduleInClinicController extends Controller
{
   
    public function schedule_patient_in_clinic()
    {
        return view ('doctor_portal.schedule.schedule_patient_in_clinic');
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
