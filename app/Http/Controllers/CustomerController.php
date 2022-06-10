<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index ()
    {
        $customer = Customer::findOrFail(1);
        return [
            'firstName' => $customer->first_name,
            'lastName' => $customer->last_name
        ];
       // return Customer::all();
    }
}
