<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class Admin
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
        $current = Auth::user();
        if($current['attributes']['role'] == '4' ){
            // return;
            return redirect('/');
        }
        return $next($request);
    }
}
