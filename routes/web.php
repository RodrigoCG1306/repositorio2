<?php

use App\Http\Controllers\CustomerController;
use App\Models\Customer;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $style = "color: red";
    return view('welcome', ["style"=>$style]);
});

Route::get('/customers', [CustomerController::class, 'index']);

/*Route::get('/customers', function() {
    return Customer::all([
        'first_name', 'last_name', 'email'
    ]);
});*/
