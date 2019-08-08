<?php

namespace App\Http\Middleware;

use Closure;

class NguoiMuaHangMiddleware
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
        if($request->session()->has('user') && $request->session()->get('user') == 'NguoiMuaHang')
        {
            return $next($request);
        }
        else return redirect("dang-nhap");
    }
}
