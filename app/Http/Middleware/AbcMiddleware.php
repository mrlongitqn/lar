<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AbcMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        //Dieu kien minh kiem tra
        if ($request->input('age') > 17)
            return $next($request);
        return redirect('/error');
    }
}
