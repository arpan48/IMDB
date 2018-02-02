<?php

namespace App\Http\Controllers;

use App\Season;
use App\Show;
use App\Episode;
Use App\User;
Use Image;
use App\Category;
use App\CategoriesLink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ShowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $show = Show::all();
        return view('show.index', compact('show'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('show.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $show = new Show();
        $show->title = $request->title;
        $show->releasedate = $request->releasedate;
        $show->description = $request->description;
        $show->storyline = $request->storyline;
        $show->trailer = $request->trailer;
        if ($request->hasFile('poster')) {
            $poster = $request->file('poster');
            $filename = time() . '.' . $poster->getClientOriginalExtension();
            Image::make($poster)->save(public_path('/img/uploaded/' . $filename));
            $show->poster = $filename;
        }
        $show->save();

        return view('show.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Show  $show
     * @return \Illuminate\Http\Response
     */
    public function show(User $user,$id)
    {
        $show = Show::find($id);
        $episode = Episode::all();
        $season = Season::all();
        $category = Category::all();
        $link = CategoriesLink::all();
        return view('show.show', compact('show', 'user', 'episode', 'season', 'category', 'link'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Show  $show
     * @return \Illuminate\Http\Response
     */
    public function edit(Show $show)
    {
        $category = Category::pluck('name', 'id')->toArray();;
        $show = Show::find($show->id);
        return view('show.edit', compact('show', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Show  $show
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Show $show)
    {
        $show->title = $request->title;
        $show->releasedate = $request->releasedate;
        $show->description = $request->description;
        $show->storyline = $request->storyline;
        $show->trailer = $request->trailer;
        if ($request->hasFile('poster')) {
            $poster = $request->file('poster');
            $filename = time() . '.' . $poster->getClientOriginalExtension();
            Image::make($poster)->save(public_path('/img/uploaded/' . $filename));
            $show->poster = $filename;
        }
        $show->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Show  $show
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $show = Show::find($id);
        $show->delete();

        return Redirect::to('show');
    }
}
