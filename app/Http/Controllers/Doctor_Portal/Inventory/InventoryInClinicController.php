<?php

namespace App\Http\Controllers\Doctor_Portal\Inventory;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InventoryInClinicController extends Controller
{
   
    public function inventory_in_clinic()
    {
        return view ('doctor_portal.inventory.inventory_in_clinic');
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
