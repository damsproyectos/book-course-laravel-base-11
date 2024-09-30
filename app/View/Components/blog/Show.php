<?php

namespace App\View\Components\blog;

use App\Models\Post;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Show extends Component
{
    // public $post;
    public function __construct(public Post $post)
    {
        // dd($post);
    }

    public function changeTitle() {
        $this->post->title = 'New Title';
    }

    public function render(): View|Closure|string
    {
        // dd($this->post);
        // dd(true);
        return view('components.blog.post.show');
    }
}
