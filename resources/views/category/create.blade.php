@extends('layouts.master')

@section('content')

    {!!Form::open(['url' => 'category', 'enctype' => 'multipart/form-data']) !!}
    <div class="createform">
        <p class="title">
            Create a new category:
        </p>
        <p id="clear">&nbsp;</p>
        {!!Form::label('name', 'Name:', ['class' => 'form-label titlesmall'] ) !!}
        {!!Form::text('name', '', ['class' => 'form-input']) !!}
        <p id="clear">&nbsp;</p>
        {!!Form::submit('Add category', ['class' => 'submit']) !!}
    </div>
    {!! Form::close() !!}




@endsection