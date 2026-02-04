<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Salt Internationals &mdash; | Our Factory</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Our state-of-the-art salt processing facility." />
	<meta name="keywords" content="salt factory, himalayan salt production, salt mining" />
	<meta name="author" content="Salt International" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
	<!-- FontAwesome -->
	<link rel="preconnect" href="https://cdnjs.cloudflare.com">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{ asset('css/flexslider.css') }}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">

	<!-- Modernizr JS -->
	<script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>
	<link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
	
	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
    
    <div class="fixed-top">
      <div class="container px-0">
        <nav class="navbar navbar-expand-lg navbar-freya navbar-light"> 
          <a class="navbar-brand" href="{{ url('/') }}">
            <img class="logo" src="{{ asset('images/Logo_fitted2.png') }}" alt="Salt International" style="max-height: 58px; width: 100%;">
          </a>
          
          <button class="navbar-toggler navbar-toggle p-0 border-0" type="button" data-toggle="collapse" data-target="#primaryNavbarCollapse" aria-controls="primaryNavbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="hamburger hamburger--emphatic">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
            </span>
          </button>
          
          <div class="collapse navbar-collapse" id="primaryNavbarCollapse">
            <ul class="navbar-nav py-3 py-lg-0 mt-1 mb-2 my-lg-0 ms-lg-n1">
              <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
			  <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ url('/product') }}">Products</a></li>
              <li class="nav-item active"><a class="nav-link" href="{{ url('/our-factory') }}">Our Factory</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
            </ul>
          </div>
          
          <div class="search-bar-container ms-lg-auto py-3 py-lg-0 me-n2">
              <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search..">
                  <span class="input-group-btn">
                      <button class="btn btn-primary" type="button"><i class="icon-search"></i></button>
                  </span>
              </div>
          </div>
        </nav>
      </div>
    </div>

	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url('{{ asset('images/mine-image.jpg') }}');">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Our Factory</h1>
							<h2>State-of-the-Art Production Facility</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	<div id="fh5co-about">
		<div class="container">
			<div class="about-content">
				<div class="row animate-box">
					<div class="col-md-6">
						<div class="desc">
							<h3>Our Infrastructure</h3>
							<p>Located near the Khewra Salt Mine, our manufacturing facility is equipped with modern machinery to process raw Himalayan salt into high-quality finished products. We maintain strict hygiene standards to ensure the purity of our salt is preserved from extraction to packaging.</p> 
							<p>Our facility spans a large area, allowing us to handle bulk orders efficiently. With dedicated sections for sorting, cleaning, cutting, and packaging, we ensure a seamless workflow that maximizes productivity without compromising on quality.</p>
						</div>
					</div>
					<div class="col-md-6">
						<img class="img-responsive" src="{{ asset('images/about.jpeg') }}" alt="Our Factory">
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-services" class="fh5co-bg-section">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<span>How We Work</span>
					<h2>Our Production Process</h2>
					<p>From extraction to distribution, ensuring quality at every step.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-4 text-center">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<img class="icon-img" src="{{ asset('images/Process/location.png') }}" alt="" loading="lazy">
						</span>
						<h3>Direct Source From Mine</h3>
						<p>We extract the finest salt directly from the Khewra Salt Mine, ensuring 100% authenticity and purity right from the source.</p>
						<!-- <p><a href="#" class="btn btn-primary btn-outline">Learn More</a></p> -->
					</div>
				</div>
				<div class="col-md-4 col-sm-4 text-center">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<img class="icon-img" src="{{ asset('images/Process/settings.png') }}" alt="" loading="lazy">
						</span>
						<h3>Production</h3>
						<p>Our state-of-the-art processing facility cleans, grinds, and packages the salt while maintaining its natural mineral content.</p>
						<!-- <p><a href="#" class="btn btn-primary btn-outline">Learn More</a></p> -->
					</div>
				</div>
				<div class="col-md-4 col-sm-4 text-center">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<img class="icon-img" src="{{ asset('images/Process/shape.png') }}" alt="" loading="lazy">
						</span>
						<h3>Ready For Distribution</h3>
						<p>Packed and ready, our global logistics network ensures timely and secure delivery to retailers and customers worldwide.</p>
						<!-- <p><a href="#" class="btn btn-primary btn-outline">Learn More</a></p> -->
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-started">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Quality Control</h2>
					<p>Our dedicated Quality Control team monitors every stage of production. We are ISO certified and comply with international food safety standards to guarantee that our products are safe, pure, and of the highest quality.</p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center">
					<p><a href="{{ url('/contact') }}" class="btn btn-default btn-lg">Contact Us For A Quote</a></p>
				</div>
			</div>
		</div>
	</div>

	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row row-pb-md footer-items ">
				<div class="col-md-4 fh5co-widget">
					<span><a href="{{ url('/') }}"><img class="logo2" src="{{ asset('images/logo.png') }}" alt="Salt International" loading="lazy"></a></span>
					<p class="footer-desc">Salt International is your trusted source for premium Himalayan Pink Salt. We deliver nature's purest minerals straight from the mines to you, ensuring quality and authenticity in every product.</p>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<ul class="fh5co-footer-links">
						<li class="footer-heading">Useful Links</li>
						<li><a href="{{ url('/') }}">Home</a></li>
						<li><a href="{{ url('/about') }}">About</a></li>
						<li><a href="{{ url('/contact') }}">Contact</a></li>
					</ul>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<ul class="fh5co-footer-links">
						<li class="footer-heading">Quick Links</li>
						<li><a href="{{ url('/product') }}">Products</a></li>
						

					</ul>
				</div>

				<div class="col-md-3 col-sm-4 col-xs-6 col-md-push-1 footer-contact">
					<div class="fh5co-contact-info">
						<ul class="fh5co-footer-links">
							<li class="footer-heading">Contact Us</li>
							<li class="address">350-A Jail Road , <br> Shadman  1 Lahore Pakistan</li>
							<li class="phone"><a href="tel://1234567920">+92 300 0113977</a></li>
							<li class="email"><a href="mailto:info@saltinternational.com">hasaan@salt-international.com</a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2016 Salt International. All Rights Reserved.</small> 
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<a href="https://wa.me/60146435630" class="whatsapp-float" target="_blank" title="Chat on WhatsApp">
            <i class="fab fa-whatsapp whatsapp-icon"></i>
        </a>
	
	<!-- jQuery -->
	<script src="{{ asset('js/jquery.min.js') }}" defer></script>
	<!-- jQuery Easing -->
	<!-- <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script> -->
	<!-- Bootstrap -->
	<script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
	<!-- Waypoints -->
	<script src="{{ asset('js/jquery.waypoints.min.js') }}" defer></script>
	<!-- countTo -->
	<!-- <script src="{{ asset('js/jquery.countTo.js') }}" defer></script> -->
	<!-- Flexslider -->
	<script src="{{ asset('js/jquery.flexslider-min.js') }}" defer></script>
	<!-- Main -->
	<script src="{{ asset('js/main.js?v=final') }}" defer></script>

	</body>
</html>
