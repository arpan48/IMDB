<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>The movie database</title>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{!!url('/js/jquery.js')!!}"></script>
    <script src="{!!url('/js/jqueryfunctions.js')!!}"></script>
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <script src="https://use.fontawesome.com/fe2013d27a.js"></script>
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.burger').click(function () {
                $('.leftdiv').toggle();
                $(this).toggleClass('.navhidden');
            });
        });
    </script>
</head>
<body>

<div class="topdiv">
    <div class="nav-brand">
        <a class="burger" href="#"><img src="{{asset('/img/icons/burger.png')}}"></a><a href="{{url('/')}}">moviedatabase</a>
    </div>
    <div class="searchbar">
    </div>
    <div class="rightdiv">
        <ul>
            <!-- Authentication Links -->
            @if (Auth::guest())
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @else
                <div class="dropdowncontainer">
                    <div class="dropdown">
                        <button class="dropbtn">{{str_limit(Auth::user()->name, 10 ) }}</button>
                        <div class="dropdown-content">
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </div>
                </div>
            @endif
        </ul>
    </div>
</div>
<div class="container">
    <div class="leftdiv">
        <ul>
            <li><img src="{{asset('/img/icons/home.png')}}"> <a href="{{url('/')}}">HOME</a></li>
            <li><img src="{{asset('/img/icons/movies.png')}}"><a href="{{url('/movie')}}">MOVIES</a></li>
            <li><img src="{{asset('/img/icons/shows.png')}}"><a href="{{url('/show')}}"> tv shows</a></li>
            <li><img src="{{asset('/img/icons/actors.png')}}"><a href="{{url('/actor')}}">ACTORS</a></li>
            <li><img src="{{asset('/img/icons/list.png')}}"><a href="{{url('/')}}">WATCHLIST</a></li>
        </ul>
        @if(Auth::check())
            @if(Auth::user()->role == 2)
                <ul>
                    <li><img src="{{asset('/img/icons/home.png')}}"> <a href="{{url('/admin')}}">admin dashboard</a>
                    </li>
                </ul>
            @endif
        @endif
    </div>

    <div class="content">

        @yield('content')

    </div>
</div>

<div class="footer">

</div>
</body>






