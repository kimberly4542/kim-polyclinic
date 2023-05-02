<?php

namespace App\Http\Controllers\Secretary_Portal\Schedule;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Doctor_Portal\patient_schedule;
use App\Models\Doctor_Portal\Clinic;
use App\Models\Doctor_Portal\clinic_schedule;
use App\Models\Doctor_Portal\patient;
use Illuminate\Support\Facades\Auth;
use DB;

class ScheduleAllClinicController extends Controller
{
   
    public function schedule_patient_all_clinic()
    {
        return view ('secretary_portal.schedule.schedule_patient_all_clinic');
    }

    public function schedule_clinic_table()
    {
        $subscriber_id = Auth::id();
        // $clinicQuery1 = Clinic::where('subscriber_id', $subscriber_id)->get();
        // $clinicQuery = DB::table('clinic')
        //                 ->join('clinic_schedule', 'clinic.clinic_id', '=', 'clinic_schedule.clinic_id')
        //                 ->join('patient_schedule', 'clinic.clinic_id', '=', 'patient_schedule.clinic_id')
        //                 ->join('patient', 'patient_schedule.patient_id', '=', 'patient.patient_id')
        //                 ->where('clinic.subscriber_id', '=', $subscriber_id)
        //                 ->where('patient_schedule.clinic_id', '=', 'clinic.clinic_id')
        //                 ->get();
        // $clinicQuery = DB::select('SELECT clinic.*, clinic_schedule.*, patient_schedule.*, patient.*
        //                             FROM patient
        //                             INNER JOIN clinic_schedule
        //                             ON clinic_schedule.clinic_id = clinic.clinic_id
        //                             INNER JOIN patient_schedule
        //                             ON patient_schedule.clinic_id = clinic.clinic_id
        //                             INNER JOIN clinic
        //                             ON patient.patient_id = patient_schedule.patient_id
        //                             WHERE patient_schedule.clinic_id = clinic.clinic_id
        //                             AND clinic.subscriber_id = '.$subscriber_id);
        $clinicQuery1 = DB::table('patient')
                            ->join('clinic', 'patient.clinic_id', '=', 'clinic.clinic_id')
                            ->join('subscribers', 'clinic.subscriber_id', '=', 'subscribers.subscriber_id')
                            ->join('clinic_schedule', 'clinic.clinic_id', '=', 'clinic_schedule.clinic_id')
                            ->join('patient_schedule', 'patient.patient_id', '=', 'patient_schedule.patient_id')
                            ->where('subscribers.subscriber_id', '=', $subscriber_id)
                            ->get();

        $clinicQuery = DB::table('clinic_schedule')
                            ->join('clinic', 'clinic_schedule.clinic_id', '=', 'clinic.clinic_id')
                            // ->join('subscribers', 'clinic.subscriber_id', '=', 'subscribers.subscriber_id')
                            // ->join('clinic_schedule', 'clinic.clinic_id', '=', 'clinic_schedule.clinic_id')
                            // ->join('patient_schedule', 'clinic.clinic_id', '=', 'patient_schedule.clinic_id')
                            ->where('clinic.subscriber_id', '=', $subscriber_id)
                            ->get();
        foreach ($clinicQuery as $key => $clinic_id) {
        }   

        // $patient_sched = DB::table('patient')
        //                 ->join('patient_schedule', 'patient.patient_id', '=', 'patient_schedule.patient_id')
        //                 ->join('clinic', 'patient_schedule.clinic_id', '=', 'clinic.clinic_id')
        //                 ->get();
        // foreach ($patient_sched as $key => $patient_info) {
            
        // }
        $patient_sched = DB::table('patient_schedule')
                            ->join('patient', 'patient_schedule.patient_id', '=', 'patient.patient_id')
                            ->join('clinic', 'patient_schedule.clinic_id', '=', 'clinic.clinic_id')
                            ->where('clinic.subscriber_id', '=', $subscriber_id)
                            ->get();


            // dd($patient_sched);
        // $patient_sched = DB::table('patient')
        //                 ->join('patient_schedule', 'patient.patient_id', '=', 'patient_schedule.patient_id')
        //                 ->join('clinic', 'patient_schedule.clinic_id', '=', 'clinic.clinic_id')
        //                 ->where('patient_schedule.clinic_id', '=', 'clinic.clinic_id')
        //                 ->get();
        // $patient_sched = DB::select('SELECT patient.fname, patient.lname, patient_schedule.sched_date
        //                             FROM patient
        //                             INNER JOIN patient_schedule
        //                             ON patient_schedule.patient_id = patient.patient_id
        //                             INNER JOIN clinic
        //                             ON clinic.clinic_id = patient_schedule.clinic_id
        //                             WHERE patient_schedule.clinic_id = clinic.clinic_id');

        return view('secretary_portal.schedule.schedule_clinic_table', compact('clinicQuery','patient_sched'));
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
