@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Simple Tables</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Simple Tables</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

    <section class="content">
    <div class="container-fluid">
        <div class="card card-solid">
            <div class="card-body">
              <div class="row">
                <div class="col-12 col-sm-6">
                  <h3 class="d-inline-block d-sm-none">{{ $product->product_nama }}</h3>
                  <div class="col-12">
                      <img src="{{ asset('images/product/'.$product->productImage->pluck('image')[0]) }}" class="product-image" alt="Product Image">
                  </div>
                  <div class="col-12 product-image-thumbs">
                      @foreach ($product->productImage as $item)
                    <div class="product-image-thumb "><img src="{{ asset('images/product/'.$item->image) }}" alt="Product Image"></div>
                      @endforeach
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <h3 class="my-3">{{ $product->product_nama }}</h3>
                  <p>{{ $product->description }}</p>
                  <hr>
                  <h4 class="mt-3">Size <small>Please select one</small></h4>
                  @foreach ($productDetail as $item)
                  <div class="btn-group btn-group-toggle ">
                    <button class="btn btn-default text-center ukuran" id="ukuran{{ $item->id }}" data-id="{{ $item->id }}">
                      <span class="text-lg">{{ $item->ukuran->size }}</span>
                      <br>
                      (P :{{ $item->ukuran->panjang }})-(L :{{ $item->ukuran->lebar }})
                    </button>
                  </div>
                  @endforeach
                  <div class="bg-gray py-2 px-3 mt-4">
                      <div class="row">
                          <div class="col-1">
                            <h6>Rp</h6>
                          </div>
                          <div class="col-11">
                            <h2 class="mb-0" id="harga">
                                {{ number_format($productDetail->pluck('harga')[0],2)  }}
                             </h2>
                          </div>
                      </div>

                  </div>
                  <div class="pt-3" >
                    <div class="row">
                        <div class="col-2">
                            <span class="text-lg">Stock :</span>
                        </div>
                        <div class="col-1">
                            <span class="text-lg" id="stock">{{ $productDetail->pluck('stock')[0] }}</span>
                        </div>
                        <div class="col-8">
                            <span class="text-lg"> Qty</span>
                        </div>
                    </div>


                    </label>
                  </div>
                  <div class="mt-4">
                    <div class="btn btn-primary btn-lg btn-flat">
                      <i class="fas fa-cart-plus fa-lg mr-2"></i>
                      Add to Cart
                    </div>

                    <div class="btn btn-default btn-lg btn-flat">
                      <i class="fas fa-heart fa-lg mr-2"></i>
                      Add to Wishlist
                    </div>
                  </div>

                  <div class="mt-4 product-share">
                    <a href="#" class="text-gray">
                      <i class="fab fa-facebook-square fa-2x"></i>
                    </a>
                    <a href="#" class="text-gray">
                      <i class="fab fa-twitter-square fa-2x"></i>
                    </a>
                    <a href="#" class="text-gray">
                      <i class="fas fa-envelope-square fa-2x"></i>
                    </a>
                    <a href="#" class="text-gray">
                      <i class="fas fa-rss-square fa-2x"></i>
                    </a>
                  </div>

                </div>
              </div>
              <div class="row mt-4">
                <nav class="w-100">
                  <div class="nav nav-tabs" id="product-tab" role="tablist">
                    <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Description</a>
                    <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Comments</a>
                    <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab" href="#product-rating" role="tab" aria-controls="product-rating" aria-selected="false">Rating</a>
                  </div>
                </nav>
                <div class="tab-content p-3" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae condimentum erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed posuere, purus at efficitur hendrerit, augue elit lacinia arcu, a eleifend sem elit et nunc. Sed rutrum vestibulum est, sit amet cursus dolor fermentum vel. Suspendisse mi nibh, congue et ante et, commodo mattis lacus. Duis varius finibus purus sed venenatis. Vivamus varius metus quam, id dapibus velit mattis eu. Praesent et semper risus. Vestibulum erat erat, condimentum at elit at, bibendum placerat orci. Nullam gravida velit mauris, in pellentesque urna pellentesque viverra. Nullam non pellentesque justo, et ultricies neque. Praesent vel metus rutrum, tempus erat a, rutrum ante. Quisque interdum efficitur nunc vitae consectetur. Suspendisse venenatis, tortor non convallis interdum, urna mi molestie eros, vel tempor justo lacus ac justo. Fusce id enim a erat fringilla sollicitudin ultrices vel metus. </div>
                  <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab"> Vivamus rhoncus nisl sed venenatis luctus. Sed condimentum risus ut tortor feugiat laoreet. Suspendisse potenti. Donec et finibus sem, ut commodo lectus. Cras eget neque dignissim, placerat orci interdum, venenatis odio. Nulla turpis elit, consequat eu eros ac, consectetur fringilla urna. Duis gravida ex pulvinar mauris ornare, eget porttitor enim vulputate. Mauris hendrerit, massa nec aliquam cursus, ex elit euismod lorem, vehicula rhoncus nisl dui sit amet eros. Nulla turpis lorem, dignissim a sapien eget, ultrices venenatis dolor. Curabitur vel turpis at magna elementum hendrerit vel id dui. Curabitur a ex ullamcorper, ornare velit vel, tincidunt ipsum. </div>
                  <div class="tab-pane fade" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab"> Cras ut ipsum ornare, aliquam ipsum non, posuere elit. In hac habitasse platea dictumst. Aenean elementum leo augue, id fermentum risus efficitur vel. Nulla iaculis malesuada scelerisque. Praesent vel ipsum felis. Ut molestie, purus aliquam placerat sollicitudin, mi ligula euismod neque, non bibendum nibh neque et erat. Etiam dignissim aliquam ligula, aliquet feugiat nibh rhoncus ut. Aliquam efficitur lacinia lacinia. Morbi ac molestie lectus, vitae hendrerit nisl. Nullam metus odio, malesuada in vehicula at, consectetur nec justo. Quisque suscipit odio velit, at accumsan urna vestibulum a. Proin dictum, urna ut varius consectetur, sapien justo porta lectus, at mollis nisi orci et nulla. Donec pellentesque tortor vel nisl commodo ullamcorper. Donec varius massa at semper posuere. Integer finibus orci vitae vehicula placerat. </div>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
          </div>

    </div>
</section>
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>

<script>
      $(document).ready(function() {
    $('.product-image-thumb').on('click', function () {
      var $image_element = $(this).find('img')
      $('.product-image').prop('src', $image_element.attr('src'))
      $('.product-image-thumb.active').removeClass('active')
      $(this).addClass('active')
    })
  })


$(document).ready(function(){
$(".active-class a").click(function() {
  $(".active-class a").removeClass("active");
  $(this).addClass("active");
});
});

  $('body').on('click', '.ukuran', function () {
            var id = $(this).data('id');
             console.log(id);
             $.ajax({
                    url:"product/"+ id +'/detailUkuran',
                    type:"GET",
                    dataType:"json",
                    success:function(data){
                        $('#harga').text(data.harga.toFixed(2).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
                        $('#stock').text(data.stock);


                    }
                });

        });
</script>
@endsection
