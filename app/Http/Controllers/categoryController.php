<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category; 

class categoryController extends Controller
{
    
    public function index(){
        return view('category')->with(["categories" => Category::first()]);
    }
}
