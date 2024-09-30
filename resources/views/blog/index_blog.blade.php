@extends('blog.master_blog')

@section('content')
    <x-blog.post.index_blog :posts='$posts'>
        Post List

        @slot('footer')
            Footer
        @endslot

        @slot('extra')
            Extra
        @endslot

        {{-- @slot('extra', 'Extra') --}}
    </x-blog.post.index_blog>
@endsection

