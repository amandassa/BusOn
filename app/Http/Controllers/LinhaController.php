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
        $linha = [
            "codigo"=>6, 
            "partida"=>0, 
            "destino"=>7,
            "tipo"=>0,
            "preco"=>0
        ];
        return view('funcionario.consultar_linhas', ['linha'=>$linha]);
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
        $codigo_trecho = DB::select("SELECT codigo from trecho WHERE cidade_partida = ? AND cidade_destino = ?", [$cidade_partida, $cidade_destino]);
        $codigo_linha = DB::select("SELECT codigo_linha from trechos_linha WHERE codigo_trecho = ?", [implode("", $codigo_trecho)]);
        $tipo = DB::select("SELECT direta FROM linha WHERE codigo = ?", [implode("", $codigo_linha)]);
        $cidade_partida = DB::select("SELECT cidade_partida FROM trecho WHERE codigo = ?", [implode("", $codigo_trecho)]);
        $cidade_destino = DB::select("SELECT cidade_destino FROM trecho WHERE codigo = ?", [implode("", $codigo_trecho)]);
        $preco = DB::select("SELECT sum(preco) from trecho where codigo IN 
        (select codigo_trecho from trechos_linha where codigo_linha = ?)", [implode("", $codigo_linha)]);
        // infos enviadas para o front:
        $linha = [
            "codigo"=>$codigo_linha, 
            "partida"=>$cidade_partida, 
            "destino"=>$cidade_destino,
            "tipo"=>$tipo,
            "preco"=>$preco
        ];
        //return $linha;
        return view('funcionario.consultar_linhas')->with('linha', $linha);
    }
}
