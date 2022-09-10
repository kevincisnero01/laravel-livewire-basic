<?php

namespace App\Http\Livewire\Files;

use App\Models\File;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateComponent extends Component
{   
    use WithFileUploads;

    public $file;

    protected $rules = [
        'file' => [
            'required',
            'mimes:pdf,png,jpg,jpeg'
        ]
    ];

    protected $messages =[
        'file.required' => 'El campo files es  requerido',
        'file.mimes' => 'El archivo debe ser un archivo de tipo: pdf, png, jpg, jpeg'
    ];

    public function save()
    {
        $this->validate();

        $file_save = new File();
        $file_save->file_name = $this->file->getClientOriginalName();
        $file_save->file_extension = $this->file->extension();
        $file_save->file_patch = 'storage/'. $this->file->store('files','public');
        $file_save->save();

        return redirect()->route('files.index');
    }

    public function render()
    {
        return view('livewire.files.create-component')
        ->extends('layouts.app')
        ->section('content');
    }
}
