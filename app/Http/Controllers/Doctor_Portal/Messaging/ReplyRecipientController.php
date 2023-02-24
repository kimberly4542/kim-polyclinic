<?php

namespace App\Http\Controllers\Doctor_Portal\Messaging;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReplyRecipientController extends Controller
{
    
    public function reply_subscriber_email()
    {
        return view ('doctor_portal.messaging.reply_subscriber_email');
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
