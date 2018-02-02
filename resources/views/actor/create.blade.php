@extends('layouts.master')

@section('content')

    {!!Form::open(['url' => 'actor', 'files' => true, 'enctype' => 'multipart/form-data']) !!}
    <div class="createform">
        <p class="title">
            Add an actor to the database:
        </p>
        <p id="clear">&nbsp;</p>
        {!!Form::label('firstname', 'Firstname:', ['class' => 'form-label titlesmall'] ) !!}
        {!!Form::text('firstname', '', ['class' => 'form-input']) !!}
        <p id="clear">&nbsp;</p>
        {!!Form::label('lastname', 'Lastname:', ['class' => 'form-label titlesmall']) !!}
        {!!Form::text('lastname', '', ['class' => 'form-input']) !!}
        <p id="clear">&nbsp;</p>
        {!!Form::label('dateofbirth', 'Date of birth:', ['class' => 'form-label titlesmall']) !!}
        {!!Form::date('dateofbirth', '', ['class' => 'form-input']) !!}
        <p id="clear">&nbsp;</p>
        {!!Form::label('picture', 'Picture:', ['class' => 'form-label titlesmall']) !!}
        {!!Form::file('picture', ['class' => 'form-file-input']) !!}
        <p id="clear">&nbsp;</p>
        {!!Form::submit('Add Actor', ['class' => 'submit']) !!}
    </div>

    {!! Form::close() !!}




@endsection