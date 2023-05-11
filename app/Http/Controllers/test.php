<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;

class test extends Controller
{
    function save(Request $req)
    {
        // print_r($req->input());
        // $patient = new Patient;
        // $patient = $req->fname;
        // $patient = $req->lname;
        // echo $patient->save();
        $patient = new Patient;
        $patient->fname = $req->fname;
        $patient->mname = $req->mname;
        $patient->lname = $req->lname;
        $patient->suffix = $req->suffix;
        $patient->birth_date = $req->birth_date;
        $patient->height = $req->height;
        $patient->weight = $req->weight;
        $patient->bloodtype = $req->bloodtype;
        $patient->gender = $req->gender;
        $patient->civil_status = $req->civil_status;
        $patient->contact_no = $req->contact_no;
        $patient->citizenship = $req->citizenship;
        $patient->address1 = $req->address1;
        // $patient->diagnos = $req->diagnos;
        $patient->save();
        return redirect('/cityadmin/patient');
    }




    /**
     * Display a listing of the resource.
     *
    //  * @return \Illuminate\Http\Response
    //  */
  

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     //
}

