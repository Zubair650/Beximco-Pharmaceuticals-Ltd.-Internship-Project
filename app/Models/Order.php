<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'cname',
        'address',
        'phone',
        'name',
        'disease',
        'details',
        'price',
        'num',
        'payment'
    ];
}
