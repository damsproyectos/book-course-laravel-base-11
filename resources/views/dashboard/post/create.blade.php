@extends('dashboard.master')

@section('content')
    <h1>Gracias por comunicarte con Saasco SAS</h1>
    {{-- <p>{{ $posts[0] }}</p> --}}

    {{-- @if ($errors->any())

        @foreach ($errors->all() as $e)
            <div>
                {{ $e }}
            </div>
        @endforeach

    @endif --}}

    @include('dashboard.fragment._errors-form')

    <form action="{{ route('post.store') }}" method="post">

        @include('dashboard.post._form')

        {{-- @csrf

        <label for="">Title</label>
        <input type="text" name="title">

        <label for="">Slug</label>
        <input type="text" name="slug">

        <label for="">Description</label>
        <textarea name="description"></textarea>

        <label for="">Content</label>
        <textarea name="content"></textarea>

        <label for="">Posted</label>
        <select name="posted">
            <option value="not">Not</option>
            <option value="yes">Yes</option>
        </select>

        <label for="">Category</label>
        <select name="category_id">
            @foreach ($categories as $title => $id)
                <option value="{{ $id }}">{{ $title }}</option>
            @endforeach
        </select>

        <button type="submit">Send</button> --}}

    </form>
@endsection
