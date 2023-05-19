<?php

namespace App\Http\Controllers;

use App\CityAdminPatients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

class CityAdminPatientController extends Controller
{
    public function index()
    {
        $patients = CityAdminPatients::all();
        return view('cityadmin.patient', compact($patients));
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
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

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    public function importCSV(Request $request)
    {
        $request->validate([
            'csv_file' => 'required|mimes:csv,txt'
        ]);

        try {
            $path = $request->file('csv_file')->getRealPath();
            $data = Excel::load($path)->get();

            // dd($data);

            if ($data->count()) {
                foreach ($data as $row) {
                    $patient = new CityAdminPatients();
                    $patient->fname = $row->first_name;
                    $patient->mname = $row->middle_name;
                    $patient->lname = $row->last_name;
                    $patient->suffix = $row->suffix;
                    $patient->gender = $row->gender;
                    $patient->contact_no = $row->contact_no;
                    $patient->birth_date = $row->birth_date;
                    $patient->address1 = $row->address;
                    $patient->diagnosis = $row->diagnosis;
                    $patient->diagnosed_date = $row->date_diagnosed;
                    $patient->save();
                }

                return redirect()->back()->with('success', 'CSV file imported successfully.');
            }

            return redirect()->back()->with('error', 'No data found in the CSV file.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while importing the CSV file.');
        }
    }
}
