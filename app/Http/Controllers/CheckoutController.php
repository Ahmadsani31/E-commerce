<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index()
    {
        $costumer_id = Auth::guard('costumer')->user()->id;
        $cart = Cart::where('costumer_id', $costumer_id)->get();
        return view('checkout',compact('cart'));
    }
}
