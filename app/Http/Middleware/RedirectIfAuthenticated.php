<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        return dd($request);
        if($guard == 'cliente' && Auth::guard($guard)->check()) {
            return redirect()->guest(route('home'));
        }

        if($guard == 'funcionario' && Auth::guard($guard)->check()) {
            $admin = DB;
        }

        return $next($request);
    }
}
