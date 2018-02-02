@extends('layouts.master')
@section('content')
    <div class="form-group">
        {!!Form::label('title', 'Title:', ['class' => 'form-label titlesmall'] ) !!}
        {!!Form::open(['url' => 'movie', 'files' => true, 'enctype' => 'multipart/form-data']) !!}
        {!!Form::text('title', '', ['class' => 'form-control']) !!}
        <br>
        {!!Form::label('releasedate', 'Releasedate:', ['class' => 'form-label titlesmall']) !!}
        {!!Form::date('releasedate', '', ['class' => 'form-control']) !!}
        <br>
        {!!Form::label('description', 'Description:', ['class' => 'form-label titlesmall']) !!}
        {!!Form::textarea('description', '', ['class' => 'form-control']) !!}
        <br>
        {!!Form::label('storyline', 'Storyline:', ['class' => 'form-label titlesmall']) !!}
        {!!Form::textarea('storyline', '', ['class' => 'form-control']) !!}
        <br>
        {!!Form::label('trailer', 'Trailer:', ['class' => 'form-label titlesmall']) !!}
        {!!Form::text('trailer', '', ['class' => 'form-control']) !!}
        <br>
        {!!Form::label('poster', 'Poster:', ['class' => 'form-label']) !!}
        {!!Form::file('poster', ['class' => 'form-control-file']) !!}
        <br>
        {!!Form::submit('Add movie', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
@endsection