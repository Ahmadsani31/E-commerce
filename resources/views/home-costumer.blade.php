@extends('layouts.master')

@section('homepage')
<main class="main-container">
	<!-- new collection directory -->
	<section id="content-block" class="slider_area">
		<div class="container">
			<div class="content-push">
				<div class="row">

					<div class="col-md-3 col-md-push-9">
						<div class="sidebar-navigation">
							<div class="title">Product Categories<i class="fa fa-angle-down"></i></div>
							<div class="list">
								<a class="entry" href="#"><span><i class="fa fa-angle-right"></i>Evening dresses</span></a>
								<a class="entry" href="#"><span><i class="fa fa-angle-right"></i>Jackets and coats</span></a>
								<a class="entry" href="#"><span><i class="fa fa-angle-right"></i>Tops and Sweatshirts</span></a>
								<a class="entry" href="#"><span><i class="fa fa-angle-right"></i>Blouses and shirts</span></a>
								<a class="entry" href="#"><span><i class="fa fa-angle-right"></i>Trousers and Shorts</span></a>
								<a class="entry" href="#"><span><i class="fa fa-angle-right"></i>Evening dresses</span></a>
								<a class="entry" href="#"><span><i class="fa fa-angle-right"></i>Jackets and coats</span></a>
								<a class="entry" href="#"><span><i class="fa fa-angle-right"></i>Tops and Sweatshirts</span></a>
								<a class="entry" href="#"><span><i class="fa fa-angle-right"></i>Blouses and shirts</span></a>
							</div>
						</div>
						<div class="clear"></div>
					</div>

					<div class="col-md-9 col-md-pull-3">

						<div class="header_slider">
							<article class="boss_slider">
								<div class="tp-banner-container">
									<div class="tp-banner tp-banner0">
										<ul>
											<!-- SLIDE  -->
											<li data-link="#" data-target="_self" data-transition="flyin" data-slotamount="7" data-masterspeed="500" data-saveperformance="on">
												<!-- MAIN IMAGE --><img src="{{ asset('frontend/img/dummy.png') }}" alt="slidebg1" data-lazyload="{{ asset('frontend/img/slide/slider1.png') }}" data-bgposition="left center" data-kenburns="off" data-duration="14000" data-ease="Linear.easeNone" data-bgpositionend="right center" />
												<!-- LAYER NR. 1 -->
												<div class="tp-caption very_big_white randomrotate customout rs-parallaxlevel-0" data-x="270" data-y="140" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="300" data-start="500" data-end="4800" data-endspeed="300" data-easing="easeInOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 2;"> Trendy </div>
												<!-- LAYER NR. 2 -->
												<div class="tp-caption very_large_white_text randomrotate customout rs-parallaxlevel-0" data-x="270" data-y="250" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="300" data-start="800" data-end="4800" data-endspeed="300" data-easing="easeInOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 2;"> selection </div>
												<!-- LAYER NR. 3 -->
												<div class="tp-caption large_white_text randomrotate customout rs-parallaxlevel-0" data-x="355" data-y="363" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="300" data-start="1200" data-end="4800" data-endspeed="300" data-easing="easeInOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 2;"> SHOP NOW </div>

											</li>
											<li data-link="#" data-target="_self" data-transition="3dcurtain-horizontal" data-slotamount="7" data-masterspeed="500" data-saveperformance="on">
												<!-- MAIN IMAGE --><img src="{{ asset('frontend/img/dummy.png') }}" alt="slidebg1" data-lazyload="{{ asset('frontend/img/slide/slider2.png') }}" data-bgposition="left center" data-kenburns="off" data-duration="14000" data-ease="Linear.easeNone" data-bgpositionend="right center" />
												<!-- LAYER NR. 1 -->
												<div class="tp-caption very_big_white fade customout rs-parallaxlevel-0" data-x="270" data-y="140" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="300" data-start="500" data-end="4800" data-endspeed="300" data-easing="easeOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 2;"> Trendy </div>
												<!-- LAYER NR. 2 -->
												<div class="tp-caption very_large_white_text fade customout rs-parallaxlevel-0" data-x="270" data-y="250" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="300" data-start="800" data-end="4800" data-endspeed="300" data-easing="easeOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 2;"> selection </div>
												<!-- LAYER NR. 3 -->
												<div class="tp-caption large_white_text fade customout rs-parallaxlevel-0" data-x="355" data-y="363" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="300" data-start="1200" data-end="4800" data-endspeed="300" data-easing="easeOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 2;"> SHOP NOW </div>
											</li>
											<li data-transition="boxslide" data-slotamount="7" data-masterspeed="500" data-saveperformance="on">
												<!-- MAIN IMAGE --><img src="{{ asset('frontend/img/dummy.png') }}" alt="slidebg1" data-lazyload="{{ asset('frontend/img/slide/slide_3.jpg') }}" data-bgposition="left center" data-kenburns="off" data-duration="14000" data-ease="Linear.easeNone" data-bgpositionend="right center" />
												<!-- LAYER NR. 1 -->
												<div class="tp-caption large_white_text skewfromleftshort customout rs-parallaxlevel-0" data-x="355" data-y="363" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="300" data-start="1200" data-end="4800" data-endspeed="300" data-easing="easeOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 2;"> SHOP NOW </div>
												<!-- LAYER NR. 2 -->
												<div class="tp-caption very_large_white_text skewfromleftshort customout rs-parallaxlevel-0" data-x="270" data-y="250" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="300" data-start="800" data-end="4800" data-endspeed="300" data-easing="easeOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 2;"> selection </div>
												<!-- LAYER NR. 3 -->
												<div class="tp-caption very_big_white skewfromleftshort customout rs-parallaxlevel-0" data-x="270" data-y="140" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="300" data-start="500" data-end="4800" data-endspeed="300" data-easing="easeOutBack" data-endeasing="easeOutBack" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 2;"> Trendy </div>
											</li>
										</ul>
										<div class="slideshow_control"></div>
									</div><!-- /.tp-banner -->
								</div>
							</article>
						</div><!-- /.header_slider -->

						<div class="clear"></div>

					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- end new collection directory -->


	<!-- Shop Filter
    ============================================= -->
