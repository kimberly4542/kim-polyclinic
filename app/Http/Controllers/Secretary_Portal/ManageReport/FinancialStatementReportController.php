<?php

namespace App\Http\Controllers\Secretary_Portal\ManageReport;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Doctor_Portal\Medicine;
use App\Models\Doctor_Portal\Subscribers;
use Illuminate\Support\Facades\Auth;
use App\Models\Doctor_Portal\SecondaryUser;

class FinancialStatementReportController extends Controller
{
   
	public function financial_statement()

	{
		$secretary_id = Auth::id();
		$secondaryUserQuery = SecondaryUser::find($secretary_id);
		$subscriber_id = $secondaryUserQuery->subscriber_id;

		$query = Subscribers::where('subscriber_id', $subscriber_id)->with(['getCLinic.getPatient.getConsultation.getBilling'])->get();
		$addedAmount = 0.0;
		foreach ($query as $subscriber) {
			foreach ($subscriber->getCLinic as $clinic) {
				foreach ($clinic->getPatient as $patient) {
					foreach ($patient->getConsultation as $consultation) {
						foreach ($consultation->getBilling as $billing) {
							$converted_amount = (float)$billing->total_amount;
							$addedAmount += $converted_amount;
						}
					}
				}
			}
		}
		return view ('secretary_portal.reports.financial_statement2', compact('query', 'addedAmount'));
	}
}
