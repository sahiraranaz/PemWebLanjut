<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Welcome!</title>
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
  <!-- Bootstrap core CSS -->
  <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">


  <!-- Custom styles for this template -->
  <link href="{{ asset("css/the-big-picture.css") }}" rel="stylesheet">

</head>
<style type="text/css">
		body{
      background: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url('img/bg.jpeg');
      background-size: cover;
    }
    h1{
      font-size: 70px;
      color: white;
    }
    p{
      font-size: 30px;
      color: white;
    }
	</style>
<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-pink fixed-bottom" style="background-color:#fed136">
    <div class="container">
      <a class="navbar-brand" href="https://www.instagram.com/sahiraranaz/">by sahirahrana</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{route('view')}}">View
              <span class="sr-only">(current)</span>
            </a>
          </li>
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
          <li class="nav-item">
            <a class="nav-link" href="{{route('logout')}}">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div>
			<tr overflow="hidden">
			<td colspan="1">
				<marquee onmouseover="this.stop()"
				onmouseout="this.start()"
				truespeed="true"
				scrollamount="3"
				scrolldelay="20"
				direction="left">
					<font size="5px" color="white"face="Century Gothic"><br><br><br><br> WELCOME TO SYNOPSIS FILM!</font>
				</div></strong>
			</marquee>
			</td>
		</tr>
		</div>
  <!-- Page Content -->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h1 class="mt-5">HELLO {{ Auth::user()->name }} !</h1>
          <p>You will find the latest film synopsis</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
