<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<title>Home page | Ecomerce Cloteh</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Fav icon -->
	<link rel="shortcut icon" href="{{ asset('frontend/img/favicon.ico') }}">

	<!-- Font -->
	<link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,900,700,700italic,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700%7CDancing+Script%7CMontserrat:400,700%7CMerriweather:400,300italic%7CLato:400,700,900' rel='stylesheet' type='text/css' />
	<link href='http://fonts.googleapis.com/css?family=Cantata+One' rel='stylesheet' type='text/css' />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700,600' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300,500,700' rel='stylesheet' type='text/css'>
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">

	<!-- Magnific Popup -->
	<link href="{{ asset('frontend/css/magnific-popup.css') }}" rel="stylesheet">

	<link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/css/normalize.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/css/skin-lblue.css') }}">

	<link rel="stylesheet" href="{{ asset('frontend/css/ecommerce.css') }}">

	<!-- Owl carousel -->

	<link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/revolutionslider_settings.css') }}" media="screen" />
	<link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
	<script src="{{ asset('frontend/js/vendor/modernizr-2.6.2.min.js') }}"></script>



	<!--flex slider stylesheet-->
	<link rel="stylesheet" href="{{ asset('frontend/css/flexslider.css') }}" />
	<!--lightbox stylesheet-->
	<link rel="stylesheet" href="{{ asset('frontend/css/image-light-box.css') }}" />
	<link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.css') }}" />


	<link rel="stylesheet" href="{{ asset('frontend/css/setting.css') }}">

	<link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-override.css') }}">

      <!-- daterange picker -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/daterangepicker/daterangepicker.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.min.css" integrity="sha512-rxThY3LYIfYsVCWPCW9dB0k+e3RZB39f23ylUYTEuZMDrN/vRqLdaCBo/FbvVT6uC2r0ObfPzotsfKF9Qc5W5g==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.standalone.min.css" integrity="sha512-p4vIrJ1mDmOVghNMM4YsWxm0ELMJ/T0IkdEvrkNHIcgFsSzDi/fV7YxzTzb3mnMvFPawuIyIrHcpxClauEfpQg==" crossorigin="anonymous" />
</head>

<body class="style-14 index-2">
<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->


<!-- Start Loading -->
<section class="loading-overlay">
	<div class="Loading-Page">
		<h1 class="loader">Loading...</h1>
	</div>
</section>
<!-- End Loading  -->

