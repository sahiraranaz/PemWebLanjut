<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>List User</title>

<!-- Bootstrap core CSS -->
<link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="{{ asset("css/blog-home.css") }}" rel="stylesheet">

<script src="{{ asset('js/app.js') }}" defer></script>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body style="background-color:#F8F8FF">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-pink fixed-top" style="background-color:#FFB6C1">
    <div class="container">
      <a class="navbar-brand" href="#">Manage Users</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
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
          <li class="nav-item {{ Route::is('user') ? 'active' : '' }}">
          @can('usertable-manage')
          <a class="nav-link" href="{{ route('user') }}">User</a>
          @endcan
          <li class="nav-item {{ Route::is('manage') ? 'active' : '' }}">
          @can('manage-articles')
            <a class="nav-link" href="{{ route('manage') }}">Manage</a>
          @endcan
          </li>
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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

  <!-- Page Content -->
<div class="container">
    <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">
        <br><br>
        <div class="card">
        <div class="card-header text-center">
        <h2>List User</h2><br>
        <a href="/user/add" class="btn btn-primary" style="background-color:#FFB6C1">Add User</a></div></div>
        
            <table class="table table-bordered table-striped">      
                <thead>          
                    <tr>               
                        <th>ID</th>                
                        <th>Name</th>  
                        <th>Email</th>  
                        <th>Roles</th>              
                        <th>Created</th>      
                        <th>Edit</th>     
                        <th>Delete</th> 
                        </tr>      
                </thead>      
                <tbody>          
                        @foreach($films as $a)          
                        <tr>               
                            <td>{{$a->id}}</td>               
                            <td>{{$a->name}}</td>   
                            <td>{{$a->email}}</td>               
                            <td>{{$a->roles}}</td>            
                            <td>{{$a->created_at}}</td> 
                            <td><a href="user/edit/{{ $a->id }}" class="badge badge-warning">Edit</a></td>   
                            <td><a href="user/delete/{{ $a->id }}" class="badge badge-danger">Delete</a></td>
                        </tr>
                        @endforeach
                </tbody> 
            </table>
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
            This page tells you the synopsis of the film you are looking for.
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <br><br>
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
