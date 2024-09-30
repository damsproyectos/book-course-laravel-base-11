<div>
    <!-- Life is available only in the present moment. - Thich Nhat Hanh -->
    <br>

    <h1>{{ $slot }}</h1>
    @if (isset($header))
        <h1>{{ $header }}</h1>
    @endif

    @foreach ($posts as $p)
        <div class="card card-gray mt-2">
            <h4>{{ $p->title }}</h4>

            <a href="{{ route('blog.show', $p) }}">Ir</a>

            <p>{{ $p->description }}</p>
        </div>
    @endforeach

    <br>

    @isset($extra)
        <h1>{{ $extra }}</h1>
    @endisset

    <h1>{{ $footer }}</h1>

    {{ $posts->links() }}
</div>
