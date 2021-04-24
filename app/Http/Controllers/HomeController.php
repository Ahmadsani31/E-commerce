<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use App\ProductDetail;
use App\ProductImage;
use App\Province;
use App\Ukuran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Kavist\RajaOngkir\Facades\RajaOngkir;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        // $data = ProductDetail::all();
        // foreach($data as $value) {
        //     $nilai = $value->harga;
        //     return $nilai;

        // }
        // $user = auth()->guard('admin')->user();
        // dd($user);

    //     $data = DB::table('product')
    // ->join('product_detail',  'product_detail.product_id', '=','product.id')
    // ->join('ukuran',  'ukuran.id', '=','product_detail.ukuran_id')
    // ->join('product_image',  'product_image.product_id', '=','product.id')
    // ->where('product.id', 14)->get();
    //     $data = ProductImage::where('product_id',10)->pluck('image')[0];
    // //     $images = explode(",", $data);
    // return $data;
    // $costumer_id = Auth::guard('costumer')->user()->id;
    // $cart = Cart::where('costumer_id', $costumer_id)->sum('harga');
    // $a = $cart;
    // $cart = Cart::where('ukuran_id',6)->whereIn('product_id',[2])->first();

    $daftarProvinsi = RajaOngkir::provinsi()->all();
return response()->json($daftarProvinsi);
        // return view('admin.home');
    }
}
