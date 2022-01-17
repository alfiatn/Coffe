<!DOCTYPE html>
<html lang="en">
  <head>
    <title>nKopi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lovers+Quarrel" rel="stylesheet">

    <link rel="stylesheet" href="{{url('public/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('public/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{url('public/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('public/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{url('public/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{url('public/css/aos.css')}}">

    <link rel="stylesheet" href="{{url('public/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{url('public/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{url('public/css/jquery.timepicker.css')}}">

    
    <link rel="stylesheet" href="{{url('public/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{url('public/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{url('public/css/style.css')}}">
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">nKopi</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item active"><a href="{{url('kopi')}}" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="{{url('menu')}}" class="nav-link">Menu</a></li>
	        	<li class="nav-item"><a href="{{url('pesanadmin')}}" class="nav-link">Reservation</a></li>
            <li class="nav-item"><a href="{{url('contactadmin')}}" class="nav-link">Contact</a></li>
	          <!-- <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li> -->
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

      <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  @yield('content')

<script src="{{url('public/js/jquery.min.js')}}"></script>
<script src="{{url('public/js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{url('public/js/popper.min.js')}}"></script>
<script src="{{url('public/js/bootstrap.min.js')}}"></script>
<script src="{{url('public/js/jquery.easing.1.3.js')}}"></script>
<script src="{{url('public/js/jquery.waypoints.min.js')}}"></script>
<script src="{{url('public/js/jquery.stellar.min.js')}}"></script>
<script src="{{url('public/js/owl.carousel.min.js')}}"></script>
<script src="{{url('public/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{url('public/js/aos.js')}}"></script>
<script src="{{url('public/js/jquery.animateNumber.min.js')}}"></script>
<script src="{{url('public/js/bootstrap-datepicker.js')}}"></script>
<script src="{{url('public/js/jquery.timepicker.min.js')}}"></script>
<script src="{{url('public/js/scrollax.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{url('public/js/google-map.js')}}"></script>
<script src="{{url('public/js/main.js')}}"></script>
  
</body>
</html>