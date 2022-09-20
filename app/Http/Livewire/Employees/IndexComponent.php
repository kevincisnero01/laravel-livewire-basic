<?php

namespace App\Http\Livewire\Employees;

use App\Models\Employee;
use Livewire\Component;
use Livewire\WithPagination;

class IndexComponent extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    protected $listeners = ['delete'];
    
    public function render()
    {
        return view('livewire.employees.index-component',[
            'employees' => Employee::paginate(5)
        ])->extends('layouts.app')->section('content');
    }

    public function deleteConfirm($id)
    {
        $this->dispatchBrowserEvent('swal-confirm-delete',[
            'title' => 'Eliminación',
            'text' => '¿Esta seguro que deseas eliminar este registro?',
            'icon' => 'warning',
            'id' => $id
        ]);

    }

    public function delete($id)
    {
        Employee::where('id',$id)->delete();
    }
}
