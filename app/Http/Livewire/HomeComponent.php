<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
class HomeComponent extends Component
{   
    public $name;
    public $email;

    public function save()
    {
        $this->dispatchBrowserEvent('swal-success', [
            'title' => 'Guardado',
            'icon' => 'success',
            'text' => 'Registros de formulario guardados exitosamente'
        ]);
    }

    public function resetData()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.home-component');
    }

}
