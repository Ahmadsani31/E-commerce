<?php

namespace App\Http\Controllers;

use App\Category;
use App\SubCategory;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CategoryController extends Controller
{
    public function index()
    {
        $cat = Category::all()->pluck('category_nama','id');
        return view('admin.category.index', compact('cat'));
    }

    public function store(Request $request)
    {
        foreach($request->nameCategory as $key => $value) {
            $nilai = [
                'category_nama' =>  Str::upper($request->nameCategory[$key]),
            ];
            Category::create($nilai);
        }


        return response()->json(['success'=>'Item deleted successfully.']);
    }

    public function datatable(Request $request)
    {
        if ($request->ajax()) {
            $data = Category::latest()->get();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){

                        $action = '<a href="javascript:void(0)" class="btn btn-info btn-xs editCat" data-id='.$row->id.'><i class="fa fa-edit"></i></a>
                        <button type="button"  data-id="'.$row->id.'" class="btn btn-danger btn-xs delCat"><i class="fa fa-eraser"></i></button>';
                            return $action;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
    }

    public function destroy($id)
    {
        Category::where('id',$id)->delete();
        return response()->json(['success'=>'Item deleted successfully.']);
    }

}
