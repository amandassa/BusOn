<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RequestEstatisticasFuncionario;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Funcionario as Func;
use App\Models\Linha as Linha;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class FuncionarioController extends Controller {

    public function index(){
        $funcionario = Func::index();
        return view("funcionario.perfil", ['funcionario'=>$funcionario]);
    }
    
    public function editar(Request $request){
        $funcionario = Func::editar($request);

        if ($funcionario == 1) {
            return redirect()
                        ->back()
                        ->with('error', 'Algum dos campos está vazio!, alteração não realizada');
        } elseif ($funcionario ==2 ) {
            return redirect()
                        ->route('perfilFuncionario.index')
                        ->with('success', 'Perfil atualizado com sucesso!');
        } else {
            return redirect()
                        ->back()
                        ->with('error', 'As senhas não coincidem');
        }
        
    }

    /**
     * Retorna para view todas as estatisticas iniciais
     * @return estatisticas
     */
    public function estatisticas (Request $request)
    {

        $mat_funcionario= Auth::guard('funcionario')->user()->matricula; //pega a matricula do funcionario logado
        
        $passagens_vendidas = Func::passagens_vendidas($mat_funcionario);
        $linha_mais_vendida = Linha::linha_mais_vendida();
        $linha_menos_vendida = Linha::linha_menos_vendida();
        //dd($request['buscarLinha']);
        //$linha_por_codigo =  Linha::buscar_linha ($request['buscarLinha']);


        return view('funcionario.inicial_func')->with(['qtd_vendas_hoje' => $passagens_vendidas['qtd_vendas_hoje'], 
                                                        'qtd_vendas_7dias' => $passagens_vendidas['qtd_vendas_7dias'], 
                                                        'qtd_vendas_30dias' => $passagens_vendidas['qtd_vendas_30dias'],

                                                        'linha_mais_vendida_partida' => $linha_mais_vendida['linha_mais_vendida_partida'],
                                                        'linha_mais_vendida_chegada' => $linha_mais_vendida['linha_mais_vendida_chegada'],

                                                        'linha_menos_vendida_partida' => $linha_menos_vendida['linha_menos_vendida_partida'],
                                                        'linha_menos_vendida_chegada' => $linha_menos_vendida['linha_menos_vendida_chegada'],

                                                        /*'total_vendas' => $linha_por_codigo['total'],
                                                        'cidade_partida' => $linha_por_codigo['cidade_partida'],
                                                        'cidade_chegada'=> $linha_por_codigo['cidade_chegada']*/
                                                    
                                                    ]);

    }

    
  
}

?>
