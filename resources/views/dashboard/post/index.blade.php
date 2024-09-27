@extends('dashboard.master')

@section('content')
    <h1>Somos la empresa Saasco SAS</h1>
    <br> <hr>
    <a class="btn btn-success my-3" href="{{ route('post.create') }}" target="blank">Create</a>

    <table class="table">
        <thead>
             <tr>
                <th>
                    Id
                 </th>
                 <th>
                    Title
                 </th>
                 <th>
                    Posted
                 </th>
                 <th>
                    Category
                 </th>
                 <th>
                    Options
                 </th>
             </tr>
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
                        <a class="btn btn-warning mt-2" href="{{ route('post.edit',$p->id) }}">Edit</a>
                        <a class="btn btn-primary mt-2" href="{{ route('post.show',$p->id) }}">Show</a>
                        <form action="{{ route('post.destroy', $p->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger mt-2" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
         </tbody>
    </table>
    <div class="mt-2"></div>
    {{ $posts->links() }} {{-- Paginacion --}}

@endsection
