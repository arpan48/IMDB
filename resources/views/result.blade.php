@extends('layouts.master')
@section('content')

    <div class="row">
        <div class="col-md-12">
        <h2 class="titlesmall" style="padding-bottom: 15px;">Search the moviedatabase</h2>

        {!! Form::open(['action' => ['SearchController@search', ], 'method' => 'POST']) !!}
        {{ Form::token() }}
        {{ Form::text('query', null, ['placeholder' => 'Search the moviedatabase...', 'class' => 'form-control']) }}
        {{ Form::close() }}

        <h2 class="titlesmall" style="padding: 15px 0 25px 0;">Search Result:</h2>
        </div>
    </div>
    @if(empty($resultMovie) && empty($resultShow))
        <div class="row">
            <div class="alert alert-danger col-sm-10 offset-md-1">
                <strong>Alert!</strong> {{$error}}
            </div>
        </div>
    @else
        @foreach($resultMovie as $movie)
            <div class="row">
                <div class="col-sm-10 offset-sm-1">
                    <div class="card card-mrgn">
                        <div class="card-block">
                            <h4 class="card-title">{{ $movie->title }}</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Short description</h6>
                            <p class="card-text">{{ str_limit($movie->description, 175) }}</p>
                            <a href="{{url('movie/'.$movie->id)}}" class="btn btn-primary">Visit movie page</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        @foreach($resultShow as $show)
            <div class="row">
                <div class=" col-sm-10 offset-sm-1">
                    <div class="card card-mrgn">
                        <div class="card-block">
                            <h4 class="card-title">{{ $show->title }}</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Short description</h6>
                            <p class="card-text">{{ str_limit($show->description, 175) }}</p>
                            <a href="{{url('show/'.$show->id)}}" class="btn btn-primary">Visit show page</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
@endsection