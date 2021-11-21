<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAddTrechoRequest;
use App\Http\Requests\StoreCadastroFuncionarioRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreAlteracaoDadosFuncionarioRequest;
use App\Models\Administrador as Adm;
use Dotenv\Regex\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\Funcionario;

class AdministradorController extends Controller
{

    public function criarFuncionario(StoreCadastroFuncionarioRequest $request)
    {
        Adm::criarFuncionario($request);
        return redirect()->back()->with('message', 'Funcionário Cadastrado com Sucesso!');
        /*
        $cpf = str_replace(".", "", $request->cpf);
        $cpf = str_replace("-", "", $cpf);
        $nome = $request->nome;
        $email = $request->email;
        $is_admin = null;
        if (isset($_POST['is_admin'])) {
            $is_admin = '1';
        } else {
            $is_admin = '0';
        }
        $senha = Hash::make($request->senha);        
        DB::statement('insert into funcionario(nome, CPF, email, password, is_admin) values (?, ?, ?, ?, ?)', [$nome, $cpf, $email, $senha, $is_admin]);
        $funcionario = new Funcionario;
        $request = [
                 'nome' => $nome,
                 'email' => $email,
                 'CPF'  => $cpf,
                 'password' => $senha,
                 'is_admin' => $is_admin
                 ];
        $funcionario->fill($request);
        
        
        */
    }

    // validador das informações do formulário da tela de criação do funcionário
    public function storeCadastroFuncionario(StoreCadastroFuncionarioRequest $request)
    {
        dd($request->all());
    }

    /**
     * Busca todos os Usuários do sistema
     */
    public function buscarFuncionarios ()
    {              
        
        $funcionarios = DB::select("SELECT * FROM funcionario");
        //return os usuários cadastrados no sistema;
        return view('administrador.gerenciaFuncionarios', ['funcionarios'=>$funcionarios]);
    }

    /**
     * Busca todos os Clientes do sistema
     */
    public function buscarClientes ()
    {              
        $clientes = DB::select("SELECT * FROM cliente");
        //return os usuários cadastrados no sistema;
        return view('administrador.gerenciaClientes', ['clientes'=>$clientes]);
    }

    public function index(){
        $administrador = Adm::index();
        return view("administrador.perfil", ['administrador'=>$administrador]);
    }
    
    public function editar(Request $request){
        $adm = Adm::editar($request);

        if ($adm == 1) {
            return redirect()
                        ->back()
                        ->with('error', 'Algum dos campos está vazio!, alteração não realizada');
        } elseif ($adm ==2 ) {
            return redirect()
                        ->route('perfilAdministrador.index')
                        ->with('success', 'Perfil atualizado com sucesso!');
        } else {
            return redirect()
                        ->back()
                        ->with('error', 'As senhas não coincidems');
        }
        
    }

    public function perfilFunc($email){
        $funcionario = Adm::perfilFunc($email);
        return view("administrador.editarPerfilFuncionario", ['funcionario'=>$funcionario]);
    }
    
    public function editarFunc(Request $request){
        
        $func = Adm::editarFunc($request);

        if ($func['id'] == 1) {
            return redirect()
                        ->back()
                        ->with('error', 'Algum dos campos está vazio!, alteração não realizada');
        } elseif ($func['id'] ==2 ) {
            return redirect()
                        ->route('perfilAdministrador.perfilFunc', ['email' =>$func['email']])
                        ->with('success', 'Perfil atualizado com sucesso!');
        } else {
            return redirect()
                        ->back()
                        ->with('error', 'As senhas não coincidem');
        }
        
    }

    public function storeCadastrarTrecho(StoreAddTrechoRequest $request){
        Adm::addTrecho($request);
        return redirect()->back()->with('message', 'Trecho Cadastrado.');
    }
    
   

}
