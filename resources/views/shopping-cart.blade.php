@extends('layouts.master')
@section('homepage')
<main class="main-container">
    <!-- shopping cart content -->
    <section class="shopping-cart-area">
        <!-- Begin cart -->
        <div class="ld-subpage-content">

            <div class="ld-cart">

                <!-- Begin cart section -->
                <section class="ld-cart-section ptb-50">

                    <div class="container">

                        <div class="row">

                            <div class="col-md-12">

                                <!-- Begin table -->
                                <table class="table cart-table">
                                    <thead>
                                    <tr>
                                        <th class="table-title">Product Name</th>
                                        <th class="table-title">Product Code</th>
                                        <th class="table-title">Unit Price</th>
                                        <th class="table-title">Quantity</th>
                                        <th class="table-title">SubTotal</th>
                                        <th>

                                            <span class="close-button disabled"></span></th>
                                    </tr>
                                    </thead>
                                    @php
                                       $total = 0;
                                    @endphp
                                    @foreach ($cart as $data)
                                    <tbody>
                                    <tr>
                                        <td class="product-name-col">
                                            <figure>
                                                <a href="#"><img class="img-responsive" src="{{ asset('images/product/'.$data->product->productImage->pluck('image')[0]) }}" alt="White linen sheer dress"></a>
                                            </figure>
                                            <h2 class="product-name"><a href="#">{{ $data->product->product_nama }}</a></h2>

                                            <ul>
                                                <li>Color: {{ $data->product->warna }}</li>
                                                <li>Size: {{ $data->ukuran->size }}</li>
                                            </ul>
                                        </td>
                                        <td class="product-code">{{ $data->product->kode_product }}</td>
                                        <td class="product-price-col">
                                            <span class="product-price-special">Rp.{{ number_format($data->productDetail->harga,2) }}</span>
                                        </td>
                                        <td>
                                            <div class="custom-quantity-input">
                                                <input type="text" name="quantity" value="{{ $data->qty }}">
                                            </div>
                                        </td>
                                        <td class="product-total-col">
                                            @php
                                                $total += $data->productDetail->harga * $data->qty;
                                            @endphp
                                            <span class="product-price-special">Rp.{{ number_format($data->productDetail->harga * $data->qty,2)  }}</span>
                                        </td>
                                        <td>
                                            <div class="edit">
                                                <a href="javascript:void(0)" id="btn_edit" class="close-button "><i class="fa fa-pencil"></i></a>

                                            </div>
                                            <div class="update" style="display: none">
                                                <a href="javascript:void(0)" id="btn_update" class="close-button "><i class="fa fa-pencil-square"></i></a>

                                            </div>

                                            <a href="{{ route('cartDelete',$data->id) }}" class="close-button "><i class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                    <!-- End tr -->
                                    </tbody>
                                    @endforeach
                                    @if ($total == 0)
                                        <tr>
                                            <td colspan="6"> <span class="bg-info">Ups, Keranjang kosong!</span> </td>
                                        </tr>
                                    @endif
                                </table>
                                <!-- End table -->

                                <div class="mt-30"></div>
                                @if ($total == 0)
                                <div class="row">
                                        <div class="col-md-12">
                                            <div class="text-right">
                                                <a href="{{ route('home-costumer') }}" class="btn btn-custom-6 btn-lger min-width-lg">Continue Shopping</a>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                <div class="col-md-8">

                                    <!-- Begin tab container -->
                                    <div class="tab-container clearfix">

                                        <!-- Begin tab content -->
                                        <div class="tab-content">

                                            <div class="tab-pane fade in active" id="shipping">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <form action="#" class="clearfix">

                                                            <p class="ship-desc">Enter your destination to get a shipping estimate</p>

                                                            <div class="ship-row clearfix">

                                                                <span class="ship-label col-md-4">Provinsi<i>*</i></span>

                                                                <div class="normal-selectbox lower col-md-8 country-select-box">
                                                                    <select id="provinsi" name="provinsi" class="selectbox">

                                                                        <option value="">Please select</option>
                                                                        @foreach ($provinces as $keyID => $provin)
                                                                        <option value="{{ $keyID }}">{{ $provin }}</option>
                                                                        @endforeach

                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!-- /.ship-row -->

                                                            <div class="ship-row clearfix">

                                                                <span class="ship-label col-md-4">Kota/Kabupaten<i>*</i></span>

                                                                <div class="normal-selectbox lower col-md-8 region-select-box">
                                                                    <select id="city_destination" name="city_destination" class="selectbox">

                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!-- /.ship-row -->

                                                            <div id="post-code-ship-row" class="ship-row clearfix">

                                                                <span class="ship-label col-md-4">Expedisi<i>*</i></span>

                                                                    <div class="normal-selectbox lower col-md-4  region-select-box">
                                                                        <select id="expedisi" name="expedisi" class="selectbox">
                                                                            <option value="0">-- Expedisi --</option>
                                                                            <option value="jne">JNE</option>
                                                                            <option value="pos">POS</option>
                                                                            <option value="tiki">TIKI</option>
                                                                        </select>
                                                                    </div>

                                                                <div class="col-md-2">
                                                                    <a href="#" class="get-quotes btn btn-custom-6 ">Cek Ongkir</a>
                                                                </div>

                                                            </div>
                                                            <!-- /.ship-row -->
                                                        </form>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <p class="ship-desc text-center">Voucher</p>

                                                        <!-- /.ship-row -->

                                                        <div class="ship-row clearfix">

                                                            <div class="col-md-10 text-right">
                                                                <input type="text" class="form-control" placeholder="coupon here">
                                                            </div>
                                                        </div>
                                                        <!-- /.ship-row -->

                                                        <div class="ship-row"><a href="#" class="get-quotes btn btn-custom-6 ">Active Voucher</a></div>
                                                    </div>
                                                </div>

                                            </div>


											</div>
                                        <!-- /.tab-content -->
                                    </div>
                                    <!-- /.tab-container -->



                                    <div class="mt-30"></div>
                                </div>

                                <div class="mt-30 visible-sm visible-xs clearfix"></div>

                                <div class="col-md-4">

                                    <table class="table total-table">

                                        <tbody>
                                        <tr>
                                            <td class="total-table-title">Subtotal:</td>
                                            <td>${{ number_format($total,2) }}</td>
                                        </tr>
                                        <tr>
                                            <td class="total-table-title">Ongkir:</td>
                                            <td>$6.00</td>
                                        </tr>
                                        <tr>
                                            <td class="total-table-title">TAX (0%):</td>
                                            <td>$0.00</td>
                                        </tr>
                                        </tbody>

                                        <tfoot>
                                        <tr>
                                            <td>Total:</td>
                                            <td>$440.50</td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                    <!-- End table -->

                                    <div class="mt-30"></div>


                                    </div>
                                @endif

                                <!-- /.row -->
                            </div>
                        </div>
                    </div>

                </section>
                <!-- /.ld-cart-section -->

            </div>
            <!-- /.ld-cart -->
        </div>
        <!-- /.ld-subpage-content -->
        <!-- End Cart -->
    </section>
    <!-- end shopping cart content -->

    </main>
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>

    <script>
        $(document).ready(function(){
          $("#btn_edit").click(function(){
            $(".edit").hide();
            $(".update").show();
          });
          $("#btn_update").click(function(){
            $(".update").hide();
            $(".edit").show();
          });
        });

    $(document).ready(function(){
        $('select[name="provinsi"]').on('change', function(){
            var provin_id = $(this).val();
                $.ajax({
                    url: "cities" + '/' + provin_id,
                    type:"GET",
                    dataType:"json",
                    success:function(data){
                    $('select[name="city_destination"]').empty();
                    if(data == ''){
                        $('#city_destination').append('<option disabled selected>--Data Tidak Ada--</option>');
                            }else{
                        $('#city_destination').append('<option disabled selected>--Select One--</option>');
                            }
                        $.each(data, function(key, value){
                            $('select[name="city_destination"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                    }
                });
        });

    });

    $(document).ready(function(){
        $('select[name="city_destination"]').on('change', function(){
            var citi_id = $(this).val();
            console.log(citi_id)
        });

    });


        </script>
    @endsection
