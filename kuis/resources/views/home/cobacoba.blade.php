<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hello! {{Auth::user()->name}}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset("css/blog-home.css") }}" rel="stylesheet">

    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<style>
    .view {
        background: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.2)), url('/img/bg.jpg')no-repeat center center;
        background-size: cover;
    }

    .navbar {
        z-index: 1;
    }

    html,
    body,
    header,
    .view {
        height: 85%;
    }

</style>

<body style="background-color:#F8F8FF">
    <header>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-pink fixed-top" style="background-color:#FFB6C1">
            <div class="container" style="text-color:#000000">
                <a class="navbar-brand" href="#">Synopsis Film</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item {{ Route::is('home') ? 'active' : '' }}">
                        @can('user-display')
                            <a class="nav-link" href="{{ route('home') }}">Home</a>
                        @endcan
                        </li>
                        <li class="nav-item {{ Route::is('about') ? 'active' : '' }}">
                        @can('user-display')
                            <a class="nav-link" href="{{ route('about') }}">About</a>
                        @endcan
                        </li>
                        <li class="nav-item {{ Route::is('manage') ? 'active' : '' }}">
                        @can('manage-articles')
                            <a class="nav-link" href="{{ route('manage') }}">Manage</a>
                        @endcan
                        </li>
                        @if(empty(Auth::id()))
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/login')}}">Login</a>
                        </li>
                        @endif
                        <li class="nav-item">
                        @can('user-display')
                            <a class="nav-link" href="#5" class="footer" onclick="return smoothScroll('5')">Contact</a>
                        @endcan
                        </li>
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>

                    </ul>
                </div>
            </div>

        </nav>
        <div class="view">
            <div class="full-bg-img">
                <div class="mask rgba-black-strong flex-center">
                    <div class="container">
                        <div class="white-text text-right" style="padding-top:100px">
                            <h1 class="display-4 text-dark mt-5 mb-2">Hello <small>{{Auth::user()->name}}</small></h1>
                            <p class="lead mb-5 text-dark-50">In here u will find a lot of synopsis film, have fun!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-md-8 mb-5">
                <h2>Can we find it here?</h2>
                <hr>
                <p>Here we can find various kinds of synopsis of the latest films. we can also add data, edit, and also
                    delete the synopsis that we want</p>
                <p>I hope this article helps you!</p>
            </div>

            <div class="col-md-4">
                <!-- Search Widget -->
                <div class="card my-4">
                    <h5 class="card-header" style="background-color:#FFF0F5">Search</h5>
                    <form action="/home/search" method="get">
                        <div class="card-body">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for..." name="search">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit"
                                        style="background-color:#FFB6C1">Go!</button>
                                </span>
                            </div>
                        </div>
                </div>
            </div>
        </div>

        <!-- /.row -->



        <div class="row">
            @foreach($for as $li)
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="{{asset('storage/'.$li->featured_image)}}" alt="Card image cap" style="height:33%">
                    <div class="card-body">
                        <h4 class="card-title">{{$li->title}}</h4>
                        <p class="card-text">{{$li->content}}</p>
                    </div>
                    <div class="card-footer">
                        <a href="/article/{{$li->id}}" class="btn btn-primary" style="background-color:#FFB6C1">Read
                            More</a>
                        <br><br> {{$li->created_at}}
                        => by <a href="https://www.instagram.com/sahiraranaz/">sahirahrana</a>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- /.row -->
        </div>
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-pink" style="background-color:#FFB6C1">
        <div id=5>
            <p class="footer" align=center>
                <a href="https://www.instagram.com/sahiraranaz/">INSTAGRAM </a>||
                <a href="https://mobile.twitter.com/ranoranoranoo">TWITTER </a>||
                <a href="https://accounts.google.com">GMAIL</a></p>
            <div class="container">
                <p class="m-0 text-center text-white">Copyright &copy; sahirahrana 2020</p>
            </div>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
