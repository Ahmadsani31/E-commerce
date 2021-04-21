<?php

namespace App\Http\Controllers;

use App\Costumer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class SingUpCostumerContoller extends Controller
{
    public function index()
    {

        return view('login.singup');
    }

    public function singupStore(Request $request)
    {
        // dd($request);
        $rules = [
            'nama'                  => 'required|min:3|max:35',
            'email'                 => 'required|email|unique:costumers,email',
            'username'              => 'required|unique:costumers,username',

        ];

        $messages = [
            'nama.required'         => 'Nama Lengkap wajib diisi',
            'nama.min'              => 'Nama lengkap minimal 3 karakter',
            'nama.max'              => 'Nama lengkap maksimal 35 karakter',
            'email.required'        => 'Email wajib diisi',
            'email.email'           => 'Email tidak valid',
            'email.unique'          => 'Email sudah terdaftar',
            'username.required'     => 'Username wajib diisi',
            'username.unique'       => 'Username sudah terdaftar',
            'password.required'     => 'Password wajib diisi',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }

        $costumer = new Costumer();
        $costumer->nama = ucwords(strtolower($request->nama));
        $costumer->username = strtolower($request->username);
        $costumer->password = Hash::make($request->password);
        $costumer->birthday	 = $request->bulan.'/'.$request->hari.'/'.$request->tahun;
        $costumer->email = strtolower($request->email);
        $simpan = $costumer->save();

        if($simpan){
            Session::flash('success', 'Register berhasil! Silahkan login untuk mengakses data');
            return redirect()->route('singin');
        } else {
            Session::flash('errors', ['' => 'Register gagal! Silahkan ulangi beberapa saat lagi']);
            return redirect()->route('singup');
        }
    }
}
