<?php

namespace App\Http\Livewire\Products;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class IndexComponent extends Component
{   
    use WithPagination;
    
    protected $paginationTheme = 'bootstrap';

    public function render()
    {

        return view('livewire.products.index-component',[
            'products' => Product::paginate(5)
        ])
        ->extends('layouts.app')
        ->section('content');
    }
}
