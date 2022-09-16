<?php

namespace App\Http\Livewire\Employees;

use App\Models\Employee;
use Livewire\Component;
use Livewire\WithPagination;

class IndexComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    public function render()
    {
        return view('livewire.employees.index-component',[
            'employees' => Employee::paginate(5)
        ])->extends('layouts.app')->section('content');
    }
}
