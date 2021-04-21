<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductDetail;
use App\ProductImage;
use App\Ukuran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
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

    //     $data = DB::table('product')
    // ->join('product_detail',  'product_detail.product_id', '=','product.id')
    // ->join('ukuran',  'ukuran.id', '=','product_detail.ukuran_id')
    // ->join('product_image',  'product_image.product_id', '=','product.id')
    // ->where('product.id', 14)->get();
    //     $data = ProductImage::where('product_id',10)->pluck('image')[0];
    // //     $images = explode(",", $data);
    // return $data;
        return view('admin.home');
    }
}
