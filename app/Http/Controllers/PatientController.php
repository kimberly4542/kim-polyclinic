<?php

// namespace App\Models\Controllers;
// namespace App\Http\Controllers;

// use Illuminate\Database\Eloquent\Model;

// namespace App\Http\Controllers;

// use App\Models\Patient;
// use Illuminate\Database\Eloquent\Model;
// use Illuminate\Http\Request;
// use App\Models\Patient;


// class PatientController extends PatientController
// {
//     //

//     public function addPatient(Request $request)
//     {
//         $patient = new patient;

//         $patient->fname = $request->input('fname');
//         $patient->email = $request->input('email');
//         $patient->phone = $request->input('phone');
//         $patient->address = $request->input('address');

//         $patient->save();

//         return redirect('/patient')->with('success', 'Patient added successfully!');
//     }
// }

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PatientController extends Controller
{
    //
    public function insertform(){
        return view('patient');
        }
        public function insert(Request $request){
        $fname = $request->input('fname');
        $lname = $request->input('lname');
        $data=array('fname'=>$fname,"lname"=>$lname);
        DB::table('patient')->insert($data);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/insert">Click Here</a> to go back.';
        }
        }