<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class checkRole
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
          if (Auth::check() && Auth::user()->classroom_id < 5 ) {
            return $next($request);
        } else {
            Auth::logout();
            flash('Bạn không có quyền truy cập trang này')->error();
            return redirect()->route('home');
        }
    }
}
