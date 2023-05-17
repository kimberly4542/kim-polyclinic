<?php

namespace App\Http\Controllers;

use App\CityAdminPatients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CityAdminPatientController extends Controller
{
    public function index()
    {
        $patients = CityAdminPatients::all();
        return view('cityadmin.patient', compact($patients));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fname' => 'required',
            'lname' => 'required',
            'mname' => 'required',
            'email' => 'email',
            'contact_no' => 'required',
            'address1' => 'required',
            'gender' => 'required',
            'birth_date' => 'required',
            'diagnosis' => 'required',
            'diagnosed_date' => 'required'
            // Add validation rules for other fields as needed
        ]);

        $validator->setAttributeNames([
            'email' => 'Email Address',
            'contact_no' => 'Contact Number',
            'address1' => 'Address',
            'gender' => 'Gender',
            'birth_date' => 'Birth Date',
            'diagnosis' => 'Diagnosis',
            'diagnosed_date' => 'Date Diagnosed'
            // Add custom attribute names for other fields as needed
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        CityAdminPatients::create($request->all());
        return redirect('/admin/patients')->with('success', 'Patient created successfully');
    }
}
