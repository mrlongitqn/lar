<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckCategoryMiddleware
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
        $id_cat = $request->category_id;
        $cat = DB::table('categories')->where('id', '=', $id_cat)->first();
        if($cat == null)
            return  redirect('error');
        return $next($request);
    }
}
