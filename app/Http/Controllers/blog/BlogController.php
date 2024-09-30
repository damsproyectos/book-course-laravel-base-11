<?php

namespace App\Http\Controllers\blog;

use App\Http\Controllers\Controller;

use App\Models\Post;

// use Illuminate\Http\Request;

class BlogController extends Controller
{
    function index()
    {
        $posts = Post::paginate(3);
        return view('blog.index_blog', compact('posts'));
    }

    function show(Post $post)
    {
        return view('blog.show_blog', ['post' => $post]);
    }
}
