@extends('layouts.master')
@section('content')

    <div class="row">
        <div class="col-md-3">
            <img class="card-img-top cardimg" src="{{url('img/uploaded/'.$actor->picture)}}"
                 alt="{{$actor->first}} poster">
        </div>
        <div class="col-md-9">
            <h2 class="h5">
                {{$actor->firstname}}{{$actor->lastname}}
            </h2>
            <h3 class="h6">Biography</h3>
            <p class="text">
                {{$actor->bio }}
            </p>
            <br>
        </div>
    </div>
@endsection