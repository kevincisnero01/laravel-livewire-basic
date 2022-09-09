<?php

namespace App\Http\Livewire\Products;

use App\Models\Product;
use Livewire\Component;

class CreateComponent extends Component
{
    public $name;
    public $price;
    public $quantity;

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
        ]
    ];

    protected $messages = [
        'name.required' => 'El nombre del producto es obligatorio',
        'price.required' => 'El precio del producto es obligatorio',
        'price.numeric' => 'El precio debe ser un numero valido',
        'quantity.required' => 'La cantidad del producto es obligatorio',
        'quantity.integer' => 'La cantidad debe ser un numero entero',
    ];

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
            'quantity' => $this->quantity
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
