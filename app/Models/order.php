<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    
    use HasFactory;
    protected $order_ID, $order_date, $total_amount, $status;
}
