<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Funcionario as Func;
use DateTime;
use Illuminate\Support\Facades\Auth;

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
     * Passagens vendidas por um funcionario no dia 
     *
     * @return void
     */
    public function passagens_vendidas_dia($mat_funcionario)
    {
        $mat_funcionario= Auth::guard('funcionario')->user()->matricula; //pega a matricula do funcionario logado

        $data_hoje = new DateTime('d/m/Y'); //Pega a data atual
        $data_uma_semana_atras = $data_hoje->modify('-7 day');  //Pega a data 7 dias antes
        $data_uma_mes_atras = $data_hoje->modify('-30 day'); //Pega a data 30 dias antes

        $qtd_vendas_hoje = DB:: select("SELECT count() FROM venda WHERE funcionario = $mat_funcionario AND $data_hoje = (SELECT data_compra FROM passagem WHERE venda.codigo_passagem =  passagem.codigo");
        $qtd_vendas_7dias = DB:: select("SELECT count() FROM venda WHERE funcionario = $mat_funcionario = ((SELECT data_compra FROM passagem WHERE venda.codigo_passagem =  passagem.codigo) BETWEEN $data_uma_semana_atras AND $data_hoje"); 
        $qtd_vendas_30dias = DB:: select("SELECT count() FROM venda WHERE funcionario = $mat_funcionario = ((SELECT data_compra FROM passagem WHERE venda.codigo_passagem =  passagem.codigo) BETWEEN $data_uma_mes_atras AND $data_hoje"); 


        return view('funcionario.inicial_func')->with(['qtd_vendas_hoje', $qtd_vendas_hoje], ['qtd_vendas_7dias', $qtd_vendas_7dias], ['qtd_vendas_30dias', $qtd_vendas_30dias]);
    }

  

}

?>
