<br>
<div class="card card-gray">
    {{-- <h1>{{ $post->title }}</h1>
    {{ $changeTitle() }} --}}
    <h1>{{ $post->title }}</h1>
    <span>{{ $post->category->title }}</span>
    <hr>

    {{ $post->content }}
</div>
