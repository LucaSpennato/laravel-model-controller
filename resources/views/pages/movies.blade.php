@extends('layouts.home')

@section('title', 'Movies')

@section('main-section')
    <main>
        <div class="container">
            <div class="row mt-5 ms-5">
                @foreach ($movies as $movie)
                    @include('pages.movies.card', ['movie' => $movie])
                @endforeach
            </div>
        </div>
    </main>
@endsection