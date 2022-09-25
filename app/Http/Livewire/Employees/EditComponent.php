<?php

namespace App\Http\Livewire\Employees;

use App\Models\Employee;
use App\Models\EmployeeStatus;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditComponent extends Component
{
    use WithFileUploads;
    
    public $employee_id;
    public $name;
    public $code; 
    public $salary; 
    public $address; 
    public $phone_number; 
    public $statuses;
    public $employee_status_id; 
    public $photo;
    public $photo_prev;

    protected $rules = [
        'name' => 'required',
        'code' => 'required',
        'salary' =>  'required|numeric',
        'address' => 'required',
        'phone_number' => 'required',
        'employee_status_id' => 'nullable|integer',
        'photo' => "nullable|image|mimes:png,jpg,jpeg"
    ];

    public function mount(Employee $employee){
        $this->employee_id = $employee->id;
        $this->name = $employee->name;
        $this->code = $employee->code;
        $this->salary = $employee->salary;
        $this->address = $employee->address;
        $this->phone_number = $employee->phone_number;
        $this->statuses = EmployeeStatus::pluck('name','id');
        $this->employee_status_id = $employee->employee_status_id; 
        $this->photo_prev = $employee->photo;
    }
    
    
    public function render()
    {
        return view('livewire.employees.edit-component')
        ->extends('layouts.app')
        ->section('content');
    }

    public function submit($employee_id)
    {   
        $data = $this->validate();
        $photo = $this->photo ? 'storage/' . $this->photo->store('employees', 'public') : $this->photo_prev;

        $employee = Employee::find($employee_id);
        $employee->name =  $this->name;
        $employee->code =  $this->code;
        $employee->salary =  $this->salary;
        $employee->address =  $this->address;
        $employee->phone_number =  $this->phone_number;
        $employee->employee_status_id =  $this->employee_status_id;
        $employee->photo =  $photo;
        $employee->save();

        return redirect()->back()->with('success','Actualizacion OK');
        //return redirect()->route('employees.index')->with('success', 'Registro actualizado exitosamente'); 
    }



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
