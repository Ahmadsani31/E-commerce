<section id="shop" class="shop-4 pt-0">
    <div class="container">
        <div class="row">
            <!-- Projects Filter
            ============================================= -->
            <div class="col-xs-12 col-sm-12 col-md-12 shop-filter">
                <ul class="list-inline">
                    <li>
                        <a class="active-filter" href="#" data-filter="*">All Products</a>
                    </li>
                    <li>
                        <a href="#" data-filter=".filter-best">Best Selling</a>
                    </li>
                    <li>
                        <a href="#" data-filter=".filter-featured">Featured</a>
                    </li>
                    <li>
                        <a href="#" data-filter=".filter-sale">On Sale</a>
                    </li>
                </ul>
            </div>
            <!-- .projects-filter end -->
        </div>
        <!-- .row end -->
        <!-- Projects Item
        ============================================= -->
        <div id="shop-all" class="row">
            <!-- Product Item #1 -->
            @foreach ($product as $produk)

            <div class="col-xs-12 col-sm-6 col-md-3 product-item filter-best">
                <div class="product-img">
                    <img src="{{ asset('images/product/'.$produk->productImage->pluck('image')[0]) }}" alt="product" width="100%" height="300px">

                    <div class="product-hover">
                        <div class="product-cart">
                            <a class="btn btn-secondary btn-block" href="{{ route('detail-product',$produk->id) }}">Add To Cart</a>
                        </div>
                    </div>
                </div>
                <!-- .product-img end -->
                <div class="product-bio">
                    <h4>
                        <a href="#">{{ $produk->product_nama }}</a>
                    </h4>
                    <p class="product-price">$68.00</p>
                </div>
                <!-- .product-bio end -->

            </div>
            <!-- .product-item end -->
            @endforeach



        </div>
        <!-- .row end -->

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <a class="btn btn-secondary" href="#">more products <i class="fa fa-plus ml-xs"></i></a>
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row End -->
    </div>
    <!-- .container end -->
</section>


<!-- Start Our Shop Items -->

