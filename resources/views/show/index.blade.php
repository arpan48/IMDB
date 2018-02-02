@extends('layouts.master')

@section('content')
    <div class="toptitle"><h1 class="titlesmall">Movies currently on the moviedatabase:</h1>
    </div>

    <div class="row">
        @foreach($show as $shows)

            <div class="card col-sm-3" style="width: 15rem;">
                <img class="card-img-top cardimg"  src="{{url('img/uploaded/'.$shows->poster)}}" alt="Movie image">
                <div class="card-block">
                    <h2 class="card-title">{{$shows->title}}</h2>
                    <p class="card-text">{{str_limit($shows->description, 120)}}</p>
                    <a href="{{url('/show/'.$shows->id)}}" class="btn btn-primary">Go to show</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection