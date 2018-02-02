@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-3">
            <img class="card-img-top cardimg" src="{{url('img/uploaded/'.$movie->poster)}}"
                 alt="{{$movie->title}} poster">
            <p class="text">
                Categories:
                @foreach($link as $links)
                    @foreach($category as $categories)
                        @if($movie->id == $links->movie_id && $links->category_id == $categories->id)
                            {{$categories->name}}
                        @endif
                    @endforeach
                @endforeach
            </p>
        </div>
        <div class="col-md-9">
            <h1 class="h3">
                {{$movie->title}}
            </h1>
            <p class="text">
                {{$movie->description}}
            </p>
            <h3>Storyline</h3>
            <p class="text">
                {{$movie->storyline}}
            </p>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="{{url('https://www.youtube.com/embed/'.$movie->trailer)}}"
                        frameborder="0"
                        allowfullscreen></iframe>
            </div>
            <br>
        </div>
    </div>

    <div class="row">
        <div class="col-md-9 offset-md-3">
            <div class="form-group">
                @if(Auth::check())
                    {!! Form::open(['url' => 'comment']) !!}
                    {{csrf_field()}}
                    {!! Form::textarea('comment', '', ['placeholder' => 'Add a comment...', 'rows' => '2', 'class' => 'form-control form-control-lg']) !!}
                    {!! Form::hidden('movie_id', $movie->id) !!}
                    {{ Form::hidden('user_id', Auth::user()->id) }}
                    <br>
                    {!! Form::submit('Add comment', ['class' => 'btn btn-primary float-md-right']) !!}
                    {!! Form::close() !!}
                @else
                    <p class="text">Log in <a href="{{url('/login')}}">here</a> to add a comment</p>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9 offset-md-3">
            <br>
            @foreach($movie->comment as $comments)
                <h3 class="h5">
                    {{$comments->created_at->diffForHumans()}} by {{$comments->user->name}}
                </h3>
                @if(Auth::check())
                    @if(Auth::user()->id === $comments->user_id OR Auth::user()->role === 2)
                        {!! Form::model($comments,['method' => 'DELETE','route'=>['comment.destroy', $comments->id]]) !!}
                        {{csrf_field()}}
                        {!! Form::submit('Delete comment', ['class' => 'btn btn-danger btn-sm float-md-right']) !!}
                        {!! Form::close() !!}
                    @endif
                @endif
                <p class="text">
                    {{$comments->comment}}
                </p>
            @endforeach
        </div>
    </div>
@endsection