<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CekLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle(Request $request, Closure $next,...$role)
    {
        if(Auth::user()->email_verified_at and true){
            $verifikasi = 1;
        }else{
            $verifikasi = 0;
        }
        if(in_array($verifikasi,$role)){
            return $next($request);
        }
        return redirect('/error')->with('notif', " Invalid username or password.");
    }
}
