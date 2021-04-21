<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductDetail;
use Illuminate\Http\Request;

class DetailProductController extends Controller
{
    public function index()
    {
        $product = Product::findOrFail(14);
        $productDetail = ProductDetail::where('product_id',$product->id)->get();
        return view('frontend.productDetail',compact('product','productDetail'));
    }
}
