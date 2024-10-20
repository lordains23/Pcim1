<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderModel extends Model
{
    use HasFactory;
    protected $table ='t_orders';
    protected $fillable = [
        
        'client_id',
        'order_date',
        'total_amount',
        'status',
    ];
}
