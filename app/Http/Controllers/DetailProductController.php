<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductDetail;
use Illuminate\Http\Request;

class DetailProductController extends Controller
{
    public function index($id)
    {
        $pro = Product::all();

        $product = Product::findOrFail($id);
        $productDetail = ProductDetail::where('product_id',$product->id)->get();
        // dd($productDetail);
        return view('detail-product',compact('product','productDetail','pro'));
    }

    public function detailUkuran($id)
    {
        $detail = ProductDetail::find($id);
        return response()->json($detail);
    }

}
