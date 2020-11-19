<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Laravel News</title>

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
                <a class="navbar-brand" style="font-size:30px">Laravel News</a>
                <div class="card my-4">
                    <form class="form-inline" action="/search">
                    @csrf
                            <input type="text" class="form-control" placeholder="Search for..." name="keyword">
                            <span class="input-group-append">
                                <button type="submit" class="btn btn-secondary" style="background-color:#FFB6C1">Search</button>
                            </span>
                        
                    </form>    
                    </div>
                </div>
            </div>

        </nav>
        <div class="view">
            <div class="full-bg-img">
                <div class="mask rgba-black-strong flex-center">
                    <div class="container">
                        <div class="white-text text-right" style="padding-top:100px"><br>
                            <h1 class="display-3 text-dark mt-8 mb-2">Welcome!</h1>
                            <p class="lead mb-5 text-dark-50">In here u will find a lot of news!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

<div class="container">
    <div class="row">
        <div class="col-md-8 mb-5">
            <a style="font-size:30px">Can we find it here?</a>
            <hr>
            <p>Here you can find a lot of Popular News in the US</p>
        </div>
    </div><br><br>
    <!-- Page Content -->
    <div class="container">

        <!-- /.row -->



        <div class="row">
        @foreach($artikel as $a)
            <div class="col-md-3 mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="{{ $a->urlToImage}}" alt="Card image cap" style="height:27%">
                    <div class="card-body">
                        <h5 class="card-title">{{ $a->title}}</h5>
                        <p class="card-text">{{ $a->description}}</p><br><br><br><br>
                    </div>
                    <div class="card-footer">{{ $a->url}}
                    </div>
                </div>
            </div>
        @endforeach
            <!-- /.row -->
        </div>
    </div></div>
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
