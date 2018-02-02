<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Show;
use App\Actor;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movie = Movie::orderBy('id', 'desc')->first();
        $show = Show::orderBy('id', 'desc')->first();
        $actor = Actor::orderBy('id', 'desc')->first();
        return view('welcome', compact('movie', 'show', 'actor'));
    }


}
