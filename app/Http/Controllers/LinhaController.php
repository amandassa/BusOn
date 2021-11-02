<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

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
            $codigo_trecho = DB::select("SELECT codigo_trecho FROM trechos_linha WHERE codigo_linha = ?", [$codigo]);
            $trecho_inicial = $codigo_trecho[0]->codigo_trecho;                    
            $tipo = $linha->direta;    
            $cidade_partida = DB::select("SELECT cidade_partida FROM trecho WHERE codigo = ?", [$trecho_inicial]);
            $cidade_partida = $cidade_partida[0]->cidade_partida;        
            $trecho_final = $codigo_trecho[sizeof($codigo_trecho)-1]->codigo_trecho;
            $cidade_destino = DB::select("SELECT cidade_chegada FROM trecho WHERE codigo = ?", [$trecho_final]);
            $cidade_destino = $cidade_destino[0]->cidade_chegada; 
            $preco = DB::select("SELECT sum(preco) as soma from trecho where codigo IN 
            (select codigo_trecho from trechos_linha where codigo_linha = ?)", [$codigo]);
            $preco = $preco[0]->soma;
            $linhaS = [
            'codigo'=>$codigo, 
            'partida'=>$cidade_partida, 
            'destino'=>$cidade_destino,
            'tipo'=>$tipo,
            'preco'=>$preco
            ];
            array_push($linhas, $linhaS);            
        }
        return view('funcionario.consultar_linhas', ['linhas'=>$linhas]);
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
        $cidade_partida = $request['cidade_partida'];
        $cidade_destino = $request['cidade_destino'];        
        $codigo_trechos = DB::select("SELECT codigo FROM trecho WHERE cidade_partida = :cp and cidade_chegada = :cd", ['cp' => $cidade_partida, 'cd' => $cidade_destino]);        
        $linhas = [];        
        foreach($codigo_trechos as $codigo_trecho){            
            $codigo = $codigo_trecho->codigo;        
            $codigo_linha = DB::select("SELECT codigo_linha FROM trechos_linha WHERE codigo_trecho = ?", [$codigo]);
            $codigo_linha = $codigo_linha[0]->codigo_linha;        
            $tipo = DB::select("SELECT direta FROM linha WHERE codigo = ?", [$codigo_linha]);
            $tipo = $tipo[0]->direta;
            $trecho_partida = DB::select("SELECT codigo_trecho FROM trechos_linha WHERE codigo_linha = ? and ordem = ?", [$codigo_linha, 1]);
            $cidade_partida = DB::select("SELECT cidade_partida FROM trecho WHERE codigo = ?", [$trecho_partida[0]->codigo_trecho]);
            $cidade_partida = $cidade_partida[0]->cidade_partida;
            $qtd_trechos = DB::select("SELECT count(codigo) as contagem from trechos_linha where codigo_linha = ?", [$codigo_linha]);
            $trecho_destino = DB::select("SELECT codigo_trecho FROM trechos_linha WHERE codigo_linha = ? and ordem = ?", [$codigo_linha, $qtd_trechos[0]->contagem]);
            $cidade_destino = DB::select("SELECT cidade_chegada FROM trecho WHERE codigo = ?", [$trecho_destino[0]->codigo_trecho]);
            $cidade_destino = $cidade_destino[0]->cidade_chegada; 
            $preco = DB::select("SELECT sum(preco) as soma from trecho where codigo IN 
            (select codigo_trecho from trechos_linha where codigo_linha = ?)", [$codigo_linha]);
            $preco = $preco[0]->soma;
            $linha = [
            'codigo'=>$codigo_linha, 
            'partida'=>$cidade_partida, 
            'destino'=>$cidade_destino,
            'tipo'=>$tipo,
            'preco'=>$preco
            ];
            array_push($linhas, $linha);            
        }
        
        // infos enviadas para o front:        
        //return $linha;
        return view('funcionario.consultar_linhas')->with('linhas', $linhas);
    }
}
