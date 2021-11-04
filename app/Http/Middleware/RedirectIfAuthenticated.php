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

    
        
    if (Auth::guard($guard)->check()) 
    {                       
            
        if(Auth::guard('cliente')->user()) 
        {
            return redirect(route('inicio'));
        }

        else
        {

            if(Auth::guard('funcionario')->user()->is_admin == 1) 
            {
                return redirect(route('inicial_adm'));
            }      
            
            if(Auth::guard('funcionario')->user()->is_admin == 0) 
            {
                return redirect(route('inicial_func'));
            }
            
              
        }
    
    if (Auth::guard($guard)->check() && Auth::guard('funcionario')->user()->is_admin == 1) {                                              
            return redirect(route('inicial_adm'));
        //{{ Auth(auth()->guard()->getName)->user()->nome }}
        }

    }

        
        return $next($request);
    }
}