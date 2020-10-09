<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Welcome!</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{ asset("css/blog-home.css") }}" rel="stylesheet">

</head>

<body style="background-color:#F8F8FF">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-pink fixed-top" style="background-color:#FFB6C1">
    <div class="container" style="text-color:#000000">
      <a class="navbar-brand" href="#">Synopsis Film</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{route('home')}}">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('about')}}">About</a>
          </li>
          @if(empty(Auth::id()))
          <li class="nav-item">
            <a class="nav-link" href="{{url('/login')}}">Login</a>
          </li>
          @endif
          @if(Auth::id())
          
          <li class="nav-item">
            <a class="nav-link" href="{{url('/logout')}}">Logout</a>
          </li>
          @endif
          <li class="nav-item">
            <a class="nav-link" href="#5" class="footer" onclick="return smoothScroll('5')">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4">Hello
          <small>{{Auth::user()->name}}</small>
        </h1>

        <!-- Blog Post -->
        @foreach($for as $li)
        <div class="card mb-4">
          <img class="card-img-top" src="{{$li->featured_image}}" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">{{$li->title}}</h2>

            <p class="card-text">{{$li->content}}</p>
            <a href="/article/{{$li->id}}" class="btn btn-primary" style="background-color:#FFB6C1">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted" style="background-color:#FFF0F5">
            Posted on October 1, 2020 by
            <a href="https://www.instagram.com/sahiraranaz/">sahirahrana</a>
          </div>
        </div>
        @endforeach

        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header" style="background-color:#FFF0F5">Search</h5>
          <form action="/home/search" method="get">
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for..." name="search">
              <span class="input-group-append">
                <button class="btn btn-secondary" type="submit" style="background-color:#FFB6C1">Go!</button>
              </span>
            </div>
          </div>
        </div>
        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header" style="background-color:#FFF0F5">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="{{route('home')}}">All Film</a>
                  </li>
                  <li>
                    <a href="{{route('about')}}">About</a>
                  </li>
                  <li>
                    <a href="#5" class="footer" onclick="return smoothScroll('5')">Contact</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                <li>
                    <a href="{{url('/logout')}}">Logout</a>
                  </li>
                  <li>
                    <a href="#5" class="footer" onclick="return smoothScroll('5')">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header" style="background-color:#FFF0F5">Welcome!</h5>
          <div class="card-body">
            You can put search you want in here. They have info about latest movie synopsis!
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

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
    </div></div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
