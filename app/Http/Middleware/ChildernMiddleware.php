<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ChildernMiddleware
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
        //Kiểm soát router/request

        if($request->input('chieucao')>140){
            return  redirect('danh-cho-nguoi-lon');
        }
        return $next($request);
    }
}
