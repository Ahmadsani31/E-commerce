@extends('layouts.master')
@section('homepage')
<main class="main-container">
	<section class="product_content_area pt-40">
		<!-- start of page content -->
		<div class="lookcare-product-single container">
			<div class="row">
				<div class="main col-xs-12" role="main">
					<div class=" product">
						<div class="row">
							<div class="col-md-5 col-sm-6 summary-before ">
								<div class="product-slider product-shop"> <span class="onsale">Sale!</span>
									<ul class="slides">
                                        @foreach ($product->productImage as $item)
										<li data-thumb="{{ asset('images/product/'.$item->image) }}">
											<a href="{{ asset('images/product/'.$item->image) }}" data-imagelightbox="gallery" class="hoodie_7_front">
												<img src="{{ asset('images/product/'.$item->image) }}" class="attachment-shop_single" alt="image" width="470px">
											</a>
										</li>
                                        @endforeach

									</ul>
								</div>
							</div>
							<div class="col-sm-6 col-md-7 product-review entry-summary">
								<h1 class="product_title">{{ $product->product_nama }}</h1>
								<div class="woocommerce-product-rating">
									<div class="star-rating" title="Rated 4.00 out of 5"> <i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o"></i>
									</div> <a href="#reviews" class="woocommerce-review-link">(<span class="count">3</span> customer reviews)</a>
								</div>
								<div>
                                    @php
                                        $diskon = $productDetail->pluck('harga')[0] * 0.2;
                                    @endphp
									<p class="price"><del><span class="amount">${{ number_format($diskon,2)  }}</span></del>
                                            <ins><span class="amount">Rp. </span><span class="amount" id="harga">{{ number_format($productDetail->pluck('harga')[0],2)  }}</span></ins></p>

									</p>
								</div>
								<p>{!! $product->description !!}</p>
								<form class="variations_form cart" method="post">
                                    <div class="product-filter">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">

                                                <select id="ukuran" name="ukuran" class="form-control" required>
                                                    <option selected>Select Ukuran</option>
                                                    @foreach ($productDetail as $item)
                                                    <option value="{{ $item->id }}">{{ $item->ukuran->size }}</option>
                                                    @endforeach


                                                </select>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-7">
                                                <div class="col-3 ship-post">
                                                    <input type="number" class="form-control text-center" placeholder="qty">
                                                </div>
                                            </div>

                                        </div>
                                    </div>

									<button type="submit" class="cart-button">Add to cart</button>
								</form>
								<div class="product_meta"> <span class="sku_wrapper">SKU: <span class="sku">N/A</span>.</span> <span class="posted_in">Categories: <a href="#" rel="tag">{{ $product->category->category_nama }}</a>, <a href="#">{{ $product->type->type_nama }}</a>.</span>
								</div>
								<div class="share-social-icons">
									<a href="#" target="_blank" title="Share on Facebook"> <i class="fa fa-facebook"></i>
									</a>
									<a href="#" target="_blank" title="Share on Twitter"> <i class="fa fa-twitter"></i>
									</a>
									<a href="#" target="_blank" title="Pin on Pinterest"> <i class="fa fa-pinterest"></i>
									</a>
									<a href="#" target="_blank" title="Share on Google+"> <i class="fa fa-google-plus"></i>
									</a>
								</div>
							</div>
							<!-- .summary -->
						</div>
						<div class="wrapper-description">
							<ul class="tabs-nav clearfix">
								<li class="active">Description</li>
								<li>Review (3)</li>
							</ul>
							<div class="tabs-container product-comments">
								<div class="tab-content">
									<section class="related-products">
										<h2>Product Description</h2>
										<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
										<h3 class="section-title">Related Products</h3>
                                        <div class="related-products-wrapper">
                                            <div class="related-products-carousel">
                                                <div class="product-control-nav"> <a class="prev"><i class="fa fa-angle-left"></i></a>
                                                    <a class="next"><i class="fa fa-angle-right"></i></a>
                                                </div>
                                                <div class="products-top"></div>
                                                <div class="row product-listing">
                                                    <div id="product-carousel" class="product-listing">
                                                        <div class="product  item first ">
                                                            <article>
                                                                <figure>
                                                                    <a href="#">
                                                                        <img src="{{ asset('frontend/img/temp-images/T_2_front-300x300.jpg') }}" class="img-responsive" alt="T_2_front">
                                                                    </a>
                                                                    <figcaption><span class="amount">$20.00</span>
                                                                    </figcaption>
                                                                </figure>
                                                                <h4 class="title"><a href="#">Premium Quality</a></h4>
                                                                <a href="#" class="button-add-to-cart">Add to cart</a>
                                                            </article>
                                                        </div>
                                                        <div class="product  item first ">
                                                            <article>
                                                                <figure>
                                                                    <a href="#">
                                                                        <img src="{{ asset('frontend/img/temp-images/T_5_front-300x300.jpg') }}" class="img-responsive " alt="T_5_front">
                                                                    </a>
                                                                    <figcaption><span class="amount">$20.00</span>
                                                                    </figcaption>
                                                                </figure>
                                                                <h4 class="title"><a href="#">Ninja Silhouette</a></h4>
                                                                <a href="#" class="button-add-to-cart">Add to cart</a>
                                                            </article>
                                                        </div>
                                                        <div class="product  item first ">
                                                            <article>
                                                                <figure>
                                                                    <a href="#">
                                                                        <img src="{{ asset('frontend/img/temp-images/hoodie_2_front-300x300.jpg') }}" class="img-responsive" alt="hoodie_2_front">
                                                                    </a>
                                                                    <figcaption><span class="amount">$35.00</span>
                                                                    </figcaption>
                                                                </figure>
                                                                <h4 class="title"><a href="#">Woo Ninja</a></h4>
                                                                <a href="#" class="button-add-to-cart">Add to cart</a>
                                                            </article>
                                                        </div>
                                                        <div class="product  item first ">
                                                            <article>
                                                                <figure>
                                                                    <a href="#">
                                                                        <img src="{{ asset('frontend/img/temp-images/T_4_front-300x300.jpg') }}" class="img-responsive" alt="T_4_front">
                                                                    </a>
                                                                    <figcaption> <span class="amount">$20.00</span>
                                                                    </figcaption>
                                                                </figure>
                                                                <h4 class="title"><a href="#">Ship Your Idea</a></h4>
                                                                <a href="#" class="button-add-to-cart">Add to cart</a>
                                                            </article>
                                                        </div>
                                                        <div class="product  item first ">
                                                            <article>
                                                                <figure>
                                                                    <a href="#">
                                                                        <img src="{{ asset('frontend/img/temp-images/T_7_front-300x300.jpg') }}" class="img-responsive" alt="T_7_front">
                                                                    </a>
                                                                    <figcaption><span class="amount">$18.00</span>
                                                                    </figcaption>
                                                                </figure>
                                                                <h4 class="title"><a href="#">Happy Ninja</a></h4>
                                                                <a href="#" class="button-add-to-cart">Add to cart</a>
                                                            </article>
                                                        </div>
                                                        <div class="product  item first ">
                                                            <article>
                                                                <figure>
                                                                    <a href="#">
                                                                        <img src="{{ asset('frontend/img/temp-images/T_6_front-300x300.jpg') }}" class="img-responsive" alt="T_6_front">
                                                                    </a>
                                                                    <figcaption><span class="amount">$20.00</span>
                                                                    </figcaption>
                                                                </figure>
                                                                <h4 class="title"><a href="#">Woo Ninja</a></h4>
                                                                <a href="#" class="button-add-to-cart">Add to cart</a>
                                                            </article>
                                                        </div>
                                                        <div class="product  item first ">
                                                            <article>
                                                                <figure>
                                                                    <a href="#">
                                                                        <img src="{{ asset('frontend/img/temp-images/hoodie_4_front-300x300.jpg') }}" class="img-responsive" alt="hoodie_4_front">
                                                                    </a>
                                                                    <figcaption><span class="amount">$35.00</span>
                                                                    </figcaption>
                                                                </figure>
                                                                <h4 class="title"><a href="#">Happy Ninja</a></h4>
                                                                <a href="#" class="button-add-to-cart">Add to cart</a>
                                                            </article>
                                                        </div>
                                                        <div class="product  item first ">
                                                            <article>
                                                                <figure>
                                                                    <a href="#">
                                                                        <img src="{{ asset('frontend/img/temp-images/hoodie_3_front-300x300.jpg') }}" class="img-responsive" alt="hoodie_3_front">
                                                                    </a>
                                                                    <figcaption><span class="amount">$35.00</span>
                                                                    </figcaption>
                                                                </figure>
                                                                <h4 class="title"><a href="#">Patient Ninja</a></h4>
                                                                <a href="#" class="button-add-to-cart">Add to cart</a>
                                                            </article>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
									</section>

								</div>
								<div class="tab-content">
									<div class="panel entry-content">
										<h2>Product Description</h2>
										<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
									</div>
									<div class="panel entry-content">
										<div id="reviews">
											<div class="row">
												<div class="col-md-6">
													<div id="comments">
														<h3>3 reviews for Ship Your Idea</h3>
														<ol class="commentlist">
															<li class="comment depth-1">
																<div class="comment_container">
																	<img alt="gravatar" src="{{ asset('frontend/img/temp-images/com-grav1.jpg') }}" class="avatar photo">
																	<div class="comment-text">
																		<p class="meta"> <span class="star-rating" title="Rated 4.00 out of 5">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </span>
																			<strong>Stuart</strong> –
																			<time datetime="2013-06-07T13:03:29+00:00">June 7, 2013</time>:</p>
																		<div class="description">
																			<p>Another great quality product that anyone who see’s me wearing has asked where to purchase one of their own.</p>
																		</div>
																	</div>
																</div>
															</li>
															<!-- #comment-## -->
															<li class="comment  depth-1">
																<div class="comment_container">
																	<img src="{{ asset('frontend/img/temp-images/com-grav1.jpg') }}" alt="image" class="avatar photo">
																	<div class="comment-text">
																		<p class="meta"> <span class="star-rating" title="Rated 4.00 out of 5">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </span>
																			<strong>Ryan</strong> –
																			<time datetime="2013-06-07T13:24:52+00:00">June 7, 2013</time>:</p>
																		<div class="description">
																			<p>This hoodie gets me lots of looks while out in public, I got the blue one and it’s awesome. Not sure if people are looking at my hoodie only, or also at my rocking bod.</p>
																		</div>
																	</div>
																</div>
															</li>
															<!-- #comment-## -->
															<li class="comment depth-1">
																<div class="comment_container">
																	<img src="{{ asset('frontend/img/temp-images/com-grav1.jpg') }}" alt="image" class="avatar photo">
																	<div class="comment-text">
																		<div class="star-rating" title="Rated 3 out of 5"></div>
																		<p class="meta"> <span class="star-rating" title="Rated 4.00 out of 5">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
																			<strong>Maria</strong> –
																			<time datetime="2013-06-07T15:53:31+00:00">June 7, 2013</time>:</p>
																		<div class="description">
																			<p>Ship it!</p>
																		</div>
																	</div>
																</div>
															</li>
															<!-- #comment-## -->
														</ol>
													</div>
												</div>
												<div class="col-md-6">
													<div id="review_form_wrapper">
														<div id="review_form">
															<div id="respond" class="comment-respond">
																<h3 class="comment-reply-title">Add a review </h3>
																<form action="#" method="post" id="commentform" class="comment-form">
																	<p class="comment-form-author">
																		<label for="author">Name <span class="required">*</span>
																		</label>
																		<input id="author" name="author" type="text">
																	</p>
																	<p class="comment-form-email">
																		<label for="email">Email <span class="required">*</span>
																		</label>
																		<input id="email" name="email" type="text">
																	</p>
																	<p class="comment-form-comment">
																		<label for="comment">Your Review</label>
																		<textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
																	</p>
																	<p class="form-submit">
																		<input name="submit" type="submit" id="submit" class="submit" value="Submit">
																	</p>
																</form>
															</div>
															<!-- #respond -->
														</div>
													</div>
												</div>
											</div>
											<div class="clear"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- #product-293 -->
				</div>
				<!-- end of main -->
			</div>
			<!-- end of .row -->
		</div>
		<!-- end of page content -->
	</section>
	<!-- service area -->
	<section class="block gray no-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="content-box no-margin go-simple">
						<div class="mini-service-sec">
							<div class="row">
								<div class="col-md-3">
									<div class="mini-service"> <i class="fa fa-paper-plane"></i>
										<div class="mini-service-info">
											<h3>Worldwide Delivery</h3>
											<p>unc tincidunt, on cursusau gmetus, lorem Hore</p>
										</div>
									</div>
									<!-- Mini Service -->
								</div>
								<div class="col-md-3">
									<div class="mini-service"> <i class="fa  fa-newspaper-o"></i>
										<div class="mini-service-info">
											<h3>Worldwide Delivery</h3>
											<p>unc tincidunt, on cursusa ugmetus, lorem Hore</p>
										</div>
									</div>
									<!-- Mini Service -->
								</div>
								<div class="col-md-3">
									<div class="mini-service"> <i class="fa fa-medkit"></i>
										<div class="mini-service-info">
											<h3>Friendly Stuff</h3>
											<p>unc tincidunt, on cursusau gmetus, lorem Hore</p>
										</div>
									</div>
									<!-- Mini Service -->
								</div>
								<div class="col-md-3">
									<div class="mini-service"> <i class="fa  fa-newspaper-o"></i>
										<div class="mini-service-info">
											<h3>24/h Support</h3>
											<p>unc tincidunt, on cursusa ugmetus, lorem Hore</p>
										</div>
									</div>
									<!-- Mini Service -->
								</div>
							</div>
						</div>
						<!-- Mini Service Sec -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="clearfix"></div>
	<!-- end service area -->
</main>


<!-- All Script -->
{{-- <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script> --}}

<script src="{{ asset('frontend/js/vendor/jquery-1.10.2.min.js') }}"></script>
<!-- Scroll up js
============================================ -->


{{-- <script src="{{ asset('frontend/js/main.js') }}"></script> --}}






<script type="text/javascript">



        $(document).ready(function(){
        $('select[name="ukuran"]').on('change', function(){
            var ukuran_id = $(this).val();
            console.log(ukuran_id);
            $.ajax({
                    url:"product/"+ ukuran_id +'/detailUkuran',
                    type:"GET",
                    dataType:"json",
                    success:function(data){
                        console.log(data.stock);
                        $('#harga').text(data.harga.toFixed(2).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
                        $('#stock').text(data.stock);


                    }
                });
        });

    });





</script>
@endsection
