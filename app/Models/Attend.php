<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attend extends Model
{
    protected $table = 'attendances';
    use HasFactory;

    protected $fillable = [
        'emp_name',
         'attendance_date', 
         'status'
    ];
}
