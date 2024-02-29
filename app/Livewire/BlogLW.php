<?php

namespace App\Livewire;

use App\Models\Posts;
use Livewire\Component;

class BlogLW extends Component
{
    public $posts;
    public function render()
    {
        $this->posts = Posts::all();
        return view('livewire.blog-l-w');
    }
}
