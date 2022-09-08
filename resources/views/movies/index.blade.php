@extends('layouts.main')

@section('title', 'Movies')

@section('main-content')

    <div class="container d-flex flex-wrap justify-content-center">

        @forelse ($movies as $movie)
        
            <div class="movie-card">
                <h5>{{ $movie->title }}</h2>
                <h6>{{ $movie->original_title }}</h6>
                <ul>
                    <li>{{ $movie->nationality }}</li>
                    <li>{{ $movie->date }}</li>
                    <li>{{ $movie->vote }}</li>
                </ul>
            </div>
        @empty
        
        @endforelse

    </div>

@endsection