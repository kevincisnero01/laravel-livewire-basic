<?php

namespace App\Http\Livewire\Employees;

use Livewire\Component;

class CreateComponent extends Component
{
    public function render()
    {
        return view('livewire.employees.create-component')
            ->extends('layouts.app')
            ->section('content');
    }
}
