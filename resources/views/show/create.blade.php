@extends('layouts.master')

@section('content')

    {!!Form::open(['url' => 'show', 'files' => true, 'enctype' => 'multipart/form-data']) !!}
    <div class="createform">
        <p class="title">
            Add a show to the database:
        </p>
        <p id="clear">&nbsp;</p>
        {!!Form::label('title', 'Title:', ['class' => 'form-label titlesmall'] ) !!}
        {!!Form::text('title', '', ['class' => 'form-input']) !!}
        <p id="clear">&nbsp;</p>
        {!!Form::label('releasedate', 'Releasedate:', ['class' => 'form-label titlesmall']) !!}
        {!!Form::date('releasedate', '', ['class' => 'form-input']) !!}
        <p id="clear">&nbsp;</p>
        {!!Form::label('description', 'Description:', ['class' => 'form-label titlesmall']) !!}
        {!!Form::textarea('description', '', ['class' => 'form-input form-textarea']) !!}
        <p id="clear">&nbsp;</p>
        {!!Form::label('trailer', 'Trailer:', ['class' => 'form-label titlesmall']) !!}
        {!!Form::text('trailer', '', ['class' => 'form-input']) !!}
        <p id="clear">&nbsp;</p>
        {!!Form::label('poster', 'Poster:', ['class' => 'form-label titlesmall']) !!}
        {!!Form::file('poster', ['class' => 'form-file-input']) !!}
        <p id="clear">&nbsp;</p>
        {!!Form::submit('Add show', ['class' => 'submit']) !!}
    </div>

    {!! Form::close() !!}




@endsection