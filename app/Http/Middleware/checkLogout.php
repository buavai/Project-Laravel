<?php

namespace App\Http\Middleware;

use Closure;

class checkLogout
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
        if(Auth::guest(){
            return redirect()->route('home');
        });
        return $next($request);
    }
}
