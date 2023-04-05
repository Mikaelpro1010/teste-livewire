<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreatePostModal extends Component
{
    public $title ='';
    public $body = '';

    public function render()
    {
        return view('livewire.create-post-modal');
    }

    public function save()
    {
        $this->emit('save',
                $this->title,
                $this->body
        );
    }

}
