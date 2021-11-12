<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
class check_client
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::guard('khachhang')->check()){
            if(Auth::guard('khachhang')->user()->change_status(1,Auth::guard('khachhang')->user()->customer_email)){
                return $next($request);
            }
            Auth::guard('khachhang')->logout();
            return redirect()->route('cli_index')->with('message','Tài khoản của bạn đã bị khóa');
        }
        return $next($request);

    }
    
}
