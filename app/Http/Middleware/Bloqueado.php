<?php

namespace App\Http\Middleware;


use Closure;
use Auth;

class Bloqueado
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
        if (Auth::check() && !Auth::user()->isBloqueado()) {
            return $next($request);
        } else {
            Auth::logout();
            return redirect('login')->with([
                'message' => [
                    'content' => 'Usuário bloqueado, entre em contato com o adminstrador do sistema.',
                    'type' => 'danger',
                ]
            ]);
        }
    }
}
