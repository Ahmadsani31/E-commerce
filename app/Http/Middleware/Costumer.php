<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Costumer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {

            if (Auth::guard('costumer')) {
                return $next($request);
            }elseif( Auth::guard('admin')){
                return redirect()->route('admin.home');
            }
        }else{
            return redirect('/singin');
        }
    }
}