<!-- recommend  items Starts -->
<section id="recent-product">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="recent-items">

                    <!-- Block heading two -->
                    <div class="block-heading-two">
                        <h3><span>Recommended Items</span></h3>
                    </div>

                    <!-- Owl carousel block starts -->
                    <!-- Change values of data-items, data-auto-play, data-pagination & data-single-item based on your needs -->
                    <div class="owl-carousel" data-items="5" data-auto-play="true" data-pagination="true" data-single-item="false">
                        <!-- Carousel item -->
                        <div class="owl-content">
                            <!-- Product Item #8 -->
                            <div class=" product-item filter-best">
                                <div class="product-img">
                                    <img src="{{ asset('frontend/img/shop/index2_product2.png') }}" alt="product">
                                    <div class="product-hover">
                                        <div class="product-cart">
                                            <a class="btn btn-secondary btn-block" href="#">Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- .product-img end -->
                                <div class="product-bio">
                                    <h4>
                                        <a href="#">Keson Fiberglass</a>
                                    </h4>
                                    <p class="product-price">$550.00</p>
                                </div>
                                <!-- .product-bio end -->

                            </div>
                            <!-- .product-item end -->
                        </div>
                        <div class="owl-content">
                            <!-- Product Item #8 -->
                            <div class="product-item filter-best">
                                <div class="product-img">
                                    <img src="{{ asset('frontend/img/shop/index2_product2.png') }}" alt="product">
                                    <div class="product-hover">
                                        <div class="product-cart">
                                            <a class="btn btn-secondary btn-block" href="#">Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- .product-img end -->
                                <div class="product-bio">
                                    <h4>
                                        <a href="#">Keson Fiberglass</a>
                                    </h4>
                                    <p class="product-price">$550.00</p>
                                </div>
                                <!-- .product-bio end -->

                            </div>
                            <!-- .product-item end -->
                        </div>
                        <div class="owl-content">
                            <!-- Product Item #8 -->
                            <div class="product-item filter-best">
                                <div class="product-img">
                                    <img src="{{ asset('frontend/img/shop/index2_product2.png') }}" alt="product">
                                    <div class="product-hover">
                                        <div class="product-cart">
                                            <a class="btn btn-secondary btn-block" href="#">Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- .product-img end -->
                                <div class="product-bio">
                                    <h4>
                                        <a href="#">Keson Fiberglass</a>
                                    </h4>
                                    <p class="product-price">$550.00</p>
                                </div>
                                <!-- .product-bio end -->

                            </div>
                            <!-- .product-item end -->
                        </div>
                        <div class="owl-content">
                            <!-- Product Item #8 -->
                            <div class="product-item filter-best">
                                <div class="product-img">
                                    <img src="{{ asset('frontend/img/shop/index2_product2.png') }}" alt="product">
                                    <div class="product-hover">
                                        <div class="product-cart">
                                            <a class="btn btn-secondary btn-block" href="#">Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- .product-img end -->
                                <div class="product-bio">
                                    <h4>
                                        <a href="#">Keson Fiberglass</a>
                                    </h4>
                                    <p class="product-price">$550.00</p>
                                </div>
                                <!-- .product-bio end -->

                            </div>
                            <!-- .product-item end -->
                        </div>
                        <div class="owl-content">
                            <!-- Product Item #8 -->
                            <div class="product-item filter-best">
                                <div class="product-img">
                                    <img src="{{ asset('frontend/img/shop/index2_product2.png') }}" alt="product">
                                    <div class="product-hover">
                                        <div class="product-cart">
                                            <a class="btn btn-secondary btn-block" href="#">Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- .product-img end -->
                                <div class="product-bio">
                                    <h4>
                                        <a href="#">Keson Fiberglass</a>
                                    </h4>
                                    <p class="product-price">$550.00</p>
                                </div>
                                <!-- .product-bio end -->

                            </div>
                            <!-- .product-item end -->
                        </div>
                        <div class="owl-content">
                            <!-- Product Item #8 -->
                            <div class="product-item filter-best">
                                <div class="product-img">
                                    <img src="{{ asset('frontend/img/shop/index2_product2.png') }}" alt="product">
                                    <div class="product-hover">
                                        <div class="product-cart">
                                            <a class="btn btn-secondary btn-block" href="#">Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- .product-img end -->
                                <div class="product-bio">
                                    <h4>
                                        <a href="#">Keson Fiberglass</a>
                                    </h4>
                                    <p class="product-price">$550.00</p>
                                </div>
                                <!-- .product-bio end -->

                            </div>
                            <!-- .product-item end -->
                        </div>
                        <div class="owl-content">
                            <!-- Product Item #8 -->
                            <div class="product-item filter-best">
                                <div class="product-img">
                                    <img src="{{ asset('frontend/img/shop/index2_product2.png') }}" alt="product">
                                    <div class="product-hover">
                                        <div class="product-cart">
                                            <a class="btn btn-secondary btn-block" href="#">Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- .product-img end -->
                                <div class="product-bio">
                                    <h4>
                                        <a href="#">Keson Fiberglass</a>
                                    </h4>
                                    <p class="product-price">$550.00</p>
                                </div>
                                <!-- .product-bio end -->

                            </div>
                            <!-- .product-item end -->
                        </div>
                        <div class="owl-content">
                            <!-- Product Item #8 -->
                            <div class="product-item filter-best">
                                <div class="product-img">
                                    <img src="{{ asset('frontend/img/shop/index2_product2.png') }}" alt="product">
                                    <div class="product-hover">
                                        <div class="product-cart">
                                            <a class="btn btn-secondary btn-block" href="#">Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- .product-img end -->
                                <div class="product-bio">
                                    <h4>
                                        <a href="#">Keson Fiberglass</a>
                                    </h4>
                                    <p class="product-price">$550.00</p>
                                </div>
                                <!-- .product-bio end -->

                            </div>
                            <!-- .product-item end -->
                        </div>
                        <div class="owl-content">
                            <!-- Product Item #8 -->
                            <div class="product-item filter-best">
                                <div class="product-img">
                                    <img src="{{ asset('frontend/img/shop/index2_product2.png') }}" alt="product">
                                    <div class="product-hover">
                                        <div class="product-cart">
                                            <a class="btn btn-secondary btn-block" href="#">Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- .product-img end -->
                                <div class="product-bio">
                                    <h4>
                                        <a href="#">Keson Fiberglass</a>
                                    </h4>
                                    <p class="product-price">$550.00</p>
                                </div>
                                <!-- .product-bio end -->

                            </div>
                            <!-- .product-item end -->
                        </div>
                        <div class="owl-content">
                            <!-- Product Item #8 -->
                            <div class="product-item filter-best">
                                <div class="product-img">
                                    <img src="{{ asset('frontend/img/shop/index2_product3.png') }}" alt="product">
                                    <div class="product-hover">
                                        <div class="product-cart">
                                            <a class="btn btn-secondary btn-block" href="#">Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- .product-img end -->
                                <div class="product-bio">
                                    <h4>
                                        <a href="#">Keson Fiberglass</a>
                                    </h4>
                                    <p class="product-price">$550.00</p>
                                </div>
                                <!-- .product-bio end -->

                            </div>
                            <!-- .product-item end -->
                        </div>
                    </div>
                    <!-- Owl carousel block ends -->

                </div>
            </div>
        </div>
    </div>
</section>