<!-- start header -->
<header>
	<!-- Top bar starts -->
	<div class="top-bar">
		<div class="container">

			<!-- Contact starts -->
			<div class="tb-contact pull-left">
				<!-- Email -->
				<i class="fa fa-envelope color"></i> &nbsp; <a href="mailto:contact@domain.com">contact@domain.com</a>
				&nbsp;&nbsp;
				<!-- Phone -->
				<i class="fa fa-phone color"></i> &nbsp; +1 (342)-(323)-4923
			</div>
			<!-- Contact ends -->


			<!-- Social media ends -->

			<div class="clearfix"></div>
		</div>
	</div>

	<!-- Top bar ends -->

	<!-- Header One Starts -->

	<div class="header-1">

		<!-- Container -->
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4">
					<!-- Logo section -->
					<div class="logo">
						<h1><a href=""><i class="fa fa-bookmark-o"></i> LookCare</a></h1>
					</div>
				</div>
				<div class="col-md-6 col-md-offset-2 col-sm-5 col-sm-offset-3 hidden-xs">
					<!-- Search Form -->
					<div class="header-search">
						<form>
							<!-- Input Group -->
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Type Something">
										<span class="input-group-btn">
											<button class="btn btn-color" type="button">Search</button>
										</span>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- Navigation starts -->


		<div class="navi">
			<div class="container">
				<div class="navy">
					<ul>
						<!-- Main menu -->
						<li><a href="{{ url('/') }}    ">Home</a>
							<!-- Submenu -->

						</li>

						<li><a href="#">Features</a>
							<ul>
								<li><a href="#">Footer</a>
									<ul>
										<li><a href="footer-one.html">Footer1</a></li>
										<li><a href="footer-two.html">Footer2</a></li>
										<li><a href="footer-three.html">Footer3</a></li>
									</ul>
								</li>
								<li><a href="#">Price Table</a>
									<ul>
										<li><a href="price-table-one.html">Price Table1</a></li>
										<li><a href="price-table-two.html">Price Table2</a></li>

									</ul>
								</li>

							</ul>
						</li>

						<li><a href="#">Category</a>
							<ul>
								<li><a href="#">Laptop</a>
									<ul>
										<li><a href="#">Vaio</a></li>
										<li><a href="#">Samsung</a></li>
										<li><a href="#">Toshiba</a></li>
										<li><a href="#">HP</a></li>

									</ul>
								</li>
								<li><a href="#">Smartphone</a>
									<ul>
										<li><a href="#">Iphone</a></li>
										<li><a href="#">Oppo</a></li>
										<li><a href="#">Nokia</a></li>
										<li><a href="#">Sony</a></li>
										<li><a href="#">Samsung</a></li>

									</ul>
								</li>
								<li><a href="#">Accessories</a>
									<ul>
										<li><a href="#">Headphone</a></li>
										<li><a href="#">Adapter</a></li>
										<li><a href="#">Bag</a></li>
										<li><a href="#">Baby doll</a></li>

									</ul>
								</li>
								<!-- Multi level menu -->
								<li><a href="#">Multi Level Menu</a>
									<ul>
										<!-- Sub menu -->
										<li><a href="#">Menu #1</a></li>
										<li><a href="#">Menu #1</a></li>
										<li><a href="#">Menu #1</a>
											<ul>
												<!-- Sub menu -->
												<li><a href="#">Menu #2</a></li>
												<li><a href="#">Menu #2</a></li>
												<li><a href="#">Menu #2</a>
													<ul>
														<!-- Sub menu -->
														<li><a href="#">Menu #3</a></li>
														<li><a href="#">Menu #3</a></li>
														<li><a href="#">Menu #3</a></li>
													</ul>
												</li>
											</ul>
										</li>
									</ul>
								</li>
							</ul>
						</li>

						<li><a href="#">Blog</a>
							<ul>
								<li><a href="blog.html"><span>Blog Default</span></a></li>
								<li><a href="blog-masonry.html"><span>Blog Masonry</span></a></li>
								<li><a href="blog-full-width.html"><span>Blog Full Width</span></a></li>
								<li><a href="single-post.html"><span>Single Page 1</span></a></li>
								<li><a href="single-post-v2.html"><span>Single Page 2</span></a></li>
							</ul>
						</li>

						<li><a href="#">Pages</a>
							<ul>
								<li><a href="shop.html"><span>Shop</span></a></li>
								<li><a href="single-product.html"><span>Single product</span></a></li>
								<li><a href="shopping-cart.html"><span>Cart</span></a></li>
								<li><a href="checkout.html"><span>Checkout</span></a></li>
								<li><a href="wishlist.html"><span>Wishlist</span></a></li>
								<li><a href="signin.html"><span>Sign In</span></a></li>
								<li><a href="signup.html"><span>Sign Up</span></a></li>
								<li><a href="404.html"><span>404 Page</span></a></li>
							</ul>
						</li>

						<li><a href="about.html">About Us</a></li>
						<li><a href="">Product Detail</a></li>
					</ul>

				</div>

                <div class="top-bar">
                    @guest('costumer')
                    <div class="tb-language  pull-right">
                        <a href="{{ route('singin') }}" class="btn btn-white ">SingIn </i></a>
                        <!-- Dropdown menu with languages -->
                    </div>

                        @if (Route::has('singup'))
                        <div class="tb-language  pull-right">
                            <a href="{{ route('singup') }}" class="btn btn-white"> SingUp </a>
                            <!-- Dropdown menu with languages -->
                        </div>

                        @endif
                        @else
                        <div class="tb-language dropdown pull-right">
                            <a href="#" class="btn btn-white" data-target="#" data-toggle="dropdown"><i class="fa fa-user"></i> {{Auth::guard('costumer')->user()->name}}</a>
                            <!-- Dropdown menu with languages -->
                            <ul class="dropdown-menu dropdown-mini" role="menu">
                                <li><a href="#"><i class="fa fa-home"> </i> Alamat</a></li>
                                <li><a href="{{ route('shopping-cart') }}"><i class="fa fa-shopping-cart"> </i> Cart</a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"> </i> Pesanan</a></li>
                                <div class="clearfix"><hr></div>
                                <li><a class="dropdown-item" href="{{ route('costumer.logout') }}"
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                  <i class="fa fa-sign-out"></i> Logout
                                 </a>

                                 <form id="logout-form" action="{{ route('costumer.logout') }}" method="POST" class="d-none">
                                     @csrf
                                 </form></li>

                            </ul>
                        </div>
                    @endguest

                    <!-- Shopping kart starts -->
                    <div class="tb-shopping-cart pull-right">
                        <!-- Link with badge -->
                        <a href="#" class="btn btn-white b-dropdown"><i class="fa fa-shopping-cart"></i> <i class="fa fa-angle-down color"></i> <span class="badge badge-color">2</span></a>
                        <!-- Dropdown content with item details -->
                        <div class="b-dropdown-block">
                            <!-- Heading -->
                            <h4><i class="fa fa-shopping-cart color"></i> Your Items</h4>
                            <ul class="list-unstyled">
                                <!-- Item 1 -->

                                <li>
                                    <div class="cart-img">
                                        <a href="#"><img src="{{ asset('frontend/img/ecommerce/view-cart/1.png') }}" alt="" class="img-responsive" /></a>
                                    </div>
                                    <div class="cart-title">
                                        <h5><a href="#">Premium Quality Shirt</a></h5>
                                        <span class="label label-color label-sm">$1,20</span>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>
                            </ul>
                            <a href="{{ route('shopping-cart') }}" class="btn btn-white btn-sm">View Cart</a> &nbsp; <a href="{{ route('checkout') }}" class="btn btn-color btn-sm">Checkout</a>
                        </div>
                    </div>
                    <!-- Shopping kart ends -->
                    @yield('cart')
                    <!-- Langauge starts -->

                    <!-- Language ends -->

                    <!-- Search section for responsive design -->

                    <!-- Search section ends -->

                    <!-- Social media starts -->
                    <div class="tb-social pull-right">
                        <div class="brand-bg text-right">
                            <!-- Brand Icons -->
                            <a href="#" class="facebook"><i class="fa fa-facebook square-2 rounded-1"></i></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter square-2 rounded-1"></i></a>
                            <a href="#" class="google-plus"><i class="fa fa-google-plus square-2 rounded-1"></i></a>
                        </div>
                    </div>
                    <!-- Social media ends -->

                    <div class="clearfix"></div>
            </div>
			</div>
            			<!-- Shopping kart starts -->

		</div>

		<!-- Navigation ends -->

	</div>

	<!-- Header one ends -->

