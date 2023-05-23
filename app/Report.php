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

    public static function generatePieChartProvince($disease = 'Dengue')
    {
        $query = "
        SELECT province, SUM(people_count) AS people_count
        FROM (
            SELECT p.address1 AS province, COUNT(*) AS people_count
            FROM patient p
            JOIN consultation c ON p.patient_id = c.patient_id
            JOIN diagnosis d ON c.consultation_id = d.consultation_id
            WHERE d.diagnos = :diagnosis
            GROUP BY p.address1
            UNION ALL
            SELECT cp.address1 AS province, COUNT(*) AS people_count
            FROM cityadmin_patients cp
            WHERE cp.diagnosis = :diagnosisp
            GROUP BY cp.address1
        ) AS combined_data
        GROUP BY province
    ";

        $bindings = ['diagnosis' => $disease, 'diagnosisp' => $disease];
        $result = DB::select(DB::raw($query), $bindings);
        $data = "";

        if (!empty($result)) {
            foreach ($result as $val) {
                $data .= "['" . $val->province . "', " . $val->people_count . "],";
            }
        }

        return ['chartDataAddress' => $data];
    }


    public static function generatePieChartAgeGroup($disease = 'Dengue')
    {
        $query = "
            SELECT 
                CASE
                    WHEN TIMESTAMPDIFF(YEAR, p.birth_date, CURDATE()) <= 10 THEN '0-10'
                    WHEN TIMESTAMPDIFF(YEAR, p.birth_date, CURDATE()) BETWEEN 11 AND 20 THEN '11-20'
                    WHEN TIMESTAMPDIFF(YEAR, p.birth_date, CURDATE()) BETWEEN 21 AND 30 THEN '21-30'
                    WHEN TIMESTAMPDIFF(YEAR, p.birth_date, CURDATE()) BETWEEN 31 AND 40 THEN '31-40'
                    ELSE '41+'
                END AS age_group,
                COUNT(*) AS people_count
                FROM patient p
                JOIN consultation c ON p.patient_id = c.patient_id
                JOIN diagnosis d ON c.consultation_id = d.consultation_id
                WHERE d.diagnos = :diagnosis
                GROUP BY age_group
                UNION
                SELECT 
                    CASE
                        WHEN TIMESTAMPDIFF(YEAR, cp.birth_date, CURDATE()) <= 10 THEN '0-10'
                        WHEN TIMESTAMPDIFF(YEAR, cp.birth_date, CURDATE()) BETWEEN 11 AND 20 THEN '11-20'
                        WHEN TIMESTAMPDIFF(YEAR, cp.birth_date, CURDATE()) BETWEEN 21 AND 30 THEN '21-30'
                        WHEN TIMESTAMPDIFF(YEAR, cp.birth_date, CURDATE()) BETWEEN 31 AND 40 THEN '31-40'
                        ELSE '41+'
                    END AS age_group,
                    COUNT(*) AS people_count
                FROM cityadmin_patients cp
                WHERE cp.diagnosis = :diagnosisp
                GROUP BY age_group
            ";

        $bindings = ['diagnosis' => $disease, 'diagnosisp' => $disease];
        $result = DB::select(DB::raw($query), $bindings);
        $data = "";

        if (!empty($result)) {
            foreach ($result as $val) {
                $data .= "['" . $val->age_group . "', " . $val->people_count . "],";
            }
        }
        return ['chartDataAgeGroup' => $data];
    }

    public static function generateColumnChartData()
    {
        $diseases = ['Dengue', 'Stroke', 'Malaria', 'Diabetes'];
        $genders = ['Female', 'Male'];
        $data = "['Disease', 'Female', 'Male'],";

        foreach ($diseases as $disease) {
            $row = "['" . $disease . "', ";

            foreach ($genders as $gender) {
                $count = 0;

                // Count patients from the patient table
                $patientCount = DB::table('patient')
                    ->join('consultation', 'patient.patient_id', '=', 'consultation.patient_id')
                    ->join('diagnosis', 'consultation.consultation_id', '=', 'diagnosis.consultation_id')
                    ->where('diagnosis.diagnos', $disease)
                    ->where('patient.gender', $gender)
                    ->count();

                $count += $patientCount;

                // Count patients from the cityadmin_patients table
                $cityAdminPatientCount = DB::table('cityadmin_patients')
                    ->where('cityadmin_patients.diagnosis', $disease)
                    ->where('cityadmin_patients.gender', $gender)
                    ->count();

                $count += $cityAdminPatientCount;

                $row .= $count . ",";
            }

            $row .= "],";
            $data .= $row;
        }

        return ['columnchartData' => $data];
    }
}
