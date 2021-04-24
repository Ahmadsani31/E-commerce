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
												<img src="{{ asset('images/product/'.$item->image) }}" class="attachment-shop_single" alt="image" width="100%">
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
                                            <ins><span class="amount">Rp. </span><span class="amount bg-info" id="harga">{{ number_format($productDetail->pluck('harga')[0],2)  }}</span></ins></p>

									</p>
                                    <p class="price">
                                        <ins><span class="amount">Stock : </span><span class="amount bg-info" id="stock">{{ $productDetail->pluck('stock')[0] }}</span> Qty</ins></p>

                                </p>
								</div>
								<p>{!! Str::limit($product->description, 550, '...') !!} </p>
                                <span class="bg-warning"> read more bellow</span>
                                <hr>

                                <form id="formCart" name="formCart" class="variations_form cart" action="" method="POST">
                                    <div class="product-filter">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4">

                                                <select id="product_detail_id" name="product_detail_id" class="form-control" required>
                                                    <option selected disabled>Select Ukuran</option>
                                                    @foreach ($productDetail as $item)
                                                    <option value="{{ $item->id }},{{ $item->ukuran_id }},{{ $item->stock }},{{ $item->harga }}">{{ $item->ukuran->size }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-7">
                                                <div class="col-3 ship-post">
                                                    <input type="hidden" name="costumer_id" value="{{ Auth::guard('costumer')->user()->id }}">
                                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                    <input type="number" id="qty" name="qty" class="form-control text-center" placeholder="Qty" required>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
									<button type="submit" id="btnCart" class="btn cart-button">Add to cart</button>
								</form>
								<div class="product_meta">
                                    <span class="sku_wrapper">SKU: <span class="sku">N/A</span>.</span>
                                    <span class="posted_in">Categories: <a href="#" rel="tag"><samp>{{ $product->category->category_nama }}</samp></a>&rArr; <a href="#"><samp>{{ $product->subCategory->sub_category_nama }}</samp></a>&rArr; <a href="#"><samp>{{ $product->type->type_nama }}</samp></a></span>
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
										<p>{!! $product->description !!}</p>
                                        <hr>
										<h3 class="section-title">Related Products</h3>
                                        <div class="related-products-wrapper">
                                            <div class="related-products-carousel">
                                                <div class="product-control-nav"> <a class="prev"><i class="fa fa-angle-left"></i></a>
                                                    <a class="next"><i class="fa fa-angle-right"></i></a>
                                                </div>
                                                <div class="products-top"></div>
                                                <div class="row product-listing">
                                                    <div id="product-carousel" class="product-listing">
                                                        @foreach ($pro as $data)

                                                        <div class="product  item first ">
                                                            <article>
                                                                <figure>
                                                                    <a href="#">
                                                                        <img src="{{ asset('images/product/'.$data->productImage->pluck('image')[0]) }}"  alt="T_2_front" width="100%" height="100%">
                                                                    </a>
                                                                    <figcaption><span class="amount">Rp. {{ $data->productDetail->pluck('harga')[0] }}</span>
                                                                    </figcaption>
                                                                </figure>
                                                                <h4 class="title"><a href="#">{{ Str::limit($data->product_nama, 30, ' ...') }}</a></h4>
                                                                <a class="button-add-to-cart" href="{{ route('detail-product',$data->id) }}">Add To Cart</a>
                                                            </article>
                                                        </div>
                                                        @endforeach

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
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>

<script src="{{ asset('frontend/js/vendor/jquery-1.10.2.min.js') }}"></script>

<script src="{{ asset('assets/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
<!-- Scroll up js
============================================ -->

<script type="text/javascript">
    $(document).ready(function(){
        $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
        });
    });


        $(document).ready(function(){
        $('select[name="product_detail_id"]').on('change', function(){
            var ukuran_id = $(this).val();
            console.log(ukuran_id);
            $.ajax({
                    url: ukuran_id +'/detailUkuran',
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



    $('#btnCart').click(function (e) {
        e.preventDefault();

        $.ajax({
          data: $('#formCart').serialize(),
          url: "{{ route('cart') }}",
          type: "POST",
          dataType: 'json',
          success: function (data) {
            window.location.reload();

          },
          error: function (data) {
              console.log('Error:', data.responseJSON.info);

          }
      });
    });


    function validation()
{
  var qty = document.getElementById("qty").innerHTML = "need required";

  if(qty == null)
  {
    document.getElementById("qty").value=
    "First Name is required";
    return false;
  }

}
</script>
@endsection
