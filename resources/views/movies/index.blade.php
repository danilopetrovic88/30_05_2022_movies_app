@extends("layouts.app")

@section("title", "Movies")

@section("content")
<h1>Movies</h1>

<div class="col-10 offset-1">
    <div class="row">
        @foreach ($movies as $movie)
            <ul class="list-group">
                <li class="list-group-item bg-light mb-2">
                    <a href="/movies/{{ $movie->id }}" style="border-radius: 1rem; color: #fff;" class="nav-link bg-success p-4">{{ $movie->title }}</a>
                    <p class="p-2">{{ $movie->storyline }}</p>
                </li>
            </ul>
        @endforeach
    </div>
</div>
@endsection