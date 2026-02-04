<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Salt International</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by gettemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="gettemplates.co" />

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

	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{ asset('css/flexslider.css') }}">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Custom Single Page Style -->
    <link rel="stylesheet" href="{{ asset('css/custom-single.css') }}">

	<!-- Modernizr JS -->
	<script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="{{ asset('js/respond.min.js') }}"></script>
	<![endif]-->

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
              <li class="nav-item "><a class="nav-link" href="{{ url('/') }}">Home</a></li>
			  <li class="nav-item "><a class="nav-link" href="{{ url('/about') }}">About</a></li>
              <li class="nav-item active"><a class="nav-link" href="{{ url('/product') }}">Products</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ url('/our-factory') }}">Our Factory</a></li>
              <li class="nav-item "><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
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
	<!-- <nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-xs-2">
					<div id="fh5co-logo"><a href="{{ url('/') }}">Shop.</a></div>
				</div>
				<div class="col-md-6 col-xs-6 text-center menu-1">
					<ul>
						<li class="has-dropdown active">
							<a href="{{ url('/product') }}">Shop</a>
							<ul class="dropdown">
								<li><a href="{{ url('/single') }}">Single Shop</a></li>
							</ul>
						</li>
						<li><a href="{{ url('/about') }}">About</a></li>
						<li class="has-dropdown">
							<a href="#">Services</a>
							<ul class="dropdown">
								<li><a href="#">Web Design</a></li>
								<li><a href="#">eCommerce</a></li>
								<li><a href="#">Branding</a></li>
								<li><a href="#">API</a></li>
							</ul>
						</li>
						<li><a href="{{ url('/contact') }}">Contact</a></li>
					</ul>
				</div>
				<div class="col-md-3 col-xs-4 text-right hidden-xs menu-2">
					<ul>
						<li class="search">
							<div class="input-group">
						      <input type="text" placeholder="Search..">
						      <span class="input-group-btn">
						        <button class="btn btn-primary" type="button"><i class="icon-search"></i></button>
						      </span>
						    </div>
						</li>
						<li class="shopping-cart"><a href="#" class="cart"><span><small>0</small><i class="icon-shopping-cart"></i></span></a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</nav> -->

	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url('{{ asset('images/single-product.jpg') }}');">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Product Details</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	<div id="fh5co-product">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 animate-box">
					<div class="owl-carousel owl-carousel-fullwidth product-carousel">
						<div class="item">
							<div class="active text-center">
								<figure>
									<img src="{{ asset('images/Products/ediable-salt.png') }}" alt="Edible Salt" style="max-height: 400px; object-fit: contain;">
								</figure>
							</div>
						</div>
						<!-- Add more images as placeholders if needed -->
					</div>
					<div class="row animate-box">
						<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
							<h2>Edible Salt</h2>
							<p>Premium Grade Himalayan Pink Salt - The Purest Salt on Earth.</p> 	
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="fh5co-tabs animate-box">
						<ul class="fh5co-tab-nav">
							<li class="active"><a href="#" data-tab="1"><span class="icon visible-xs"><i class="icon-file"></i></span><span class="hidden-xs">Product Variants</span></a></li>
							<li><a href="#" data-tab="2"><span class="icon visible-xs"><i class="icon-bar-graph"></i></span><span class="hidden-xs">Description</span></a></li>
						</ul>

						<!-- Tabs -->
						<div class="fh5co-tab-content-wrap">

							<div class="fh5co-tab-content tab-content active" data-tab-content="1">
								<div class="col-md-10 col-md-offset-1">
									<div class="variants-section">
                                        <h3 class="text-center" style="margin-bottom: 30px;">Edible Himalayan Pink Salt Variants</h3>
                                        
                                        <!-- Visual Grid for Crystal Granules -->
                                        <h4 style="color: #EF9B0F; margin-top: 20px; border-bottom: 2px solid #eee; padding-bottom: 10px;">Crystal Salt Granules</h4>
                                        <div class="row text-center">
                                            <div class="col-md-4 col-sm-4">
                                                <div class="variant-card">
                                                    <img src="{{ asset('images/Products/ediable-salt.png') }}" alt="Light Pink" class="variant-img">
                                                    <div class="variant-body">
                                                        <h5>Light Pink</h5>
                                                        <p class="variant-spec">Size: 2-5 mm</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4">
                                                <div class="variant-card">
                                                    <img src="{{ asset('images/Products/ediable-salt.png') }}" alt="Medium Pink" class="variant-img" style="filter: contrast(1.2) saturate(1.2);">
                                                    <div class="variant-body">
                                                        <h5>Medium Pink</h5>
                                                        <p class="variant-spec">Size: 2-5 mm</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4">
                                                <div class="variant-card">
                                                    <img src="{{ asset('images/Products/ediable-salt.png') }}" alt="Dark Pink" class="variant-img" style="filter: contrast(1.5) saturate(1.5);">
                                                    <div class="variant-body">
                                                        <h5>Dark Pink</h5>
                                                        <p class="variant-spec">Size: 2-5 mm</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Visual Grid for Running Salt -->
                                        <h4 style="color: #EF9B0F; margin-top: 40px; border-bottom: 2px solid #eee; padding-bottom: 10px;">Running Salt</h4>
                                        <div class="row text-center">
                                            <div class="col-md-4 col-sm-4">
                                                <div class="variant-card">
                                                    <img src="{{ asset('images/Products/ediable-salt.png') }}" alt="Light Pink" class="variant-img">
                                                    <div class="variant-body">
                                                        <h5>Light Pink</h5>
                                                        <p class="variant-spec">Mesh: 20-50</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4">
                                                <div class="variant-card">
                                                    <img src="{{ asset('images/Products/ediable-salt.png') }}" alt="Medium Pink" class="variant-img" style="filter: contrast(1.2) saturate(1.2);">
                                                    <div class="variant-body">
                                                        <h5>Medium Pink</h5>
                                                        <p class="variant-spec">Mesh: 20-50</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4">
                                                <div class="variant-card">
                                                    <img src="{{ asset('images/Products/ediable-salt.png') }}" alt="Dark Pink" class="variant-img" style="filter: contrast(1.5) saturate(1.5);">
                                                    <div class="variant-body">
                                                        <h5>Dark Pink</h5>
                                                        <p class="variant-spec">Mesh: 20-50</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Detailed Specs Table -->
                                    <div class="specs-section" style="margin-top: 50px;">
                                        <h3 class="text-center">Technical Specifications</h3>
                                        <table class="table table-striped table-hover spec-table">
                                            <thead>
                                                <tr>
                                                    <th>Product Name</th>
                                                    <th>Color</th>
                                                    <th>Size / Mesh</th>
                                                    <th>Purity (NaCl)</th>
                                                    <th>Moisture</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Crystal Salt Granules</td>
                                                    <td>Light Pink</td>
                                                    <td>2–5 mm</td>
                                                    <td>> 98.5%</td>
                                                    <td>< 0.2%</td>
                                                </tr>
                                                <tr>
                                                    <td>Crystal Salt Granules</td>
                                                    <td>Medium Pink</td>
                                                    <td>2–5 mm</td>
                                                    <td>> 98.5%</td>
                                                    <td>< 0.2%</td>
                                                </tr>
                                                <tr>
                                                    <td>Crystal Salt Granules</td>
                                                    <td>Dark Pink</td>
                                                    <td>2–5 mm</td>
                                                    <td>> 98.5%</td>
                                                    <td>< 0.2%</td>
                                                </tr>
                                                <tr>
                                                    <td>Running Salt</td>
                                                    <td>Light Pink</td>
                                                    <td>20–50 Mesh</td>
                                                    <td>> 98.0%</td>
                                                    <td>< 0.5%</td>
                                                </tr>
                                                <tr>
                                                    <td>Running Salt</td>
                                                    <td>Medium Pink</td>
                                                    <td>20–50 Mesh</td>
                                                    <td>> 98.0%</td>
                                                    <td>< 0.5%</td>
                                                </tr>
                                                <tr>
                                                    <td>Running Salt</td>
                                                    <td>Dark Pink</td>
                                                    <td>20–50 Mesh</td>
                                                    <td>> 98.0%</td>
                                                    <td>< 0.5%</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

								</div>
							</div>

							<div class="fh5co-tab-content tab-content" data-tab-content="2">
								<div class="col-md-10 col-md-offset-1">
									<h3>About Edible Salt</h3>
									<p>Our Edible Himalayan Pink Salt is 100% natural, unrefined, and hand-mined from the foothills of the Himalayas. It contains 84 essential minerals and trace elements that are beneficial for human health.</p>
                                    <p>Unlike regular table salt, our pink salt is free from additives and anti-caking agents, ensuring you get the purest product possible. It is perfect for cooking, seasoning, and grilling, adding a rich taste and unique texture to your meals.</p>
                                    
                                    <h4>Benefits</h4>
                                    <ul>
                                        <li>Regulates water content throughout the body.</li>
                                        <li>Promotes healthy pH balance in cells.</li>
                                        <li>Promotes blood sugar health and helps reduce the signs of aging.</li>
                                        <li>Assists in the generation of hydroelectric energy in cells in your body.</li>
                                    </ul>
								</div>
							</div>

						</div>

					</div>
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
	
	<!-- jQuery -->
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<!-- jQuery Easing -->
	<!-- <script src="{{ asset('js/jquery.easing.1.3.js') }}" defer></script> -->
	<!-- Bootstrap -->
	<script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
	<!-- Waypoints -->
	<script src="{{ asset('js/jquery.waypoints.min.js') }}" defer></script>
	<!-- Carousel -->
	<script src="{{ asset('js/owl.carousel.min.js') }}" defer></script>
	<!-- countTo -->
	<!-- <script src="{{ asset('js/jquery.countTo.js') }}" defer></script> -->
	<!-- Flexslider -->
	<script src="{{ asset('js/jquery.flexslider-min.js') }}" defer></script>
	<!-- Main -->
	<script src="{{ asset('js/main.js') }}" defer></script>

	</body>
</html>
