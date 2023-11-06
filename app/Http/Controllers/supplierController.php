<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\supplier;
 
class supplierController extends Controller
{
    public function index(){
        return view('supplier')->with(["suppliers"=>supplier::first()]);
    }
}
