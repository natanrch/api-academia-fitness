<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Instrutor
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
        if (Auth::check() && Auth::user()->isInstrutor()) {
            return $next($request);
        } else {
            return redirect('/');
        }
    }
}
