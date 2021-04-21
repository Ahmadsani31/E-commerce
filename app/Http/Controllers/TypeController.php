<?php

namespace App\Http\Controllers;

use App\Type;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class TypeController extends Controller
{
    public function store(Request $request)
    {
       foreach($request->typeNama as $key => $value) {
           $nilai = [
               'cat_id' => $request->idCat1,
               'sub_cat_id' => $request->idSubCat,
               'type_nama' =>  Str::upper($request->typeNama[$key]),
           ];
           Type::create($nilai);
       }


       return response()->json(['success'=>'Item deleted successfully.']);
    }

    public function datatable(Request $request)
    {
        if ($request->ajax()) {
            $data = Type::latest()->get();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->editColumn('category', function($data){
                        $category = $data->category->category_nama;
                        return $category;
                    })
                    ->editColumn('subCategory', function($data){
                        $subCategory = $data->subCategory->sub_category_nama;
                        return $subCategory;
                    })
                    ->addColumn('action', function($row){
                        $action = '<a href="javascript:void(0)" class="btn btn-info btn-xs editType" data-id='.$row->id.'><i class="fa fa-edit"></i></a>
                        <button type="button"  data-id="'.$row->id.'" class="btn btn-danger btn-xs delType"><i class="fa fa-eraser"></i></button>';
                            return $action;
                    })
                    ->rawColumns(['action','category','subCategory'])
                    ->make(true);
        }
    }

    public function destroy($id)
    {
        Type::where('id',$id)->delete();
        return response()->json(['success'=>'Item deleted successfully.']);
    }

    public function selectSubCat($id)
    {
        $subCategory = Type::where('sub_cat_id', $id)->pluck('type_nama','id');
        return json_encode($subCategory);
    }
}
