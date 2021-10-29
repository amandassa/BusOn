<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Model\AdministradorModel as Adm;

class AdministradorController extends Controller
{
    public function criarFuncionario(Request $request)
    {
        Adm::criarFuncionario($request->all());

        return redirect()->route('cadastroFuncionario')
            ->with('status', 'Funcionário Cadastrado com Sucesso!');
    }
}
