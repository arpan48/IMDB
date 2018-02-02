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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <script>
        $(function () {
            $(".rslides").responsiveSlides({
                auto: true,             // Boolean: Animate automatically, true or false
                speed: 1750,            // Integer: Speed of the transition, in milliseconds
                timeout: 6000,          // Integer: Time between slide transitions, in milliseconds
                pager: false,           // Boolean: Show pager, true or false
                nav: false,             // Boolean: Show navigation, true or false
                random: false,          // Boolean: Randomize the order of the slides, true or false
                pause: false,           // Boolean: Pause on hover, true or false
            });
        });
    </script>
</head>
<body>
<div class="topdiv">
    <div class="middentopdiv">
        <div class="topdivtitle">
            <h1 class="toph1">IMDb</h1>
        </div>
        <div class="socials">
            <a class="SocialMediaFacebook" href="https://facebook.com/imdb" target="_blank"><img
                        src="{{asset('/img/icons/logo_facebook.png')}}"></a>
            <a class="SocialMediaTwitter" href="https://twitter.com/imdb" target="_blank"><img
                        src="{{asset('/img/icons/logo_twitter.png')}}"></a>
            <a class="SocialMediaTwitter" href="https://instagram.com/imdb" target="_blank"><img
                        src="{{asset('/img/icons/logo_instagram.png')}}"></a>
        </div>
    </div>
</div>
<div class="menu">
    <ul>
        <li><a href="{{url('/')}}">HOME</a></li>
        <li><a href="{{url('/movie')}}">MOVIES</a></li>
        <li><a href="{{url('/show')}}"> tv shows</a></li>
        <li><a href="{{url('/actor')}}">ACTORS</a></li>
        <li><a href="{{url('/search')}}">search</a></li>
    </ul>
    <div class="menuright">
        @if (Auth::guest())
            <ul>
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            </ul>
        @else
            <ul class="dropdown">
                <li>{{str_limit(Auth::user()->name, 10 ) }}</li>
                <ul class="dropdown-content">
                    @if(Auth::check() && Auth::user()->role == 2)
                        <li><a href="{{url('/admin')}}">admin dashboard</a></li>
                    @endif
                    <li><a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Logout</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                          style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </ul>
            </ul>
        @endif
    </div>
</div>
<div class="container">
    @yield('content')
</div>
<div class="footer">
</div>
</body>