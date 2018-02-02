@extends('layouts.master')

@section('content')

    {!! Form::model($category, array('route' => array('category.update', $category->id), 'method' => 'PATCH'))
     !!}


    <div class="createform">
        <p class="title">
            Edit {{$category->title}}:
        </p>
        <p id="clear">&nbsp;</p>
        {!!Form::label('name', 'Name:', ['class' => 'form-label titlesmall'] ) !!}
        {!!Form::text('name', $category->name, ['class' => 'form-input']) !!}
        <p id="clear">&nbsp;</p>
        {!!Form::submit('Edit category', ['class' => 'submit']) !!}
    </div>

    {!! Form::close() !!}
    <p id="clear">&nbsp;</p>
    <div class="createform">

        {!! Form::model($category,['method' => 'DELETE','route'=>['category.destroy', $category->id]]) !!}

        {!! Form::submit('Delete', ['class' => 'submitdanger']) !!}
        {!! Form::close() !!}

    </div>
@endsection