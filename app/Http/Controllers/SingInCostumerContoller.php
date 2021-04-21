<?php

namespace App\Http\Controllers;

use App\Costumer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class SingInCostumerContoller extends Controller
{
    public function index()
    {
        return view('login.singin');
    }
    public function singinStore(Request $request)
    {
        $rules = [
            'username'                 => 'required',
            'password'              => 'required|string'
        ];

        $messages = [
            'username.required'        => 'Username wajib diisi',
            'password.required'     => 'Password wajib diisi',
            'password.string'       => 'Password harus berupa string'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }

        $data = [
            'username'     => $request->input('username'),
            'password'  => $request->input('password'),
        ];

        Costumer::attempt($data);


        if(Costumer::attempt(array('username' => $data['username'], 'password' => $data['password'])))
            {
                //Cek Auth->level apa yang lagi aktive
            if (Auth::user()->level == "admin") {
                return redirect()
                        ->route('admin.dashboard')
                            ->with('login','Login Berhasil');
            }elseif (Auth::user()->level == "user") {
                return redirect()
                        ->route('user.dashboard')
                            ->with('login','Login Berhasil');
            }
            }else{
                return redirect()->route('login')
                    ->with('error','Username And Password Are Wrong.');
            }

    }
}
