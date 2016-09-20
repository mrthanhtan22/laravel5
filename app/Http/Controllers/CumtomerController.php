<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


use App\Customer;

class CumtomerController extends Controller
{
     public function index()
    {
        $customers = Customer::all();
        return view("customers.index")->with('customers',$customers);
    }
}
