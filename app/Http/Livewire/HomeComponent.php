<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HomeComponent extends Component
{
    public $message;
    public $query;

    public function render()
    {
        return view('livewire.home-component');
    }

    public function search()
    {
        $this->message = $this->query;
    }

}
