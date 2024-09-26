@extends('dashboard.master')

@section('content')
    <h1>Somos la empresa Saasco SAS</h1>
    <br> <hr>
    <a href="{{ route('post.create') }}" target="blank">Create</a>

    <table>
        <thead>
             <td>
                Id
             </td>
             <td>
                Title
             </td>
             <td>
                Posted
             </td>
             <td>
                Category
             </td>
             <td>
                Options
             </td>
        </thead>
        <tbody>
            @foreach ($posts as $p)
                <tr>
                    <td>
                        {{ $p->id }}
                    </td>
                    <td>
                        {{ $p->title }}
                    </td>
                    <td>
                        {{ $p->posted }}
                    </td>
                    <td>
                        {{ $p->category->title }}
                    </td>
                    <td>
                        <a href="{{ route('post.edit',$p->id) }}">Edit</a>
                        <a href="{{ route('post.show',$p->id) }}">Show</a>
                        <form action="{{ route('post.destroy', $p->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
         </tbody>
    </table>

    {{ $posts->links() }} {{-- Paginacion --}}

@endsection
