<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use App\Http\Requests\Post\PutRequest;
use App\Http\Requests\Post\StoreRequest;
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
        //Sesión
        session()->forget('key');
        // session(['key' => 'value']);
        // session(['key2' => 'value2']);

        // session()->flush();
        // session(['key' => 'value']);

        //Listado y Paginacion
        $posts = Post::paginate(3);
        // dd($posts);
        return view('dashboard.post.index', compact('posts'));

        // $posts = Post::get();
        // //dd($posts);
        // return view('dashboard.post.index', compact('posts'));
        /********************************************************** */
        // $post = Post::find(1);
        // return 'Index SAASCO Desarrrollo A Medida  <a href="post/create">Formulario</a>';

        // $post = Post::find(7);
        // $category = Category::find(1);

        // dd($category->posts[2]->title);
        // dd($category->posts[0]->title);
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
        //return 'Index JUNIOR CORDOBA desarrrollador Software';

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
         // return 'Index JUNIOR CORDOBA desarrrollador Software';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::pluck('id', 'title');
        $post = new Post();
        // dd($post);
        return view('dashboard.post.create', compact('categories','post'));

        // $categories = Category::pluck('id', 'title');

        // $categories = Category::pluck('id', 'title');
        // dd($categories);

        // $categories = Category::get();
        // dd($categories);

        // return view('dashboard.post.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    // public function store(Request $request)
    {
        Post::create($request->validated());

        return to_route('post.index')->with('status', 'Post created');

         // $validate = Validator::make($request->all(),
        //      [
            //     'title' => 'required|min:5|max:500',
            //     'slug' => 'required|min:5|max:500',
            //     'content' => 'required|min:7',
            //     'category_id' => 'required|integer',
            //     'description' => 'required|min:7',
            //     'posted' => 'required',
        //      ]
        //  );

        //dd($validated->fails());

        // $request->validate([
        //     'title' => 'required|min:5|max:500',
        //     'slug' => 'required|min:5|max:500',
        //     'content' => 'required|min:7',
        //     'category_id' => 'required|integer',
        //     'description' => 'required|min:7',
        //     'posted' => 'required',
        // ]);

        //dd('sss');
        //echo 'not';

        // Post::create($request->validated());
        // // Post::create($request->all());

        // return to_route('post.index');

        //CREATE

        //  Post::create($request->all());

        //  return to_route('post.index');
         //dd($request->all()['title']);

         // Post::create(
        //     [
        //         'title' => $request->all()['title'],
        //         'slug' => $request->all()['slug'],
        //         'description' => $request->all()['description'],
        //         'content' => $request->all()['content'],
        //         'image' => $request->all()['image'],
        //         'posted' => $request->all()['posted'],
        //         'category_id' => $request->all()['category_id'],
        //     ]
        // );

        // dd(request()->get('title));
        // dd($request->all()['title']);
        // dd($request->all());
        // return 'Index JUNIOR CORDOBA desarrrollador Software';
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('dashboard/post/show',['post'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = Category::pluck('id', 'title');
        return view('dashboard.post.edit', compact('categories', 'post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PutRequest $request, Post $post)
    {
        $data = $request->validated();
        // dd($request->image);
        //image
        if(isset($data['image'])){
            $data['image'] = $filename = time().'.'.$data['image']->extension();
            $request->image->move(public_path('uploads/posts'),$filename);
        }
        //image

        // dd(public_path('upload/posts'));
        $post->update($data);
        return to_route('post.index')->with('status', 'Post update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return to_route('post.index')->with('status', 'Post delete');
    }
}
