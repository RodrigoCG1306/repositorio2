<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(Request $request)
    {
        return view("contact");

    }

    public function processData(Request $request)
    {
        $customer=new Customer();
        $datos = $request->all();
        $customer->first_name = $datos["user"];
        $customer->last_name = "";
        $customer->email=$datos["email"];
        $customer->save(); 
        return $datos;
    }
}
