<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;

class orderController extends Controller
{
    public function index(){
        return view('order')->with(["orders" => order::first()]);
    }
}
