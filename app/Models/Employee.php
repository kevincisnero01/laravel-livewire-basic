<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\EmployeeStatus;
class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'salary',
        'address',
        'phone_number',
        'employee_status_id'
    ];

    public function employee_status()
    {
        return $this->belongsTo(EmployeeStatus::class);
    }
}
