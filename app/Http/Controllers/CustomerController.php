<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index (Request $request)
    {
        $name=$request->input("name");
        return ["name"=>$name];
    }
}
