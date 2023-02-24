<?php

namespace App\Http\Controllers\Secretary_Portal\ManageReport;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MedicineReportController extends Controller
{
    public function medicine_report()
	{
		 return view ('secretary_portal.reports.medicine_report');
	}
}
