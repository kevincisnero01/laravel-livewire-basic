<?php

namespace App\Http\Livewire\Employees;

use App\Models\Employee;
use App\Models\EmployeeStatus;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateComponent extends Component
{
    use WithFileUploads;
    
    public $name;
    public $code; 
    public $salary; 
    public $address; 
    public $phone_number; 
    public $employee_status_id; 
    public $photo;

    public function render()
    {
        return view('livewire.employees.create-component',[
            'statuses' => EmployeeStatus::all()
        ])->extends('layouts.app')->section('content');
    }

    public function save()
    {   
        $data = $this->validate();
        $employee_photo = $this->photo ? 'storage/'.$this->photo->store('employees','public') : 'storage/employees/avatar-default.jpg';

        Employee::create([
            'photo' => $employee_photo,
        ] + $data);

        return redirect()->route('employees.index')->with('success','Empleado Guardado exitosamente.');
    }
    
    protected $rules = [
        'name' => 'required',
        'code' => 'required',
        'salary' =>  'required|numeric',
        'address' => 'required',
        'phone_number' => 'required',
        'employee_status_id' => 'nullable|integer',
        'photo' => 'nullable|image|mimes:jpg,png'
    ];

    protected $messages = [
        'name.required' => 'El campo nombre es obligatorio',
        'code.required' => 'El campo codigo es obligatorio',
        'salary.required' =>  'El campo salario es obligatorio',
        'address.required' =>  'El campo dirección es obligatorio',
        'phone_number.required' => 'El campo telefono es obligatorio',
        'employee_status_id.required' => 'El campo estatus es obligatorio',
        'salary.numeric' =>  'El campo de salario debe ser un numero valido',
        'photo.mimes' => 'El campo de foto debe ser un tipo de archivo:jpg,png'
    ];
}
