@extends('layouts.master')

@section('content')

    {!! Form::model($season , array('route' => array('season.update', $season->id), 'method' => 'PATCH'))
     !!}


    <div class="createform">
        <p class="title">
            Edit {{$season->title}}:
        </p>
        <p id="clear">&nbsp;</p>
        {!!Form::label('title', 'Title:', ['class' => 'form-label titlesmall'] ) !!}
        {!!Form::text('title', $season->title, ['class' => 'form-input']) !!}
        {!! Form::hidden('show_id', $season->show_id) !!}
        <p id="clear">&nbsp;</p>
        {!!Form::submit('Edit movie', ['class' => 'submit']) !!}

    {!! Form::close() !!}

    <p id="clear">&nbsp;</p>
        {!! Form::model($season,['method' => 'DELETE','route'=>['season.destroy', $season->id]]) !!}
        {!! Form::submit('Delete', ['class' => 'submitdanger']) !!}
        {!! Form::close() !!}

    <p id="clear">&nbsp;</p>

        <p class="title">
            Add an episode to {{$season->title}}:
        </p>
        <p id="clear">&nbsp;</p>
        {!! Form::open(['url' => 'episode']) !!}
        {{csrf_field()}}
        {!!Form::label('title', 'Title:', ['class' => 'form-label titlesmall'] ) !!}
        {!!Form::text('title', '', ['class' => 'form-input']) !!}
        <p id="clear">&nbsp;</p>
        {!!Form::label('description', 'Description:', ['class' => 'form-label titlesmall'] ) !!}
        {!!Form::textarea('description', '', ['class' => 'form-input form-textarea']) !!}
        {!! Form::hidden('season_id', $season->id) !!}
        <p id="clear">&nbsp;</p>
        {!! Form::submit('Add episode', ['class' => 'submit']) !!}
        {!! Form::close() !!}

    </div>

@endsection