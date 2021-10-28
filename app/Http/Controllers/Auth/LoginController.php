<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:cliente')->except('logout');
        //$this->middleware('guest:funcionario')->except('logout');
    }
       
    public function showClienteLoginForm()
    {
        return view('auth.login', ['url' => 'cliente']);
    }
           
    public function clienteLogin(Request $request)
    {
        $this->validate($request, [
            'email'  => 'required|email',
            'senha' => 'required|min:6'
        ]);
                                        
        if (Auth::guard('cliente')->attempt(['email' => $request->email, 'password' => $request->senha], $request->get('remember'))) {                    
                return redirect()->intended('/home');
        }            
        
        return back()->withInput($request->only('email', 'remember'));
    }
}
