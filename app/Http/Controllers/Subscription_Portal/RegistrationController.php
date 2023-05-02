<?php

namespace App\Http\Controllers\Subscription_Portal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Subscription_Portal\subscribers;
use App\Models\Subscription_Portal\clinic;
use App\Models\Subscription_Portal\clinic_schedule;
use App\Models\Subscription_Portal\specialization;
use App\Models\Subscription_Portal\module_list;
use App\Models\Subscription_Portal\sub_1;
use App\Models\Subscription_Portal\sub_2;
use App\Models\Subscription_Portal\subsc_accessibility;
use App\Models\Subscription_Portal\dict;
use DB;
use App\Models\Subscription_Portal\main_module;
use App\Models\Subscription_Portal\lvl1;
use App\Models\Subscription_Portal\lvl2;
use App\Models\Subscription_Portal\lvl3;
use App\Models\Subscription_Portal\subscriber_status;
use Response;

class RegistrationController extends Controller
{
    public function register()
    {
    	$get_specialization = specialization::all();

        $get_main_module = module_list::all();

        $get_sub1_patient = DB::select('SELECT * FROM sub_1 WHERE modlist_id = 1');

        $get_sub_clinic = DB::select('SELECT * FROM sub_1 WHERE modlist_id = 2');

        $get_sub_schedule = DB::select('SELECT * FROM sub_1 WHERE modlist_id = 3');

        $get_sub_booking = DB::select('SELECT * FROM sub_1 WHERE modlist_id = 4');

        $get_sub_billing = DB::select('SELECT * FROM sub_1 WHERE modlist_id = 5');

        $get_sub_inventory = DB::select('SELECT * FROM sub_1 WHERE modlist_id = 6');

        $get_sub_messaging = DB::select('SELECT * FROM sub_1 WHERE modlist_id = 7');

        $get_sub_mngreport = DB::select('SELECT * FROM sub_1 WHERE modlist_id = 8');

        $get_sub_settings = DB::select('SELECT * FROM sub_1 WHERE modlist_id = 9');

        $get_sub2_patient = DB::select('SELECT * FROM sub_2 WHERE sub1_id = 1');

        $get_sub2_clinic = DB::select('SELECT * FROM sub_2 WHERE sub1_id = 2');

        $get_sub2_doctor = DB::select('SELECT * FROM sub_2 WHERE sub1_id = 3');

        $get_sub2_medicine = DB::select('SELECT * FROM sub_2 WHERE sub1_id = 4');

        $get_sub2_priority = DB::select('SELECT * FROM sub_2 WHERE sub1_id = 5');

        $get_sub2_mode = DB::select('SELECT * FROM sub_2 WHERE sub1_id = 6');

        $get_sub2_financial = DB::select('SELECT * FROM sub_2 WHERE sub1_id = 14');

        $get_sub2_inventory = DB::select('SELECT * FROM sub_2 WHERE sub1_id = 15');

        $get_sub2_patients = DB::select('SELECT * FROM sub_2 WHERE sub1_id = 16');

        $get_sub3_patlist = DB::select('SELECT * FROM sub_3 WHERE sub2_id = 1');

        $get_sub3_patpersonal = DB::select('SELECT * FROM sub_3 WHERE sub2_id = 2');

        $get_sub3_patmh = DB::select('SELECT * FROM sub_3 WHERE sub2_id = 3');

        $get_sub3_patsched = DB::select('SELECT * FROM sub_3 WHERE sub2_id = 4');

        $get_sub3_patbills = DB::select('SELECT * FROM sub_3 WHERE sub2_id = 5');

        $get_sub3_clinic_info = DB::select('SELECT * FROM sub_3 WHERE sub2_id = 6');

        $get_sub3_clinic_img = DB::select('SELECT * FROM sub_3 WHERE sub2_id = 7');

        $get_sub3_clinic_sched = DB::select('SELECT * FROM sub_3 WHERE sub2_id = 8');

        $get_sub3_doc_info = DB::select('SELECT * FROM sub_3 WHERE sub2_id = 9');

        $get_sub3_med_info = DB::select('SELECT * FROM sub_3 WHERE sub2_id = 10');

        $get_sub3_queue_first = DB::select('SELECT * FROM sub_3 WHERE sub2_id = 11');

        $get_sub3_queue_second = DB::select('SELECT * FROM sub_3 WHERE sub2_id = 12');

        $get_sub3_queue_per = DB::select('SELECT * FROM sub_3 WHERE sub2_id = 13');

        $sub3_queuesched = DB::select('SELECT * FROM sub_3 WHERE sub2_id = 14');

        $sub3_queue_img = DB::select('SELECT * FROM sub_3 WHERE sub2_id = 16');

        $sub3_queue_bill = DB::select('SELECT * FROM sub_3 WHERE sub2_id = 15');

        $sub3_sched_pat = DB::select('SELECT * FROM sub_3 WHERE sub2_id = 17');

        $sub3_sched_cli = DB::select('SELECT * FROM sub_3 WHERE sub2_id = 18');

        $sub3_book = DB::select('SELECT * FROM sub_3 where sub2_id = 19');

        $sub3_bill = DB::select('SELECT * FROM sub_3 where sub2_id = 21');

        $sub3_stockin = DB::select('SELECT * FROM sub_3 where sub2_id = 22');

        $sub3_stockout = DB::select('SELECT * FROM sub_3 where sub2_id = 23');

        $sub3_return = DB::select('SELECT * FROM sub_3 where sub2_id = 25');

        $sub3_solditem = DB::select('SELECT * FROM sub_3 where sub2_id = 24');

        $sub3_msg = DB::select('SELECT * FROM sub_3 where sub2_id = 26');

        $sub3_fin_report = DB::select('SELECT * FROM sub_3 where sub2_id = 27');

        $sub3_free_report = DB::select('SELECT * FROM sub_3 where sub2_id = 28');

        $sub3_com_report = DB::select('SELECT * FROM sub_3 where sub2_id = 29');

        $sub3_stockin_report = DB::select('SELECT * FROM sub_3 where sub2_id = 30');

        $sub3_stockout_report = DB::select('SELECT * FROM sub_3 where sub2_id = 31');

        $sub3_solditem_report = DB::select('SELECT * FROM sub_3 where sub2_id = 32');

        $sub3_return_report = DB::select('SELECT * FROM sub_3 where sub2_id = 33');

        $sub3_sum_report = DB::select('SELECT * FROM sub_3 where sub2_id = 34');

        $sub3_patsum_report = DB::select('SELECT * FROM sub_3 where sub2_id = 35');

        $sub3_con_report = DB::select('SELECT * FROM sub_3 where sub2_id = 36');

        $sub3_sched_report = DB::select('SELECT * FROM sub_3 where sub2_id = 37');

        $sub3_my_account = DB::select('SELECT * FROM sub_3 where sub2_id = 38 ORDER BY sub3_id DESC');

        $sub3_sec_account = DB::select('SELECT * FROM sub_3 where sub2_id = 39 ORDER BY sub3_id DESC');

        $sub3_mh_form = DB::select('SELECT * FROM sub_3 where sub2_id = 40 ORDER BY sub3_id DESC');



        //$result = request('specialization');

        //return $result;

      //  $query = DB::select('SELECT specialization.`name`, module_list.module_name
       //                     FROM specialization
       //                     INNER JOIN clinic
       //                     ON clinic.spec_id = specialization.spec_id
       //                     INNER JOIN subsc_accessibility
       //                     ON subsc_accessibility.subscriber_id = clinic.subscriber_id
       //                     INNER JOIN main_module
       //                     ON main_module.acc_id = subsc_accessibility.acc_id
       //                     INNER JOIN module_list
       //                     ON module_list.modlist_id = main_module.modlist_id
      //   //                  WHERE specialization.spec_id = $result');
//
      //  $query = DB::table('specialization')


      //  $query = DB::table('specialization')
      //      ->join('clinic', 'specialization.spec_id', '=', 'clinic.spec_id')
        ////    ->join('subsc_accessibility', 'clinic.subscriber_id', '=', 'subsc_accessibility.subscriber_id')
           // ->join('main_module', 'subsc_accessibility.acc_id', '=', 'main_module.acc_id')
  //          ->join('module_list', 'main_module.modlist_id', '=', 'module_list.modlist_id')
    //        ->where('specialization.spec_id', '=', $result)
     //       ->get();

        return view('subscription_portal.registration.registration', compact('get_specialization','get_main_module','get_sub1_patient','get_sub_clinic','get_sub_schedule','get_sub_booking','get_sub_billing','get_sub_inventory','get_sub_messaging','get_sub_mngreport','get_sub_settings','get_sub2_patient','get_sub2_clinic','get_sub2_doctor','get_sub2_medicine','get_sub2_priority','get_sub2_mode','get_sub2_financial','get_sub2_inventory','get_sub2_patients','get_sub3_patlist','get_sub3_patpersonal','get_sub3_patmh','get_sub3_patsched','get_sub3_patbills','get_sub3_clinic_info','get_sub3_clinic_img','get_sub3_clinic_sched','get_sub3_doc_info','get_sub3_med_info','get_sub3_queue_first','get_sub3_queue_second','get_sub3_queue_per','sub3_queuesched','sub3_queue_img','sub3_queue_bill','sub3_sched_pat','sub3_sched_cli','sub3_book','sub3_bill','sub3_stockin','sub3_stockout','sub3_return','sub3_solditem','sub3_msg','sub3_fin_report','sub3_free_report','sub3_com_report','sub3_stockin_report','sub3_stockout_report','sub3_solditem_report','sub3_return_report','sub3_sum_report','sub3_patsum_report','sub3_con_report','sub3_sched_report','sub3_my_account','sub3_sec_account','sub3_mh_form'));
    }

}
