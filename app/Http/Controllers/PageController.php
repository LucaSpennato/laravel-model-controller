<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function home(){
        return view('pages.welcome');
    }

    public function movies(){
        $movies = Movie::all();
        return view('pages.movies', compact("movies"));
    }

    public function best(){
        $bestMovies = Movie::where('vote' ,'>' ,9)->get();
        return view('pages.best', compact('bestMovies'));
    }
}
