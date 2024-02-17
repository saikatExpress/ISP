<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customerlist extends Model
{
    use HasFactory;
    protected $table = 'customerslist';
    protected $fillable = [
        'username',
        'zone',
        'package',
        'sale_price',
        'mobile',
        'expire_Date',
        'pay_status',
        
    ];
}
