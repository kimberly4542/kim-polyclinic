<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Report extends Model
{
    // protected $table = 'diagnosis';

    public static function getDiagnosis()
    {
        $patientSubquery = DB::table('patient')
            ->join('consultation', 'patient.patient_id', '=', 'consultation.patient_id')
            ->join('diagnosis', 'consultation.consultation_id', '=', 'diagnosis.diag_id')
            ->select('patient.gender', 'patient.birth_date', 'patient.address1', 'diagnosis.diagnos as diagnosis');

        $cityAdminSubquery = DB::table('cityadmin_patients')
            ->select('cityadmin_patients.gender', 'cityadmin_patients.birth_date', 'cityadmin_patients.address1', 'cityadmin_patients.diagnosis as diagnosis');

        $query = $patientSubquery->unionAll($cityAdminSubquery);

        $diagnosis = DB::table(DB::raw("({$query->toSql()}) as subquery"))
            ->mergeBindings($query)
            ->select('gender', 'birth_date', 'address1', 'diagnosis')
            ->get();

        return $diagnosis;
    }


}
