<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Linha;
use App\Models\Trecho;
use App\Models\TrechosLinha;

class LinhaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $consulta= DB::select("SELECT * FROM linha");
        $linhas = [];        
        foreach($consulta as $linha){            
            $codigo = $linha->codigo;                        
            $codigo_trecho = TrechosLinha::getCodigoTrecho('codigo_linha', $codigo);                                    
            if ($codigo_trecho == null) continue;
            $trecho_inicial = $codigo_trecho[0]->codigo_trecho;            
            $tipo = $linha->direta;    
            $cidade_partida = DB::select("SELECT cidade_partida FROM trecho WHERE codigo = ?", [$trecho_inicial]);
            $cidade_partida = $cidade_partida[0]->cidade_partida;        
            $trecho_final = $codigo_trecho[sizeof($codigo_trecho)-1]->codigo_trecho;
            $cidade_destino = DB::select("SELECT cidade_chegada FROM trecho WHERE codigo = ?", [$trecho_final]);
            $cidade_destino = $cidade_destino[0]->cidade_chegada; 
            $preco = DB::select("SELECT sum(preco) as soma from trecho where codigo IN (select codigo_trecho from trechos_linha where codigo_linha = ?)", [$codigo]);
            $preco = $preco[0]->soma;
            $linhaS = [
            'codigo'=>$codigo, 
            'partida'=>$cidade_partida, 
            'destino'=>$cidade_destino,
            'tipo'=>$tipo,
            'preco'=> number_format($preco, 2)
            ];
            array_push($linhas, $linhaS);            
        }

        $url = explode("/", $_SERVER["REQUEST_URI"]);
        if($url[1] == 'consultar_linhas') 
        {
            return view('funcionario.consultar_linhas', ['linhas'=>$linhas, 'status'=>'Consulta realizada com sucesso!!']);
        }
        else
            return view('funcionario.vender_passagens', ['linhas'=>$linhas, 'status'=>'Consulta realizada com sucesso!!']);
        
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
    public function destroy($id)
    {
        //
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
        $errors = [];
        $status = "";
        $encontrado = 0;
        $dia = date('w', strtotime($request['data_partida']));
        if($request['opcaoBusca'] == 'Nome' || $request['opcaoBusca'] == null){
            $cidade_partida = $request['cidade_partida'];
            $cidade_destino = $request['cidade_destino'];
            $trechos_partida = Trecho::getCodigo('cidade_partida', $cidade_partida);

            foreach($trechos_partida as $trecho_partida){            
                $linha_trechopartida = TrechosLinha::getCodigoLinha('codigo_trecho', $trecho_partida->codigo);
                $cidade_partida = Trecho::getCidade_partida('codigo', $trecho_partida->codigo);
                foreach($linha_trechopartida as $codigo){
                    $tipo = Linha::getTipo('codigo', $codigo->codigo_linha);                    
                    $quantidade = DB::select("SELECT max(ordem) as ordem FROM trechos_linha WHERE codigo_linha = :codigo", ['codigo' => $codigo->codigo_linha]);
                    for($i = 0; $i < $quantidade[0]->ordem; $i = $i + 1){
                        $trecho_destino = TrechosLinha::getCodigoTrecho('codigo_linha', $codigo->codigo_linha);
                        $destino = Trecho::getCidade_chegada('codigo', $trecho_destino[$i]->codigo_trecho);
                        if($destino[0]->cidade_chegada == $cidade_destino){
                            if((strval($tipo[0]->direta) == strval($request['tipoLinha_op1']) || strval($tipo[0]->direta) == strval($request['tipoLinha_op2']))){
                                $data = Linha::getData('codigo', $codigo->codigo_linha);                        
                                $data = explode(";", $data[0]->dias_semana);
                                if(in_array($dia, $data) == false){                                    
                                    break;
                                }
                                $ordem = TrechosLinha::getOrdem('codigo_trecho', $trecho_partida->codigo);
                                $preco = DB::select("SELECT sum(preco) as soma from trecho where codigo IN (select codigo_trecho from trechos_linha where codigo_linha = ? and ordem between ? and ?)", [$codigo->codigo_linha, $ordem[0]->ordem, $i+1]);
                                $preco = $preco[0]->soma;                            
                                $linha = [
                                    'codigo'=>$codigo->codigo_linha, 
                                    'partida'=>$cidade_partida[0]->cidade_partida, 
                                    'destino'=>$destino[0]->cidade_chegada,
                                    'tipo'=>$tipo[0]->direta,
                                    'preco'=> number_format($preco, 2)
                                ];
                                array_push($linhas, $linha);
                                $status =  "Linha encontrada com sucesso";
                                $encontrado = 1;
                                break;                                
                            } else {                                
                                break;
                            } 
                        }
                    }                                                    
                }
            }
        } else {
            $codigo_linha = $request['codigo_linha'];
            $cidade_partida = DB::select("SELECT cidade_partida FROM trecho WHERE codigo = (select codigo_trecho from trechos_linha where codigo_linha = :cod_linha and ordem = 1)", ['cod_linha' => $codigo_linha]);
            $ordem = DB::select("select max(ordem) as ordem from trechos_linha where codigo_linha = :cod_linha", ['cod_linha' => $codigo_linha]);
            $cidade_chegada = DB::select("SELECT cidade_chegada FROM trecho WHERE codigo = (select codigo_trecho from trechos_linha where codigo_linha = :cod_linha and ordem = :ordem)", ['cod_linha' => $codigo_linha, 'ordem' => $ordem[0]->ordem]);
            $tipo = Linha::getTipo('codigo', $codigo_linha);
            
            if (strval($tipo[0]->direta) == strval($request['tipoLinha_op1']) || strval($tipo[0]->direta) == strval($request['tipoLinha_op2'])){
                $data = Linha::getData('codigo', $codigo_linha);                        
                $data = explode(";", $data[0]->dias_semana);
                if(in_array($dia, $data)){
                    $preco = DB::select("SELECT sum(preco) as soma from trecho where codigo IN (select codigo_trecho from trechos_linha where codigo_linha = ?)", [$codigo_linha]);
                    $preco = $preco[0]->soma;
                    $linha = [
                        'codigo'=>$codigo_linha, 
                        'partida'=>$cidade_partida[0]->cidade_partida, 
                        'destino'=>$cidade_chegada[0]->cidade_chegada,
                        'tipo'=>$tipo[0]->direta,
                        'preco'=>$preco
                    ];
                    array_push($linhas, $linha);
                    $status =  "Linha encontrada com sucesso";
                    $encontrado = 1;
                } 
            } 
        }
        
        if($encontrado == 0){
            array_push($errors, "Linha não encontrada");
            $encontrado = 1;
        }
        
        $url = explode("/", $_SERVER["REQUEST_URI"]);
        if($url[1] == 'consultar_linhas') 
        {
            return view('funcionario.consultar_linhas')->with(['linhas' => $linhas, $request->flash(), 'errors' => $errors, 'status' => $status]);
        }
        else
            return view('funcionario.vender_passagens')->with(['linhas' => $linhas, $request->flash(), 'errors' => $errors, 'status' => $status]);
        
    }
    
        
}
