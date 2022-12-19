<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller {
    public function index() {
        $movies = Movie::all();
        // $movies = Movie::where('vote', '>=', 9)->orderBy('title', 'desc')->limit(2)->get();
        // $movies = Movie::where('vote', '>=', 9)->first(); // Restituisce un solo oggetto di tipo Movie
        // dd($movies);
        return view('movies.index', compact('movies'));
    }

    public function show($id) {
        $movie = Movie::find($id);
        return view('movies.show', compact('movie'));
    }
}