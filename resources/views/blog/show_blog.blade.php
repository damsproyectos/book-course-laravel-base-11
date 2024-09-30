@extends('blog.master_blog')

@section('content')
    {{-- <x-blog.post.show :post="$post"></x-blog.post.show> --}}
    <x-blog.show :post="$post" />

    {{-- <div class="card card-gray">
        <h1>{{ $post->title }}</h1>
        <span>{{ $post->category->title }}</span>

        <hr>

        {{ $post->content }}
    </div> --}}
@endsection
