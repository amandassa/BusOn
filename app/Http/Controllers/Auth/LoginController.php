<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Cliente;

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
    }
       
    /**
     * Get the needed authorization credentials from the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    protected function credentials(Request $request)
    {
        return $request->only($this->username(), 'senha');
    }
    
    public function getAuthPassword()
    {
        return $this->senha;
    }
   
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $email = $credentials['email'];
    	$plain = $credentials['password'];
        $senha_check = DB::select("select senha from cliente where email = :email", ['email' => $email])->first();    	
    	if($this->hasher->check($plain, $senha_check)){            
			return dd("chegou");
            if (Auth::attempt(['email' => $email])) {		    
                return redirect()->route('pagamento');
            }
        }
    }
}
