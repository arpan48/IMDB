<?php

namespace App\Http\Controllers;

use App\Movie;
Use App\User;
Use Illuminate\Support\Facades\Auth;
Use Image;
use App\Category;
use App\CategoriesLink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $movie = Movie::all();
        return view('movie.index', compact('movie'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movie.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $movie = new Movie();
        $movie->title = $request->title;
        $movie->releasedate = $request->releasedate;
        $movie->description = $request->description;
        $movie->storyline = $request->storyline;
        $movie->trailer = $request->trailer;
        if ($request->hasFile('poster')) {
            $poster = $request->file('poster');
            $filename = time() . '.' . $poster->getClientOriginalExtension();
            Image::make($poster)->save(public_path('/img/uploaded/' . $filename));
            $movie->poster = $filename;
        }
        $movie->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie $movie
     * @return \Illuminate\Http\Response
     */
    public function show(User $user, $id)
    {

        $category = Category::all();
        $link = CategoriesLink::all();
        $movie = Movie::find($id);
        return view('movie.show', compact('movie', 'user', 'category', 'link'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movie $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        $movie = Movie::find($movie->id);
        $category = Category::pluck('name', 'id')->toArray();;
        return view('movie.edit', compact('movie', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Movie $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        $movie->title = $request->title;
        $movie->releasedate = $request->releasedate;
        $movie->description = $request->description;
        $movie->storyline = $request->storyline;
        $movie->trailer = $request->trailer;
        if ($request->hasFile('poster')) {
            $poster = $request->file('poster');
            $filename = time() . '.' . $poster->getClientOriginalExtension();
            Image::make($poster)->save(public_path('/img/uploaded/' . $filename));
            $movie->poster = $filename;
        }
        $movie->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie = Movie::find($id);
        $movie->delete();

        return Redirect::to('movie');
    }
}
