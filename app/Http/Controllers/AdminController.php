<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use FFMpeg\Format\Video\X264;
use Illuminate\Http\Request;
use Inertia\Inertia;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Admin/Dashboard');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addPost()
    {
        return Inertia::render('Admin/AddPost');
    }
}
