<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>About Me</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset("css/styles2.css") }}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Hello!</a>
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
        <!-- Masthead-->
        <header class="masthead">
            <div class="container d-flex h-100 align-items-center">
                <div class="mx-auto text-center">
                    <h1 class="mx-auto my-0 text-uppercase">SAHIRA RANA ZAFIRAH <br>1931710046</h1><br><br><br>
                    <blockquote class="blockquote">
                    <p class="mb-0">“The aim of education should be to teach us rather how to think, than what to think rather to improve our minds, so as to enable us to think for ourselves, than to load the memory with thoughts of other men.”</p>
                    <footer class="blockquote-footer">Bill Beattie<br><br><br><br>
                    <p>Hallo, saya Sahira Rana Zafirah dari prodi D-III Manajemen Informatika, Teknologi Informasi 2019</p>
                    <p>Disini saya ingin mendemokan website saya, semoga dapat menarik perhatian anda ya!</p>
                        <cite title="Source Title"></cite>
                    </footer>
                    </blockquote>
                </div>
            </div>
        </header>

        <section class="projects-section bg-light" id="projects">
            <div class="container">
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
            <footer class="footer bg-black small text-center text-white-50">Copyright © sahiraranaz 2020</footer></div>
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
