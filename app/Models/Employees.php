<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;
    protected $table = 'employeesdata';
    protected $fillable = [
        'name',
        'depertment',
        'position',
        'loan',
        'salary',
        'hire_data',
        'status'
        
    ];

    public function scopeWithLoan($query)
    {
        return $query->whereNotNull('loan')->where('loan', '>', 0);
    }
}
