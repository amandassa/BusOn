<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddVendaRequest;
use App\Models\Funcionario as Func;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Traits\PaginationTrait;

class FuncionarioController extends Controller {
    use PaginationTrait;    



    public function index(){
        $funcionario = Func::index();
        return view("funcionario.perfil", ['funcionario'=>$funcionario]);
    }

    public function gerarRelatorioViagem(){
        $clientes = DB::select("SELECT * FROM cliente;");
        $clientes_paginados =  $this->paginate($clientes);
        $clientes_paginados->withPath('gerarRelatorio');
        return view('funcionario.gerarRelatorio', ['clientes' => $clientes_paginados]);
    }    

    public function buscarRelatorioViagem(Request $request){
        $codigo_linha = $request['codigo_linha'];
        $data = $request['data'];
        $data = strtotime($data);        
        $clientes = DB::select("SELECT * FROM cliente where CPF in (SELECT cpf_cliente FROM passagem where codigo_linha = :codlinha and data_compra = :data)", ["codlinha" => $codigo_linha, "data" => date('Y-m-d', $data)]);        
        $clientes_paginados =  $this->paginate($clientes);
        $clientes_paginados->withPath('gerarRelatorio');
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

    public function vender(AddVendaRequest $request){
        $result = Func::venderPassagem($request);
        if($result == 0){
            return redirect()->back()->with('error', 'Sem vagas.');
        }else{
            return redirect()->back()->with('message', 'Venda Feita.');
        }

        //Func::venderPassagem($request);
    }

    // método responsável por mostrar as estatísticas para o funcionário
    public function estatísticasFuncionario()
    {     
        [$qtd_vendas_hoje, $qtd_vendas_7dias, $qtd_vendas_30dias] = Func::passagensVendidas;

        return view('funcionario.inicial_func')->with(['qtd_vendas_hoje' => $qtd_vendas_hoje[0]->contagem_vendas, 
                    'qtd_vendas_7dias' => $qtd_vendas_7dias[0]->contagem_vendas,
                    'qtd_vendas_30dias' => $qtd_vendas_30dias[0]->contagem_vendas]);
    }

}
?>
