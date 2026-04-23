<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Salt Internationals &mdash; | Homepage</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
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
	<!-- FontAwesome -->
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
	

	<style>
		body{
		/* font-family: 'Lato', sans-serif !important; */
		}
		h2{
			/* font-family: Poppins, Sans-serif !important; */
		}
        /* Search Suggestions CSS */
        .search-bar-container {
            position: relative;
        }
        .search-suggestions {
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            background: #fff;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            border-radius: 0 0 4px 4px;
            z-index: 1000;
            display: none; /* Hidden by default */
            max-height: 300px;
            overflow-y: auto;
            border: 1px solid #eee;
        }
        .search-suggestions.show {
            display: block;
        }
        .suggestion-item {
            padding: 10px 15px;
            border-bottom: 1px solid #f1f1f1;
            cursor: pointer;
            display: flex;
            align-items: center;
            transition: background 0.2s;
        }
        .suggestion-item:last-child {
            border-bottom: none;
        }
        .suggestion-item:hover {
            background-color: #f9f9f9;
        }
        .suggestion-item img {
            width: 40px;
            height: 40px;
            object-fit: cover;
            border-radius: 4px;
            margin-right: 10px;
        }
        .suggestion-item .info {
            display: flex;
            flex-direction: column;
        }
        .suggestion-item .name {
            font-size: 14px;
            font-weight: 600;
            color: #333;
        }
        .suggestion-item .type {
            font-size: 11px;
            color: #888;
        }
        .no-results {
            padding: 15px;
            text-align: center;
            color: #777;
            font-size: 14px;
        }
	</style>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	</head>
	<body>
		
	<div class="fh5co-loader">
		<!-- Preload LCP Hero Image -->
		<link rel="preload" as="image" href="{{ asset('images/Products/banner-products/coarse-himalayan-pink-salt.jpg') }}">
	</div>
	
	<div id="page">
    
    <div class="fixed-top">
      <div class="container px-0">
        <nav class="navbar navbar-expand-lg navbar-freya navbar-light"> 
          <a class="navbar-brand" href="{{ url('/') }}">
            <img class="logo" src="{{ asset('images/Logo_fitted2.png') }}" alt="Salt International" style="max-height: 51px; width: 100%;">
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
              <li class="nav-item active"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
			  <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About Us</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ url('/product') }}">Products</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ url('/our-factory') }}">Our Factory</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
            </ul>
          </div>
          
          <div class="search-bar-container ms-lg-auto py-3 py-lg-0 me-n2">
              <div class="input-group">
                  <input type="text" id="search-input" class="form-control" placeholder="Search.." autocomplete="off">
                  <span class="input-group-btn">
                      <button class="btn btn-primary" type="button"><i class="icon-search"></i></button>
                  </span>
              </div>
              <div id="search-suggestions" class="search-suggestions"></div>
          </div>
        </nav>
      </div>
    </div>
	
	<aside id="fh5co-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url('{{ asset('images/Products/banner-products/coarse-himalayan-pink-salt.jpg') }}');">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<div class="desc">
		   						<!-- <span class="price">$800</span> -->
		   						<h2>Coarse Himalayan Pink Salt</h2>
		   						<p style="color: black;">Pure and raw, sourced from the mines, straight from the heart of Khewra to your doorstep, we deliver premium coarse salt. Globally we serve with trusted quality.</p>
			   					<!-- <p><a href="single.html" class="btn btn-primary btn-outline btn-lg">Purchase Now</a></p> -->
		   					</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url('{{ asset('images/Products/banner-products/himalayan-pink-salt.jpg') }}');">
		   		<div class="container">
		   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<div class="desc">
		   						<!-- <span class="price">$530</span> -->
		   						<h2>Himalayan Pink Salt</h2>
		   						<p style="color: black;">Deep within the ancient Himalayan range, free from modern impurities and toxins, lies the purest salt on earth. Naturally it glows with eighty-four essential minerals.</p>
			   					<!-- <p><a href="single.html" class="btn btn-primary btn-outline btn-lg">Purchase Now</a></p> -->
		   					</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url('{{ asset('images/Products/banner-products/pink-salt-lamps.jpg') }}');">
		   		<div class="container">
		   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<div class="desc">
		   						<!-- <span class="price">$750</span> -->
		   						<h2>Himalayan Rock Salt Lamps</h2>
		   						<p style="color: black;">Deep from the mines, shaped by skilled hands, sourced from the ancient foothills of the Himalayas, we craft these unique lights. Radiating they warm your home decor.</p>
			   					
		   					</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

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
						<h3>Ready To Export</h3>
						<p>Packed and ready, our global logistics network ensures timely and secure delivery to retailers and customers worldwide.</p>
						<!-- <p><a href="#" class="btn btn-primary btn-outline">Learn More</a></p> -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="fh5co-product">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>Our Top Products.</h2>
                    <p>Discover our premium products, handcrafted with care and quality.</p>
                </div>
            </div>

            @foreach($products->chunk(3) as $chunk)
                <div class="row">
                    @foreach($chunk as $product)
                        <div class="col-md-4 text-center animate-box" onclick="window.location='{{ route('product.show', $product->slug) }}'" style="cursor: pointer;">
                            <div class="product">
                                <div class="product-grid" style="background-image:url('{{ asset($product->image) }}');">
                                    <div class="inner">
                                        <p>
                                            <a href="{{ route('product.show', $product->slug) }}" class="icon"><i class="icon-eye"></i></a>
                                        </p>
                                    </div>
                                </div>
                                <div class="desc product-name-card">
                                    <h3><a href="{{ route('product.show', $product->slug) }}">{{ $product->name }}</a></h3>
                                    <p>{{ $product->short_description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach

        </div>
    </div>

	<!-- <div id="fh5co-team" class="fh5co-bg-section">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<span>Expert Staff</span>
					<h2>Our Team</h2>
					<p>Meet the dedicated professionals behind our premium quality.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="team-member animate-box" data-animate-effect="fadeIn">
						<div class="main-content">
							<img src="{{ asset('images/person1.jpg') }}" alt="Shane Cotter" loading="lazy">
							<span class="category">Manager</span>
							<h4>Shane Cotter</h4>
							<ul class="social-icons">
								<li><a href="#" class="email"><i class="fas fa-envelope"></i></a></li>
								<li><a href="#" class="wa"><i class="fab fa-whatsapp"></i></a></li>
								<li><a href="#" class="li"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="team-member animate-box" data-animate-effect="fadeIn">
						<div class="main-content">
							<img src="{{ asset('images/person2.jpg') }}" alt="Kathryn Wilson" loading="lazy">
							<span class="category">Supervisor</span>
							<h4>Kathryn Wilson</h4>
							<ul class="social-icons">
								<li><a href="#" class="email"><i class="fas fa-envelope"></i></a></li>
								<li><a href="#" class="wa"><i class="fab fa-whatsapp"></i></a></li>
								<li><a href="#" class="li"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="team-member animate-box" data-animate-effect="fadeIn">
						<div class="main-content">
							<img src="{{ asset('images/person3.jpg') }}" alt="David Hutson" loading="lazy">
							<span class="category">Quality Control</span>
							<h4>David Hutson</h4>
							<ul class="social-icons">
								<li><a href="#" class="email"><i class="fas fa-envelope"></i></a></li>
								<li><a href="#" class="wa"><i class="fab fa-whatsapp"></i></a></li>
								<li><a href="#" class="li"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->



	
	<!-- <div id="fh5co-testimonial" class="fh5co-bg-section">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<span>Testimony</span>
					<h2>Happy Clients</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row animate-box">
						<div class="owl-carousel owl-carousel-fullwidth">
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="images/person1.jpg" alt="user">
									</figure>
									<span>Jean Doe, via <a href="#" class="twitter">Twitter</a></span>
									<blockquote>
										<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="images/person2.jpg" alt="user">
									</figure>
									<span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
									<blockquote>
										<p>&ldquo;Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="images/person3.jpg" alt="user">
									</figure>
									<span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
									<blockquote>
										<p>&ldquo;Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
 
	<div id="fh5co-quote">
    <div class="container">
        <div class="row">
            <div class="col-md-6 animate-box quote-content" data-animate-effect="fadeInLeft">
                <h2 class="quote-title">Get A Free Quote</h2>
                <div class="quote-separator"></div>
                <p class="quote-text">Looking for premium quality Himalayan salt products? Whether you need bulk coarse salt, custom lamps, or edible pink salt, we are here to supply your business needs globally. Fill out the form and our team will get back to you within 24 hours.</p>
            </div>
            <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                
                {{-- ✅ Class "quote-form" (Design ke liye) aur "quotation-form" (AJAX ke liye) dono laga di hain --}}
                <form action="{{ route('quote.store') }}" method="POST" class="quote-form quotation-form">
                    @csrf
                    
                    {{-- Name Field --}}
                    <div class="form-group">
                        <label for="fname" class="sr-only">Your Name</label>
                        <input type="text" name="name" class="form-control" id="fname" placeholder="Your Name" required>
                    </div>

                    {{-- Email Field --}}
                    <div class="form-group">
                        <label for="email" class="sr-only">Your Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Your Email" required>
                    </div>

                    {{-- Phone Field --}}
                    <div class="form-group">
                        <label for="phone" class="sr-only">Phone Number</label>
                        <input type="tel" name="phone" class="form-control" id="phone" placeholder="Phone Number (Optional)">
                    </div>

                    {{-- Message Field --}}
                    <div class="form-group">
                        <label for="message" class="sr-only">Message</label>
                        <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Message" required></textarea>
                    </div>

                    <div class="form-group">
                        <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
                    </div>

                    {{-- Submit Button --}}
                    <div class="form-group">
                        {{-- <input> ko <button> mein change kiya taaki "Sending..." spinner chal sake, lekin style wahi 'btn btn-primary' rakha hai --}}
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

	<div id="quotation-popup" class="popup-overlay">
    <div class="popup-content">
        <span class="close-popup">&times;</span>
        <div class="popup-header">
            <h3>Get a Quote</h3>
            <p>Fill out the form below and we'll get back to you shortly.</p>
        </div>
        
        {{-- Success Message Display --}}
        @if(session('success'))
            <div class="alert alert-success" style="color: green; margin-bottom: 10px;">
                {{ session('success') }}
            </div>
            <script>
                setTimeout(function() {
                    document.getElementById('quotation-popup').classList.add('show');
                }, 600);
            </script>
        @endif

        {{-- Validation Errors --}}
        @if($errors->any())
            <div class="alert alert-danger" style="color: red;">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
             <script>
                setTimeout(function() {
                    document.getElementById('quotation-popup').classList.add('show');
                }, 600);
            </script>
        @endif

        <form action="{{ route('quote.store') }}" method="POST" class="quotation-form">
            @csrf
            {{-- Note: Maine yahan Name field add ki hai agar aapko chahiye, warna hata dein --}}
            <div class="form-group">
                <label for="quote-email">Email <span class="required">*</span></label>
                <input type="email" id="quote-email" name="email" class="form-control" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="quote-phone">Phone Number (Optional)</label>
                <input type="tel" id="quote-phone" name="phone" class="form-control" placeholder="Enter your phone number">
            </div>
            <div class="form-group">
                <label for="quote-desc">Description <span class="required">*</span></label>
                <textarea id="quote-desc" name="message" class="form-control" rows="4" placeholder="Describe your requirements" required></textarea>
            </div>
            <div class="form-group">
                <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Send Quotation</button>
        </form>
    </div>
</div>

	<div id="fh5co-counter" class="fh5co-bg fh5co-counter" style="background-image:url('{{ asset('images/countries-bg.png') }}');">
		<div class="container">
			<div class="row">
				<div class="display-t">
					<div class="display-tc">
						<div class="col-md-3 col-sm-6 animate-box">
							<div class="feature-center">
								<span class="icon">
									<i class="fas fa-truck text-white"></i>
								</span>

								<span class="counter js-counter" data-from="0" data-to="45" data-speed="5000" data-refresh-interval="50">1</span>
								<span class="counter-label">Exporting Countries</span>

							</div>
						</div>
						<div class="col-md-3 col-sm-6 animate-box">
							<div class="feature-center">
								<span class="icon">
									<i class="fas fa-globe text-white"></i>
								</span>

								<span class="counter js-counter" data-from="0" data-to="250" data-speed="5000" data-refresh-interval="50">1</span>
								<span class="counter-label">Serving Clients</span>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 animate-box">
							<div class="feature-center">
								<span class="icon">
									<i class="fas fa-calendar-check text-white"></i>
								</span>
								<span class="counter js-counter" data-from="0" data-to="25" data-speed="5000" data-refresh-interval="50">1</span>
								<span class="counter-label">Years Experience</span>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 animate-box">
							<div class="feature-center" style="padding: 45px 20px;">
								<span class="icon">
									<i class="fas fa-certificate text-white"></i>
								</span>

								<div style="display: flex; justify-content: center; align-items: baseline;">
									<span class="counter js-counter" style="margin-bottom: 0;" data-from="0" data-to="300" data-speed="5000" data-refresh-interval="50">1</span>
									<span style="font-size: 20px; color: black; font-weight: bold; margin-left: 5px;">MT</span>
								</div>
								<span class="counter-label">Production Capacity/Day</span>
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
					<p class="footer-desc">Salt International is your trusted source for premium Himalayan Pink Salt. We deliver nature's purest Pink Himalayan Salt straight from the mines to you, ensuring quality and authenticity in every product.</p>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<ul class="fh5co-footer-links">
						<li class="footer-heading">Useful Links</li>
						<li><a href="{{ url('/') }}">Home</a></li>
						<li><a href="{{ url('/product') }}">Products</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Contact</a></li>
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
			<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<ul class="fh5co-footer-links">
						

					</ul>
				</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2026 Salt International. All Rights Reserved.</small> 
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

	<!-- Quotation Popup -->
	<div id="quotation-popup" class="popup-overlay">
		<div class="popup-content">
			<span class="close-popup">&times;</span>
			<div class="popup-header">
				<h3>Get a Quote</h3>
				<p>Fill out the form below and we'll get back to you shortly.</p>
			</div>
			
			@if(session('success'))
				<div class="alert alert-success">
					{{ session('success') }}
				</div>
			@endif

			@if($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif

			<form action="{{ route('quote.store') }}" method="POST" class="quotation-form">
				@csrf
				<div class="form-group">
					<label for="quote-email">Email <span class="required">*</span></label>
					<input type="email" id="quote-email" name="email" class="form-control" placeholder="Enter your email" required>
				</div>
				<div class="form-group">
					<label for="quote-phone">Phone Number (Optional)</label>
					<input type="tel" id="quote-phone" name="phone" class="form-control" placeholder="Enter your phone number">
				</div>
				<div class="form-group">
					<label for="quote-desc">Description <span class="required">*</span></label>
					<textarea id="quote-desc" name="message" class="form-control" rows="4" placeholder="Describe your requirements" required></textarea>
				</div>
				<div class="form-group">
					<div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
				</div>
				<button type="submit" class="btn btn-primary btn-block">Send Quotation</button>
			</form>
		</div>
	</div>

	<div class="gototop js-top">
		<!-- <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a> -->
	</div>

	<a href="https://wa.me/923000113977" class="whatsapp-float" target="_blank" title="Chat on WhatsApp">
            <i class="fab fa-whatsapp whatsapp-icon"></i>
        </a>
	
	<!-- jQuery -->
	<script src="{{ asset('js/jquery.min.js') }}" ></script>
	<!-- jQuery Easing -->
	<!-- <script src="js/jquery.easing.1.3.js"></script> -->
	<!-- Bootstrap -->
	<script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
	<!-- Waypoints -->
	<script src="{{ asset('js/jquery.waypoints.min.js') }}" defer></script>
	<!-- countTo -->
	<script src="{{ asset('js/jquery.countTo.js') }}" defer></script>
	<!-- Flexslider -->
	<script src="{{ asset('js/jquery.flexslider-min.js') }}" defer></script>
	<!-- Main -->
	<script src="{{ asset('js/main.js?v=final') }}" defer></script>

	<!-- Ajax FOr Fast Load -->
	 <script>
$(document).ready(function() {
    $('.quotation-form').on('submit', function(e) {
        e.preventDefault();

        var form = $(this);
        var submitBtn = form.find('button[type="submit"]');
        var originalBtnText = submitBtn.text();

        submitBtn.html('Sending... <i class="fa fa-spinner fa-spin"></i>');
        submitBtn.prop('disabled', true);

        $.ajax({
            url: "{{ route('quote.store') }}",
            type: "POST",
            data: form.serialize(),
            success: function(response) {
                if (response.success) {
                    $('#quotation-popup').removeClass('show');

                    alert("✅ " + response.message);

                    form[0].reset();
                }
            },
            error: function(xhr) {
                var errors = xhr.responseJSON.errors;
                var errorMessage = "";
                
                if(Array.isArray(errors)) {
                    errorMessage = errors.join("\n");
                } else if(xhr.responseJSON.message) {
                    errorMessage = xhr.responseJSON.message;
                } else {
                    errorMessage = "Error sending request.";
                }
                
                alert("❌ Error:\n" + errorMessage);
            },
            complete: function() {
                submitBtn.text(originalBtnText);
                submitBtn.prop('disabled', false);
                if (typeof grecaptcha !== 'undefined') {
                    grecaptcha.reset();
                }
            }
        });
    });
});
</script>
	 
<script>
    // Search Functionality
    $(document).ready(function() {
        let searchTimeout;
        const searchInput = $('#search-input');
        const suggestionsBox = $('#search-suggestions');

        searchInput.on('keyup', function() {
            clearTimeout(searchTimeout);
            let query = $(this).val();

            if (query.length < 2) {
                suggestionsBox.removeClass('show').html('');
                return;
            }

            searchTimeout = setTimeout(function() {
                $.ajax({
                    url: "{{ route('product.search') }}",
                    type: "GET",
                    data: { query: query },
                    success: function(response) {
                        suggestionsBox.html('');
                        if (response.length > 0) {
                            let html = '';
                            response.forEach(item => {
                                html += `
                                    <div class="suggestion-item" onclick="window.location.href='${item.url}'">
                                        <img src="${item.image}" alt="${item.name}">
                                        <div class="info">
                                            <span class="name">${item.name}</span>
                                            <span class="type">${item.type}</span>
                                        </div>
                                    </div>
                                `;
                            });
                            suggestionsBox.html(html).addClass('show');
                        } else {
                            suggestionsBox.html('<div class="no-results">No product found</div>').addClass('show');
                        }
                    },
                    error: function() {
                        console.log('Search error');
                    }
                });
            }, 300); // Debounce 300ms
        });

        // Hide suggestions when clicking outside
        $(document).click(function(e) {
            if (!$(e.target).closest('.search-bar-container').length) {
                suggestionsBox.removeClass('show');
            }
        });
    });
</script>
	</body>
</html>
