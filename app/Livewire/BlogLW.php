<?php

namespace App\Livewire;

use App\Models\Posts;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class BlogLW extends Component
{
    public Collection $posts;
    public function render(): \Illuminate\View\View
    {
        $this->posts = Posts::all();
        return view('livewire.blog-l-w');
    }
}
