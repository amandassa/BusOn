<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Linha;
use App\Models\Trecho;
use App\Models\TrechosLinha;
use App\Http\Requests\BuscaTrechoRequest;
use App\Http\Requests\AddTrechoInLinhaRequest;
use App\Http\Requests\AddLinhaRequest;
use App\Traits\PaginationTrait;

class LinhaController extends Controller
{
    use PaginationTrait; 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $trava = 5; // trava ou destrava as mensagens de confirmacao de apagar linhas

    public function index()
    {                        
        $consultas_trechos_partida = DB::select("select cidade_partida from trecho");
        $consultas_trechos_chegada = DB::select("select cidade_chegada from trecho");
        $trechos_partida = [];
        $trechos_chegada = [];
        foreach($consultas_trechos_partida as $consulta){
            array_push($trechos_partida, $consulta->cidade_partida);
        }        
        foreach($consultas_trechos_chegada as $consulta){
            array_push($trechos_chegada, $consulta->cidade_chegada);
        }        

        $linhas = [];        
        $url = explode("/", $_SERVER["REQUEST_URI"]);                
        $consulta= DB::select("SELECT * FROM linha");
        foreach($consulta as $linha){
            $codigo = $linha->codigo;                        
            $codigo_trecho = TrechosLinha::getCodigoTrecho('codigo_linha', $codigo);

            $hoje = date('Y-m-d'); // data de hoje 
            $dia = explode(';', Linha::getData('codigo', $codigo)[0]->dias_semana)[0];

            if($url[1] == 'venderPassagens') 
                if($dia != date('w', strtotime($hoje)))  //Verifica se a linha roda na data de hoje
                    continue; //Se não rodar, ela não será exibida
            
            if ($codigo_trecho == null) continue; // Verifica se a linha possui trechos associados
            $trecho_inicial = $codigo_trecho[0]->codigo_trecho;            
            $tipo = $linha->direta;    

           

            $cidade_partida = DB::select("SELECT cidade_partida FROM trecho WHERE codigo = ?", [$trecho_inicial]);
                        
            if($cidade_partida == null) continue;  // Verifica se o trecho possui uma cidade de partida
            $cidade_partida = $cidade_partida[0]->cidade_partida;      
               
            $trecho_final = $codigo_trecho[sizeof($codigo_trecho)-1]->codigo_trecho; // seleciona o último trecho da linha

            $cidade_destino = DB::select("SELECT cidade_chegada FROM trecho WHERE codigo = ?", [$trecho_final]);
            
            if($cidade_destino == null) continue; // Verifica se o trecho possui uma cidade de destino
            $cidade_destino = $cidade_destino[0]->cidade_chegada; 

            $preco =  Linha::calcularPreco($codigo);// realiza a soma do preco da linha
            
            if($preco == 0) continue;
            
            $horario_partida = Linha::getHoraPartida('codigo', $codigo); // Captura o horário de partida da linha
            $horario_partida =$horario_partida[0]->hora_partida;
            
            $horas = []; // Armazena as duracoes dos trechos desde a hora de saida para obter a hora de chegada
            array_push($horas, $horario_partida); // adiciona a hora de saida aos horarios
            
            foreach($codigo_trecho as $trecho){ // percorre os trechos da linha adicionando a duracao de cada trecho
                $duracao = Trecho::getDuracao('codigo', $trecho->codigo_trecho);
                array_push($horas, $duracao[0]->duracao);
            }     

            $dia = explode(';', Linha::getData('codigo', $codigo)[0]->dias_semana)[0]; // captura um dia que a linha percorre (o primeiro da semana)
            $hoje = date('Y-m-d'); // data de hoje             
            
            for($i = 0; $i < 7; $i++){ // encontra a proxima data (no formato ANO/MES/DIA)
                $data = date('Y-m-d', strtotime($hoje.' + '.$i.' days')); // Percorre os proximos sete dias
                if(date('w', strtotime($data)) == $dia) // verifica se o dia atual corresponde ao dia em que a linha funciona
                    break; // termina o loop caso a data seja encontrada
            }            

                        
            $vagas = DB::select("SELECT total_vagas from linha where codigo =?", [$codigo] );
            $vagas = $vagas[0]->total_vagas;
            $horario_chegada = Linha::somarHorasData($data, $horas)[1]; 
            $dias_Semana = DB::select("SELECT dias_semana from linha where codigo =?", [$codigo] );
            $dias_Semana = $dias_Semana[0]->dias_semana;
            $horario = strtotime('1970-01-01 '.$horario_chegada.'UTC') +  strtotime('1970-01-01 '.$horario_partida.'UTC') ;
            
            $linhaAtual = [
            'codigo'=>$codigo, 
            'partida'=>$cidade_partida, 
            'destino'=>$cidade_destino,
            'tipo'=>$tipo,
            'preco'=> number_format(floatval($preco), 2, ',', '.'), 
                                  
            ];
            array_push($linhas, $linhaAtual);            
        }
        
        if(count($linhas) > 0){
            $status = 'Consulta realizada com sucesso!!';
        } 

        $url = explode("/", $_SERVER["REQUEST_URI"]);        
        
        if($url[1] == 'consultar_linhas') 
        {            
            return view('funcionario.consultar_linhas', ['linhas'=>$this->calcularHorarios($hoje, $linhas), 'status'=>$status, 'trechos_partida' => json_encode($trechos_partida), 'trechos_chegada' => json_encode($trechos_partida)]);
        }
        else { 
            if($url[1] == 'venderPassagens'){
                return view('funcionario.vender_passagens', ['linhas' => $this->calcularHorarios($hoje, $linhas), 'status'=>'Consulta realizada com sucesso!!']);
            } else if ($this->trava == 1){                                    
                    $this->trava = 5;
                    return view('funcionario.consultar_linhas', ['linhas'=>$this->calcularHorarios($hoje, $linhas), 'status'=>"Linha apagada com sucesso!", 'trechos_partida' => json_encode($trechos_partida), 'trechos_chegada' => json_encode($trechos_partida)]);
                } else {                    
                    if($url[1] == 'selecao')
                        return view('cliente.selecao', ['linhas'=>$this->calcularHorarios($hoje, $linhas), 'trechos_partida' => json_encode($trechos_partida), 'trechos_chegada' => json_encode($trechos_partida)]);
                    else
                        return view('funcionario.consultar_linhas', ['linhas'=>$this->calcularHorarios($hoje, $linhas), 'erros'=>["Erro ao apagar a linha!"], 'trechos_partida' => json_encode($trechos_partida), 'trechos_chegada' => json_encode($trechos_partida)]);
                }            
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function apagar(Request $request)
    {        
        $confirmacao = Linha::apagar($request->codigo);        
        $this->trava = $confirmacao;        
        return $this->index();
    }

    /**
     * Consulta de linhas com base nas cidades de partida ou chegada
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function consulta (Request $request)
    {                         
        $linhas = []; 
        $erros = [];
        $consultas_trechos_partida = DB::select("select cidade_partida from trecho");
        $consultas_trechos_chegada = DB::select("select cidade_chegada from trecho");
        $trechos_partida = [];
        $trechos_chegada = [];
        foreach($consultas_trechos_partida as $consulta){
            array_push($trechos_partida, $consulta->cidade_partida);
        }        
        foreach($consultas_trechos_chegada as $consulta){
            array_push($trechos_chegada, $consulta->cidade_chegada);
        }
        $status = "";         

        
        if($request['codigo'] != null){            
            $linha_consulta = [
                'codigo' =>$request->codigo,
                'partida' => $request->partida,
                'destino' => $request->destino,
                'tipo' => $request->tipo,
                'hora_partida' => $request->hora_partida,
                'preco' => $request->preco
            ];                  
            array_push($linhas, $linha_consulta);
            return view('funcionario.vender_passagens')->with(['linhas' => $linhas, $request->flash(), 'linha_consulta' => $linha_consulta]);        
        }

        $dia = date('w', strtotime($request['data_partida'])); // Converte a data inserida ao seu equivalente em dia da semana                
        if($request['opcaoBusca'] == 'Nome' || $request['opcaoBusca'] == null){ // Verifica  o tipo de consulta
            $cidade_partida = $request['cidade_partida'];
            $cidade_destino = $request['cidade_destino'];                        
            if($cidade_partida == null && $cidade_destino == null)
                return $this->index();                
            $trechos_partida = Trecho::getCodigo('cidade_partida', $cidade_partida); // Captura todos os codigos de trecho cujo nome da cidade de partida seja equivalente a cidade de partida informada pelo usuário            
            if($trechos_partida == null) array_push($erros, "Cidade de Partida não encontrada");
            foreach($trechos_partida as $trecho_partida){                
                $linha_trechopartida = TrechosLinha::getCodigoLinha('codigo_trecho', $trecho_partida->codigo); // Captura o codigo da linha do trecho
                if($linha_trechopartida == null){ // Se nao existir linha para o trecho da cidade selecionada 
                    array_push($erros, "Não há linhas para a cidade selecionada");
                    break;
                }
                $cidade_partida = Trecho::getCidade_partida('codigo', $trecho_partida->codigo); // Busca o nome no banco de dados da cidade de partida                                
                foreach($linha_trechopartida as $codigo){ // Percorre todas as linhas que possui o trecho com a cidade inicial informada
                    $tipo = Linha::getTipo('codigo', $codigo->codigo_linha);
                    $quantidade = DB::select("SELECT max(ordem) as ordem FROM trechos_linha WHERE codigo_linha = :codigo", ['codigo' => $codigo->codigo_linha]);                                                            
                    for($i = 0; $i < $quantidade[0]->ordem; $i = $i + 1){ // Percorre todos os trechos da linha até encontrar a linha de partida                                                
                        $trecho_destino = TrechosLinha::getCodigoTrecho('codigo_linha', $codigo->codigo_linha);                                                                    
                        $destino = Trecho::getCidade_chegada('codigo', $trecho_destino[$i]->codigo_trecho);                                                
                        if($destino[0]->cidade_chegada == $cidade_destino){
                            if((strval($tipo[0]->direta) == strval($request['tipoLinha_op1']) || strval($tipo[0]->direta) == strval($request['tipoLinha_op2']))){
                                $data = Linha::getData('codigo', $codigo->codigo_linha);                        
                                $data = explode(";", $data[0]->dias_semana);                                
                                if(in_array($dia, $data) == false){  
                                    array_push($erros, 'Linha não encontrada para a data especificada');                                    
                                    break;
                                }
                                $ordem = TrechosLinha::getOrdem('codigo_trecho', $trecho_partida->codigo);
                                $preco = DB::select("SELECT sum(preco) as soma from trecho where codigo IN (select codigo_trecho from trechos_linha where codigo_linha = ? and ordem between ? and ?)", [$codigo->codigo_linha, $ordem[0]->ordem, $i+1]);
                                $preco = $preco[0]->soma;                                                            
                                $total_vagas = Linha::getTotalVagas('codigo', $codigo->codigo_linha);
                                $linha = [
                                    'codigo'=>$codigo->codigo_linha, 
                                    'partida'=>$cidade_partida[0]->cidade_partida, 
                                    'destino'=>$destino[0]->cidade_chegada,
                                    'total_vagas'=>$total_vagas[0]->total_vagas,
                                    'tipo'=>$tipo[0]->direta,                                                                        
                                    'preco'=> number_format(floatval($preco), 2, ',', '.')
                                ];
                                array_push($linhas, $linha);                                                                
                                $status =  "Linha encontrada com sucesso";                                
                                break;
                            } else { 
                                $tipo_request = (strval($request['tipoLinha_op2'])==1?'Direta':'Comum');
                                array_push($erros, 'Não foi encontrada linha na forma '.$tipo_request);
                                break;
                            } 
                        } else {                            
                            if($i == ($quantidade[0]->ordem) && $erros == null){                                
                                array_push($erros, 'Cidade de destino não encontrada');
                            }
                        }
                    }                                                    
                }
                
            }
        } else {
            $codigo_linha = $request['codigo_linha'];
            $cidade_partida = DB::select("SELECT cidade_partida FROM trecho WHERE codigo = (select codigo_trecho from trechos_linha where codigo_linha = :cod_linha and ordem = 1)", ['cod_linha' => $codigo_linha]);
            if($cidade_partida != null){                            
                $ordem = DB::select("select max(ordem) as ordem from trechos_linha where codigo_linha = :cod_linha", ['cod_linha' => $codigo_linha]);
                $cidade_chegada = DB::select("SELECT cidade_chegada FROM trecho WHERE codigo = (select codigo_trecho from trechos_linha where codigo_linha = :cod_linha and ordem = :ordem)", ['cod_linha' => $codigo_linha, 'ordem' => $ordem[0]->ordem]);                
                $tipo = Linha::getTipo('codigo', $codigo_linha);
                if($cidade_chegada != null){
                    if (strval($tipo[0]->direta) == strval($request['tipoLinha_op1']) || strval($tipo[0]->direta) == strval($request['tipoLinha_op2'])){
                        $data = Linha::getData('codigo', $codigo_linha);                        
                        $data = explode(";", $data[0]->dias_semana);
                        if(in_array($dia, $data)){
                            $preco = DB::select("SELECT sum(preco) as soma from trecho where codigo IN (select codigo_trecho from trechos_linha where codigo_linha = ?)", [$codigo_linha]);
                            $preco = $preco[0]->soma;                    
                            $total_vagas = Linha::getTotalVagas('codigo', $codigo_linha);
                            $linha = [
                                'codigo'=>$codigo_linha, 
                                'total_vagas'=>$total_vagas[0]->total_vagas,
                                'partida'=>$cidade_partida[0]->cidade_partida, 
                                'destino'=>$cidade_chegada[0]->cidade_chegada,
                                'tipo'=>$tipo[0]->direta,                                                
                                'preco'=> number_format(floatval($preco), 2, ',', '.')
                            ];
                            array_push($linhas, $linha);                            
                            $status =  "Linha encontrada com sucesso";
                            $encontrado = 1;
                        } else {
                            array_push($erros, "Não há linha para a data informada");
                        }
                    } else {
                        $direta  = ($tipo[0]->direta==strval($request['tipoLinha_op2']))?"direta":"comum";
                        array_push($erros, "Não há linha ".$direta." para o código informado");
                    }
                } else{
                    array_push($erros, "Não há linha com o código informado");
                }
            } else{
                array_push($erros, "Não há linha com o código informado");
            }
        }                
                
        $url = explode("/", $_SERVER["REQUEST_URI"]);              
        if($url[1] == 'consultar_linhas') 
        {            
            return view('funcionario.consultar_linhas')->with(['linhas' => $this->calcularHorarios($request['data_partida'], $linhas), $request->flash(), 'errors' => $erros, 'status' => $status, 'linha' => $request['linha'], 'trechos_partida' => json_encode($trechos_partida), 'trechos_chegada' => json_encode($trechos_partida)]);
        }
        else{          
            if(($url[1] == 'selecao' or $url[1] == 'inicio')){
                return view('cliente.selecao', ['linhas'=> $this->calcularHorarios($request['data_partida'], $linhas), 'erros' => $erros]);
            }else {                                                
                    return view('funcionario.vender_passagens')->with(['linhas' => $this->calcularHorarios($request['data_partida'], $linhas), $request->flash()]);                
            }
        }
    }

    private function calcularHorarios(String $data_partida, $linhas)
    {
        $linhasHorarios = [];
        $trava = 0;
        $tempos = [];
        foreach($linhas as $linha) {                
                $trechos = Trecho::getTrechosEmLinha($linha['codigo']);                                
                array_push($tempos, Linha::getHoraPartida('codigo', $linha['codigo'])[0]->hora_partida);                        
                foreach($trechos as $trecho){                                        
                    if(Trecho::getCidade_partida('codigo', $trecho->codigo)[0]->cidade_partida == $linha['partida']){                    
                        $trava = 1;                                                                        
                        $dataHora_saida = Linha::somarHorasData($data_partida, $tempos);                        
                        $dt_partida = ($dataHora_saida[0]);
                        $horario_partida = $dataHora_saida[1];
                        $linha['data_partida'] = $dt_partida;
                        $linha['hora_partida'] = $horario_partida;
                    }                                        
                    array_push($tempos, $trecho->duracao);
                    if($trava){                                                    
                        if(Trecho::getCidade_chegada('codigo', $trecho->codigo)[0]->cidade_chegada == $linha['destino']){
                            $trava = 0;
                            break;
                        }
                    }                    
                
                }
                $data_partida = date('Y-m-d', strtotime(str_replace('/', '-', $data_partida)));                
                $dataHora_chegada = Linha::somarHorasData($data_partida, $tempos);
                $data_chegada = $dataHora_chegada[0];
                $horario_chegada = $dataHora_chegada[1];
                $linha['data_chegada'] = $data_chegada;
                $linha['hora_chegada'] = $horario_chegada;                
                array_push($linhasHorarios, $linha);  
                $tempos = [];              
        }
        return $linhasHorarios; 
    }


    public function indexEditar(Request $request){
        $linhas = Linha::consultaEditar($request);
        return view('administrador.editarLinha', ['linhas'=>$linhas]);
    }

    public function editar(Request $request){;
        if ($request['cancel'] == 5 ) {
            return redirect()
                        ->back()
                        ->with('success', 'Alterações canceladas');
        }
        
        
        if ($request['trechos']){
            return redirect()
                ->route('editarTrecho', $request);
               
        }        

        $linha = Linha::editarLinha($request);

        if ($linha['id'] == 1) {
            return redirect()
                        ->back()
                        ->with('error', 'Algum dos campos está vazio!, alteração não realizada');
        } elseif ($linha['id'] == 2 ) {
            return redirect()
                        ->route('editarLinha', $request)
                        ->with('success', 'Linha atualizada com sucesso!');
        } elseif ($linha['id'] == 4 ) {
            return redirect()
                        ->back()
                        ->with('error', 'Para realizar edições por favor selecione uma linha primeiro');        
        }
        else {
            return redirect()
                        ->back()
                        ->with('');
        }
      
    }

    public function registerLinha(AddLinhaRequest $request, $trechos){
        Linha::create($request, $trechos);
        return redirect()->route('inicial_adm')->with('message', 'Linha cadastrada com sucesso!');
    }

    public function BuildLinha(Request $request){
        $trechoList = $request['checked'];
        $trechoList = substr($trechoList, 0, -1);
        
        $trechos = Linha::fetchTrechos($trechoList);

        $trecho_n1 = $trechos[0];
        $origem = $trecho_n1->cidade_partida;
        
        $trecho_last = $trechos[sizeof($trechos) -1 ];
        $destino = $trecho_last->cidade_chegada;

        $blade_array = array();

        $preço_cnt = 0;

        //dd($trechos);

        foreach($trechos as $trecho){
            $preço_cnt += $trecho->preco;
            $blade_array[$trecho->codigo] = array(
                'codigo' => $trecho->codigo,
                'origem' => $trecho->cidade_partida,
                'destino' => $trecho->cidade_chegada,
                'duração' => $trecho->duracao,
                'preço' => $trecho->preco
            );
        }

        return view('administrador.adicionarLinha', ['trechos' => $blade_array, 
        'origem' => $origem, 'destino' => $destino, 'preço_total' => $preço_cnt, 'trechos_cod' => $trechoList]);

    }
        
}
