<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salaryattendance extends Model
{
    
    protected $table = 'salaryattendance';
    use HasFactory;

    protected $fillable = [
        'emp_name',
         'attendance_month', 
         'status'
    ];
}
