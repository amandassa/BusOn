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
        return "alo";
    }

}
