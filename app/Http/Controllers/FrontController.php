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
        return Inertia::render('Front/Welcome');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function realization()
    {
        return Inertia::render('Front/Realization');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function appartement()
    {
        return Inertia::render('Front/Appartement');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function plan()
    {
        return Inertia::render('Front/Plan');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return Inertia::render('Front/Contact');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function who()
    {
        return Inertia::render('Front/Who');

    }

}
