<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCadastroFuncionarioRequest;
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
    
    // validador das informações do formulário de criação do funcionário
    public function storeCadastroFuncionario(StoreCadastroFuncionarioRequest $request)
    {
        dd($request->all());
    }

    public function editarPerfilAdm(Request $request){

        Adm::editarPerfilAdm($request);
        return redirect()->route('editarPerfilAdm')
            ->with('status', 'Informações alteradas com sucesso');
       


    }
}