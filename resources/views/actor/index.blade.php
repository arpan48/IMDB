@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-8">
            <h2 class="h6">
                List of actors currently on the moviedatabase:
            </h2>
        </div>
    </div>
    @foreach($actor as $actors)
        <div class="row">
            <div class="col-md-8 card-mrgn">
                <div class="card w-125">
                    <div class="card-block">
                        <h3 class="card-title">{{$actors->firstname}} {{$actors->lastname}}</h3>
                        <p class="card-text">{{str_limit($actors->bio, 200)}}</p>
                        <a href="{{url('actor/'.$actors->id)}}" class="btn btn-primary">Visit actor</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection