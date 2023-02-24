<?php

namespace App\Http\Controllers\Doctor_Portal\Inventory;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InventoryItemReturnController extends Controller
{
    
    public function inventory_item_return()
    {
        return view ('doctor_portal.inventory.inventory_item_return');
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
