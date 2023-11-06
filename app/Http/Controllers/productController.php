<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;  

class productController extends Controller
{
    public function index(){
        return view('product')->with(["products"=>Products::all()]);
    }
}
