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

    

    // validador das informações do formulário da tela de criação do funcionário
    public function storeCadastroFuncionario(StoreCadastroFuncionarioRequest $request)
    {
        dd($request->all());
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
                        ->with('error', 'Um dos campos de senha está vazio');
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
                        ->with('error', 'Um dos campos de senha está vazio');
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
    
    
   

}
