@extends('layouts.master')

@section('content')

    {!! Form::model($show , array('route' => array('show.update', $show->id), 'method' => 'PATCH'))
     !!}


    <div class="createform">
        <p class="title">
            Edit {{$show->title}}:
        </p>
        <p id="clear">&nbsp;</p>
        {!!Form::label('title', 'Title:', ['class' => 'form-label titlesmall'] ) !!}
        {!!Form::text('title', $show->title, ['class' => 'form-input']) !!}
        <p id="clear">&nbsp;</p>
        {!!Form::label('releasedate', 'Releasedate:', ['class' => 'form-label titlesmall']) !!}
        {!!Form::date('releasedate', $show->releasedate, ['class' => 'form-input']) !!}
        <p id="clear">&nbsp;</p>
        {!!Form::label('description', 'Description:', ['class' => 'form-label titlesmall']) !!}
        {!!Form::textarea('description', $show->description, ['class' => 'form-input form-textarea']) !!}
        <p id="clear">&nbsp;</p>
        {!!Form::label('trailer', 'Trailer:', ['class' => 'form-label titlesmall']) !!}
        {!!Form::text('trailer', $show->trailer, ['class' => 'form-input']) !!}
        <p id="clear">&nbsp;</p>
        {!!Form::label('poster', 'Poster:', ['class' => 'form-label titlesmall']) !!}
        {!!Form::file('poster', ['class' => 'form-file-input']) !!}
        <p id="clear">&nbsp;</p>
        {!!Form::submit('Edit movie', ['class' => 'submit']) !!}
    </div>

    {!! Form::close() !!}
    <p id="clear">&nbsp;</p>
    <div class="createform">

        {!! Form::model($show,['method' => 'DELETE','route'=>['show.destroy', $show->id]]) !!}

        {!! Form::submit('Delete', ['class' => 'submitdanger']) !!}
        {!! Form::close() !!}
    </div>
    <p id="clear">&nbsp;</p>
    <div class="createform">
        <p class="title">
            Add a season to the show:
        </p>
        <p id="clear">&nbsp;</p>
        {!! Form::open(['url' => 'season']) !!}
        {{csrf_field()}}
        {!!Form::label('title', 'Title:', ['class' => 'form-label titlesmall'] ) !!}
        {!!Form::text('title', '', ['class' => 'form-input']) !!}
        <p id="clear">&nbsp;</p>
        {!! Form::hidden('show_id', $show->id) !!}

        {!! Form::submit('Add season', ['class' => 'submit']) !!}
        {!! Form::close() !!}

    </div>

    <div class="createform">
        {!!Form::open(['url' => 'categories']) !!}
        <div class="createform">
            <p class="title">
                Add a category to this movie:
            </p>
            {!! Form::select('category_id', $category,  ['placeholder' => 'Categories']) !!}
            {!! Form::hidden('show_id', $show->id) !!}
            {!!Form::submit('Add category', ['class' => 'submit']) !!}
        </div>
        {!! Form::close() !!}

    </div>
@endsection