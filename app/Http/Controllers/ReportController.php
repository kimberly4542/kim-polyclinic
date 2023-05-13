<?php

namespace App\Http\Controllers;

use App\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        return view('cityadmin.reports');
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
