<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class UpdatePostModal extends Component
{
    public $posts, $post_id;

    public $title ='';
    public $body = '';

    public $listeners = ['editModal' => 'editMotivacao'];

    public function render()
    {
        return view('livewire.update-post-modal');
    }

    private function resetInput()
    {
        $this->title = '';
        $this->body = '';
    }

    public function editMotivacao($post_id)
    {
        $post = Post::find($post_id);
        $this->post_id = $post->id;
        $this->title = $post->title;
        $this->body = $post->body;
    }

    public function update()
    {
        // $validatedData = $this->validate();

        $update = Post::find($this->post_id)->update([
            'title' => $this->title,
            'body' => $this->body,
        ]);
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');

        $this->emitUp('refreshRender');
    }
}
