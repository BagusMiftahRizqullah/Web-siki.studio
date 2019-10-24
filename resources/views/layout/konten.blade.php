<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="/assets/img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>@yield('Siki Studio')</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="/assets/css/linearicons.css">
			<link rel="stylesheet" href="/assets/css/font-awesome.min.css">
			<link rel="stylesheet" href="/assets/css/bootstrap.css">
			<link rel="stylesheet" href="/assets/css/magnific-popup.css">
			<link rel="stylesheet" href="/assets/css/nice-select.css">					
			<link rel="stylesheet" href="/assets/css/animate.min.css">
			<link rel="stylesheet" href="/assets/css/owl.carousel.css">
			<link rel="stylesheet" href="/assets/css/main.css">
		</head>
		

			  <header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="/"><img src="/assets/img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
                          <li class="menu-active"><a href="{{ url('/') }}">Home</a></li>
                          <li class="menu-has-children"><a href="{{ url('/proyek') }}">Proyek</a>
                          <ul>
				              <li><a href="generic.html">proyek1</a></li>
				              <li><a href="elements.html">proyek2</a></li>
                            </ul>
                        </li>
				          <li><a href="#about">Bio</a></li>
				          <li><a href="#project">Kontak</a></li>
				          <li><a href="#price">Blog</a></li>	    		
			    	</div>
			    </div>
			  </header><!-- #header -->
      
	     <body>
         @yield('content')
         
			<!-- Slideer -->
			
			<!-- End Slider -->	
<!-- start footer Area -->		

			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-3  col-md-12">
							<div class="single-footer-widget">
								<h6>Top Products</h6>
								<ul class="footer-nav">
									<li><a href="#">Managed Website</a></li>
									<li><a href="#">Manage Reputation</a></li>
									<li><a href="#">Power Tools</a></li>
									<li><a href="#">Marketing Service</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-6  col-md-12">
							<div class="single-footer-widget newsletter">
								<h6>Newsletter</h6>
								<p>You can trust us. we only send promo offers, not a single spam.</p>
							
								
							</div>
						</div>
						<div class="col-lg-3  col-md-12">
							<div class="single-footer-widget mail-chimp">
								<h6 class="mb-20">Instragram Feed</h6>
								<ul class="instafeed d-flex flex-wrap">
									
								</ul>
							</div>
						</div>						
					</div>

					<div class="row footer-bottom d-flex justify-content-between">
						
						<div class="col-lg-4 col-sm-12 footer-social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->		
			<!-- End footer Area -->

					

			<script src="/assets/js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper./assets/js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="/assets/js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="/assets/js/easing.min.js"></script>			
			<script src="/assets/js/hoverIntent.js"></script>
			<script src="/assets/js/superfish.min.js"></script>	
			<script src="/assets/js/jquery.ajaxchimp.min.js"></script>
			<script src="/assets/js/jquery.magnific-popup.min.js"></script>	
			<script src="/assets/js/owl.carousel.min.js"></script>			
			<script src="/assets/js/jquery.sticky.js"></script>
			<script src="/assets/js/jquery.nice-select.min.js"></script>			
			<script src="/assets/js/parallax.min.js"></script>		
			<script src="/assets/js/mail-script.js"></script>	
			<script src="/assets/js/main.js"></script>	
		</body>
	</html>
