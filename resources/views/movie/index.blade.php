@extends('layouts.master')

@section('content')
    <div class="row"><h2 class="h6">Movies currently on the moviedatabase:</h2>
    </div>

<div class="row">
        @foreach($movie as $movies)

        <div class="card-block col-sm-3" style="width: 20rem;">
            <img class="card-img-top cardimg"  src="{{url('img/uploaded/'.$movies->poster)}}" alt="Movie image">
            <div class="card-block">
                <h2 class="card-title">{{$movies->title}}</h2>
                <p class="card-text">{{str_limit($movies->description, 120)}}</p>
                <a href="{{url('/movie/'.$movies->id)}}" class="btn btn-primary">Go to movie</a>
            </div>
        </div>
    @endforeach
</div>
@endsection