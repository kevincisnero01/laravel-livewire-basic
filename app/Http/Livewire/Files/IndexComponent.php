<?php

namespace App\Http\Livewire\Files;

use App\Models\File;
use Livewire\Component;
use Livewire\WithPagination;

class IndexComponent extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    
    public function render()
    {
        return view('livewire.files.index-component',[
            'files' => File::paginate(5)
        ])
        ->extends('layouts.app')
        ->section('content');
    }
}
