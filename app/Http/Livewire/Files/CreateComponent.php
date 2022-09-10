<?php

namespace App\Http\Livewire\Files;

use Livewire\Component;

class CreateComponent extends Component
{
    public function render()
    {
        return view('livewire.files.create-component')
        ->extends('layouts.app')
        ->section('content');
    }
}
