<?php

namespace App\Http\Controllers;

use App\Cart;
use App\City;
use App\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Kavist\RajaOngkir\Facades\RajaOngkir;

class CartController extends Controller
{
    public function index()
    {
        $costumer_id = Auth::guard('costumer')->user()->id;
        $cart = Cart::where('costumer_id', $costumer_id)->get();
        $provinces = Province::pluck('name', 'province_id');
        return view('shopping-cart',compact('cart','provinces'));
    }

    public function cart(Request $request)
    {
        if ($request->product_detail_id == null || $request->qty == null) {

            $nilai = [
                'success' => false,
                'info' => 'need required input qty',
              ] ;
            return response()->json($nilai,422);

        }else{

        // return response()->json($product_detail_id);
        // dd($request);
        request()->validate([
            'costumer_id' => 'required',
            'product_id' => 'required',
            'product_detail_id' => 'required',
            'qty' => 'required',
        ]);

        DB::transaction(function () use($request) {
                    //kita explode semua data yang kita ambil lewat input product_detail_id
        $data = explode(",",$request->product_detail_id);
        //lalu datanya kita jadikan sesuai dengan variabel yang di request
        $product_detail_id = $data[0];
        $ukuran_id = $data[1];
        $stock = $data[2];
        $harga_product = $data[3];


        if ($cart = Cart::where('ukuran_id',$ukuran_id)->whereIn('product_id',[$request->product_id])->first()) {
            $cart->qty = $cart->qty + $request->qty;
            $cart->save();
            return response()->json('Cart berhasil di update');
        }else{
             //kita insert data yang di request ke cart
            $cart = Cart::create([
                'costumer_id' => $request->costumer_id,
                'product_id' => $request->product_id,
                'productDetail_id' => $product_detail_id,
                'ukuran_id' => $ukuran_id,
                'qty' => $request->qty,
                'stock' => $stock,
                'harga' => $harga_product,
                ]);
        }


        });
        return response()->json('Successfully add cart');

      }
    }

    public function cartDelete($id)
    {
        Cart::where('id',$id)->delete();
        return redirect()->back();
    }

    public function getCities($id)
    {
        $city = City::where('province_id', $id)->pluck('name', 'city_id');
        return response()->json($city);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function check_ongkir(Request $request)
    {
        $cost = RajaOngkir::ongkosKirim([
            'origin'        => 318, // ID kota/kabupaten asal
            'destination'   => $request->city_destination, // ID kota/kabupaten tujuan
            'weight'        => $request->weight, // berat barang dalam gram
            'courier'       => $request->courier // kode kurir pengiriman: ['jne', 'tiki', 'pos'] untuk starter
        ])->get();


        return response()->json($cost);
    }
}
