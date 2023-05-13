<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Report extends Model
{
    // protected $table = 'diagnosis';

    public static function getDiagnosis()
    {
        $diagnosis = DB::table('patient')
            ->join('consultation', 'patient.patient_id', '=', 'consultation.patient_id')
            ->join('diagnosis', 'consultation.consultation_id', '=', 'diagnosis.diag_id')
            ->select('patient.gender', 'patient.birth_date', 'patient.address1', 'diagnosis.diagnos as diagnosis')
            ->get();

        return $diagnosis;
    }
}
