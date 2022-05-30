@extends("layouts.app")

@section("title", "Create movie")

@section("content")
@include('partials.navbar')
<h1>Create movie</h1>

<div class="col-10 offset-1">
    <div class="row">
        <form action="/create" method="POST">
            @csrf
            <input type="text" name="title" placeholder="Enter title" class="form-control"><br>
            <input type="text" name="genre" placeholder="Genre" class="form-control"><br>
            <input type="text" name="director" placeholder="Director" class="form-control"><br>
            <input type="number" name="year" placeholder="Release year" class="form-control"><br>
            <textarea name="storyline" cols="30" rows="5" class="form-control"></textarea><br>
            <button type="submit" class="form-control btn btn-success">Submit</button>
        </form>
    </div>
</div>
@endsection