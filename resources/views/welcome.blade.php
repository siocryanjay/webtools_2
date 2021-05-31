<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Welcome to Laravel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <base href="{{ \URL::to('/')}}">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
  
  <div class="hero-wrap js-fullheight">
    
      <div class="container-fluid px-0">
      	<div class="row d-md-flex no-gutters slider-text align-items-center js-fullheight justify-content-start">
	      	<img class="one-third js-fullheight align-self-end order-md-first img-fluid" src="images/undraw_co-working_825n.svg" alt="">
	        <div class="one-forth d-flex align-items-center ftco-animate js-fullheight">
	        	<div class="text mt-5">
	        		<span class="subheading text-muted">Hi, I am</span>
	            <h1 class="mb-3 text-dark"><span>Ryan Jay Sioc</span></h1>
	            <p class="text-body">Studying and learning at home with the course Web Software Tools 2</p>
                @if (Route::has('login'))
                @auth
                <div class="d-inline-flex">
                  <a href="{{ url('/home') }}" class="btn btn-secondary px-4 py-3">Home</a>
                    @else
                    <a href="{{ route('login') }}" class="btn btn-secondary px-4 py-3">Login</a>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-secondary px-4 py-3">Register</a>
                        @endif
                    @endauth  
                </div> 
	          </div>
              @endif
	        </div>
	    	</div>
      </div>
    
  </div>
    
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>