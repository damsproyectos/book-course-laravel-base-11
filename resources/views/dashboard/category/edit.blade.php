@extends('dashboard.master')

@section('content')
    <h1>EDICIÓN FORMULARUOS</h1>

    @include('dashboard.fragment._errors-form')

    <form action="{{ route('category.update', $category->id) }}" method="post">
        @method('PATCH')
        @include('dashboard.category._form', ['task'=>'edit'])
    </form>
@endsection
