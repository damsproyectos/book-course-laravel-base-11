@extends('master')

@section('content')
    <h1>Gracias por comunicarte con Saasco SAS</h1>
    <p>{{ $posts[0] }}</p>
@endsection




{{--Primer example
{{-- @extends('master')

@section('contect')
    <h1>Gracias por comunicarte con Saasco SAS</h1>
    <h4>Soy {{$name}}</h4>
    <P>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</P>

    @if ( $name != "Andres")
        Tu nombre es Andres
    @else
        <h2>Tu nombre es Andres</h2>
    @endif

    <ul>
        @foreach ([1, 2, 3, 4, 5] as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
@endsection --}}
