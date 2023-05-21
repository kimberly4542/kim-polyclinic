<?php

namespace App\Http\Controllers;

use App\CityAdminPatients;
use App\Diagnosis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $diagnosisCounts = Diagnosis::select('diagnos as diagnosis', DB::raw('COUNT(*) as count'))
            ->groupBy('diagnos')
            ->get();

        $cityAdminCounts = CityadminPatients::select('diagnosis', DB::raw('COUNT(*) as count'))
            ->groupBy('diagnosis')
            ->get();

        $combinedCounts = $diagnosisCounts->concat($cityAdminCounts)
            ->groupBy('diagnosis')
            ->map(function ($group) {
                return $group->sum('count');
            });

        $dengueCount = $combinedCounts->get('Dengue', 0);
        $malariaCount = $combinedCounts->get('Malaria', 0);
        $diabetesCount = $combinedCounts->get('Diabetes', 0);
        $strokeCount = $combinedCounts->get('Stroke', 0);

        // get percentage compared to the total count
        $totalCount = $combinedCounts->sum();
        $denguePercentage = ($totalCount > 0) ? round(($dengueCount / $totalCount) * 100) : 0;
        $malariaPercentage = ($totalCount > 0) ? round(($malariaCount / $totalCount) * 100) : 0;
        $diabetesPercentage = ($totalCount > 0) ? round(($diabetesCount / $totalCount) * 100) : 0;
        $strokePercentage = ($totalCount > 0) ? round(($strokeCount / $totalCount) * 100) : 0;

        $yearlyCounts = [
            '2019' => $this->getYearlyCounts('2019'),
            '2020' => $this->getYearlyCounts('2020'),
            '2021' => $this->getYearlyCounts('2021'),
            '2022' => $this->getYearlyCounts('2022'),
            '2023' => $this->getYearlyCounts('2023'),
        ];

        return view('cityadmin.dash')
            ->with('dengueCount', $dengueCount)
            ->with('malariaCount', $malariaCount)
            ->with('diabetesCount', $diabetesCount)
            ->with('strokeCount', $strokeCount)
            ->with('denguePercentage', $denguePercentage)
            ->with('malariaPercentage', $malariaPercentage)
            ->with('diabetesPercentage', $diabetesPercentage)
            ->with('strokePercentage', $strokePercentage)
            ->with('yearlyCounts', $yearlyCounts);
    }

    private function getYearlyCounts($year)
    {
        $diagnosisCounts = Diagnosis::select(DB::raw("'Diagnosis' as source"), 'diagnos as diagnosis', DB::raw('COUNT(*) as count'))
            ->whereYear('created_at', $year)
            ->groupBy('diagnosis')
            ->get();

        $cityAdminCounts = CityadminPatients::select(DB::raw("'CityadminPatients' as source"), 'diagnosis', DB::raw('COUNT(*) as count'))
            ->whereYear('created_at', $year)
            ->whereNotNull('diagnosis')
            ->groupBy('diagnosis')
            ->get();

        $combinedCounts = $diagnosisCounts->concat($cityAdminCounts)
            ->groupBy('diagnosis')
            ->map(function ($group) {
                return $group->sum('count');
            });

        $diseaseList = ['Dengue', 'Malaria', 'Diabetes', 'Stroke'];

        foreach ($diseaseList as $disease) {
            if (!$combinedCounts->has($disease)) {
                $combinedCounts[$disease] = 0;
            }
        }

        return $combinedCounts;
    }
}
