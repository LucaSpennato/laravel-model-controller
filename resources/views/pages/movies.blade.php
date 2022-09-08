@extends('layouts.home')

@section('title', 'Movies')

@section('main-section')
    <main>
        @foreach ($movies as $movie)
            @include('pages.movies.card', ['movie' => $movie])
        @endforeach
    </main>
@endsection