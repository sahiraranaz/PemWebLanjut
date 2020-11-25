<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Hello! {{Auth::user()->name}}</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset("css/styles2.css") }}" rel="stylesheet" />
        
    
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top" style="font-color:#FFF0F5">Synopsis Film</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <!--<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#signup">Contact</a></li>-->
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
                            <a class="nav-link" href="#5" class="social" onclick="return smoothScroll('5')">Contact</a>
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
        <!-- Masthead-->
        <header class="masthead" >
            <div class="container d-flex h-100 align-items-center">
                <div class="mx-auto text-center">
                    <h1 class="mx-auto my-0 text-uppercase">Welcome {{Auth::user()->name}}</h1><br>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">In here u will find a lot of synopsis film, have fun!</h2>
                    <a class="btn btn-primary js-scroll-trigger" href="#about">Get Started</a>
                </div>
            </div>
        </header>
        <!-- Projects-->
        <section class="page-section" id="about" style="background-color:#F0FFFF">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Trending Synopsis</h2>
                    <h3 class="section-subheading text-muted">You can find a lot of synopsis film</h3>
                </div>
                <ul class="timeline">
                    @foreach($for as $li)
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset('storage/'.$li->featured_image)}}" style="height:100%"></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">{{$li->title}}</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">{{$li->content}}</p></div><br>
                            <a href="/article/{{$li->id}}" class="btn btn-primary" style="background-color:#FFB6C1">Read
                            More</a>
                            <br><br> {{$li->created_at}} by <a href="https://www.instagram.com/sahiraranaz/">sahiraranaz</a>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </section>
        <!-- Signup-->
        <section class="signup-section" id="search" style="background-color:black">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                        <h2 class="text-white mb-5">Search!</h2>
                        <form action="/home/search" method="get" class="form-inline d-flex">
                            <input class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputSearch" type="text" placeholder="Search for..." name="search"/>
                            <button class="btn btn-primary mx-auto" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact-->
        <section class="contact-section bg-black" style="background-color:black">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Email</h4>
                                <hr class="my-4" />
                                <div class="small text-black-50"><a href="#!">sahirahrana@gmail.com</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fab fa-instagram text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Instagram</h4>
                                <hr class="my-4" />
                                <div class="small text-black-50"><a href="https://www.instagram.com/sahiraranaz/">sahiraranaz</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Phone</h4>
                                <hr class="my-4" />
                                <div class="small text-black-50">089665953310</div>
                            </div>
                        </div>
                    </div>
                </div><br><br><br>
                <div class="social d-flex justify-content-center">
                    <a class="mx-2" href="https://mobile.twitter.com/ranoranoranoo"><i class="fab fa-twitter"></i></a>
                    <a class="mx-2" href="https://www.instagram.com/sahiraranaz/"><i class="fab fa-instagram"></i></a>
                    <a class="mx-2" href="https://github.com/sahiraranaz"><i class="fab fa-github"></i></a>
                </div>
            </div><br><br><br>
            <div id="5">
            <footer class="footer bg-black small text-center text-white-50"><div class="container">Copyright © sahiraranaz 2020</div></footer></div>
        </section>
        <!-- Footer-->
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
