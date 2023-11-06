<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class product extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'product_id' =>1,
            'Product_Name' =>'coffee',
            'Description' => 'qwerty',
            'Price'=> 11,
            'QuantityInStock'=> 1000,

        ]);

        DB::table('suppliers')->insert([
            'supplier_name' => 'rostelyn',
            'contact_info'=> 11,
            'address'=> 'orani',

        ]);

        DB::table('categories')->insert([
            'CategoryID' => 12,
            'category_name' => 'coffee',          

        ]);
        DB::table('orders')->insert([
            'order_ID' => 12,
            'order_date' => 10,          
            'total_amount'=> 200,
            'status'=> 'pending',

        ]);
        DB::table('customers')->insert([
            'customer_id' => 12,
            'first_name' => 'rostelyn',          
            'last_name'=> 'abundia',
            'email'=> '@rostelyn@gmail.com',
            'phone'=> 12345678,
        ]);
        DB::table('orderdetails')->insert([
            'orderdetail_ID' => 1,
            'order_ID' => 1,          
            'product_id'=> 1,
            'quantity'=> 1234,
            'subtotal'=> 12345678,
        ]);
    }
    }