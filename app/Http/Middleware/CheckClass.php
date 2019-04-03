<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class CheckClass
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
       if ( Auth::user()->ClassRoom_id <5 ) {
            return $next($request);
        } else if(Auth::user()->ClassRoom_id >5) {
            flash('Bạn không có quyền truy cập trang này')->error();
            return redirect()->route('user');
        }    
    }
}
