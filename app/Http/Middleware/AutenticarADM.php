<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AutenticarADM
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
        if(Auth::guard('funcionario')->user() != null)
            if(Auth::guard('funcionario')->user()->is_admin == 1)
                return $next($request);
        return redirect('/login/funcionario');
    }
}
