<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\Cliente;
use App\Models\Funcionario;
use Carbon;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    //protected $redirectTo = '/login';
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:cliente')->except('logout');
        $this->middleware('guest:funcionario')->except('logout');
    }

    public function showFuncionarioRegisterForm(){
        return view('administrador.cadastroFuncionario');        
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'cpf' => ['required', 'string' ,'min:14'],
            'nome' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:cliente'],
            'senha' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $cpf = str_replace(".", "", $data['cpf']);
        $cpf = str_replace("-", "", $cpf);
        $nome = $data['nome'];
        $email = $data['email'];
        $senha = Hash::make($data['senha']);        
        DB::statement('insert into cliente(nome, cpf, email, password) values (?, ?, ?, ?)', [$nome, $cpf, $email, $senha]);
        $cliente = new Cliente;
        $cliente->fill($data);        
        return $cliente;    
    }
    
    protected function criarFuncionario(Request $request)
    {
        dd($request);
        $cpf = str_replace(".", "", $data->cpf);
        $cpf = str_replace("-", "", $cpf);
        $nome = $data->nome;
        $email = $data->email;
        $is_admin = null;
        if (isset($_POST['is_admin'])) {
            $is_admin = '1';
        } else {
            $is_admin = '0';
        }
        $senha = Hash::make($data->senha);        
        DB::statement('insert into funcionario(nome, cpf, email, password, is_admin) values (?, ?, ?, ?, ?)', [$nome, $cpf, $email, $senha, $is_admin]);
        $funcionario = new Funcionario;
        $data = [
                 'nome' => $nome,
                 'email' => $email,
                 'cpf'  => $cpf,
                 'password' => $senha,
                 'is_admin' => $is_admin
                 ];
        $funcionario->fill($data);
        
        return redirect()->route('cadastroFuncionario')
            ->with('status', 'Funcionário Cadastrado com Sucesso!');
//        return $funcionario;
    }
         
}
