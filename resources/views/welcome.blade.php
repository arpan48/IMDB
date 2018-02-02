@extends('layouts.master')
@section('content')
    <div class="row">
        <h1 class="h5">Latest updates on the movie database</h1>
        <br>
        <br>
    </div>
    <div class="card-deck">
        <div class="card" style="width: 10rem;">
            <img class="card-img-top cardimg" src="{{url('img/uploaded/'.$movie->poster)}}" alt="Movie image">
            <div class="card-block">
                <h2 class="card-title">{{$movie->title}}</h2>
                <p class="card-text">{{str_limit($movie->description, 120)}}</p>
                <a href="{{url('/movie/'.$movie->id)}}" class="btn btn-primary">Go to movie</a>
            </div>
        </div>
        <div class="card" style="width: 10rem;">
            <img class="card-img-top cardimg" src="{{url('img/uploaded/'.$show->poster)}}" alt="Movie image">
            <div class="card-block">
                <h2 class="card-title">{{$show->title}}</h2>
                <p class="card-text">{{str_limit($show->description, 120)}}</p>
                <a href="{{url('/show/'.$show->id)}}" class="btn btn-primary">Go to show</a>
            </div>
        </div>
        <div class="card" style="width: 10rem;">
            <img class="card-img-top cardimg" src="{{url('img/uploaded/'.$actor->picture)}}" alt="Movie image">
            <div class="card-block">
                <h2 class="card-title">{{$actor->firstname}} {{$actor->lastname}}</h2>
                <p class="card-text">{{str_limit($actor->bio, 120)}}</p>
                <a href="{{url('/actor/'.$actor->id)}}" class="btn btn-primary">Visit actor</a>
            </div>
        </div>
    </div>
@endsection