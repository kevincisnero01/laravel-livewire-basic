<?php

namespace App\Http\Livewire\Employees;

use Livewire\Component;

class CreateComponent extends Component
{
    public $name, $code, $salary, $address, $phone_number, $employee_status_id, $photo;

    public function render()
    {
        return view('livewire.employees.create-component')
            ->extends('layouts.app')
            ->section('content');
    }
}
