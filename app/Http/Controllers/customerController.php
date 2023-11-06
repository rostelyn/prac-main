<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer; 

class customerController extends Controller
{
    public function index(){
        return view('customer')->with(["customers" =>Customer::first()]);
    }
}
