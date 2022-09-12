<?php

namespace App\Http\Livewire\Files;

use App\Models\File;
use Livewire\Component;
use Livewire\WithFileUploads;
 
class CreateComponent extends Component
{   
    use WithFileUploads;

    public $myFiles = [];

    protected $rules = [
        'myFiles' => [
            'required'
        ]
    ];

    protected $messages =[
        'myFiles.required' => 'El campo files es  requerido',
    ];

    public function save()
    {   

        $this->validate();
        
        foreach($this->myFiles as $key => $file){
            $file_save = new File();
            $file_save->file_name = $file->getClientOriginalName();
            $file_save->file_extension = $file->extension();
            $file_save->file_patch = 'storage/'. $file->store('files','public');
            $file_save->save();
        }

        return redirect()->route('files.index');
    }

    public function render()
    {
        return view('livewire.files.create-component')
        ->extends('layouts.app')
        ->section('content');
    }
}
