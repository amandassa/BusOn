<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCadastroFuncionarioRequest;
use App\Http\Model\AdministradorModel as Adm;
use Illuminate\Support\Facades\DB;
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

    
}
