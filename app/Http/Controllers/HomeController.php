<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /*public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'senha' => 'required|password'
            ]);

        $credentials = ['email' => $request->email, 'senha' => $request->senha];

        if(Auth::attempt($credentials)){
            return redirect()->route('pagamento');
        } else {
            return redirect()->back()->with('msg', 'Aceso negado com essas credenciais');
        }
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
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
        }
        return redirect(route('login'));
    }
}
