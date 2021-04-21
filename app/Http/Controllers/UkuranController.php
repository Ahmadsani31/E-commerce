<?php

namespace App\Http\Controllers;

use App\Category;
use App\SubCategory;
use App\Ukuran;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class UkuranController extends Controller
{
    public function index()
    {
        $cat = Category::all()->pluck('category_nama','id');
        return view('admin.ukuran.index', compact('cat'));
    }

    public function store(Request $request)
    {
        // return response()->json($request);
       foreach($request->size as $key => $value) {
        $nilai = [
            'cat_id'        => $request->idCat,
            'sub_cat_id'    => $request->idSubCat,
            'type_id'       => $request->idType,
            'size'          => $request->size[$key],
            'panjang'       => $request->panjang[$key],
            'lebar'         => $request->lebar[$key],
            'usia'          => $request->umur[$key],
            'lingkar-dada'  => $request->lingkar[$key],
            'keterangan'    => $request->keterangan[$key],
        ];
        Ukuran::create($nilai);
       }


       return response()->json(['success'=>'Item deleted successfully.']);
    }

    public function datatable(Request $request)
    {
        if ($request->ajax()) {
            $data = Ukuran::latest()->get();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->editColumn('category', function($data){
                        $category = $data->category->category_nama;
                        return $category;
                    })

                    ->editColumn('type', function($data){
                        $type = $data->type->type_nama;
                        return $type;
                    })
                    ->addColumn('action', function($row){
                        $action = '<a href="javascript:void(0)" class="btn btn-info btn-xs editUkuran" data-id='.$row->id.'><i class="fa fa-edit"></i></a>
                        <button type="button"  data-id="'.$row->id.'" class="btn btn-danger btn-xs delUkuran"><i class="fa fa-eraser"></i></button>';
                            return $action;
                    })
                    ->rawColumns(['action','category','type'])
                    ->make(true);
        }
    }

    public function destroy($id)
    {
        Ukuran::where('id',$id)->delete();
        return response()->json(['success'=>'Item deleted successfully.']);
    }

    public function selectType($id)
    {
        $selectType = Ukuran::where('type_id', $id)->get();

        return json_encode($selectType);
    }
}
