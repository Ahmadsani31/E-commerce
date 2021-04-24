<?php

namespace App\Http\Controllers\AuthCostumer;

use App\Costumer;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{


    protected $guardName = 'costumer';


    public function __construct()
    {
        $this->middleware('guest:costumer')->except('singout');
    }

    public function index()
    {
        return view('login.singin');
    }
    // public function logout(Request $request) {
    //     Auth::logout();
    //     return redirect('/login');
    // }

    public function username()
    {
        return 'username';
    }

    public function singinStore(Request $request)
    {

        $rules = [
            'username'              => 'required',
            'password'              => 'required|string'
        ];

        $messages = [
            'username.required'     => 'Username wajib diisi',
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


        if(Auth::guard('costumer')->attempt($data))
            {
                return redirect()->route('home-costumer');
            }
            return redirect()->back()->withInput($request->only('username'));

    }

    public function singout(Request $request)
    {
        // $this->guard('costumer')->except('logout');
        Auth::guard('costumer')->logout(); // menghapus session yang aktif
        // Session::flush();
        return redirect('/');
    }
}
