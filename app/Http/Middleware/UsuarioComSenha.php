<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class UsuarioComSenha
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
        if (Auth::check() && !Auth::user()->isNovoUsuario()) {
            return $next($request);
        } else {
            return redirect('/cadastra-senha');
        }
    }
}
