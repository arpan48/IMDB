@extends('layouts.master')

@section('content')

    {!! Form::model($movie , array('route' => array('movie.update', $movie->id), 'method' => 'PATCH'))
     !!}
    <div class="form-group">
        <h2 class="h6">
            Currently editing {{$movie->title}}:
        </h2>
        <br>
        {!!Form::label('title', 'Title:', ['class' => 'form-label titlesmall'] ) !!}
        {!!Form::text('title', $movie->title, ['class' => 'form-control']) !!}
        <br>
        {!!Form::label('releasedate', 'Releasedate:', ['class' => 'form-label titlesmall']) !!}
        {!!Form::date('releasedate', $movie->releasedate, ['class' => 'form-control']) !!}
        <br>
        {!!Form::label('description', 'Description:', ['class' => 'form-label titlesmall']) !!}
        {!!Form::textarea('description', $movie->description, ['class' => 'form-control']) !!}
        <br>
        {!!Form::label('storyline', 'Storyline:', ['class' => 'form-label titlesmall']) !!}
        {!!Form::textarea('storyline', $movie->storyline, ['class' => 'form-control']) !!}
        <br>
        {!!Form::label('trailer', 'Trailer:', ['class' => 'form-label titlesmall']) !!}
        {!!Form::text('trailer', $movie->trailer, ['class' => 'form-control']) !!}
        <br>
        {!!Form::label('poster', 'Poster: ', ['class' => 'form-label titlesmall']) !!}
        {!!Form::file('poster', ['class' => 'form-control-file']) !!}
        <br>
        {!!Form::submit('Edit movie', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
    <div class="form-group">
        {!! Form::model($movie,['method' => 'DELETE','route'=>['movie.destroy', $movie->id]]) !!}
        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>
    <div class="form-group">
        {!!Form::open(['url' => 'categories']) !!}
        {!! Form::label('category', 'Add category:', ['class' => 'titlesmall']) !!}
        {!! Form::select('category_id', $category, null,  ['placeholder' => 'Select category', 'class' => 'form-control']) !!}
        {!! Form::hidden('movie_id', $movie->id) !!}
        <br>
        {!!Form::submit('Add category', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
@endsection