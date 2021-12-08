<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddVendaRequest;
use App\Models\Funcionario;
use App\Models\Cliente;
use App\Models\Trecho;
use App\Models\Linha;
use DateTime;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreAlteracaoDadosRequest;
use Carbon\Carbon;
use App\Traits\PaginationTrait;

class FuncionarioController extends Controller {
    use PaginationTrait;    

    public function index(){
        $funcionario = Funcionario::index();
        return view("funcionario.perfil", ['funcionario'=>$funcionario]);
    }


    public function gerarRelatorioViagem(){
        $dia = date('w'); // Converte a data inserida ao seu equivalente em dia da semana                        
        $erros = [];
        $codigo_linha = DB::select("SELECT codigo FROM linha WHERE dias_semana LIKE concat('%', TRIM(?), '%')", [$dia]);                        
        if($codigo_linha)
            $codigo_linha = $codigo_linha[0]->codigo;
        
        $atual = date('Y-m-d');
        for($i = 0; $i < 7; $i++){            
            if(date('w', strtotime($atual)) == $dia)
                break;
            $atual = date('Y-m-d', strtotime('+1 day', strtotime($atual)));
        }            
        $dataconv = $atual;        
        
        $passagens_viagem =  DB::select("SELECT * FROM passagem where codigo_linha = :codlinha and CAST(data AS date) = :data", ["codlinha" => $codigo_linha, "data" => $dataconv]);
        $clientes = Cliente::getClientes();                
        // Realiza a busca pelos nomes dos clientes com base no cpf        
        $passagens_clientes = [];
        $passagem_cliente = array();         
        foreach($passagens_viagem as $passagem){            
            $passagem_cliente['nome']  = "Não Cadastrado";                        
            $passagem_cliente['cpf'] = $passagem->cpf_cliente;        
            $passagem_cliente['num_assento'] = $passagem->num_assento;
            $passagem_cliente['codigo'] = $passagem->codigo;
            $passagem_cliente['cidade_partida'] = $passagem->cidade_partida;
            $passagem_cliente['cidade_chegada'] = $passagem->cidade_chegada; 
            $tempos = [];           
            foreach($clientes as $cliente){
                if($passagem->cpf_cliente == $cliente->cpf){
                    $passagem_cliente['nome'] = $cliente->nome;
                    break;
                }
            }

            $horario_partida = (Linha::getHoraPartida('codigo', $passagem->codigo_linha))[0]->hora_partida;            
            $passagem_cliente['horario_partida'] = $horario_partida;
            $trava = 0;            
            $trechos = Trecho::getTrechosEmLinha($codigo_linha);
            if($trechos == null) continue;
            $tempos[] = $horario_partida;                    

            // Calcula a duração da viagem do cliente
            foreach($trechos as $trecho){
                if(Trecho::getCidade_partida('codigo', $trecho->codigo)[0]->cidade_partida == $passagem->cidade_partida){                    
                    $trava = 1;
                }

                if($trava){
                    $tempos[] = $trecho->duracao;                    
                    if(Trecho::getCidade_chegada('codigo', $trecho->codigo)[0]->cidade_chegada == $passagem->cidade_chegada){
                        $trava = 0;
                    }
                }
            }

            $passagem_cliente['data_partida'] = date('d/m/Y', strtotime($dataconv));
            $dataHora = Linha::somarHorasData($dataconv, $tempos);            
            $passagem_cliente['data_chegada'] = $dataHora[0];
            $passagem_cliente['horario_chegada'] = date('H:i:s', strtotime($dataHora[1]));            
            $passagem_cliente['horario_partida'] = date('H:i:s', strtotime($horario_partida));                        
            $data = $dataHora[1];
            array_push($passagens_clientes, $passagem_cliente);                      
        }                                
            
        return view('funcionario.gerarRelatorio', ['passagens' => $passagens_clientes, 'data_partida' => $dataconv, 'erros' => $erros]);
    }    

