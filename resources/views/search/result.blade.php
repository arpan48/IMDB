@extends('layouts.master')

@section('content')
    <h1>Search Result</h1>

    {{--<div class="row">
        @foreach($result as $movie)
                            <h1>{{$movie->title}}</h1>
                            <img src="{{ $movie->poster }}" height="100%" width="100%">

                            <p>{{ str_limit($movie->description, 125) }}</p>
                            <a href="movie/{{ $movie->id }}" class="btn btn-default btn-sm">More Info</a>
                        </div>
                    </div>
                </div>
            </div>
    @endforeach--}}


@endsection