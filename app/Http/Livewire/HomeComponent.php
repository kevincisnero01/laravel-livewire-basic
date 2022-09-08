<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HomeComponent extends Component
{
    public $count = 0;

    public function render()
    {
        return view('livewire.home-component');
    }

    public function add()
    {
        return $this->count++;
    }

    public function substract()
    {
        return $this->count--;
    }

    public function store()
    {
        return $this->count = 20;
    }

}
