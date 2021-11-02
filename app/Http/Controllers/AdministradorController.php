<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCadastroFuncionarioRequest;
use App\Http\Model\AdministradorModel as Adm;

class AdministradorController extends Controller
{
    public function criarFuncionario(Request $request)
    {
        // esse método não foi finalizado
        storeCadastroFuncionario();

        Adm::criarFuncionario($request->all());
        
        return redirect()->route('cadastroFuncionario')
            ->with('status', 'Funcionário Cadastrado com Sucesso!');
    }
    
    // validador das informações do formulário de criação do funcionário
    public function storeCadastroFuncionario(StoreCadastroFuncionarioRequest $request)
    {
        dd($request->all());
    }
}
