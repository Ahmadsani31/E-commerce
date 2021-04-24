<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\ProductDetail;
use App\ProductImage;
use App\SubCategory;
use App\Type;
use App\Ukuran;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Picqer\Barcode\BarcodeGeneratorHTML;
use Illuminate\Support\Str;
use Milon\Barcode\DNS2D;
use Picqer\Barcode\BarcodeGeneratorSVG;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Product::latest()->get();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->editColumn('img', function($data){
                        $img = $data->productImage->pluck('image')[0];
                        return $img;
                    })
                    ->editColumn('category', function($data){
                        $category = $data->category->category_nama.'->'.$data->subCategory->sub_category_nama.'->'.$data->type->type_nama;
                        return $category;
                    })

                    ->editColumn('type', function($data){
                        $type = $data->type->type_nama;
                        return $type;
                    })
                    ->editColumn('nama', function($data){
                        $nama = Str::limit($data->product_nama, 20, '...') ;
                        return $nama;
                    })
                    ->editColumn('ukuran', function($data){

                        $data = ProductDetail::with('ukuran')->where('product_id',$data->id)->get();
                        foreach ($data as $key) {
                            $ukuran[] ='['.$key->ukuran->size.']';

                         }
                        return $ukuran;
                    })
                    ->editColumn('harga', function($data){
                        $harga = ProductDetail::where('product_id',$data->id)->get()->pluck('harga');

                        return $harga;
                    })
                    ->editColumn('stock', function($data){
                        $stock = ProductDetail::where('product_id',$data->id)->get()->pluck('stock');
                        return $stock;
                    })
                    ->editColumn('status', function($data){
                        $status = '<span class="badge bg-info">'.$data->status_product.'</span>';
                        return $status;
                    })
                    ->editColumn('barcode', function($data){
                        $br = new DNS2D();
                        $br->setStorPath(__DIR__.'/cache/');
                        $barcode = '<img src="data:image/png;base64,' .$br->getBarcodePNG($data->kode_product,'QRCODE'). '" alt="barcode"   />';
                        // $barcode = $br->getBarcodeHTML($data->product->kode_product,'QRCODE',3,3);
                        return $barcode;
                    })
                    ->addColumn('action', function($data){

                        $action = '<a href="javascript:void(0)" id="btnShow" class="btn btn-info btn-xs show" data-id='.$data->id.'><i class="fa fa-eye"></i></a>
                        <a href="/admin/product/'.$data->id.'/edit" class="btn btn-warning btn-xs editProduct" data-id='.$data->id.'><i class="fa fa-edit"></i></a>
                        <button type="button" id="delProduct"  data-id="'.$data->id.'" class="btn btn-danger btn-xs delProduct"><i class="fa fa-eraser"></i></button>';
                            return $action;
                    })
                    ->rawColumns(['action','img','category','type','nama','ukuran','harga','barcode','status'])
                    ->make(true);
        }

        return view('admin.product.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat = Category::all()->pluck('category_nama','id');
        return view('admin.product.create',compact('cat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  dd($request);

         $category = Category::findOrFail($request->idCat);
         $nama_cat = $category->category_nama;
         $sub_category = SubCategory::findOrFail($request->idSubCat);
         $nama_cat_sub = $sub_category->sub_category_nama;
         $type = Type::findOrFail($request->idType);
         $nama_type = $type->type_nama;
         $no_acak     = rand(1,9999);

         $barcode = $nama_cat.$nama_type.$no_acak;


            $product = $request->validate([
                'nama_product' => 'required',
                'bahan' => 'required',
                'description' => 'required',
                  ]);

            $id_user = Auth::user()->id;

            $product['user_id'] = $id_user;
            $product['cat_id'] = $request->idCat;
            $product['sub_cat_id'] = $request->idSubCat;
            $product['type_id'] = $request->idType;
            $product['product_nama'] = Str::title($request->nama_product);
            $product['bahan'] = Str::upper($request->bahan);
            $product['warna'] = Str::upper($request->warna);
            $product['description'] = Str::title($request->description);
            $product['kode_product'] = $barcode;
            $product['status_product'] = 'Available';
            $id = Product::create($product);

            $id_product = $id->id;


            foreach($request->idUkuran as $key => $value) {
                ProductDetail::create([
                    'product_id' => $id_product,
                    'ukuran_id' => $request->idUkuran[$key],
                    'harga' =>  str_replace(',','',$request->harga[$key]),
                    'stock' => $request->stock[$key],
                        ]);
                }

            return response()->json(['id'=> $id_product]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product, $id)
    {
        $data = Ukuran::where('type_id', $id)->pluck('size','id');
        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product,$id)
    {
        $product = Product::findOrFail($id);
        $category = Category::all()->pluck('category_nama');
        $sub_category = SubCategory::where('category_id',$product->cat_id)->pluck('sub_category_nama');
        $type = Type::where('sub_cat_id',$product->sub_cat_id)->pluck('type_nama');
        $productDetail = ProductDetail::where('product_id',$product->id)->get();
        $ukuran = Ukuran::where('type_id', $product->type_id)->get();
        return view('admin.product.edit',compact('product','category','sub_category','type','productDetail','ukuran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product, $id)
    {
        $data = ProductImage::where('product_id',$id)->pluck('image');

        foreach ($data as $img) {
            \File::delete('images/product/'.$img);
           }
        Product::where('id',$id)->delete();

        return response()->json(['success'=>'Item deleted successfully.']);
    }

    public function image(Request $request)
    {
        $image = $request->file('file');

        $imageName = time() . '-' . strtoupper(Str::random(10)) . '.' . $image->extension();
        $image->move(public_path('images/product'), $imageName);

        return response()->json(['success'=> $imageName]);

    }

    public function view(Request $request, $id)
    {
        if ($request->ajax()) {
            $output = '';

            $data = Product::findOrFail($id);

            $no=1;
            $image = ProductImage::where('product_id',$id)->get();
        foreach($image as $row)
        {
            $output .= '
            <div class="product-image-thumb active">
            <img src={{ URL::to('/') }}images/product/"'.$row->image.'" alt="Product Image">
            </div>
            ';
        }
        $data = array(
            'table_data'  => $output,
            'nama'  => $data->product_nama,
            'des'  => $data->description,
           );
        }
        return json_encode($data);

    }


    public function storeImage(Request $request)
    {

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

                }

             }
            //  return view('product.index')->with('success','Item deleted successfully.');
             return response()->json('Successfully',200);

    }

    public function deteleImage(Request $request)
    {
        ProductImage::where('image',$request->get('filename'))->delete();
        $delete =  \File::delete('images/product/'.$request->get('filename'));

        return response()->json($delete);
    }
}
