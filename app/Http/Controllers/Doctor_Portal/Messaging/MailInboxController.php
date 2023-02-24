<?php

namespace App\Http\Controllers\Doctor_Portal\Messaging;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MailInboxController extends Controller
{
    
    public function mail_inbox()
    {
        return view ('doctor_portal.messaging.mail_inbox');
    }

    
    public function create()
    {
        //
    }

  
    public function store(Request $request)
    {
        //
    }

   
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
