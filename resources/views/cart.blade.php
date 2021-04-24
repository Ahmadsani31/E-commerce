@extends('layouts.master')
@section('cart')
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
@endsection
