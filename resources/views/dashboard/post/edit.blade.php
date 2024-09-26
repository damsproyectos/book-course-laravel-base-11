@extends('dashboard.master')

@section('content')
    <h1>EDICIÓN FORMULARUOS</h1>

    @include('dashboard.fragment._errors-form')

    <form action="{{ route('post.update', $post->id) }}" method="post" enctype="multipart/form-data">

        @method('PATCH')
        @include('dashboard.post._form', ['task'=>'edit'])
        {{-- @csrf

        <label for="">Title</label>
        <input type="text" name="title" value="{{ $post->title }}">

        <label for="">Slug</label>
        <input type="text" name="slug" value="{{ $post->slug }}">

        <label for="">Description</label>
        <textarea name="description">{{ $post->description }}</textarea>

        <label for="">Content</label>
        <textarea name="content">{{ $post->content }}</textarea>

        <label for="">Posted</label>
        <select name="posted">
            <option {{ $post->posted == 'not' ? 'selected' : ''}} value="not">Not</option>
            <option {{ $post->posted == 'yes' ? 'selected' : ''}} value="yes">Yes</option>
        </select>

        <label for="">Category</label>
        <select name="category_id">
            @foreach ($categories as $title => $id)
                <option {{ $post->category->id == $id ? 'selected' : ''}} value="{{ $id }}">{{ $title }}</option>
            @endforeach
        </select>

        <button type="submit">Send</button> --}}

    </form>
@endsection
