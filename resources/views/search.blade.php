@extends('layouts.master')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <h2 class="titlesmall" style="padding-bottom: 15px;">Search the moviedatabase</h2>
            {!! Form::open(['action' => ['SearchController@search', ], 'method' => 'POST']) !!}
            {{ Form::token() }}
            {{ Form::text('query', null, ['placeholder' => 'Search the moviedatabase...', 'class' => 'form-control']) }}
            {{ Form::close() }}
        </div>
    </div>
@endsection