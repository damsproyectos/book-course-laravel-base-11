<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = Post::find(7);
        $category = Category::find(1);
        dd($category->posts[2]->title);
        dd($category->posts[0]->title);
        //dd($category->posts);
        // dd($post->category->title);
        // dd($post->category);

        //CREATE
        // $post = Post::create(
        //     [
        //         'title' => 'test title',
        //         'slug' => 'test slug',
        //         'description' => 'test description',
        //         'content' => 'test content',
        //         'image' => 'test image',
        //         'posted' => 'not',
        //         'category_id' => 1,
        //     ]
        // );
        return 'Index JUNIOR CORDOBA desarrrollador Software';

        //REPONSE
        // return response('Hello World', 200)
        // ->header('Content-Type', 'text/plain');

        // return response()->json([
        //     'name' => 'Abigail',
        //     'state' => 'CA',
        // ]);
        //DELETE = Borrar

        // $post = Post::find(4)->delete();
        // dd($post);

        // dd(Post::find(2));
        // $post = Post::find(3)->delete();
        // dd($post);

        // $post = Post::find(3);
        // $post->delete();

        // return 'Index JUNIOR CORDOBA desarrrollador Software';

        //UPDATE = Actualizar
        // $post = Post::find(5);

        //  dd($post);

        // $post->update(
        //     [
        //         'title' => 'JUNIOR',
        //         'slug' => 'JUNIORO',
        //         'description' => 'JUNIOR',
        //         'content' => 'JUNIOR',
        //         'image' => 'image JUNIOR',
        //         'posted' => 'not',
        //         'category_id' => 1
        //     ]
        // );

        // dd($post);
        // dd($post->title);

        // return 'Index JUNIOR CORDOBA desarrrollador Software';

        //ESCRIBIR
        // $post = Post::create(
        //     [
        //         'title' => 'test title',
        //         'slug' => 'test slug',
        //         'description' => 'test description',
        //         'content' => 'test content',
        //         'image' => 'test image',
        //         'posted' => 'not',
        //         'category_id' => 1,
        //     ]
        // );

        // dd($post);
        // dd($post->title);

        // return 'Index JUNIOR CORDOBA desarrrollador Software';

        // Post::create(
        //     [
        //         'title' => 'test title',
        //         'slug' => 'test slug',
        //         'description' => 'test description',
        //         'content' => 'test content',
        //         'image' => 'test image',
        //         'posted' => 'not',
        //         'category_id' => 1,
        //     ]
        // );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
