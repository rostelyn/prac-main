<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;
use App\Http\Controllers\supplierController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\orderController;
use App\Http\Controllers\customerController;
use App\Http\Controllers\orderdetailController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/product',[productController::class,'index'])->name('product');
Route::get('/supplier',[supplierController::class,'index'])->name('supplier');
Route::get('/category',[categoryController::class,'index'])->name('category');
Route::get('/order',[orderController::class,'index'])->name('order');
Route::get('/customer',[customerController::class,'index'])->name('customer');
Route::get('/orderdetail',[orderdetailController::class,'index'])->name('orderdetail');