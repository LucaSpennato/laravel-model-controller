@extends('layouts.home')

@section('title', 'Our Best')

@section('main-section')
    <main>
        <div class="container">
            <div class="row mt-5 ms-5">
                @foreach ($bestMovies as $best)
                    @include('pages.movies.card', ['movie' => $best])
                @endforeach
            </div>
        </div>
    </main>

@endsection