@include('product')

	<!-- recommend items Ends -->

	<!-- End Our Shop Items -->





	<div class="bt-block-home-parallax" style="background-image: url(frontend/img/block_parallax.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="lookbook-product">
						<h2><a href="#" title="">Collection 2016 </a></h2>
						<ul class="simple-cat-style">
							<li><a href="#" title="">Dresses</a></li>
							<li><a href="#" title="">Coats & Jackets</a></li>
							<li><a href="#" title="">Jeans</a></li>
						</ul>
						<a href="#" title="">read more</a>
					</div>
				</div>
			</div>
		</div>
	</div><!-- /.bt-block-home-parallax -->

	<!-- Start Our Clients -->

	<section id="Clients" class="light-wrapper">
		<div class="container inner">
			<div class="row">
				<div class="Last-items-shop col-md-3">

					<!-- Block heading two -->
					<div class="block-heading-two block-heading-three">
						<h3><span>Special Offer</span></h3>
					</div>
					<!--<div class="Top-Title-SideBar">
						<h3>Special Offer</h3>
					</div>-->
					<div class="Last-post">
						<ul class="shop-res-items">
							<li>
								<a href="#"><img src="{{ asset('frontend/img/small/50.jpg') }}" alt=""></a>
								<h6><a href="#">Stockholm Chair high Mosta gruancy</a></h6>
								<span class="sale-date">$28.00</span>
							</li>
							<li>
								<a href="#"><img src="{{ asset('frontend/img/small/51.jpg') }}" alt=""></a>
								<h6><a href="#">Stockholm Chair high Mosta gruancy</a></h6>
								<span class="sale-date">$40.00</span>
							</li>
							<li>
								<a href="#"><img src="{{ asset('frontend/img/small/52.jpg') }}" alt=""></a>
								<h6><a href="#">Stockholm Chair high Mosta gruancy</a></h6>
								<span class="sale-date">$150.00</span>
							</li>
						</ul>
					</div>
				</div>
				<div class="Last-items-shop col-md-3">
					<!-- Block heading two -->
					<div class="block-heading-two block-heading-three">
						<h3><span>Best Sellers</span></h3>
					</div>
					<!--<div class="Top-Title-SideBar">
						<h3>Best Sellers</h3>
					</div>-->
					<div class="Last-post">
						<ul class="shop-res-items">
							<li>
								<a href="#"><img src="{{ asset('frontend/img/small/53.jpg') }}" alt=""></a>
								<h6><a href="#">Stockholm Chair high Mosta gruancy</a></h6>
								<span class="sale-date">$28.00</span>
							</li>
							<li>
								<a href="#"><img src="{{ asset('frontend/img/small/54.jpg') }}" alt=""></a>
								<h6><a href="#">Stockholm Chair high Mosta gruancy</a></h6>
								<span class="sale-date">$40.00</span>
							</li>
							<li>
								<a href="#"><img src="{{ asset('frontend/img/small/55.jpg') }}" alt=""></a>
								<h6><a href="#">Stockholm Chair high Mosta gruancy</a></h6>
								<span class="sale-date">$150.00</span>
							</li>
						</ul>
					</div>
				</div>
				<div class="Last-items-shop col-md-3">
					<!-- Block heading two -->
					<div class="block-heading-two block-heading-three">
						<h3><span>Featured</span></h3>
					</div>
					<!--<div class="Top-Title-SideBar">
						<h3>Featured</h3>
					</div>-->
					<div class="Last-post">
						<ul class="shop-res-items">
							<li>
								<a href="#"><img src="{{ asset('frontend/img/small/56.jpg') }}" alt=""></a>
								<h6><a href="#">Stockholm Chair high Mosta gruancy</a></h6>
								<span class="sale-date">$28.00</span>
							</li>
							<li>
								<a href="#"><img src="{{ asset('frontend/img/small/57.jpg') }}" alt=""></a>
								<h6><a href="#">Stockholm Chair high Mosta gruancy</a></h6>
								<span class="sale-date">$40.00</span>
							</li>
							<li>
								<a href="#"><img src="{{ asset('frontend/img/small/55.jpg') }}" alt=""></a>
								<h6><a href="#">Stockholm Chair high Mosta gruancy</a></h6>
								<span class="sale-date">$150.00</span>
							</li>
						</ul>
					</div>
				</div>
				<div class="Last-items-shop col-md-3">
					<!-- Block heading two -->
					<div class="block-heading-two block-heading-three">
						<h3><span>Sales</span></h3>
					</div>
					<!--<div class="Top-Title-SideBar">
						<h3>Sales</h3>
					</div>-->
					<div class="Last-post">
						<ul class="shop-res-items">
							<li>
								<a href="#"><img src="{{ asset('frontend/img/small/55.jpg') }}" alt=""></a>
								<h6><a href="#">Stockholm Chair high Mosta gruancy</a></h6>
								<span class="sale-date">$28.00</span>
							</li>
							<li>
								<a href="#"><img src="{{ asset('frontend/img/small/58.jpg') }}" alt=""></a>
								<h6><a href="#">Stockholm Chair high Mosta gruancy</a></h6>
								<span class="sale-date">$40.00</span>
							</li>
							<li>
								<a href="#"><img src="{{ asset('frontend/img/small/50.jpg') }}" alt=""></a>
								<h6><a href="#">Stockholm Chair high Mosta gruancy</a></h6>
								<span class="sale-date">$150.00</span>
							</li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- End Our Clients  -->


	<section class="block gray no-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="content-box no-margin go-simple">
						<div class="mini-service-sec">
							<div class="row">
								<div class="col-md-3">
									<div class="mini-service">
										<i  class="fa fa-paper-plane"></i>
										<div class="mini-service-info">
											<h3>Worldwide Delivery</h3>
											<p>unc tincidunt, on cursusau gmetus, lorem Hore</p>
										</div>
									</div><!-- Mini Service -->
								</div>
								<div class="col-md-3">
									<div class="mini-service">
										<i  class="fa  fa-newspaper-o"></i>
										<div class="mini-service-info">
											<h3>Worldwide Delivery</h3>
											<p>unc tincidunt, on cursusa ugmetus, lorem Hore</p>
										</div>
									</div><!-- Mini Service -->
								</div>
								<div class="col-md-3">
									<div class="mini-service">
										<i  class="fa fa-medkit"></i>
										<div class="mini-service-info">
											<h3>Friendly Stuff</h3>
											<p>unc tincidunt, on cursusau gmetus, lorem Hore</p>
										</div>
									</div><!-- Mini Service -->
								</div>
								<div class="col-md-3">
									<div class="mini-service">
										<i  class="fa  fa-newspaper-o"></i>
										<div class="mini-service-info">
											<h3>24/h Support</h3>
											<p>unc tincidunt, on cursusa ugmetus, lorem Hore</p>
										</div>
									</div><!-- Mini Service -->
								</div>
							</div>
						</div><!-- Mini Service Sec -->
					</div>
				</div>
			</div>
		</div>
	</section>



</main>


@endsection
