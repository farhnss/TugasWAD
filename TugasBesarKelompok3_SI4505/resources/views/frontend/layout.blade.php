<!DOCTYPE html>
<html lang="en">

<head>
  <title>Gowess</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('frontend/css/open-iconic-bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">

  <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.phpcss') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">

  <link rel="stylesheet" href="{{ asset('frontend/css/aos.css') }}">

  <link rel="stylesheet" href="{{ asset('frontend/css/ionicons.min.css') }}">

  <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-datepicker.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/jquery.timepicker.css') }}">


  <link rel="stylesheet" href="{{ asset('frontend/css/flaticon.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/icomoon.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="{{ route('homepage') }}">GO<span>WESS</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
        aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto" style="color: #ab582d">
          <li class="nav-item {{ request()->is('/') ? 'active' : '' }}"><a href="{{ route('homepage') }}" class="nav-link">Home</a></li>
          <li class="nav-item {{ request()->is('services') ? 'active' : '' }}"><a href="{{ route('services') }}" class="nav-link">Services</a></li>
          <li class="nav-item {{ request()->is('bikes') || request()->is('bikes/*') ? 'active' : '' }}"><a href="{{ route('bike') }}" class="nav-link">Bikes</a></li>
          <li class="nav-item {{ request()->is('contact') ? 'active' : '' }}"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->

  @yield('content')

  <footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2"><a href="#" class="logo">Go<span>Wess</span></a></h2>
            <p>Your premier destination for hassle-free and reliable used bicycle purchasing services.</p>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
              <li class="ftco-animate"><a href="https://twitter.com/adityaseptian"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="https://www.facebook.com/muhammad.humam.94695"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="https://www.instagram.com/mamskuyy2/"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4 ml-md-5">
            <h2 class="ftco-heading-2">Information</h2>
            <ul class="list-unstyled">
              <li><a href="{{ route('homepage') }}#aboutus" class="py-2 d-block">About</a></li>
              <li><a href="{{ route('homepage') }}#services" class="py-2 d-block">Services</a></li>
              <li><a  href="{{ route('homepage') }}#bestprice" class="py-2 d-block">Best Price Guarantee</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Customer Support</h2>
            <ul class="list-unstyled">
              <li><a href="{{ route('contact') }}" class="py-2 d-block">FAQ</a></li>
               <li><a href="{{ route('contact') }}" class="py-2 d-block">Booking Tips</a></li>
              <li><a href="{{ route('contact') }}" class="py-2 d-block">Contact Us</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Have a Questions?</h2>
            <div class="block-23 mb-3">
              <ul>
                <li><span class="icon icon-map-marker"></span><span class="text">Kost Pondok Teladan Sukabirus, 2JCH+CVH, pondok teladan, Jl. Sukabirus, Citeureup, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40257</span></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+62 123 456 7890</span></a></li>
                <li><a href="#"><span class="icon icon-envelope"></span><span
                      class="text">contact@gowess.com</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">

          <p>
            Copyright &copy;
            <script>document.write(new Date().getFullYear());</script> All rights reserved</a>
          </p>
        </div>
      </div>
    </div>
  </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#F96D00" />
    </svg></div>


  <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
  <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('frontend/js/aos.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('frontend/js/bootstrap-datepicker.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.timepicker.min.js') }}"></script>
  <script src="{{ asset('frontend/js/scrollax.min.js') }}"></script>
  <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset('frontend/js/google-map.js') }}"></script>
  <script src="{{ asset('frontend/js/main.js') }}"></script>

</body>

</html>
