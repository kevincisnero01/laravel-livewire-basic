<?php

namespace App\Http\Livewire\Employees;

use Livewire\Component;

class IndexComponent extends Component
{
    public function render()
    {
        return view('livewire.employees.index-component')
            ->extends('layouts.app')
            ->section('content');
    }
}
