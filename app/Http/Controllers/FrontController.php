<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::orderBy('id', 'desc')->paginate(96);
        return Inertia::render('Front/Welcome', compact('movies'));

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail(Movie $movie)
    {
        $movie->visite++; $movie->save();
        $movies = Movie::inRandomOrder()->limit(36)->get();
        return Inertia::render('Front/MovieDetail', compact('movie', 'movies'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function comingSoon()
    {
        return Inertia::render('Front/ComingSoon');
    }

}
