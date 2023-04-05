<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MessageComponent extends Component
{
    public $type = '';
    public $message = '';

    public $listeners = ['showMessage'];

    public function render()
    {
        return view('livewire.message-component');
    }

    public function showMessage($type, $message)
    {
        session()->flash($type, $message);
    }
}
