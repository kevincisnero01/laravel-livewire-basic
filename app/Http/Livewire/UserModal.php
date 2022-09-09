<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserModal extends Component
{
    protected $listeners = ['display-modal' => 'toggleModal'];

    public function toggleModal()
    {
        $this->dispatchBrowserEvent('show-modal');
    }

    public function render()
    {
        return view('livewire.user-modal');
    }
}