</header>
<!-- end header -->

<!-- start main content -->
@yield('homepage')
<!-- end main content -->



<div class="container">

</div>



<!-- start footer area -->
<footer class="footer-area-content">

	<div class="container">
		<div class="footer-wrapper style-3">
			<div class="type-1">
				<div class="footer-columns-entry">
					<div class="row">
						<div class="col-md-3">
							<img alt="" src="{{ asset('frontend/img/footer-logo.png') }}" class="footer-logo">
							<div class="footer-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</div>
							<div class="footer-address">30 South Avenue San Francisco<br> Phone: +78 123 456 123<br> Email: <a href="mailto:Support@demo.com">Support@demo.com</a><br>
								<a target="_blank" href="http://iglyphic.com/"><b>www.lookcare.com</b></a>
							</div>
							<div class="clear"></div>
						</div>
						<div class="col-md-2 col-sm-4">
							<h3 class="column-title">Customer Care</h3>
							<ul class="column">
								<li><a href="#">Terms & Condition</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Shipping Charge</a></li>
								<li><a href="#">Shipping Track</a></li>
								<li><a href="#">Payment Method</a></li>
								<li><a href="#">Order History</a></li>
								<li><a href="#">Returns</a></li>
							</ul>
							<div class="clear"></div>
						</div>
						<div class="col-md-2 col-sm-4">
							<h3 class="column-title">Your Account</h3>
							<ul class="column">
								<li><a href="#">My Account</a></li>
								<li><a href="#">Wishlist</a></li>
								<li><a href="#">Affiliate Dashboard</a></li>
								<li><a href="#">Billing Address</a></li>
								<li><a href="#">Cancel Order</a></li>
								<li><a href="#">Order History</a></li>
								<li><a href="#">Returns</a></li>
							</ul>
							<div class="clear"></div>
						</div>
						<div class="col-md-2 col-sm-4">
							<h3 class="column-title">Shop Information</h3>
							<ul class="column">
								<li><a href="#">About Company</a></li>
								<li><a href="#">Become Member</a></li>
								<li><a href="#">License Details</a></li>
								<li><a href="#">Custom Service</a></li>
								<li><a href="#">Tax Information</a></li>
								<li><a href="#">Order History</a></li>
								<li><a href="#">Job & Vacancies</a></li>
							</ul>
							<div class="clear"></div>
						</div>
						<div class="clearfix visible-sm-block"></div>
						<div class="col-md-3">
							<h3 class="column-title">Company working hours</h3>
							<div class="footer-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</div>
							<div class="footer-description">
								<b>Monday-Friday:</b> 8.30 a.m. - 5.30 p.m.<br>
								<b>Saturday:</b> 9.00 a.m. - 2.00 p.m.<br>
								<b>Sunday:</b> Closed
							</div>
							<div class="clear"></div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>


	<div class="footer-bottom footer-wrapper style-3">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="footer-bottom-navigation">
						<div class="cell-view">
							<div class="footer-links">
								<a href="#">Site Map</a>
								<a href="#">Search</a>
								<a href="#">Terms</a>
								<a href="#">Advanced Search</a>
								<a href="#">Orders and Returns</a>
								<a href="#">Contact Us</a>
							</div>
							<div class="copyright">Created with by <a target="_blank" href="http://iglyphic.com/">iGlyphic</a> . All right reserved</div>
						</div>
						<div class="cell-view">
							<div class="payment-methods">
								<a href="#"><img alt="" src="{{ asset('frontend/img/payment-method-1.png') }}"></a>
								<a href="#"><img alt="" src="{{ asset('frontend/img/payment-method-2.png') }}"></a>
								<a href="#"><img alt="" src="{{ asset('frontend/img/payment-method-3.png') }}"></a>
								<a href="#"><img alt="" src="{{ asset('frontend/img/payment-method-4.png') }}"></a>
								<a href="#"><img alt="" src="{{ asset('frontend/img/payment-method-5.png') }}"></a>
								<a href="#"><img alt="" src="{{ asset('frontend/img/payment-method-6.png') }}"></a>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>



