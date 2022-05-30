@extends("layouts.app")

@section("title", "Movies")

@section("content")
@include('partials.navbar')
<h1>{{ $movie->title }}</h1>

<div class="container">
    <div class="row">
        <div class="col-8">
            <div class="card mt-4">
                <div class="card-header bg-success" style="color: #fff;">
                    <h4>{{ $movie->title }}</h4>
                    <a href="/movies" class="nav-link">Back to movies</a>
                </div>
                <div class="card-body">
                    <p class="p-2"><b>Genre: </b>{{ $movie->genre }}</p>
                    <p class="p-2"><b>Director: </b>{{ $movie->director }}</p>
                    <p class="p-2"><b>Release year: </b>{{ $movie->year }}</p>
                </div>
                <div class="card-footer bg-success" style="color: #fff;">
                    <p class="p-2"><b>Storyline: </b>{{ $movie->storyline }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection