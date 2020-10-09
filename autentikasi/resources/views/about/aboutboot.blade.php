<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>About - Profile</title>

<!-- Bootstrap core CSS -->
<link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="{{ asset("css/blog-home.css") }}" rel="stylesheet">

</head>

<body style="background-color:#F8F8FF">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-pink fixed-top" style="background-color:#FFB6C1">
    <div class="container">
      <a class="navbar-brand" href="#">About Me</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{route('home')}}">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{route('about')}}">About</a>
          </li>
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

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4"></h1>

        <!-- Author -->
        <p class="lead">
          <a href="https://www.instagram.com/sahiraranaz/">Profile</a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on October 1, 2020 at 16:09 PM</p>

        <hr>

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="img/it.jpg" alt="">

        <hr>

        <!-- Post Content -->
        <p class="lead">NAMA  : SAHIRA RANA ZAFIRAH
        <br>NIM   : 1931710046</p>
        <blockquote class="blockquote">
          <p class="mb-0">“The aim of education should be to teach us rather how to think, than what to think rather to improve our minds, so as to enable us to think for ourselves, than to load the memory with thoughts of other men.”</p>
          <footer class="blockquote-footer">Bill Beattie<br><br>
          <p>Hallo, saya Sahira Rana Zafirah dari prodi D-III Manajemen Informatika, Teknologi Informasi 2019</p>
          <p>Disini saya ingin mendemokan website saya, semoga dapat menarik perhatian anda ya!</p>
            <cite title="Source Title"></cite>
          </footer>
        </blockquote>
        <hr>

        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
            <form>
              <div class="form-group">
                <textarea class="form-control" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>

        <!-- Single Comment -->
        <!--@foreach($comment as $li)
        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0">{{$li->name_user}}</h5>
            {{$li->comment}}

          </div>
        </div>
        @endforeach-->
        
        <!-- Comment with nested comments -->
        @foreach($comment as $li)
        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0">{{$li->name_user}}</h5>
            {{$li->comment}}

            <div class="media mt-4">
              <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
              <div class="media-body">
                <h5 class="mt-0">{{$li->name_user}}</h5>
                {{$li->comment}}
              </div>
            </div>

          </div>
        </div>
        @endforeach

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
          <h5 class="card-header" style="background-color:#FFF0F5">HELLO!</h5>
          <div class="card-body">
            This page is my personal info page.
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
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