</footer>
<!-- footer area end -->


<!-- All script -->
<script src="{{ asset('frontend/js/vendor/jquery-1.10.2.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
{{-- <script src="{{ asset('frontend/js/smoothscroll.js') }}"></script> --}}
<!-- Scroll up js
============================================ -->
<script src="{{ asset('frontend/js/jquery.scrollUp.js') }}"></script>
<script src="{{ asset('frontend/js/menu.js') }}"></script>
<!-- new collection section script -->
<script src="{{ asset('frontend/js/swiper/idangerous.swiper.min.js') }}"></script>
<script src="{{ asset('frontend/js/swiper/swiper.custom.js') }}"></script>


<script src="{{ asset('frontend/js/pluginse209.js') }}"></script>

<!-- Magnific Popup -->
<script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>

<script src="{{ asset('frontend/js/jquery.countdown.min.js') }}"></script>

<!-- SLIDER REVOLUTION SCRIPTS  -->
<script type="text/javascript" src="{{ asset('frontend/rs-plugin/js/jquery.themepunch.plugins.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
<!-- Owl carousel -->
<script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/js/main.js') }}"></script>


<script src="{{ asset('frontend/js/flexslider/jquery.flexslider-min.js') }}"></script>
<script src="{{ asset('frontend/js/image-lightbox/imagelightbox.js') }}"></script>
<!-- Scroll up js
============================================ -->
<script type="text/javascript">

	/* ************ */
	/* Owl Carousel */
	/* ************ */

	$(document).ready(function() {
		/* Owl carousel */
		$(".owl-carousel").owlCarousel({
			slideSpeed : 500,
			rewindSpeed : 1000,
			mouseDrag : true,
			stopOnHover : true
		});
		/* Own navigation */
		$(".owl-nav-prev").click(function(){
			$(this).parent().next(".owl-carousel").trigger('owl.prev');
		});
		$(".owl-nav-next").click(function(){
			$(this).parent().next(".owl-carousel").trigger('owl.next');
		});
	});


	/* Main Slider */
	$('.tp-banner0').show().revolution({
		dottedOverlay: "none",
		delay: 5000,
		startWithSlide: 0,
		startwidth: 869,
		startheight: 520,
		hideThumbs: 10,
		hideTimerBar: "on",
		thumbWidth: 50,
		thumbHeight: 50,
		thumbAmount: 4,
		navigationType: "bullet",
		navigationArrows: "solo",
		navigationStyle: "round",
		touchenabled: "on",
		onHoverStop: "on",
		swipe_velocity: 0.7,
		swipe_min_touches: 1,
		swipe_max_touches: 1,
		drag_block_vertical: false,
		parallax: "mouse",
		parallaxBgFreeze: "on",
		parallaxLevels: [7, 4, 3, 2, 5, 4, 3, 2, 1, 0],
		keyboardNavigation: "off",
		navigationHAlign: "right",
		navigationVAlign: "bottom",
		navigationHOffset: 30,
		navigationVOffset: 30,
		soloArrowLeftHalign: "left",
		soloArrowLeftValign: "center",
		soloArrowLeftHOffset: 50,
		soloArrowLeftVOffset: 8,
		soloArrowRightHalign: "right",
		soloArrowRightValign: "center",
		soloArrowRightHOffset: 50,
		soloArrowRightVOffset: 8,
		shadow: 0,
		fullWidth: "on",
		fullScreen: "off",
		spinner: "spinner4",
		stopLoop: "on",
		stopAfterLoops: -1,
		stopAtSlide: -1,
		shuffle: "off",
		autoHeight: "off",
		forceFullWidth: "off",
		hideThumbsOnMobile: "off",
		hideNavDelayOnMobile: 1500,
		hideBulletsOnMobile: "off",
		hideArrowsOnMobile: "off",
		hideThumbsUnderResolution: 0,
		hideSliderAtLimit: 0,
		hideCaptionAtLimit: 500,
		hideAllCaptionAtLilmit: 500,
		videoJsPath: "rs-plugin/videojs/",
		fullScreenOffsetContainer: ""
	});

    if (jQuery().owlCarousel) {
		var productCarousel = $("#product-carousel");
		productCarousel.owlCarousel({
			loop: true,
			dots: false,
			responsive: {
				0: {
					items: 1
				},
				480: {
					items: 2
				},
				900: {
					items: 3
				},
				1100: {
					items: 4
				}
			}
		});

		// Custom Navigation Events
		$(".product-control-nav .next").on("click", function() {
			productCarousel.trigger('next.owl.carousel');
		});

		$(".product-control-nav .prev").on("click", function() {
			productCarousel.trigger('prev.owl.carousel');
		});
	}

	if (jQuery().flexslider) {

        // Product Page Flex Slider
        $('.product-slider').flexslider({
            animation: "slide",
            animationLoop: false,
            slideshow: false,
            prevText: '<i class="fa fa-angle-left"></i>',
            nextText: '<i class="fa fa-angle-right"></i>',
            animationSpeed: 250,
            controlNav: "thumbnails"
        });

    }
	$(function() {
		var $tabsNav = $('.tabs-nav'),
				$tabsNavLis = $tabsNav.children('li');

		$tabsNav.each(function() {
			var $this = $(this);
			$this.next().children('.tab-content').stop(true, true).hide()
					.first().show();
			$this.children('li').first().addClass('active').stop(true, true).show();
		});

		$tabsNavLis.on('click', function(e) {
			var $this = $(this);
			$this.siblings().removeClass('active').end()
					.addClass('active');
			var idx = $this.parent().children().index($this);
			$this.parent().next().children('.tab-content').stop(true, true).hide().eq(idx).fadeIn();
			e.preventDefault();
		});

	});
</script>


</body>


</html>
