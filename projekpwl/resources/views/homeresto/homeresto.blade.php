<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gitsa &mdash; Hello {{Auth::user()->name}}!</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->

  <link href="{{url('assets/img/favicon.ico')}}" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{url('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{url('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{url('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{url('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{url('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{url('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{url('assets/css/style.css')}}" rel="stylesheet">
  <script src="{{url('asset/js/app.js')}}" defer></script>
  <link href="{{url('asset/css/app/css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Delicious - v2.2.0
  * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="gitsa.com"><span>Gitsa</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{ route('homeresto') }}">Home</a></li>
          <li><a href="/aboutresto">About</a></li>
          <li><a href="{{ route('menu')}}">Menu</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li><a href="#contact">Contact</a></li>
          <li class="book-a-table text-center"><a href="/transcation">Reservation</a></li>
          @guest
								<li class="nav-menu">
									<a class="nav-item" href="{{ route('login') }}">{{ __('Login') }}</a>
								</li>
								@if (Route::has('register'))
								<li class="nav-menu">
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
														document.getElementById('logout-form').submit();" style="color:black">
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
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active">
          <img src="images/place1.jpg" style="width:100%"class="img-fluid" alt="">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>Gitsa</span> Restaurant</h2>
                <p class="animate__animated animate__fadeInUp">Memiliki pemandangan yang menyejukkan mata membuat anda betah untuk berlama-lama disini</p>
                <div>
                  <a href="{{ route('menu')}}" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>
                  <a href="/transcation" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item">
          <img src="images/place4.jpg" style="width:100%"class="img-fluid" alt="">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Our Menu</h2>
                <p class="animate__animated animate__fadeInUp">Menu yang disajikan sangat beragam. Dibuat dengan hati dan bahan-bahan yang sehat</p>
                <div>
                  <a href="{{ route('menu')}}" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>
                  <a href="/transcation" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item">
          <img src="images/place3.jpg" style="width:100%"class="img-fluid" alt="">
            <div class="carousel-background"><img src="images/place3.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Our Room</h2>
                <p class="animate__animated animate__fadeInUp">Memiliki ruangan yang beragam mulai dari private room, birthday room, sampai dengan meeting kami sajikan untuk anda</p>
                <div>
                  <a href="{{ route('menu')}}" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>
                  <a href="/transcation" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a>
                </div>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Whu Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="section-title">
          <h2>Why choose <span>Our Restaurant</span></h2>
          <p>The Best Place <em>&amp;</em> Restaurant <em>in</em> Indonesia</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box">
              <span>01</span>
              <h4>Pemandangan Indah</h4>
              <p>Dengan pemandangan yang menarik, membuat makanmu jadi asik!</p><br>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>02</span>
              <h4>Hidangan Istimewa</h4>
              <p>Segala menu yang kami sajikan tentu dibuat dengan hati dan kualitasnya tentu tak diragukan lagi</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>03</span>
              <h4>Staff handal</h4>
              <p>Dengan tempat yang nyaman tentu dibutuhkan staff yang handal dari segi apapun!</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Whu Us Section -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container">

        <div class="section-title">
          <h2>Organize Your <span>Events</span> in our Restaurant</h2>
        </div>

        <div class="owl-carousel events-carousel">

          <div class="row event-item">
            <div class="col-lg-6">
              <img src="images/place2.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <h3>Birthday Parties</h3>
              <p class="font-italic">
                Bingung mau merayakan hari baikmu? Cek aja resto kami, banyak hal menarik loh!
              </p>
              <ul>
                <li><i class="icofont-check-circled"></i> Dapat ditentukan sesuai tema</li>
                <li><i class="icofont-check-circled"></i> Menu yang istimewa</li>
                <li><i class="icofont-check-circled"></i> Ruang luas dan nyaman</li>
              </ul>
              <p>
                Yuk booking sekarang
              </p>
            </div>
          </div>

          <div class="row event-item">
            <div class="col-lg-6">
              <img src="images/place4.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <h3>Private Parties</h3>
              <p class="font-italic">
                Dapatkan hal-hal menarik untuk party favoritmu!
              </p>
              <ul>
                <li><i class="icofont-check-circled"></i> Ruang luas</li>
                <li><i class="icofont-check-circled"></i> Makanan tepat sesuai tema</li>
                <li><i class="icofont-check-circled"></i> Properti lengkap</li>
              </ul>
              <p>
                Yuk booking sekarang!
              </p>
            </div>
          </div>

          <div class="row event-item">
            <div class="col-lg-6">
              <img src="images/place5.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <h3>Meeting</h3>
              <p class="font-italic">
                Untuk meeting pekerjaan dapat dilakukan disini juga loh!
              </p>
              <ul>
                <li><i class="icofont-check-circled"></i> Properti lengkap</li>
                <li><i class="icofont-check-circled"></i> Makanan istimewa</li>
                <li><i class="icofont-check-circled"></i> Staff yang handal</li>
              </ul>
              <p>
                Yuk booking sekarang!
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Events Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Some photos from <span>Our Restaurant</span></h2>
          <p>Kami selalu mengabadikan foto dalam setiap kunjungan anda!</p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="images/place1.jpg" class="venobox" data-gall="gallery-item">
                <img src="images/place1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="images/menu1.jpg" class="venobox" data-gall="gallery-item">
                <img src="images/menu1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="images/place3.jpg" class="venobox" data-gall="gallery-item">
                <img src="images/place3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="images/menu2.jpg" class="venobox" data-gall="gallery-item">
                <img src="images/menu2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="images/place5.jpg" class="venobox" data-gall="gallery-item">
                <img src="images/place5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="images/menu3.jpg" class="venobox" data-gall="gallery-item">
                <img src="images/menu3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="images/place2.jpg" class="venobox" data-gall="gallery-item">
                <img src="images/place2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="images/place4.jpg" class="venobox" data-gall="gallery-item">
                <img src="images/place4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><br><br><br><br><br><!-- End Gallery Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="owl-carousel testimonials-carousel">
        @foreach($for as $li)
          <div class="testimonial-item">
            <h3>{{$li->nama}}</h3>
            <h4>{{$li->email}}</h4>
            <div class="stars">
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
            </div>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              {{$li->comment}}
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!--Search-->
    <section class="search" id="search">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                        <h2 class="section-title">Search!</h2>
                        <form action="/homeresto/search" method="get" class="form-inline d-flex">
                            <input class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputSearch" type="text" placeholder="Search for..." name="search"/>
                            <button class="btn btn-primary mx-auto" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    <!--End Search-->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2><span>Contact</span> Us</h2>
          <p>Tanyakan saja apapun pada kami, kami siap melayani anda!</p>        
          </div>
      </div>

      <div class="container mt-5">

        <div class="info-wrap">
          <div class="row">
            <div class="col-lg-3 col-md-6 info">
              <i class="icofont-google-map"></i>
              <h4>Location:</h4>
              <p>The Trans Luxury Hotel, Bandung<br>INA, 40273</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="icofont-clock-time icofont-rotate-90"></i>
              <h4>Open Hours:</h4>
              <p>Monday-Sunday:<br>11:00 AM - 23:00 PM</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="icofont-envelope"></i>
              <h4>Email:</h4>
              <p>gitsa@gmail.com</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="icofont-phone"></i>
              <h4>Call:</h4>
              <p>+62 2209716401</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Gitsa Resto</h3>
      <p>Segera kunjungi resto kami sebelum reservasi penuh!</p>
      <div class="social-links">
        <a href="gitsa.com" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="gitsa.com" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="gitsa.com" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="gitsa.com" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="gitsa.com" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Gitsa</span></strong>
      </div>
      <div class="credits">
        Designed by <a href="gitsa.com">Gitsa</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{url('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{url('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{url('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{url('assets/vendor/jquery-sticky/jquery.sticky.js')}}"></script>
  <script src="{{url('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{url('assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{url('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{url('assets/js/main.js')}}"></script>

</body>

</html>