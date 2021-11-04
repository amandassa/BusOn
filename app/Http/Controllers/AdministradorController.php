<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCadastroFuncionarioRequest;
use App\Http\Requests\StoreAlteracaoDadosFuncionarioRequest;
use App\Http\Model\AdministradorModel as Adm;
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

    // validador das informações do formulário da tela de alteração de dados do funcionário
    public function storeAlteracaoDadosFuncionario(StoreAlteracaoDadosFuncionarioRequest $request)
    {
        dd($request->all());
    }
    
}
