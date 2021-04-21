<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductDetail;
use App\ProductImage;
use Illuminate\Http\Request;

class ViewImageController extends Controller
{
    public function index()
    {
        // $product = Product::findOrFail(16);
        // $productDetail = ProductDetail::where('product_id',$product->id)->get();
        // return view('image',compact('product','productDetail'));
        return view('product.bs');
    }

    public function store(Request $request)
    {
        // dd($request->file('file'));

            if ($request->hasFile('file')) {

                $files = $request->file('file');

                foreach ($files as $imageProduct ) {

                    $destinationPath = public_path('images/product/'); // upload path
                    $productImageName = $imageProduct->getClientOriginalName();
                    $imageProduct->move($destinationPath, $productImageName);

                    ProductImage::create([
                        'product_id' => $request->data_id,
                        'image' => $productImageName,
                    ]);
                    return response()->json(['success'=>$image]);
                }

             }


    }

    public function deteleImage(Request $request)
    {
        // dd($request->get('filename'));
        ProductImage::where('image',$request->get('filename'))->delete();
        $delete =  \File::delete('images/product/'.$request->get('filename'));
        // $filename =  $request->get('filename');

        // $path=public_path('/images/').$filename;
        // if (file_exists($path)) {
        //     unlink($path);
        // }
        return response()->json($delete);
    }
}
