<?php

namespace App\Http\Middleware;

use Closure;

class SiswaAuthenticate
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
        if (!auth()->guard('siswa')->check()) {
            return redirect(route('siswa.login'));
        }
        return $next($request);
    }
}
