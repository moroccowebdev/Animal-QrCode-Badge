<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'userId',
        'userName',
        'userEmail',
        'userPhone',
        'productTitle',
        'productId',
        'quantity',
        'price',
        'deliveryStatus',
    ];
}
