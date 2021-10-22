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
            "partida"=>'Serrinha', 
            "destino"=>'Tucano',
            "tipo"=>0,
            "preco"=>60
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
        $codigo_trecho = DB::select("SELECT codigo FROM trecho WHERE cidadepartida = :cp and cidadechegada = :cd", ['cp' => $cidade_partida, 'cd' => $cidade_destino]);
        $codigo_trecho = $codigo_trecho[0]->codigo;        
        $codigo_linha = DB::select("SELECT codigo_linha FROM trechos_linha WHERE codigo_trecho = ?", [$codigo_trecho]);
        $codigo_linha = $codigo_linha[0]->codigo_linha;        
        $tipoo = DB::select("SELECT direta FROM linha WHERE codigo = ?", [$codigo_linha]);
        $tipoo = $tipoo[0]->direta;    
        $cidade_partida = DB::select("SELECT cidadepartida FROM trecho WHERE codigo = ?", [$codigo_trecho]);
        $cidade_partida = $cidade_partida[0]->cidadepartida;        
        $cidade_destino = DB::select("SELECT cidadechegada FROM trecho WHERE codigo = ?", [$codigo_trecho]);
        $cidade_destino = $cidade_destino[0]->cidadechegada; 
        $preco = DB::select("SELECT sum(preco) from trecho where codigo IN 
        (select codigo_trecho from trechos_linha where codigo_linha = ?)", [$codigo_linha]);
        $preco = 20;
        
        // infos enviadas para o front:
        $linha = [
            'codigo'=>$codigo_linha, 
            'partida'=>$cidade_partida, 
            'destino'=>$cidade_destino,
            'tipo'=>$tipoo,
            'preco'=>$preco
        ];
        //return $linha;
        return view('funcionario.consultar_linhas')->with('linha', $linha);
    }
}
