<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddVendaRequest;
use App\Models\Funcionario as Func;
use \DateTime;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;


class FuncionarioController extends Controller {

    public function index(){
        $funcionario = Func::index();
        return view("funcionario.perfil", ['funcionario'=>$funcionario]);
    }

    public function gerarRelatorioViagem(){
        $clientes = DB::select("SELECT * FROM cliente;");
        $clientes_paginados = new Paginator($clientes, 15);        
        return view('funcionario.gerarRelatorio', ['clientes' => $clientes_paginados]);
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
    public function passagens_vendidas()
    {
        $mat_funcionario= Auth::guard('funcionario')->user()->matricula; //pega a matricula do funcionario logado
        
        $data = new DateTime(); //Pega a data atual
        
        $data_hoje = $data->format('Y-m-d');
        $data_uma_semana_atras = $data->modify('-7 day')->format('Y-m-d');  //Pega a data 7 dias antes
        $data_uma_mes_atras = $data->modify('+7 day')->modify('-1 month')->format('Y-m-d'); //Pega a data 30 dias antes
    
        $qtd_vendas_hoje = DB:: select("SELECT COUNT(*) as contagem_vendas FROM venda WHERE venda.matricula_vendedor = $mat_funcionario AND $data_hoje = (SELECT data_compra FROM passagem WHERE venda.codigo_passagem = passagem.codigo)");
        $qtd_vendas_7dias = DB:: select("SELECT COUNT(*) as contagem_vendas FROM venda WHERE venda.matricula_vendedor = $mat_funcionario AND ((SELECT data_compra FROM passagem WHERE venda.codigo_passagem =  passagem.codigo) BETWEEN $data_uma_semana_atras AND $data_hoje)"); 
        $qtd_vendas_30dias = DB:: select("SELECT COUNT(*) as contagem_vendas FROM venda WHERE venda.matricula_vendedor = $mat_funcionario AND ((SELECT data_compra FROM passagem WHERE venda.codigo_passagem =  passagem.codigo) BETWEEN $data_uma_mes_atras AND $data_hoje)"); 

        return view('funcionario.inicial_func')->with(['qtd_vendas_hoje' => $qtd_vendas_hoje[0]->contagem_vendas, 
                                                        'qtd_vendas_7dias' => $qtd_vendas_7dias[0]->contagem_vendas,
                                                        'qtd_vendas_30dias' => $qtd_vendas_30dias[0]->contagem_vendas]);
    }

    public function vender(AddVendaRequest $request){
        $result = Func::venderPassagem($request);
        if($result == 0){
            return redirect()->back()->with('error', 'Sem vagas.');
        }else{
            return redirect()->back()->with('message', 'Venda Feita.');
        }

        //Func::venderPassagem($request);
    }

}

?>
