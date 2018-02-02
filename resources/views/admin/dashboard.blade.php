@extends('layouts.basic')
@section('content')
    <table class="table table-striped table-dark">
        <caption>List of users</caption>
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Member since</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>@foreach($user as $users)
            <tr>
                <td scope="row">{{$users->id}}</td>
                <td>{{$users->name}}</td>
                <td>{{$users->email}}</td>
                @if($users->role == 1)
                    <td>User</td>
                @else
                    <td>Admin</td>
                @endif
                <td>{{$users->created_at->toFormattedDateString()}}</td>
                <td>{!! Form::model($users,['method' => 'DELETE','route'=>['user.destroy', $users->id]]) !!}

                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <table class="table table-striped table-dark">
        <caption>Movie list, create <a role="button" class="link" href="{{url('/movie/create')}}">new</a></caption>
        <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Releasedate</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($movie as $movies)
            <tr>
                <td>{{$movies->id}}</td>
                <td>{{$movies->title}}</td>
                <td>{{$movies->releasedate}}</td>
                <td class="btn-group" role="group">

                    {!! Form::model($movies,['method' => 'DELETE','route'=>['movie.destroy', $movies->id]]) !!}

                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                    <a class="btn btn-primary" href="{{url('/movie/'.$movies->id.'/edit')}}">Edit</a>
                </td>
            </tr>
        @endforeach
        </tbody>
        <br>
        <table class="table table-striped table-dark">
            <caption>Show list, create <a role="button" class="link" href="{{url('/show/create')}}">new</a></caption>
            <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Releasedate</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($show as $shows)
                <tr>
                    <td>{{$shows->id}}</td>
                    <td>{{$shows->title}}</td>
                    <td>{{$shows->releasedate}}</td>
                    <td class="btn-group">

                        {!! Form::model($shows,['method' => 'DELETE','route'=>['show.destroy', $shows->id]]) !!}

                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                        <a class="btn btn-primary" href="{{url('/show/'.$shows->id.'/edit')}}">Edit</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
            <br>
            <table class="table table-striped table-dark">
                <caption>Actor list, create <a role="button" class="link" href="{{url('/actor/create')}}">new</a>
                </caption>
                <thead>
                <tr>
                    <th>#</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($actor as $actors)
                    <tr>
                        <td>{{$actors->id}}</td>
                        <td>{{$actors->firstname}}</td>
                        <td>{{$actors->lastname}}</td>
                        <td class="btn-group">

                            {!! Form::model($actors,['method' => 'DELETE','route'=>['actor.destroy', $actors->id]]) !!}

                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                            <a class="btn btn-primary" href="{{url('/actor/'.$actors->id.'/edit')}}">Edit</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <br>
                <table class="table table-striped table-dark">
                    <caption>Category list, create <a role="button" class="link"
                                                      href="{{url('/category/create')}}">new</a></caption>
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($category as $categories)
                        <tr>
                            <td>{{$categories->id}}</td>
                            <td>{{$categories->name}}</td>
                            <td class="btn-group">

                                {!! Form::model($categories,['method' => 'DELETE','route'=>['category.destroy', $categories->id]]) !!}

                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                {!! Form::close() !!}
                                <a class="btn btn-primary" href="{{url('/category/'.$categories->id.'/edit')}}">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
@endsection