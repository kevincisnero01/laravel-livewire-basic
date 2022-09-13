<?php

namespace App\Http\Livewire\Products;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class CreateComponent extends Component
{
    public $name;
    public $price;
    public $quantity;
    public $categories;
    public $category;

    protected $rules = [
        'name' => [
            'required'
        ],
        'price' => [
            'required',
            'numeric'
        ],
        'quantity' => [
            'required',
            'integer'
        ],
        'category' => [
            'required'
        ]
    ];

    protected $messages = [
        'name.required' => 'El nombre del producto es obligatorio',
        'price.required' => 'El precio del producto es obligatorio',
        'price.numeric' => 'El precio debe ser un numero valido',
        'quantity.required' => 'La cantidad del producto es obligatorio',
        'quantity.integer' => 'La cantidad debe ser un numero entero',
        'category.required' => 'La categoria del producto es obligatoria'
    ];

    public function mount(){
        $this->categories = Category::all();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    
    
    public function save()
    {   
        $this->validate();

        Product::create([
            'name' => $this->name,
            'price' => $this->price,
            'quantity' => $this->quantity,
            'category_id' => $this->category
        ]);

        return redirect()->route('products.index')
        ->with('success', 'Registro exitoso');
    }

    public function render()
    {
        return view('livewire.products.create-component')
            ->extends('layouts.app')
            ->section('content');
    }
}
