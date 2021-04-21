<?php

namespace App\Http\Controllers;

use App\SubCategory;
use App\Type;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function store(Request $request)
    {
       foreach($request->nameCatBaju as $key => $value) {
           $nilai = [
               'category_id' => $request->idCat,
               'sub_category_nama' =>  Str::upper($request->nameCatBaju[$key]),
           ];
           SubCategory::create($nilai);
       }


       return response()->json(['success'=>'Item deleted successfully.']);
    }

    public function datatable(Request $request)
    {
        if ($request->ajax()) {
            $data = SubCategory::latest()->get();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->editColumn('category', function($data){
                       $category = $data->category->category_nama;
                       return $category;
                   })
                    ->addColumn('action', function($row){
                           $btn = '<a href="javascript:void(0)" data-id="'.$row->id.'" class="btn btn-info btn-xs editCatSub"><i class="fa fa-edit"></i></a>';
                           $btn = $btn.' <a href="javascript:void(0)"  data-id="'.$row->id.'" class="btn btn-danger btn-xs delCatSub"><i class="fa fa-eraser"></i></a>';
                            return $btn;
                    })
                    ->rawColumns(['action','category'])
                    ->make(true);
        }
    }

    public function destroy($id)
    {
        SubCategory::where('id',$id)->delete();
        return response()->json(['success'=>'Item deleted successfully.']);
    }

    public function selectCat($id)
    {
        $subCategory = SubCategory::where('category_id', $id)->pluck('sub_category_nama','id');
        return json_encode($subCategory);
    }
}
