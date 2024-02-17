<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $table = 'packages';
    protected $fillable = [
        'name',
        'speed',
        'buy_price',
        'sale_price'
        
    ];
}
