@extends('layouts.app')

@section('main_content')
    <div class="container">
        <h1>Movies</h1>

        <div class="row">
            @foreach ($movies as $movie)
                <div class="col">
                    <div class="card">
                        <h3>Title: {{ $movie->title }}</h3>
                        <div>Original title: {{ $movie->original_title }}</div>
                        <div>Nationality: {{ $movie->nationality }}</div>
                        <div>Release date: {{ $movie->date }}</div>             
                        <div>Vote: {{ $movie->vote }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('page_title')
    Movies
@endsection