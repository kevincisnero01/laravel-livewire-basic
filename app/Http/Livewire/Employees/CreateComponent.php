<?php

namespace App\Http\Livewire\Employees;

use App\Models\EmployeeStatus;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateComponent extends Component
{
    use WithFileUploads;
    
    public $name, $code, $salary, $address, $phone_number, $employee_status_id, $photo;

    public function render()
    {
        return view('livewire.employees.create-component',[
            'statuses' => EmployeeStatus::all()
        ])->extends('layouts.app')->section('content');
    }
}
