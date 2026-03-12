<!DOCTYPE HTML>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $product->name }} - Salt International</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Premium Himalayan Salt Products" />
    <meta name="keywords" content="salt, himalayan, pink salt, lamps, tiles" />
    <meta name="author" content="Salt International" />

    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}">

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom-single.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

	<link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">

    <script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>
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
              <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About Us</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ url('/product') }}">Products</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ url('/our-factory') }}">Our Factory</a></li>
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
                                    <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" style="max-height: 400px; object-fit: contain;">
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="row animate-box">
                        <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                            <h2>{{ $product->name }}</h2>
                            <p>{{ $product->short_description }}</p>    
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="fh5co-tabs animate-box">
                        <ul class="fh5co-tab-nav">
                            <li class="active"><a href="#" data-tab="1"><span class="icon visible-xs"><i class="icon-file"></i></span><span class="hidden-xs">Product Options</span></a></li>
                            <li><a href="#" data-tab="2"><span class="icon visible-xs"><i class="icon-bar-graph"></i></span><span class="hidden-xs">Description</span></a></li>
                        </ul>

                        <div class="fh5co-tab-content-wrap">

                            <div class="fh5co-tab-content tab-content active" data-tab-content="1">
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="variants-section">
                                        <h3 class="text-center" style="margin-bottom: 30px;">{{ $product->name }} Variants</h3>
                                        
                                        @if($product->variants->isEmpty())
                                            <p class="text-center">No variants available for this product.</p>
                                        @else
                                        <div class="row text-center flex-row-wrap">
                                            @foreach($product->variants as $variant)
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="variant-card flex-variant">
                                                    @php
                                                        $style = "";
                                                        if(Str::contains($variant->variant_name, 'Medium')) {
                                                            $style = "filter: contrast(1.2) saturate(1.2);";
                                                        } elseif (Str::contains($variant->variant_name, 'Dark')) {
                                                            $style = "filter: contrast(1.5) saturate(1.5);";
                                                        }
                                                    @endphp
                                                    
                                                    <img src="{{ $variant->image ? asset($variant->image) : asset($product->image) }}" 
                                                         alt="{{ $variant->variant_name }}" 
                                                         class="variant-img" 
                                                         style="{{ $style }}">
                                                    
                                                    <div class="variant-body">
                                                        <h5 style="font-size: 13px;">
                                                            {{ $variant->group_name }} 
                                                            @if($variant->variant_name) 
                                                                ({{ $variant->variant_name }}) 
                                                            @endif
                                                        </h5>
                                                        
                                                        @if($variant->spec_key)
                                                            <p class="variant-spec">{{ $variant->spec_key }}: {{ $variant->spec_value }}</p>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                        @endif
                                    </div>

                                    @if(!$product->variants->isEmpty())
                                    @php
                                        $hasSpecs = false;
                                        foreach($product->variants as $variant) {
                                            if(!empty($variant->spec_key)) {
                                                $hasSpecs = true;
                                                break;
                                            }
                                        }
                                    @endphp
                                    <div class="specs-section" style="margin-top: 50px;">
                                        <h3 class="text-center">Technical Specifications</h3>
                                        <table class="table table-striped table-hover spec-table">
                                            <thead>
                                                <tr>
                                                    <th>Product Name</th>
                                                    <th>Variant/Color</th>
                                                    @if($hasSpecs)
                                                    <th>Specification</th>
                                                    @endif
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($product->variants as $variant)
                                                <tr>
                                                    <td>{{ $product->name }}</td>
                                                    <td>{{ $variant->variant_name }}</td>
                                                    @if($hasSpecs)
                                                    <td>
                                                        @if($variant->spec_key)
                                                            {{ $variant->spec_key }}: {{ $variant->spec_value }}
                                                        @else
                                                            -
                                                        @endif
                                                    </td>
                                                    @endif
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    @endif

                                </div>
                            </div>

                            <div class="fh5co-tab-content tab-content" data-tab-content="2">
                                <div class="col-md-10 col-md-offset-1">
                                    <h3>About {{ $product->name }}</h3>
                                    <p>{!! nl2br(e($product->long_description)) !!}</p>
                                    
                                    @if($product->benefits->count() > 0)
                                    <h4>Benefits</h4>
                                    <ul>
                                        @foreach($product->benefits as $benefit)
                                            <li>{{ $benefit->benefit }}</li>
                                        @endforeach
                                    </ul>
                                    @endif

                                    <div class="row" style="margin-top: 60px; padding: 40px 0; background: #fafafa; border-radius: 8px;">
                                        <div class="col-md-12 text-center" style="margin-bottom: 30px;">
                                            <h3 style="font-weight: 300; text-transform: uppercase; letter-spacing: 2px; font-size: 18px;">Why Choose Salt International?</h3>
                                        </div>
                                        <div class="col-md-4 text-center">
                                            <div style="background: #fff; padding: 20px; border-radius: 6px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); height: 100%;">
                                                <span class="icon" style="font-size: 40px; color: #f8ad9d; display: block; margin-bottom: 15px;"><i class="icon-star"></i></span>
                                                <h4 style="font-weight: bold; margin-bottom: 10px; font-size: 16px;">Premium Quality</h4>
                                                <p style="font-size: 13px; color: #777; margin-bottom: 0;">Sourced directly from the finest Himalayan mines, ensuring 100% purity and rich mineral content.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 text-center">
                                            <div style="background: #fff; padding: 20px; border-radius: 6px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); height: 100%;">
                                                <span class="icon" style="font-size: 40px; color: #f8ad9d; display: block; margin-bottom: 15px;"><i class="icon-check"></i></span>
                                                <h4 style="font-weight: bold; margin-bottom: 10px; font-size: 16px;">100% Authentic</h4>
                                                <p style="font-size: 13px; color: #777; margin-bottom: 0;">Genuine pink salt, free from additives, bringing nature's best to your kitchen and home.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 text-center">
                                            <div style="background: #fff; padding: 20px; border-radius: 6px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); height: 100%;">
                                                <span class="icon" style="font-size: 40px; color: #f8ad9d; display: block; margin-bottom: 15px;"><i class="icon-heart"></i></span>
                                                <h4 style="font-weight: bold; margin-bottom: 10px; font-size: 16px;">Hand Mined</h4>
                                                <p style="font-size: 13px; color: #777; margin-bottom: 0;">Extracted with care using traditional methods to preserve its natural structure and benefits.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="margin-top: 30px;">
                                        <div class="col-md-12">
                                            <div style="background: #f8ad9d; padding: 30px; border-radius: 8px; text-align: center; color: #fff;">
                                                <h4 style="color: #fff; margin-bottom: 10px; font-weight: bold;">Need this in Bulk?</h4>
                                                <p style="color: rgba(255,255,255,0.9); margin-bottom: 20px;">We offer competitive pricing for wholesale and bulk orders. Get in touch with us today!</p>
                                                <a href="{{ url('/contact') }}" class="btn btn-white btn-outline" style="background: #fff; color: #f8ad9d; border-color: #fff;">Contact Us Now</a>
                                            </div>
                                        </div>
                                    </div>
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

    <div class="gototop js-top">
        <!-- <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a> -->
    </div>
    
    <a href="https://wa.me/923000113977" class="whatsapp-float" target="_blank" title="Chat on WhatsApp">
        <i class="fab fa-whatsapp whatsapp-icon"></i>
    </a>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}" defer></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.flexslider-min.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>

    </body>
</html>