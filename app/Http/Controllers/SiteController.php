<?php

namespace App\Http\Controllers;

use App\Mail\NotificationForm;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        $customer->first_name = $datos["first_name"];
        $customer->last_name = $datos["last_name"];
        $customer->email=$datos["email"];
        $customer->phone_number=$datos["phone_number"];
        $customer->save(); 

        Mail::to("cazares.jose.gm@gmail.com")
        ->bcc("gameraleatorio7@gmail.com")
        ->send(new NotificationForm($datos));

        return redirect("/");
    }
}
