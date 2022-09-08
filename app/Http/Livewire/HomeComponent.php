<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
class HomeComponent extends Component
{   
    public $name;
    public $email;
    public $user;

    protected $listeners = ["resetForm" => "resetData"];

    public function save(){

    }

    public function resetData(User $user)
    {
        $this->reset();
        $this->user = $user;
        $this->name = $user->name;
        $this->email = $user->email;
    }

    public function render()
    {
        return view('livewire.home-component');
    }

}
