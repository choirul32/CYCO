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
        if (isset($guards[0])) {
            auth()->setDefaultDriver($guards[0]);
            if (!auth()->check() && $guards[0] == 'admin') {
                return redirect(url('admin/login'));
            }
            if (!auth()->check() && $guards[0] == 'guru') {
                return redirect(url('guru/login'));
            }
            if (!auth()->check() && $guards[0] == 'siswa') {
                return redirect(url('siswa/login'));
            }
            if (!auth()->check() && $guards[0] == 'orangtua') {
                return redirect(url('orangtua/login'));
            }
            if (!auth()->check() && $guards[0] == 'web') {
                return redirect(url('admin/login'));
            }
        }
        if(auth()->check()){
            return $next($request);
        }
        auth()->setDefaultDriver('siswa');
        if(auth()->check()){
            return $next($request);
        }
        auth()->setDefaultDriver('guru');
        if(auth()->check()){
            return $next($request);
        }else{
            abort(404);
        }
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
