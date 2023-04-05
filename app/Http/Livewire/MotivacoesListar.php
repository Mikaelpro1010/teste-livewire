<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class MotivacoesListar extends Component
{
    public $posts;

    public function render()
    {
        $this->posts = Post::get();

        return view('livewire.motivacoes-listar');
    }
}
