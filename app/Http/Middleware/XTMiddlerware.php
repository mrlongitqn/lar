<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class XTMiddlerware
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
        if(session()->get('user')==null){
            return redirect('dang-nhap');
        }
        return $next($request);
    }
}