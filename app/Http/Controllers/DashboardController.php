<?php

namespace App\Http\Controllers;

use App\CityAdminPatients;
use App\Diagnosis;
use App\Report;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(Request $request)
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

        // chart data by address
        $selectedDisease = $request->session()->get('selectedDisease', 'Dengue');
        $chartDataAddress = $request->session()->get('chartDataAddress');

        // dd($chartDataAddress);

        $chartDataAddress = Report::generatePieChartProvince($selectedDisease);
        $chartDataAddress = $chartDataAddress['chartDataAddress'];

        // chart data by age group
        $chartDataAgeGroup = Report::generatePieChartAgeGroup($selectedDisease);
        $chartDataAgeGroup = $chartDataAgeGroup['chartDataAgeGroup'];

        // chart data by gender
        $columnchartData = Report::generateColumnChartData();
        $columnchartData = $columnchartData['columnchartData'];

        return view('cityadmin.dash')
            ->with('dengueCount', $dengueCount)
            ->with('malariaCount', $malariaCount)
            ->with('diabetesCount', $diabetesCount)
            ->with('strokeCount', $strokeCount)
            ->with('denguePercentage', $denguePercentage)
            ->with('malariaPercentage', $malariaPercentage)
            ->with('diabetesPercentage', $diabetesPercentage)
            ->with('strokePercentage', $strokePercentage)
            ->with('yearlyCounts', $yearlyCounts)
            ->with('chartDataAddress', $chartDataAddress)
            ->with('chartDataAgeGroup', $chartDataAgeGroup)
            ->with('columnchartData', $columnchartData)
            ->with('selectedDisease', $selectedDisease);
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

    public function update(Request $request)
    {
        $disease = $request->input('disease');

        $chartDataAddress = Report::generatePieChartProvince($disease);
        $chartDataAddress = $chartDataAddress['chartDataAddress'];

        $chartDataAgeGroup = Report::generatePieChartAgeGroup($disease);
        $chartDataAgeGroup = $chartDataAgeGroup['chartDataAgeGroup'];

        // Store the selected disease value in the session
        $request->session()->put('selectedDisease', $disease);
        $request->session()->put('chartDataAddress', $chartDataAddress);
        $request->session()->put('chartDataAgeGroup', $chartDataAgeGroup);

        // Redirect back to the dashboard with the updated chart data
        return redirect()->route('dashboard');
    }
}