    public function buscarRelatorioViagem(Request $request){
        $codigo_linha = intval($request['codigo_linha']);  
        $linha_partida = DB::select("SELECT cidade_partida FROM trecho WHERE codigo = (SELECT codigo_trecho FROM trechos_linha WHERE codigo_linha = :codigo_linha and ordem = 1)", ['codigo_linha' => $codigo_linha])[0]->cidade_partida;
        $linha_chegada = DB::select("SELECT cidade_chegada FROM trecho WHERE codigo = (SELECT codigo_trecho FROM trechos_linha WHERE codigo_linha = ? and ordem = (SELECT MAX(ordem) FROM trechos_linha WHERE codigo_linha = ?))", [$codigo_linha, $codigo_linha])[0]->cidade_chegada;
        $data = $request['data'];
        $data = strtotime($data);
        $dataconv = date('Y-m-d', $data);
        $passagens_viagem =  DB::select("SELECT * FROM passagem where codigo_linha = :codlinha and CAST(data AS date) = :data", ["codlinha" => $codigo_linha, "data" => $dataconv]);
        $clientes = Cliente::getClientes();                
        // Realiza a busca pelos nomes dos clientes com base no cpf        
        $passagens_clientes = [];
        $passagem_cliente = array();         
        foreach($passagens_viagem as $passagem){            
            $passagem_cliente['nome']  = "Não Cadastrado";                        
            $passagem_cliente['cpf'] = $passagem->cpf_cliente;        
            $passagem_cliente['num_assento'] = $passagem->num_assento;
            $passagem_cliente['codigo'] = $passagem->codigo;
            $passagem_cliente['cidade_partida'] = $passagem->cidade_partida;
            $passagem_cliente['cidade_chegada'] = $passagem->cidade_chegada; 
            $tempos = [];           
            foreach($clientes as $cliente){
                if($passagem->cpf_cliente == $cliente->cpf){
                    $passagem_cliente['nome'] = $cliente->nome;
                    break;
                }
            }

            $horario_partida = (Linha::getHoraPartida('codigo', $passagem->codigo_linha))[0]->hora_partida;            
            $passagem_cliente['horario_partida'] = $horario_partida;
            $trava = 0;            
            $trechos = Trecho::getTrechosEmLinha($codigo_linha);
            if($trechos == null) continue;
            $tempos[] = $horario_partida;                    

            // Calcula a duração da viagem do cliente
            foreach($trechos as $trecho){
                if(Trecho::getCidade_partida('codigo', $trecho->codigo)[0]->cidade_partida == $passagem->cidade_partida){                    
                    $trava = 1;
                }

                if($trava){
                    $tempos[] = $trecho->duracao;                    
                    if(Trecho::getCidade_chegada('codigo', $trecho->codigo)[0]->cidade_chegada == $passagem->cidade_chegada){
                        $trava = 0;
                    }
                }
            }

            $passagem_cliente['data_partida'] = date('d/m/Y', strtotime($dataconv));
            $dataHora = Linha::somarHorasData($dataconv, $tempos);            
            $passagem_cliente['data_chegada'] = $dataHora[0];
            $passagem_cliente['horario_chegada'] = date('H:i:s', strtotime($dataHora[1]));            
            $passagem_cliente['horario_partida'] = date('H:i:s', strtotime($horario_partida));                        
            $data = $dataHora[1];
            array_push($passagens_clientes, $passagem_cliente);                                            
        }                                
        
        return view('funcionario.gerarRelatorio', ['passagens' => $passagens_clientes, 'linha_partida' => $linha_partida, 'data_partida' => $dataconv, 'linha_chegada' => $linha_chegada]);
    }
    
    public function editar(StoreAlteracaoDadosRequest $request){
        $funcionario = Funcionario::editar($request);

        if ($funcionario == 1) {
            return redirect()
                        ->back()
                        ->with('error', 'Algum dos campos está vazio, alteração não realizada.');
        } elseif ($funcionario ==2 ) {
            return redirect()
                        ->route('perfilFuncionario.index')
                        ->with('success', 'Perfil atualizado com sucesso!');
        } else {
            return redirect()
                        ->back()
                        ->with('error', 'As senhas não coincidem.');
        }
        
    }

    /**
     * Retorna para view todas as estatisticas iniciais
     * @return estatisticas
     **/
    public function estatisticas (Request $request)
    {
        $mat_funcionario= Auth::guard('funcionario')->user()->matricula; //pega a matricula do funcionario logado 
        $passagens_vendidas = Funcionario::passagens_vendidas($mat_funcionario); //total de passagens vendidas
        $linha_menos_vendida = Linha::linha_menos_vendida(); //linha menos vendida
        $linha_mais_vendida = Linha::linha_mais_vendida(); //linha mais vendida
        
        //busca os dados de uma linha dado um determinado código
        if($request['buscarLinha'] == null){
            $cod_busca = 1;
        }else{
            $cod_busca = $request['buscarLinha'];
        }
        $linha_por_codigo =  Linha::buscar_linha($cod_busca);
        
        $dados = [
            'qtd_vendas_hoje' => $passagens_vendidas['qtd_vendas_hoje'], 
            'qtd_vendas_7dias' => $passagens_vendidas['qtd_vendas_7dias'], 
            'qtd_vendas_30dias' => $passagens_vendidas['qtd_vendas_30dias'],

            'total_mais_vendida' => $linha_mais_vendida['total_mais_vendida'],
            'linha_mais_vendida_partida' => $linha_mais_vendida['linha_mais_vendida_partida'],
            'linha_mais_vendida_chegada' => $linha_mais_vendida['linha_mais_vendida_chegada'],

            'total_menos_vendida' => $linha_menos_vendida['total_menos_vendida'],
            'linha_menos_vendida_partida' => $linha_menos_vendida['linha_menos_vendida_partida'],
            'linha_menos_vendida_chegada' => $linha_menos_vendida['linha_menos_vendida_chegada'],

            'total_vendas' => $linha_por_codigo['total'],
            'cidade_partida' => $linha_por_codigo['cidade_partida'],
            'cidade_chegada'=> $linha_por_codigo['cidade_chegada']
        ];

        return view('funcionario.inicial_func')->with('dados', $dados);
    }

    public function vender(AddVendaRequest $request){
        $result = Funcionario::venderPassagem($request);
        if($result == 0){
            return redirect()->back()->with('error', "Sem vagas para a linha $request[cod_linha].");
        }else{
            return redirect()->back()->with('message', 'Venda Feita.');
        }
        
    }

}
?>
