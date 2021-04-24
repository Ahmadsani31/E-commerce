<?php

namespace App\Http\Controllers;

use App\Costumer;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class DataCostumerController extends Controller
{
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $data = Costumer::latest()->get();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->editColumn('status', function($data){
                        $status = '<span class="badge bg-info">'.$data->level.'</span>';
                        return $status;
                    })
                    ->addColumn('waktu', function($data){
                        $waktu = $data->created_at->format('D, d M Y');
                        return $waktu;
                        })
                    ->addColumn('action', function($row){
                        $action = '<a href="javascript:void(0)" class="btn btn-info btn-xs editUkuran" data-id='.$row->id.'><i class="fa fa-edit"></i></a>
                        <button type="button"  data-id="'.$row->id.'" class="btn btn-danger btn-xs delUkuran"><i class="fa fa-eraser"></i></button>';
                            return $action;
                    })
                    ->rawColumns(['action','status','waktu'])
                    ->make(true);
        }

        return view('admin.costumer.index');
    }
}
