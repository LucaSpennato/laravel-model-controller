@extends('layouts.home')

@section('title', 'Movies')

@section('main-section')
    <main>
        @foreach ($movies as $movie)
            <ul>
                <li>
                    <h3>Movie title: {{ $movie->title }}</h3>
                </li>
                <li>
                    Original title: {{ $movie->original_title }} 
                </li>
                <li>
                    Release date: {{ $movie->date }}
                </li>
                <li>
                    Movie score: {{ $movie->vote }}
                </li>
            </ul>
        @endforeach
    </main>
@endsection