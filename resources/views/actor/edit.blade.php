@extends('layouts.master')

@section('content')

    {!! Form::model($actor , array('route' => array('actor.update', $actor->id), 'method' => 'PATCH'))
     !!}


    <div class="createform">
        <p class="title">
            Edit {{$actor->title}}:
        </p>
        <p id="clear">&nbsp;</p>
        {!!Form::label('firstname', 'Firstname:', ['class' => 'form-label titlesmall'] ) !!}
        {!!Form::text('firstname', $actor->firstname, ['class' => 'form-input']) !!}
        <p id="clear">&nbsp;</p>
        {!!Form::label('lastname', 'Lastname:', ['class' => 'form-label titlesmall']) !!}
        {!!Form::text('lastname', $actor->lastname, ['class' => 'form-input']) !!}
        <p id="clear">&nbsp;</p>
        {!!Form::label('dateofbirth', 'Date of birth:', ['class' => 'form-label titlesmall']) !!}
        {!!Form::date('dateofbirth', $actor->dateofbirth, ['class' => 'form-input']) !!}
        <p id="clear">&nbsp;</p>
        {!!Form::label('picture', 'Picture:', ['class' => 'form-label titlesmall']) !!}
        {!!Form::file('picture', ['class' => 'form-file-input']) !!}
        <p id="clear">&nbsp;</p>
        {!!Form::submit('Edit movie', ['class' => 'submit']) !!}
    </div>

    {!! Form::close() !!}
    <p id="clear">&nbsp;</p>
    <div class="createform">

    {!! Form::model($actor,['method' => 'DELETE','route'=>['actor.destroy', $actor->id]]) !!}

    {!! Form::submit('Delete', ['class' => 'submitdanger']) !!}
    {!! Form::close() !!}

    </div>
@endsection