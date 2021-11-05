<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAddTrechoRequest;
use App\Http\Requests\StoreCadastroFuncionarioRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreAlteracaoDadosFuncionarioRequest;
use App\Models\Administrador as Adm;
use Dotenv\Regex\Result;
use Illuminate\Http\Request;

class AdministradorController extends Controller
{

    public function criarFuncionario(Request $request)
    {
        Adm::criarFuncionario($request->all());
        
        return redirect()->route('cadastroFuncionario')
            ->with('status', 'Funcionário Cadastrado com Sucesso!');
    }

    // validador das informações do formulário da tela de criação do funcionário
    public function storeCadastroFuncionario(StoreCadastroFuncionarioRequest $request)
    {
        dd($request->all());
    }

    /**
     * Busca todos os Usuários do sistema
     */
    public function buscarUsuarios ()
    {              
        
        $funcionarios = DB::select("SELECT * FROM funcionario");
        $clientes = DB::select("SELECT * FROM cliente");
        //return os usuários cadastrados no sistema;
        return view('administrador.gerenciaUsuarios', ['funcionarios'=>$funcionarios, 'clientes'=>$clientes]);
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
                        ->with('error', 'As senhas não coincidem');
        }
        
    }

    public function perfilFunc(){
        $funcionario = Adm::perfilFunc();
        return view("administrador.editarPerfilFuncionario", ['funcionario'=>$funcionario]);
    }
    
    public function editarFunc(Request $request){
        $func = Adm::editarFunc($request);

        if ($func == 1) {
            return redirect()
                        ->back()
                        ->with('error', 'Algum dos campos está vazio!, alteração não realizada');
        } elseif ($func ==2 ) {
            return redirect()
                        ->route('perfilAdministrador.perfilFunc')
                        ->with('success', 'Perfil atualizado com sucesso!');
        } else {
            return redirect()
                        ->back()
                        ->with('error', 'As senhas não coincidem');
        }
        
    }

    public function storeCadastrarTrecho(StoreAddTrechoRequest $request){
        return redirect('adicionarTrecho')->with('message', 'Trecho Cadastrado.');
    }
    
   

}
