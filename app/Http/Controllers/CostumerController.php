<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use App\ProductDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CostumerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:costumer');
    }

    public function index()
    {
        $costumer_id = Auth::guard('costumer')->user()->id;

        $product = Product::limit(4)->get();
        $cart = Cart::where('costumer_id', $costumer_id)->limit(2)->get();
        // $productDetail = ProductDetail::where('product_id',$product->id)->get();
        // $user = auth()->guard('costumer')->user();
        // dd($user);
        return view('home-costumer', compact('product','cart'));
    }
}
