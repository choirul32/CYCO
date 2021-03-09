<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Closure;
use Auth;

class Authenticate extends Middleware
{
    protected $guards;
    

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string[]  ...$guards
     * @return mixed
     *
     * @throws \Illuminate\Auth\AuthenticationException
     */
    public function handle($request, Closure $next, ...$guards)
    {       
        // dd($guards);
        auth()->setDefaultDriver($guards[0]);
        if (!auth()->check() && $guards == 'admin') {
            return redirect(url('admin/login'));
        }
        if (!auth()->check() && $guards == 'guru') {
            return redirect(url('guru/login'));
        }
        if (!auth()->check() && $guards == 'siswa') {
            return redirect(url('siswa/login'));
        }
        if (!auth()->check() && $guards == 'orangtua') {
            return redirect(url('orangtua/login'));
        }
        

        return $next($request);
    }
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('siswa.login');
        }
    }
}
