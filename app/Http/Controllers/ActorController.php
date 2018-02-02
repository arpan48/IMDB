<?php

namespace App\Http\Controllers;

use App\Actor;
Use Image;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actor = Actor::all();
        return view('actor.index', compact('actor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('actor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $actor = new Actor();
        $actor->firstname = $request->firstname;
        $actor->lastname = $request->lastname;
        $actor->bio = $request->bio;
        $actor->dateofbirth = $request->dateofbirth;
        if ($request->hasFile('picture')) {
            $picture = $request->file('picture');
            $filename = time() . '.' . $picture->getClientOriginalExtension();
            Image::make($picture)->save(public_path('/img/uploaded/' . $filename));
            $actor->picture = $filename;
        }
        $actor->save();
        return view('actor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $actor = Actor::find($id);
        return view('actor.show', compact('actor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function edit(Actor $actor)
    {
        $actor = Actor::find($actor->id);
        return view('actor.edit', compact('actor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Actor $actor)
    {
        $actor->firstname = $request->firstname;
        $actor->lastname = $request->lastname;
        $actor->bio = $request->bio;
        $actor->dateofbirth = $request->dateofbirth;
        if ($request->hasFile('picture')) {
            $poster = $request->file('picture');
            $filename = time() . '.' . $picture->getClientOriginalExtension();
            Image::make($picture)->save(public_path('/img/uploaded/' . $filename));
            $actor->picture = $filename;
        }
        $actor->save();
        return view('actor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $actor = Actor::find($id);
        $actor->delete();

        return Redirect::to('actor');
    }
}
