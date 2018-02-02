<?php

namespace App\Http\Controllers;

use App\Actor;
use App\Category;
use App\Movie;
use App\Show;
use App\User;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $user = User::all();
        $actor = Actor::all();
        $movie = Movie::all();
        $show = Show::all();
        $category = Category::all();
        return view('admin.dashboard', compact('user', 'actor', 'movie', 'show', 'category'));
    }

}