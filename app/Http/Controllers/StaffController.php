<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    //
    function register(Request $req)
    {

        $staff = new Staff;
        $staff->name= $req->input('name');
        $staff->address= $req->input('address');
        $staff->phone= $req->input('phone');
        $staff->save();

        return $staff;
       
    }

  
}
